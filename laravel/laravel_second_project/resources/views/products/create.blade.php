@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Add Product</div>
                    <div class="card-body">
                        <form id="student_form" enctype="multipart/form-data" action="{{ route('products-save') }}" method="post">
                            @csrf
                            <div class="form-group text-left p-3">
                                <label for="email">Product Name:</label>
                                <input type="text" required class="form-control" id="email" placeholder="Enter " name="product_name">
                            </div>
                            <div class="form-group text-left p-3">
                                <label for="pwd">Product Price:</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter " name="price">
                            </div>
                            <div class="form-group text-left p-3">
                                <label for="pwd">Product Qty:</label>
                                <input type="number" class="form-control" id="pwd" placeholder="Enter " name="qty">
                            </div>
                            <div class="form-group text-left p-3">
                                <label for="pwd">Type:</label>
                                <select name="type" class="form-control">
                                    <option value="">Select</option>
                                    <option value="men">Mens Fashion</option>
                                    <option value="women">Women's</option>
                                    <option value="kid">Kid's</option>
                                </select>
                            </div>

                            <div class="form-group text-left p-3">
                                <label for="pwd">Description:</label>
                                <textarea class="form-control" name="description"></textarea>
                                <p class="font-weight-bold">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </p>
                            </div>

                            <div class="form-group text-left p-3">
                                <label for="pwd">Upload Image:</label>
                                <input type="file" class="form-control" name="image"></input>
                            </div>

                            <button type="submit" name="school_form" class="btn btn-primary text-center" style="float: right">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
