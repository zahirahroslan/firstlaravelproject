;

<?php $__env->startSection('content'); ?>


<h2>Please Fill in your details</h2>

<?php if(Session::has('success')): ?>

<div class="row">
  <div class="col-md-12">
    <div class="alert alert-success">
      <?php echo e(Session::get('success')); ?>

    </div>
  </div>
</div>
<?php endif; ?>

  <form action="register_action" method="post">

    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">



    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" name="username" class="form-control" id="name" placeholder="Enter Name" name="name">
    
    <?php if($errors->has('username')): ?> <p><?php echo e($errors->first('username')); ?> </p><?php endif; ?>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email" name="email">
    
     <?php if($errors->has('email')): ?> <p><?php echo e($errors->first('email')); ?> </p><?php endif; ?>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">

     <?php if($errors->has('password')): ?> <p><?php echo e($errors->first('password')); ?> </p><?php endif; ?>
    </div>

    

    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" name="cpassword" class="form-control" id="pwd" placeholder="Confirm Password" name="pwd">
    
    <?php if($errors->has('cpassword')): ?> <p><?php echo e($errors->first('cpassword')); ?> </p><?php endif; ?>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>