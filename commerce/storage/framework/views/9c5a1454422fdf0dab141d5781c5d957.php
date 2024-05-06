<?php $__env->startSection("title", "JUDUL"); ?>

<?php $__env->startSection('body'); ?>
<div class="row d-flex align-items-center justify-content-center" style="min-height: 500px">
<form style="max-width: 400px">
    <!-- Email input -->
    <div class="mb-4">
        <label class="form-label" for="form2Example1">Email address</label>
        <input type="email" id="form2Example1" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="mb-4">
        <label class="form-label" for="form2Example2">Password</label>
      <input type="password" id="form2Example2" class="form-control" />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
          <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>
      </div>

      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div>

    <!-- Submit button -->
    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

    
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp8\htdocs\lav-try\resources\views/login.blade.php ENDPATH**/ ?>