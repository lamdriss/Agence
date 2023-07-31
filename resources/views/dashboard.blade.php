<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12  my-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 row bg-white  shadow-sm sm:rounded-lg">



                <a  href="/Clients" class="card  col-3 text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Client</div>
                    <div class="card-body">
                    </div>
                </a>

                <div class="card  col-3 text-dark bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Produit</div>
                    <div class="card-body">
                    </div>
                  </div>

                <div class="card  col-3 text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Programmes</div>
                    <div class="card-body">
                    </div>
                  </div>

                <div class="card col-3 text-dark bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Payes</div>
                    <div class="card-body">
                    </div>
                  </div>

                <div class="card col-3 text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Villes</div>
                    <div class="card-body">
                    </div>
                  </div>

                <div class="card  col-3 text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Compagnies</div>
                    <div class="card-body">
                    </div>
                  </div>

                <div class="card  col-3  text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Hotels</div>
                    <div class="card-body">
                    </div>
                  </div>

                <div class="card  col-3 text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Utilisateurs</div>
                    <div class="card-body">
                    </div>
                  </div>

                <div class="card  col-3 text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Reservation</div>
                    <div class="card-body">
                    </div>
                  </div>




            </div>
        </div>
    </div>
</x-app-layout>
