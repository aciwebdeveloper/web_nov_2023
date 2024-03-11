@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Edit Product</div>
                    <div class="card-body">
                        <form id="student_form" enctype="multipart/form-data" action="{{ route('products-update') }}" method="post">
                            <input type="hidden" name="id" value="{{ $obj->id }}">
                            @csrf
                            <div class="form-group text-left p-3">
                                <label for="name">Product Name:</label>
                                <input type="text" required class="form-control" id="name" placeholder="Enter " value="{{ $obj->name }}" name="product_name">
                            </div>
                            <div class="form-group text-left p-3">
                                <label for="pwd">Product Price:</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter " name="price" value="{{ $obj->price }}">
                            </div>
                            <div class="form-group text-left p-3">
                                <label for="pwd">Product Qty:</label>
                                <input type="number" class="form-control" id="pwd" placeholder="Enter " name="qty" value="{{ $obj->qty }}">
                            </div>
                            <div class="form-group text-left p-3">
                                <label for="pwd">Type:</label>
                                <select name="type" class="form-control">
                                    <option value="">Select</option>
                                    <option value="men" @if($obj->type ==  'men') selected @endif>Mens Fashion</option>
                                    <option value="women" @if($obj->type ==  'women') selected @endif>Women's</option>
                                    <option value="kid" @if($obj->type ==  'kid') selected @endif>Kid's</option>
                                </select>
                            </div>

                            <div class="form-group text-left p-3">
                                <label for="pwd">Description:</label>
                                <textarea class="form-control" name="description" > {{ $obj->description }}</textarea>
                            </div>
                            <button type="submit" name="school_form" class="btn btn-primary text-center" style="float: right">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
