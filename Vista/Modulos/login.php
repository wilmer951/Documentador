<div class="divlogin">
<h1>Login</h1>




<form action="">


<div class="form-floating">
  <input type="text" class="form-control mb-2" id="npreparacion" placeholder="Npreparacíon" maxlength="10" name="codigoVerficiacion" required>
  <label for="npreparacion" class="floatinginputtext">Usuario</label>
</div>


<div class="form-floating">
  <input type="text" class="form-control" id="npreparacion" placeholder="Npreparacíon" maxlength="10" name="codigoVerficiacion" required>
  <label for="npreparacion" class="floatinginputtext">Contraseña</label>
</div>


</form>





            <?php
              $login = new Controlador_login();
              $login -> loginControlador();
            ?>  
</div>

