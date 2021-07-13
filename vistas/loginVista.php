<?php include 'header.php' ?>
      <h1>Iniciar Sesión</h1>
      
      <!-- Dentro del action redirigimos a la misma página. La función htmlspecialchars es para evitar que nos inyecten código -->
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
        <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="form-group">
          <input type="text" class="form-control" name="usuario" aria-describedby="text" placeholder="Usuario">
        </div>
       
        <div class="form-group">
           <input type="password" class="form-control" name="password" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary" onclick="login.submit()">Enviar</button>
        <!-- La función onclick me permite que el botón envíe la información del formulario. -->
        <small id="textHelp" class="form-text text-muted">¿No tienes cuenta? <a href="registrate.php">Regístrate</a></small>
      </div>
      </div>
      <div>
      <?php if(!empty($errores)): ?>
        <div class="error">
            <ul>
              <?php echo $errores; ?>
            </ul>
        </div>
      <?php endif; ?>
    </div>
      </form>

<?php include 'footer.php' ?>