<?php $__env->startSection('content'); ?>

  <?php if(Auth::guest()): ?>
     <?php echo $__env->make('welcome.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php else: ?>
     <?php echo $__env->make('welcome.registered', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
  
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ksi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>