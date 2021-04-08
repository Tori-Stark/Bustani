
@extends('admin.admin')

@section('title')
    Products | Bustani
@endsection
@section('body')
    <div id="page-wrapper">
        <head>
            {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--}}
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
            {{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
        </head>

        {{--<h1 class="h1" style="color: #0e9f6e; text-align: center;">Users</h1>--}}
        <div class="page-header">
            <div>
{{--                <h1><i class="fa fa-gears"></i> Products Administration <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>--}}
{{--                    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>--}}
                <hr>

                <div class="table-responsive">
                    <table id = "datatable" class="table table-bordered table-striped table-dark table-hover" style="margin-top: 30px;">
                        <caption>List of products</caption>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Date/Time Added</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Operations</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($product as $product)
                            <tr>

                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->created_at->format('F d, Y h:ia') }}</td>
                                <td>{{ $product->type }}</td>
                                <td>{{  $product->price}}</td>
                                <td><img src="{{asset('storage/product-images/' . $product->product_image)}}" width="auto;" height="70px;" alt="product_image"> </td>
                                <td>
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-dark pull-left" style="margin-right: 30px; margin-left: 30px;">Edit</a>

                                    <!-- Button trigger modal -->
                                    <button type="button" data-form-link="{{ route('product.destroy', $product->id) }}" class="btn btn-danger delete-user-btn">
                                        DELETE
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
        </div>
        @endsection

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

        @section('script')
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous">

            </script>
            {{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>--}}
            {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>--}}
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
