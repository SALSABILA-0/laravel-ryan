<h1 class="mt-5 text-center">Login</h1>
<div class="container login">
    <form method="POST" action="" class="container mt-5">
      <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="rememberMe" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <center><button type="submit" name="submit" class="btn btn-primary">Login</button></center>
      </form>
</div>
<?php echo $__env->make('layouts.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-ryan\pengaduan_masyarakat_laravel\resources\views/login.blade.php ENDPATH**/ ?>