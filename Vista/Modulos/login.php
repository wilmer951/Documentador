<div class="divlogin">
<h1>Login</h1>







<form class="formlogin" method="post">
  
  <div class="row">
        <div class="form-group">
            <label>User</label>
            <input type="text" name="nameUserLogin" class="inputmayuscula" required>
            <div class="line"></div>
        </div>
  </div>
  


  <div class="row">
      <div class="form-group">
          <label>Password</label>
          <input type="password" name="namePasswordLogin" required>
          <div class="line"></div>
      </div>
    </div>

  <div class="row">
  <button  class="btn" type="submit">Ingresar</button>
  </div>

			

</form>




            <?php
              $login = new Controlador_login();
              $login -> loginControlador();
            ?>  
</div>

