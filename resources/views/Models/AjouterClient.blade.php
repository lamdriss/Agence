<div class="modal fade modal-xl" id="AjouterClient" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" onsubmit="(e)=>submitForm(e)" id='formAdd' enctype="multipart/form-data" action={{ route('AjouterClient') }}>
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-warning ">
                    <h5 class="modal-title  text-lighttt " id="staticBackdropLabel">Ajouter Client</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-8">

                            <div class="row">

                                <div class="col-6" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nom Complet</label>
                                    <input type="text" class="form-control" name="nom"
                                        id="exampleFormControlInput1" >
                                </div>

                                <div class="col-6" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Cin</label>
                                    <input type="text" class="form-control" name='cin'
                                        id="exampleFormControlInput1" >
                                </div>

                            </div>



                            <div class="row">

                                <div class="col-6" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Date Naissance</label>
                                    <input type="date" class="form-control" name="dateNaissance"
                                        id="exampleFormControlInput1" >
                                </div>

                                <div class="col-6" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">ICE</label>
                                    <input type="text" class="form-control" name='ice'
                                        id="exampleFormControlInput1" >
                                </div>

                            </div>





                            <div class="row">

                                <div class="col-6" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">email</label>
                                    <input type="email" class="form-control" name="email"
                                        id="exampleFormControlInput1" >
                                </div>

                                <div class="col-6" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">telephone</label>
                                    <input type="text" class="form-control" name='telephone'
                                        id="exampleFormControlInput1" >
                                </div>

                            </div>



                            <div class="row">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">adress</label>
                                    <input type="text" class="form-control" name="adress"
                                        id="exampleFormControlInput1" >
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-3" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">passport</label>
                                    <input type="number" class="form-control" name='passport'
                                        id="exampleFormControlInput1" >
                                </div>
                                <div class="col-3" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Date Delivrence</label>
                                    <input type="date" class="form-control" name='dateDelivrence'
                                        id="exampleFormControlInput1" >
                                </div>
                                <div class="col-3" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Date Expiration</label>
                                    <input type="date" class="form-control" name='dateExpiration'
                                        id="exampleFormControlInput1" >
                                </div>
                                <div class="col-3" class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Delivrer par</label>
                                    <input type="text" class="form-control" name='deleivrerPar'
                                        id="exampleFormControlInput1" >
                                </div>

                            </div>





                            <div class="row">
                                <div class=" col-6 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Ville</label>
                                    <select class="form-select form-select-lg  " name="ville"
                                        aria-label="Default select example">
                                        <option value="">Choisir une ville</option>
                                        @foreach ($villes as $ville)
                                            <option value={{ $ville->id }}> {{ $ville->ville }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class=" col-6 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                                    <select class="form-select form-select-lg  " name="status"
                                        aria-label="Default select example">
                                        <option value="">Choisir une Status</option>
                                        <option value='Active'> Active </option>
                                        <option value='Inactive'> Inactive </option>
                                    </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Remarque</label>
                                    <input type="text" class="form-control" name='remarque'
                                        id="exampleFormControlInput1" >
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card p-2 mb-3 ">
                                <h2 class="text-center mb-3 ">CIN RECTO</h2>
                                <img style="width:100%;height:200px;text-align:center;object-fit:contain"
                                    class="card-img-top" src="{{ asset('img/upload.png') }}" />
                                <div class="my-3">
                                    <input class="form-control" name="cinrecto" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="card p-2 ">
                                <h2 class="text-center mb-3 ">CIN VERSO</h2>
                                <img style="width:100%;height:200px;text-align:center;object-fit:contain"
                                    src="{{ asset('img/upload.png') }}" />
                                <div class="my-3">
                                    <input class="form-control" name="cinverso" type="file" id="formFile">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-success">Nouveau</button>
                </div>
        </form>
    </div>
</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
