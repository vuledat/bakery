<?php $__env->startSection('title', 'Edit Slider'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-lg-12">
            <?php echo form($form); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>