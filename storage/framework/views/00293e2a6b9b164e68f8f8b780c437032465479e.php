

<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-lg-12">
            <?php echo form($form); ?>

            <input type="image" src="http://localhost/bakery/public/images/2019-01-13wp.jpg" width="60" height="60">
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>