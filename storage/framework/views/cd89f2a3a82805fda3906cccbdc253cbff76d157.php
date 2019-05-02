

<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div >
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
        <table id="listProduct" class="table table-striped no-footer" style="color: rgb(76, 74, 74) !important;">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col" class="text-center">Sale</th>
                <th scope="col" class="text-center">Created By</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row">
                    <?php echo e($product->id); ?>

                </th>
                <td>
                    <a href="<?php echo e(URL::route('product.edit', ['id' => $product->id])); ?>" data-method="PUT"><?php echo e($product->name); ?></a>
                </td>
                <td><?php echo e($product->price); ?></td>
                <td ><?php echo e($product->category['name']); ?></td>
                <td class="text-center">
                    <?php if($product->is_sale == 1): ?>
                        Sale
                    <?php else: ?>
                        Not Sale
                    <?php endif; ?>
                </td>
                <td class="text-center"><?php echo e(ucfirst($product->user['name'])); ?></td>
                <td>
                    <img src="<?php echo e(asset('images').'/'.$product['img']); ?>" width="60" height="60">
                </td>
                <td class="text-center">
                    <a href="<?php echo e(URL::route('product.edit',$product->id)); ?>" data-method="PUT">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a href="<?php echo e(url('admin/product/delete/'.$product->id)); ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($products->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>