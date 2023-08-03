<div class="modal fade" id="paiment" tabindex="1" aria-labelledby="paiment" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header  bg-danger text-light ">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Paiment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="" class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Date Paiment</label>
                <input   type="date"  id="s" class=" ip form-control"
                    name="datepaiment" >
            </div>

           

            <div  class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> Mode paiment</label>
              <select  id="s" name="modePaiment" class="form-select"
                  aria-label="Default select example">
                  <option value="">choisir mode paiment</option>
                  @foreach ($modepaiments as $modepaiment)
                      <option value="{{ $modepaiment->id }}">
                          {{ $modepaiment->modePaiment }}
                      </option>
                  @endforeach
              </select>
          </div>


          <div  style="display: none" class="mb-3 Piece">
            <label for="exampleFormControlInput1" class="form-label  "> Piece N°</label>
            <input   type="text"   class=" ip   form-control"
                name="pieceN" id="s">
        </div>

          <div class="" class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"> Date Echeance</label>
            <input  type="date"  class=" ip form-control"
                name="dateEchance" id="s">
          </div>


          <div class="" class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Montant Paye </label>
            <input  type="number" min="0"  class=" ip form-control"
                name="montantpaye" id="s">
          </div>

          <div class="col-4" class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"> Situation</label>
            <select   id="s" name="sitaution" class="form-select"
                aria-label="Default select example">
                <option value="">choisir situation</option>
                <option >Payer</option>
                <option >Impayer</option>
               
            </select>
        </div>

          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="AddItemPaiment"  class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<script  src="{{ asset("js/ajouterPaiment.js") }}" ></script>