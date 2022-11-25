<!-- Modal info -->
    <div class="modal fade" id="modalinformation" tabindex="-1" role="dialog" aria-labelledby="modalinformationTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                  <h5 class="modal-title text-white" id="modalinformationTitle">Datos registrados</h5>
                </div>
                <div class="modal-body">
                    <form class="p-3" action="receive.php" method="post">
                        <div class="row mb-3">
                            <div class="col-12 col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $name ;?>" disabled>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="lastname">Apellido</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="<?php echo $lastname ;?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-md-6">
                                <label for="mail">Correo electrónico</label>
                                <input type="text" class="form-control" name="mail" id="mail" placeholder="<?php echo $mail;?>" disabled>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="adress">Dirección</label>
                                <input type="text" class="form-control" name="adress" id="adress" placeholder="<?php echo $adress;?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-md-2">
                                <label for="age">Edad</label>
                                <input type="number" name="age" id="age" min="1" max="100" placeholder="<?php echo $age;?>" disabled>
                            </div>
                            <div class="col-12 col-md-4">
                                <p> <?php echo '<b>Genero: </b>' . '<br>' . $gender;?></p>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="checked">¿Acepta los terminos?</label>
                                <input type="checkbox" name="checked" id="checked" value="checked" checked disabled>
                            </div>
                        </div>
                    </form>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
    </div>
<!-- /Modal info -->