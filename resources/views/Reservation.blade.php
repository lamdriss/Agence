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

            <form class="d-flex gx-1" role="search">

                <div class="" class="mb-3">
                    <input type="date" id="prixvente" min="0"  class=" ip form-control"
                        name="dateDebut" id="exampleFormControlInput1">
                </div>

                <div class="" class="mb-3">
                    <input type="date" id="prixvente" min="0"  class=" ip form-control"
                        name="dateAu" id="exampleFormControlInput1">
                </div>

                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <a type="button" class="btn btn-warning" href="Reservations/Nouveau" >Nouveau</a>

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
                    <th scope="col">Date Reservation </th>
                    <th scope="col">Nreservation</th>
                    <th scope="col">client nom </th>
                    <th scope="col">client telephone </th>
                    <th scope="col">voyage organizer total</th>
                    <th scope="col">hotel total</th>
                    <th scope="col">biellet total</th>
                    <th scope="col">Montant payer</th>
                    <th scope="col">Montant rest a payer</th>
                    <th scope="col">Total </th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td> {{ $reservation->id }} </td>
                        <td> {{ $reservation->datereservation }} </td>
                        <td> {{ $reservation->Nreservation }} </td>
                        <td> {{ $reservation->clienti->nom }} </td>
                        <td> {{ $reservation->clienti->telephone }} </td>
                        <td> {{ $reservation->vtotal }} </td>
                        <td> {{ $reservation->htotal }} </td>
                        <td> {{ $reservation->btotal }} </td>
                        <td> {{ $reservation->montant_payer }} </td>
                        <td> {{ $reservation->montant_rest_a_payer }} </td>
                        <td> {{ $reservation->montant_a_payer }} </td>
                        <td> {{ $reservation->ville }} </td>
                        <td> {{ $reservation->status }} </td>
                        <td> {{ $reservation->remarque }} </td>
                        <td>

                            <div class="d-flex g-1">
                                <button class="btn btn-outline-warning me-2 " data-bs-toggle="modal"
                                    data-bs-target={{ '#ModifierClient' . $reservation->id }}>
                                    <i class="fa-regular fa-pen-to-square"></i> </button>
                               {{--  <form method="POST" action="{{ route('DeleteClient', $reservation->id) }}">
                                    @csrf
                                    <button class="btn btn-outline-danger"> <i class="fa-solid fa-trash"></i> </button>
                                </form> --}}
                            </div>
                        </td>
                    </tr>
                    @include('Models.ModifierReservation', [
                        'villes' => $villes,
                        'hotels' => $hotels,
                        'reservation' => $reservation,
                    ])
                @endforeach
            </tbody>
        </table>

    </div>
        {{ $reservations->links() }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        let listClient = {{ Js::from($clients) }};
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/Client.js') }}"></script>
</body>

</html>
