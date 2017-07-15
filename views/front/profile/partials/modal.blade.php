<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        actualiza tu perfil
                    </h4>
                </div>
                <div class="modal-body">
                    <p class="small">
                        Recuerda que puedes cambiar tu informació de perfil una vez al mes 
                    </p>
                    <div class="form-group">
                        <label class="sr-only" for="inputNick">nickname</label>
                        <input type="email" class="form-control" id="inputNick" placeholder="Tu nombre de usuario" value="{{ $result->nickname }}">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputBio">Password</label>
                        <textarea class="form-control" rows="3" id="inputBio" name="bio" placeholder="Crea una bio de no más de 140 caracteres...">{{ $result->bio }}</textarea>
                    </div>        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">
                        ¡Actualizar!
                    </button>
                    <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </div>
    </form> 
</div>