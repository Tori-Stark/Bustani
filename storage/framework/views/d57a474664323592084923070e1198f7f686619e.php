



<?php $__env->startSection('title'); ?>
    Users | Bustani
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div id="page-wrapper">
<head>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>


<div class="page-header">
    <div>
    <h1><i class="fa fa-users"></i> User Administration <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-dark pull-right">Roles</a>
        <a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-dark pull-right">Permissions</a></h1>
    <hr>

<div class="table-responsive">
    <table id = "datatable" class="table table-bordered table-striped table-dark table-hover" style="margin-top: 30px;">
        <caption>List of users</caption>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date/Time Added</th>
            <th>Address</th>
            <th>User Role</th>
            <th>Operations</th>
        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->created_at->format('F d, Y h:ia')); ?></td>
                <td><?php echo e($user->address); ?></td>
                <td><?php echo e($user->roles()->pluck('name')->implode(' ,')); ?></td>
                <td>
                    <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-dark pull-left" style="margin-right: 30px; margin-left: 30px;">Edit</a>

                    <!-- Button trigger modal -->
                    <button type="button" data-form-link="<?php echo e(route('users.destroy', $user->id)); ?>" class="btn btn-danger delete-user-btn">
                        DELETE
                    </button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    </div>
</div>
        <?php $__env->stopSection(); ?>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even){
        background-color: #0e9f6e;
    }
    html{
        overflow: hidden;
    }
</style>

<?php $__env->startSection('script'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">

</script>


<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
        $('.delete-user-btn').click(function() {
            const deleteUrl = $(this).attr('data-form-link');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                console.log('test 1');
                if (result.value) {
                    console.log('test 2');
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>"
                        }
                    }).then((res) => {
                        console.log('test 3');
                        console.log(res);
                        window.location.reload(true);
                    }).catch((err) => {
                        console.error(err)
                    })
                }
            })
        })
    });

</script>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gudle\OneDrive\Desktop\web-applications\Bustani\resources\views/users/index.blade.php ENDPATH**/ ?>