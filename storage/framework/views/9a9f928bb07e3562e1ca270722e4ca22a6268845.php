<?php $__env->startSection('title', '| Create Permission'); ?>

<?php $__env->startSection('body'); ?>

<body>
    <div id="page-wrapper">

    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-key'></i> Add Permission</h1>
        <br>

        <?php echo e(Form::open(array('url' => 'admin/permissions'))); ?>


        <div class="form-group">
            <?php echo e(Form::label('name', 'Name')); ?>

            <?php echo e(Form::text('name', '', array('class' => 'form-control'))); ?>

        </div><br>
        <?php if(!$roles->isEmpty()): ?>
        <h4>Assign Permission to Roles</h4>

        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e(Form::checkbox('roles[]',  $role->id )); ?>

            <?php echo e(Form::label($role->name, ucfirst($role->name))); ?><br>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <br>
        <?php echo e(Form::submit('Add', array('class' => 'btn btn-primary'))); ?>


        <?php echo e(Form::close()); ?>


    </div>
    </div>
</body>













<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jah/Desktop/Bustani/resources/views/permissions/create.blade.php ENDPATH**/ ?>