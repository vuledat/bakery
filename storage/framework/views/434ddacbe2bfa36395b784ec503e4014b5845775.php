

<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo form($form); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>