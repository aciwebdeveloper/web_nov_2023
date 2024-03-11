@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

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
                                        <td>

                                            <a class="" href="{{ route('products-delete', ['id' => $row->id]) }}">
                                                Delete
                                            </a>

                                            <a class="" href="{{ route('products-edit', ['id' => $row->id]) }}">
                                                Edit
                                            </a>


{{--                                            <a class="" href="./insert.php?user_id='.$row['id'].'">--}}
{{--                                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>--}}
{{--                                            </a>--}}
{{--                                            <a style="margin-left: 5px;" href="">--}}
{{--                                                <i class="fa fa-edit text-info" aria-hidden="true">--}}
{{--                                                    --}}
{{--                                                </i>--}}
{{--                                            </a>--}}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
