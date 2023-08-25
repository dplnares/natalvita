<body class="fondoLogin">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header cardImage">
                  <h3><img src="view/img/logo-without.png" class="imagenLogin"></h3>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputEmail" type="email" name="inputEmail" placeholder="correo@gmail.com" />
                      <label for="inputEmail">Correo Electrónico</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputPassword" type="password" name="inputPassword" placeholder="Password" />
                      <label for="inputPassword">Contraseña</label>
                    </div>


                    <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                      <button class="btn buttonLogin" type="submit">Ingresar</button>
                    </div>
                    <?php
                      $login = new ControllerUsuarios();
                      $login -> ctrIniciarSesion();
                    ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>