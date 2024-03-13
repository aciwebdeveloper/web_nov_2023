@extends('layouts.app')
<style>
    svg
    {
        height: 30px;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}
                        <a href="{{ route('products-create') }}" class="btn btn-primary float-right" style="float: right"> Add Product </a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">image</th>

                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($array) > 0)

                                @foreach($array as $key=> $row)
                                    <tr>
                                        <th scope="row">{{ $row->id }}</th>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->type }}</td>
                                        <td>{{ $row->price }}</td>
                                        <td>{{ $row->qty }}</td>
                                        <td><img src="{{ asset('uploads/'.$row->image) }}" width="50" height="50"></td>
                                        <td>

                                            <a class="" href="{{ route('products-delete', ['id' => $row->id]) }}">
                                                Delete
                                            </a>

                                            <a class="" href="{{ route('products-edit', ['id' => $row->id]) }}">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach


                            @else
                                <tr>
                                    <th colspan="6" class="text-center text-danger">Data Not Found</th>
                                </tr>
                            @endif


                            </tbody>
                        </table>
                        <div>
                            {{ $array->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
