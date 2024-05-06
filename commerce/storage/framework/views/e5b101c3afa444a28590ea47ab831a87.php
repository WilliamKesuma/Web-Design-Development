<?php $__env->startSection('title', 'Contact Us'); ?>
<?php $__env->startSection('body'); ?>
<div class="row d-flex justify-content-center m-5">
  <!-- Contact Form Block -->
  <div class="col-xl-6">
    <h2 class="pb-4">Leave a message</h2>
    <div class="row g-4">
      <div class="col-12 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John">
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Phone</label>
      <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="+1234567890">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Message</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-dark">Send Message</button>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp8\htdocs\lav-try\resources\views/contact.blade.php ENDPATH**/ ?>