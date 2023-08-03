<div class="modal fade" id={{'ModifierProduit'.$produit->id}} tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header  bg-success text-light ">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form  action="{{route('ModifierProduit',$produit->id)}}" method="POST"  >
            @csrf
        <div class="modal-body">
            <div class="col-6" class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom Produit</label>
                <input type="text"  value="{{$produit->produit}}" class="form-control" name="produit"
                    id="exampleFormControlInput1" >
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
