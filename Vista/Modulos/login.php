<div class="divlogin">
<h1 class="mb-5">Login</h1>







<form class="formlogin" method="post">
  
  <div class="row mb-4">
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
  <button  class=" btn btn-sm btnone mt-5" type="submit">Ingresar</button>
  </div>

			

</form>




            <?php
              $login = new Controlador_login();
              $login -> loginControlador();
            ?>  
</div>

