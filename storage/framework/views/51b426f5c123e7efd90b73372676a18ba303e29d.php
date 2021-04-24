


<?php $__env->startSection('title', '| Roles'); ?>

<?php $__env->startSection('body'); ?>
    <div id="page-wrapper">
    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    </head>

    <div class="col-lg-10 col-lg-offset-1" style="margin-top: 100px; margin-left: 40px;">
        <h1 style="color: #0e9f6e"><i class="fa fa-key" style="color: black"></i> Roles

            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default pull-right">Users</a>
            <a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-default pull-right">Permissions</a></h1>
        <hr>
        <div class="table-responsive">
            <table id = "datatable" class="table table-bordered table-striped table-green">
                <thead style="color: #0e9f6e">
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td><?php echo e($role->name); ?></td>

                        <td><?php echo e(str_replace(array('[',']','"'),'', $role->permissions()->pluck('name'))); ?></td>
                        <td>
                            <a href="<?php echo e(URL::to('roles/'.$role->id.'/edit')); ?>" class="btn btn-dark pull-left" style="margin-right: 3px;">Edit</a>

                            <!-- Button trigger modal -->
                            <button type="button" data-form-link="<?php echo e(route('roles.destroy', $role->id)); ?>"  class="btn btn-danger delete-role-btn">
                                DELETE
                            </button>




                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>

        <a href="<?php echo e(URL::to('roles/create')); ?>" class="btn btn-success">Add Role</a>

    </div>

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
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
            $('.delete-role-btn').click(function() {
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
                    if (result.value) {
                        $.ajax({
                            url: deleteUrl,
                            type: 'DELETE',
                            data: {
                                "_token": "<?php echo e(csrf_token()); ?>"
                            }
                        }).then((res) => {
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

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gudle\OneDrive\Desktop\web-applications\Bustani\resources\views/roles/index.blade.php ENDPATH**/ ?>