<!-- Modal -->
<div class="modal fade" id="modalFormEmpleado" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEmpleado" name="formEmpleado" class="form-horizontal">
          <input type="hidden" id="idUsuario" name="idUsuario" value="">

          <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>

          <div class="form-row">
            <!-- <div class="form-group col-md-4">
                  <label for="txtIdentificacion">Identificación <span class="required">*</span></label>
                  <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" required="">
                </div> -->
            <div class="form-group col-md-4">
              <label for="txtNombre">Nombre Completo <span class="required">*</span></label>
              <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" required="">
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="txtEmail">Correo Electronico <span class="required">*</span></label>
              <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" required="">
            </div>

          </div>
          <legend>Sexo</legend>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" id="optionsRadios1" type="radio" name="sexoRadios" value="M" checked="">Masculino
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" id="optionsRadios2" type="radio" name="sexoRadios" value="F">Femenino
            </label>
          </div>
          <label for="listArea">Area</label>
          <select class="form-control" id="listArea" name="listArea">
            <option value="1">Administrativa y Financiera</option>
            <option value="2">Ingeniería</option>
            <option value="3">Desarrollo de Negocio</option>
            <option value="4">Proyectos</option>
            <option value="5">Servicios</option>
            <option value="6">Calidad</option>
          </select>
          <div class="form-group">
            <label for="txtDescripcion">Descripcion</label>
            <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="3" placeholder="Descripcion de la experiencia del empleado"></textarea>
          </div>
          <div class="form-check">

            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" id="checkBoletin" name="checkBoletin">Deseo recibir boletin Informativo
            </label>
          </div>
          <b>Roles</b>
          <?php
            if (count($data['roles']) > 0) {
                foreach ($data['roles'] as $roles) {
              ?>
            <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="<?= $roles['id'] ?>" value="<?= $roles['id'] ?>" name="<?= $roles['id'] ?>" target="_blank"><?= $roles['nombre'] ?>
                  </label>
            </div>
            <?php }
            } ?>
                <!-- <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="1" name="1" value="1" target="_blank">Desarrollador                    </label>
              </div>
                        <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="2" name="2" value="2" target="_blank">Analista                    </label>
              </div>
                        <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="3" name="3" value="3" target="_blank">Tester                    </label>
              </div>
                        <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="4" name="4" value="4" target="_blank">Diseñador                    </label>
              </div>
                        <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="5" name="5" value="5" target="_blank">Profesional PMO                    </label>
              </div>
                        <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="6" name="6" value="6" target="_blank">Profesional de servicios                    </label>
              </div>
                        <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="7" name="7" value="7" target="_blank">Auxiliar administrativo                    </label>
              </div>
                        <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="8" name="8" value="8" target="_blank">Codirector                    </label>
              </div> -->
          <hr>
      </div>
      <div class="form-row">

      </div>
      <div class="tile-footer">
        <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

