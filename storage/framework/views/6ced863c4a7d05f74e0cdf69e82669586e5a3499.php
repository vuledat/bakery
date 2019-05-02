

<?php $__env->startSection('title', 'Slider'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div >
            <div class="float-left">
                <button class="btn btn-primary">
                    <a style="color: #FFF; text-decoration: none;" href="<?php echo e(route('slider.create')); ?>">
                        Create
                    </a>
                </button>
            </div>
        </div>

        <table id="listProduct" class="table table-striped no-footer" style="color: rgb(76, 74, 74) !important;">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                
                <th scope="col" class="text-center">Des Main</th>
                <th scope="col" class="text-center">Desciption Extra</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row">
                    <?php echo e($slider->id); ?>

                </th>
                <td>
                    <a href="<?php echo e(URL::route('slider.edit', ['id' => $slider->id])); ?>" data-method="PUT">
                        <img src="<?php echo e(asset('images').'/'.$slider['img']); ?>" width="120" height="">
                    </a>
                </td>
                
                    
                
                <td class="text-center"><?php echo e($slider->des_main); ?></td>
                <td class="text-center"><?php echo e($slider->des_extra); ?></td>
                <td class="text-center">
                    <a href="<?php echo e(URL::route('slider.edit',$slider->id)); ?>" data-method="PUT">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a href="<?php echo e(route('slider.delete',$slider->id)); ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>