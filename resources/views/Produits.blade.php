<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fontAwsome/fontawesome-free-6.4.0-web/css/all.min.css') }}" />
</head>

<body>
    <nav class="navbar bg-dark text-light">
        <div class="container-fluid">
            <span class="navbar-text text-light">
                Produits
            </span>

            <form   class="d-flex">
                <input class="form-control me-2" name='query'
                  type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                data-bs-target="#AjouterProduit">Nouveau</button>

        </div>
    </nav>
    <div class="container mt-2 ">
        @if (session('success'))
            <div class="alert alert-primary " role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    @include('Models.AjouterProduit')
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produit</th>
                <th scope="col">User</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td class="w-5" >{{$produit->id}}</td>
                        <td class="w-50" > {{$produit->produit}}</td>
                        <td class="w-40" >{{Auth::user()->email}}</td>
                        <td class="w-5" >
                            <div class="d-flex g-1">
                                <button class="btn btn-outline-warning me-2 " data-bs-toggle="modal"
                                    data-bs-target={{ '#ModifierProduit' . $produit->id }}>
                                    <i class="fa-regular fa-pen-to-square"></i> </button>
                                <form method="POST" action="{{ route('DeleteProduit', $produit->id) }}">
                                    @csrf
                                    <button class="btn btn-outline-danger"> <i class="fa-solid fa-trash"></i> </button>
                                </form>
                            </div>
                            @include("Models.ModifierProduit",['produit'=>$produit])
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    <button id="tt" >AAA</button>
    {{$produits->links()}}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        document.querySelector('#tt').onclick=function(){
            console.log('55')
            window.print()
        }
    </script>
</html>
