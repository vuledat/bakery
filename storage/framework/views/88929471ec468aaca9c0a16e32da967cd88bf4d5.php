<?php $__env->startSection('title', 'Sale Product'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-lg-12">
            <div class="float-left">
                <button class="btn btn-primary">
                    <a style="color: #FFF; text-decoration: none;" href="<?php echo e(route('product.create')); ?>">
                        Create
                    </a>
                </button>
            </div>
            <div class="float-right">
                <button class="btn btn-primary">
                    <a style="color: #FFF; text-decoration: none;" href="<?php echo e(route('product.sale')); ?>">
                        Sale
                    </a>
                </button>
            </div>
        </div>
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="row col-lg-12">
            <div class="col-lg-6">
                <h4 class="text-center">Products</h4>
                <ul id="not-sale" class="list-group sale connectedSortable" status="0">
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($pr['is_sale'] == 0): ?>
                            <li class="list-group-item" value="<?php echo e($pr['id']); ?>">
                            <div class="row">
                                    <div>
                                        <img src="<?php echo e(asset('images').'/'.$pr['img']); ?>" width="60" height="60">
                                    </div>
                                    <div style="width: 80%; padding-left: 5px;">
                                        <h6>
                                            <a href="<?php echo e(route('product.edit',$pr['id'])); ?>">
                                                <?php echo e($pr['name']); ?>

                                            </a>
                                        </h6>
                                        <a id="date-sale" class="text-primary">
                                            <?php echo e($pr['date_sale']->format('d/m/Y')); ?>

                                        </a>
                                        &nbsp &nbsp Price:
                                        <span class="text-danger">
                                            <?php echo e(number_format($pr['price'])); ?> vnd
                                        </span>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <h4 class="text-center">Products Sale</h4>
                <ul id="for-sale" class="list-group sale sale-list connectedSortable" status="1">
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
//                            dd($pr['img']);
                        ?>
                        <?php if($pr['is_sale']): ?>
                            <li class="list-group-item" value="<?php echo e($pr['id']); ?>">
                                <div class="row">
                                    <div>
                                        <img src="<?php echo e(asset('images').'/'.$pr['img']); ?>" width="60" height="60">
                                    </div>
                                    <div style="width: 80%; padding-left: 5px;">
                                        <span class="text-danger float-right">
                                            <i class="fas fa-gift"></i>
                                        </span>
                                        <h6>
                                            <a href="<?php echo e(route('product.edit',$pr['id'])); ?>">
                                                <?php echo e($pr['name']); ?>

                                            </a>
                                        </h6>
                                        <a id="date-sale" class="text-primary">
                                            <?php echo e($pr['date_sale']->format('d/m/Y')); ?>

                                        </a>
                                        &nbsp &nbsp Price:
                                        <span class="text-danger">
                                            <?php echo e(number_format($pr['price'])); ?> vnd
                                        </span>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>