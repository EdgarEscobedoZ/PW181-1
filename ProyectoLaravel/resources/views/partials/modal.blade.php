  <!-- Modal -->
<div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header bg-warning">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Recuerdo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form method="POST" action="">

            @csrf 

            <div class="mb-3">
              <label class="form-label">Titulo: </label>
              <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo')}}" >

              <p class="text-danger fw-bold">{{ $errors->first('txtTitulo') }}</p>

            </div>

            <div class="mb-3">
                <label class="form-label">Recuerdo: </label>
                <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo')}}">

                <p class="text-danger fw-bold">{{ $errors->first('txtRecuerdo') }}</p>

            </div>  
            
          
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-warning">Editar <i class="bi bi-pencil-square"></i></button>
        </form>
        </div>

      </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="eliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          ...
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>

      </div>
    </div>
</div>


