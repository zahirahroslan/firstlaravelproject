;

<?php $__env->startSection('content'); ?>

  <h2>Login here</h2>
  <form action="login_check" method="post">

    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" name="email">
    
     <?php if($errors->has('username')): ?> <p><?php echo e($errors->first('username')); ?> </p><?php endif; ?>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" name="pwd">

     <?php if($errors->has('password')): ?> <p><?php echo e($errors->first('password')); ?> </p><?php endif; ?>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>