<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <table id="listProduct" class="table table-striped no-footer" style="color: rgb(76, 74, 74) !important;">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Sale</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row">
                    <?php echo e($product['id']); ?>

                </th>
                <td>
                    <a href="<?php echo e(route('product.edit', ['id' => $product['id']])); ?>"><?php echo e($product['name']); ?></a>
                </td>
                <td><?php echo e($product['price']); ?></td>
                <td><?php echo e($product['is_sale']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>