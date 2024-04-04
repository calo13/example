<?php
include ('header.php');


?>
<div class="row justify-content-center mt-5 align-items-center " >
  <div class="col-md-4 d-flex justify-content-center">
    <img src="../img/log.png">
  </div>

  <div class="col-md-4  bg-white p-5 rounded shadow-lg">
    <form method="POST" novalidate>
      <div class="mb-3">
        <label for="name" class="form-label fw-bold ">Nombre</label>
        <input type="text" id="name" name="name" placeholder="Nombre" class="form-control">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label fw-bold ">Username</label>
        <input type="text" id="username" name="username" placeholder="Nombre de usuario" class="form-control">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-bold ">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label fw-bold ">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label fw-bold  ">Repetir contraseña</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
      </div>
      <div class="mt-3 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary fw-bold w-45 py-3 ">Create account</button>
        
      </div>
    </form>
  </div>
</div>
<?php
include ('footer.php');


?>