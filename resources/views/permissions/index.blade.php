{{-- \resources\views\permissions\index.blade.php --}}
@extends('admin.admin')

@section('title', '| Permissions')

@section('body')
    <div id="page-wrapper">
    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    </head>

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-key"></i>Available Permissions

            <a href="{{ route('users.index') }}" class="btn btn-dark pull-right">Users</a>
            <a href="{{ route('roles.index') }}" class="btn btn-dark pull-right">Roles</a></h1>
        <hr>
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped table-dark">

                <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-dark pull-left" style="margin-right: 3px;">Edit</a>
{{--                         {{ URL::to('permissions/'.$permission->id.'/edit') }}--}}
                            <!-- Button trigger modal -->
                            <button type="button" data-form-link="{{ route('permissions.destroy', $permission->id) }}"  class="btn btn-danger delete-permission-btn">
                                DELETE
                            </button>
{{--                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}--}}
{{--                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
{{--                            {!! Form::close() !!}--}}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ URL::to('admin/permissions/create') }}" class="btn btn-success">Add Permission</a>
{{--       {{ URL::to('permissions/create') }}--}}
    </div>

@endsection

@section('script')
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
                    $('.delete-permission-btn').click(function() {
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
                                        "_token": "{{ csrf_token() }}"
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

@endsection
