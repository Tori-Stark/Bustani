@extends('admin.admin')


@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><i  class="fa fa-file">Add Product</i></h1>

            <form action="/products" method="post" enctype="multipart/form-data">

                @include('admin.product.form')
                <button class="btn btn-success">Add</button>

            </form>
        </div>
    </div>
</div>

@endsection
