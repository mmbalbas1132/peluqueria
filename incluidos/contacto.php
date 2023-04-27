<section class="container-xl py-5" id="contacto">
            <h2 class="text-center my-5">Contacto</h2>

            <div class="row justify-content-center">
                <form class="col-md-8 needs-validation" novalidate>
                    <fieldset>
                        <legend class="bg-primary text-center text-white fs-2">Tus Datos</legend>

                        <div class="mb-3 fs-2">
                            <label class="form-label" for="nombre"><i class="bi bi-person-add"></i> Nombre:</label>
                            <input type="text" class="form-control"  id="nombre" placeholder="Tu Nombre" required>
                            <span class="invalid-feedback">Hubo un error...</span>
                        </div>
                        <div class="mb-3 fs-2">
                            <label class="form-label" for="asunto"><i class="bi bi-briefcase"></i> Asunto:</label>
                            <input type="text" class="form-control" id="asunto" placeholder="Tu Asunto">
                            <span class="valid-feedback">Muy bien!!</span>
                        </div>
                        <div class="mb-3 fs-2">
                            <label class="form-label" for="email"><i class="bi bi-envelope-at"></i> Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Tu Email">
                        </div>
                        <div class="mb-3 fs-2">
                            <label class="form-label" for="tel"><i class="bi bi-phone"></i> Teléfono:</label>
                            <input type="tel" class="form-control" id="tel" placeholder="Tu Teléfono">
                        </div>

                        <div class="mb-3 fs-2">
                            <label class="form-label" for="tel"><i class="bi bi-chat-right-text"></i> Mensaje:</label>
                            <textarea class="form-control" rows="10"></textarea>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="bg-primary text-center text-white fs-2"><i class="bi bi-geo-alt"></i> Provincia</legend>

                        <div class="mb-3 fs-2">
                            <label class="form-label" for="pais">Provincia:</label>
                            <select class="form-control" id="pais">
                                <option value="">--Seleccione--</option>
                                <option value="C">A Coruña</option>
                                <option value="LU">Lugo</option>
                                <option value="OU">Ourense</option>
                                <option value="PO">Pontevedra</option>
                                
                            </select>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="bg-primary text-center text-white fs-2">Información Extra</legend>

                        <div class="mb-3">
                            <label class="form-label fs-2" for="cliente">Cliente:</label>
                            <input name="tipo" type="radio" class="form-check-input" id="cliente">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fs-2" for="proveedor">Proveedor:</label>
                            <input name="tipo" type="radio" class="form-check-input" id="proveedor">
                        </div>

                    </fieldset>

                    <div class="d-grid d-md-flex">
                        <input class="btn btn-secondary fs-2 px-5 mt-5" type="submit" value="Enviar Formulario">
                    </div>
                </form>
            </div>

        </section>
