<?php $__env->startSection('body'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><i  class="fa fa-file">Add Product</i></h1>

            <form action="/products" method="post" enctype="multipart/form-data">

                <?php echo $__env->make('admin.product.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <button class="btn btn-success">Add</button>

            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mike/Desktop/Bustani/resources/views/admin/product/create.blade.php ENDPATH**/ ?>