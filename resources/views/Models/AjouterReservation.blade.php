
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('fontAwsome/fontawesome-free-6.4.0-web/css/all.min.css') }}" />
</head>
            <form method="POST" method="POST" action="/Reservations" class="text-danger" >
                @csrf

                    <div class="row p-5 ">

                        <div class="col-6" class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> Date Reservation</label>
                            <input type="date" class="form-control" name="datereservation"
                                id="exampleFormControlInput1">
                        </div>
                        <div class="col-6" class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> Object</label>
                            <input type="text" class="form-control" name="object" id="exampleFormControlInput1">
                        </div>
                        <div class="col-3" class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> Client</label>
                            <select id="selectClient" name="client" class="form-select"
                                aria-label="Default select example">
                                <option value="">choisir client</option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">
                                        {{ $client->email . ' - ' . $client->telephone }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3" class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> Cin</label>
                            <input readonly type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <div class="col-3" class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> Passport</label>
                            <input readonly type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <div class="col-3" class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> Date Expiration</label>
                            <input readonly type="date" class="form-control" id="exampleFormControlInput1">
                        </div>


                        <ul class="nav  w-80 nav-tabs col-12  mt-2 " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="vg-tab" data-bs-toggle="tab"
                                    data-bs-target="#vg-tab-pane" type="button" role="tab"
                                    aria-controls="vg-tab-pane" aria-selected="true">Voyage Organiser</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="hotel-tab" data-bs-toggle="tab"
                                    data-bs-target="#hotel-tab-pane" type="button" role="tab"
                                    aria-controls="hotel-tab-pane" aria-selected="false">Hotel</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="b-tab" data-bs-toggle="tab"
                                    data-bs-target="#b-tab-pane" type="button" role="tab"
                                    aria-controls="b-tab-pane" aria-selected="false">Billet</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="p-tab" data-bs-toggle="tab"
                                    data-bs-target="#p-tab-pane" type="button" role="tab"
                                    aria-controls="p-tab-pane" aria-selected="false">Paiment</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="vg-tab-pane" role="tabpanel"
                                aria-labelledby="vg-tab" tabindex="0">

                                <div class="row p-2 ">


                                    <div class="col-6" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Produit</label>
                                        <select id="selectClient" class="form-select" name="vproduit"
                                            aria-label="Default select example">
                                            <option value="">choisir produit</option>
                                            @foreach ($produits as $produit)
                                                <option value="{{ $produit->id }}">
                                                    {{ $produit->produit }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Programme</label>
                                        <select id="selectClient" class="form-select" name="vprogramme"
                                            aria-label="Default select example">
                                            <option value="">choisir programme</option>
                                            @foreach ($programmes as $programme)
                                                <option value="{{ $programme->id }}">
                                                    {{ $programme->programme }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>






                                    <div class="col-3" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Hotel</label>
                                        <select id="selectClient" name="vhotel" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">choisir hotel</option>
                                            @foreach ($hotels as $hotel)
                                                <option value="{{ $hotel->id }}">
                                                    {{ $hotel->hotel }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-3" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Type Chamber</label>
                                        <select id="selectClient" name="vchambre" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">choisir chamber</option>
                                            @foreach ($chambers as $chamber)
                                                <option value="{{ $chamber->id }}">
                                                    {{ $chamber->chambre . ' - ' . $chamber->nbrlit }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="col-3" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Date Depart</label>
                                        <input type="date" class="form-control" name="vdateDepart"
                                            id="exampleFormControlInput1">
                                    </div>
                                    <div class="col-3" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Date Arrivee</label>
                                        <input type="date" class="form-control" name="vdateRetoure"
                                            id="exampleFormControlInput1">
                                    </div>


                                    <div class="row" data-item="v">
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Prix
                                                Achat</label>
                                            <input type="number" min="0" id="prixachat"
                                                class=" ip form-control" name="vprixachat"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Prix
                                                Vente</label>
                                            <input type="number" id="prixvente" min="0"
                                                class=" ip form-control" name="vprixvente"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Quantité</label>
                                            <input type="number" id="qte" min="0"
                                                class=" ip form-control" name="vqte"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Total</label>
                                            <input readonly type="number" min="0" id="total"
                                                class=" ip form-control" name="vtotal"
                                                id="exampleFormControlInput1">
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <div class="tab-pane fade" id="hotel-tab-pane" role="tabpanel"
                                aria-labelledby="hotel-tab" tabindex="0">

                                <div class="row">

                                    <div class="col-4" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Hotel</label>
                                        <select id="selectClient" name="hhotel" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">choisir Hotel</option>
                                            @foreach ($hotels as $hotel)
                                                <option value="{{ $hotel->id }}">
                                                    {{ $hotel->hotel }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="col-4" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Paye</label>
                                        <select id="selectClient" name="hpay" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">choisir Paye</option>
                                            @foreach ($pays as $paye)
                                                <option value="{{ $paye->id }}">
                                                    {{ $paye->pays }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="col-4" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Ville</label>
                                        <select id="selectClient" name="hville" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">choisir Ville</option>
                                            @foreach ($villes as $ville)
                                                <option value="{{ $ville->id }}">
                                                    {{ $ville->ville }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-3" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Date Depart</label>
                                        <input type="date" class="form-control" name="hdateDepart"
                                            id="exampleFormControlInput1">
                                    </div>

                                    <div class="col-3" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Date Retour</label>
                                        <input type="date" class="form-control" name="hdateRetoure"
                                            id="exampleFormControlInput1">
                                    </div>


                                    <div class="row " data-item="h">
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Prix
                                                Achat</label>
                                            <input type="number" id="prixachat" min="0"
                                                class=" ip form-control" name="hprixachat"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Prix
                                                Vente</label>
                                            <input type="number" id="prixvente" min="0"
                                                class=" ip form-control" name="hprixvente"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Quantité</label>
                                            <input type="number" id="qte" min="0"
                                                class=" ip form-control" name="hqte"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Total</label>
                                            <input readonly type="number" min="0" id="total"
                                                class=" ip form-control" name="htotal"
                                                id="exampleFormControlInput1">
                                        </div>
                                    </div>




                                </div>


                            </div>

                            <div class="tab-pane fade" id="b-tab-pane" role="tabpanel" aria-labelledby="b-tab"
                                tabindex="0">


                                <div class="row">

                                    <div class="col-4" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Compagnie</label>
                                        <select id="selectClient" name="bcompagnie" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">choisir Compagnie</option>
                                            @foreach ($compagnies as $compagnie)
                                                <option value="{{ $compagnie->id }}">
                                                    {{ $compagnie->compagnie }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-4" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Type Billet</label>
                                        <select id="selectClient" name="btypebillet" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">choisir type billet</option>
                                            @foreach ($billetteries as $billetterie)
                                                <option value="{{ $billetterie->id }}">
                                                    {{ $billetterie->typeBillet }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-3" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Date Depart</label>
                                        <input type="date" class="form-control" name="bdateDepart"
                                            id="exampleFormControlInput1">
                                    </div>
                                    <div class="col-3" class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Date Arrivée</label>
                                        <input type="date" class="form-control" name="bdateRetoure"
                                            id="exampleFormControlInput1">
                                    </div>


                                    <div class="row" data-item='b'>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Prix
                                                Achat</label>
                                            <input type="number" min="0" id="prixachat"
                                                class=" ip form-control" name="bprixachat"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Prix
                                                Vente</label>
                                            <input type="number" min="0" id="prixvente"
                                                class=" ip form-control" name="bprixvente"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Quantité</label>
                                            <input type="number" id="qte" min="0"
                                                class=" ip form-control" name="bqte"
                                                id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-3" class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Total</label>
                                            <input readonly type="number" min="0" id="total"
                                                class=" ip form-control" name="btotal"
                                                id="exampleFormControlInput1">
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="tab-pane fade" id="p-tab-pane" role="tabpanel" aria-labelledby="p-tab"
                                tabindex="0">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Montant payé</th>
                                            <th scope="col">Date Paiment</th>
                                            <th scope="col">Recu</th>
                                            <th scope="col">Mode Paiment</th>
                                            <th scope="col">Piece</th>
                                            <th scope="col">Situation</th>
                                            <th scope="col">Date Echeance</th>
                                            <th scope="col">
                                                <div type="button"  data-bs-toggle="modal"
                                                    data-bs-target="#paiment" class="btn btn-warning">Ajouter
                                                    Paiment</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="paimentC" >

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="col-3 ms-auto mt-2">
                            <div class="" class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"> Montant a payer</label>
                                <input readonly type="number" min="0" id="montanttotal" class=" ip form-control"
                                    name="montant_a_payer" id="exampleFormControlInput1">
                            </div>
                            <input type="hidden" min="0" id="montanttotal" class=" ip form-control"
                                name="Nreservation" id="exampleFormControlInput1">
                            <div class="" class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Montant Payer</label>
                                <input readonly type="number" min="0" value="0" id="montantpayer"
                                    class=" ip form-control" name="montant_payer" id="exampleFormControlInput1">
                            </div>
                            <div class="" class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Rest a Payer</label>
                                <input readonly type="number" min="0" id="rest" class=" ip form-control"
                                    name="montant_rest_a_payer" id="exampleFormControlInput1">
                            </div>
                            <button type="submit" class="btn btn-success mt-2 ">Nouveau</button>
                        </div>


                    </div>
            </form>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script>
            let listClient = {{ Js::from($clients) }};
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/Client.js') }}"></script>
        @include('Models.AjouterPaiment',['mode'=>$modepaiments])
