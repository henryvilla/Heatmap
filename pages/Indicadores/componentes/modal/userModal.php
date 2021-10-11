
<!-- remover -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeUserModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Eliminar Proceso </h4>
            </div>
            <div class="modal-body">

                <div class="removeUserMessages"></div>

                <p>¿Estas segur@ de eliminar este proceso?</p>
            </div>
            <div class="modal-footer removeUserFooter">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cancelar</button>
                <button type="button" class="btn btn-primary" id="removeUserBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Bloquear</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agrega nuevo Indicador</h4>
            </div>
            <div class="modal-body">
                <label>Indicador:</label>
                <input type="text"  placeholder="Indicador" name="indicador" id="new_indicador" class="form-control input-sm">
                <label>Descripci&oacute;n:</label>
                <textarea placeholder="Indicador" name="descripcion" id="new_descripcion" class="form-control input-sm"></textarea>
                <label>Tipo:</label>
                <select id="new_select_tipo" class="form-control input-sm">                      
                    <option value="" selected  disabled="">Seleccione</option>
                    <option value="Cualitativo" >Cualitativo</option>
                    <option value="Cuantitativo" >Cuantitativo</option>
                </select>
                <label>Macroproceso Asociado:</label>
                <input type="text"  placeholder="Indicador" name="macro_asociado" id="new_macro_asociado" class="form-control input-sm " disabled>
                <input type="text" hidden="" id="new_idmacro_asociado" >
                <label id="new_lapro_asociado">Proceso Asociado:</label>
                <input type="text"  placeholder="proIndicador" name="pro_asociado" id="new_pro_asociado" class="form-control input-sm " disabled>
                <input type="text" hidden="" id="new_idpro_asociado" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo_indicador">
                    Agregar
                </button>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalEdicion_indicadores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Indicador</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idindicador_edt" name="">
        	<label>Indicador:</label>
                <input type="text"  placeholder="Indicador" name="indicador_edit" id="indicador_edit" class="form-control input-sm">
                <label>Descripci&oacute;n:</label>
                <textarea placeholder="Indicador" name="descripcion_edit" id="descripcion_edit" class="form-control input-sm"></textarea>
                <label>Tipo:</label>
                <select id="tipo_edit" class="form-control input-sm">                      
                    <option value="" selected  disabled="">Seleccione</option>
                    <option value="Cualitativo" >Cualitativo</option>
                    <option value="Cuantitativo" >Cuantitativo</option>
                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizarindicador" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>