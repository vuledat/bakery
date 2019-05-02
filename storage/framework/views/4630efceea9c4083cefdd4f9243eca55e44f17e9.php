<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo form($form); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>