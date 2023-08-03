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
                Clients
            </span>

            <form   class="d-flex">
                <input class="form-control me-2" name='query'
                  type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                data-bs-target="#AjouterClient">Nouveau</button>

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
    <div class="item mt-2  p-3 ">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">CIN</th>
                    <th scope="col">Date Naissance</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Passport N°</th>
                    <th scope="col">Date Delivrence</th>
                    <th scope="col">Date Expiration</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Status</th>
                    <th scope="col">Remarque</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->nom }} </td>
                        <td> {{ $item->cin }} </td>
                        <td> {{ $item->dateNaissance }} </td>
                        <td> {{ $item->telephone }} </td>
                        <td> {{ $item->adress }} </td>
                        <td> {{ $item->passport }} </td>
                        <td> {{ $item->dateDelivrence }} </td>
                        <td> {{ $item->dateExpiration }} </td>
                        <td> {{ $item->ville }} </td>
                        <td> {{ $item->status }} </td>
                        <td> {{ $item->remarque }} </td>
                        <td>

                            <div class="d-flex g-1">
                                <button class="btn btn-outline-warning me-2 " data-bs-toggle="modal"
                                    data-bs-target={{ '#ModifierClient' . $item->id }}>
                                    <i class="fa-regular fa-pen-to-square"></i> </button>
                                <form method="POST" action="{{ route('DeleteClient', $item->id) }}">
                                    @csrf
                                    <button class="btn btn-outline-danger"> <i class="fa-solid fa-trash"></i> </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @include('Models.ModifierClient', ['villes' => $villes, 'item' => $item])
                @endforeach
            </tbody>
        </table>

    </div>
    {{ $data->links() }}
    @include('Models.AjouterClient', ['villes' => $villes])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
