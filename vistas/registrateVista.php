<?php include 'header.php' ?>

      <h1>Regístrate</h1>
      <p class="lead text-muted">Únete a la comunidad ARS Education y obten grandes beneficios. Necesitas un WebID para acceder a todos los servicios, sin embargo obtenerlo sólo te tomará un momento</p>
      <!-- Dentro del action redirigimos a la misma página. La función htmlspecialchars es para evitar que nos inyecten código -->
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login" >
        <div class="row justify-content-center">
        <div class="col-md-4">

        <div class="form-group">
        <input type="text" name="usuario" class="form-control" aria-describedby="text" placeholder="ID">
        </div>

        <div class="form-group">
        <input type="text" name="nombre" class="form-control" aria-describedby="text" placeholder="Nombre">
        </div>

        <div class="form-group">
        <input type="text" name="apPat" class="form-control" aria-describedby="text" placeholder="Ap. Paterno">
        </div>

        <div class="form-group">
        <input type="text" name="apMat" class="form-control" aria-describedby="text" placeholder="Ap. Materno">
        </div>

        <div class="form-group">      
        <input type="password" class="form-control"  placeholder="Contraseña" name="password">
        </div>

        <div class="form-group">
        <input type="password" class="form-control"  placeholder="Repite la contraseña" name="password2">
        </div>
        
        <small id="textHelp" class="form-text text-muted">Al registrarse, acepta nuestro <a href="privacidad.php"> Acuerdo de privacidad</a></small>
        <br>
        <button type="submit" class="btn btn-primary" onclick="login.submit()">Enviar</button>
        <!-- La función onclick me permite que el botón envíe la información del formulario. -->
        <small id="textHelp" class="form-text text-muted">¿Ya tienes cuenta? <a href="login.php">Inicia Sesión</a></small>
      </div>
      </div>
      <?php if(!empty($errores)): ?>
        <div class="error">
            <ul>
              <?php echo $errores; ?>
            </ul>
        </div>
      <?php endif; ?>
      </form>

<?php include 'footer.php' ?>