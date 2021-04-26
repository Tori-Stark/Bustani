
<?php $__env->startSection('title'); ?>
    Edit Users | Bustani
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div id="page-wrapper">
        <div class="page-header">
            <div id="page-inner">
 <div class='col-lg-4 col-lg-offset-4'>
     <div class="page-header">
         <div id="page-inner">
        <h1><i class='fa fa-user-plus'></i> Edit <?php echo e($user->name); ?></h1>
        <hr>

        <?php echo e(Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT'))); ?>




        <div class="form-group">
            <?php echo e(Form::label('email', 'Email')); ?>

            <?php echo e(Form::email('email', null, array('class' => 'form-control'))); ?>

        </div>

        <h5><b>Give Role</b></h5>

        <div class='form-group'>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e(Form::checkbox('roles[]',  $role->id, $user->roles )); ?>

                <?php echo e(Form::label($role->name, ucfirst($role->name))); ?><br>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php echo e(Form::submit('Add', array('class' => 'btn btn-primary'))); ?>


        <?php echo e(Form::close()); ?>


    </div>
    </div>
 </div>
    </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gudle\OneDrive\Desktop\web-applications\Bustani\resources\views/users/edit.blade.php ENDPATH**/ ?>