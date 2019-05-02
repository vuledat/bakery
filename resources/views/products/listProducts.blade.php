@extends('admin')

@section('title', 'Products')

@section('content')
    <div class="container">
        <div >
            <div class="float-left">
                <button class="btn btn-primary">
                    <a style="color: #FFF; text-decoration: none;" href="{{ route('product.create') }}">
                        Create
                    </a>
                </button>
            </div>
            <div class="float-right">
                <button class="btn btn-primary">
                    <a style="color: #FFF; text-decoration: none;" href="{{ route('product.sale') }}">
                        Sale
                    </a>
                </button>
            </div>
        </div>
        <table id="listProduct" class="table table-striped no-footer" style="color: rgb(76, 74, 74) !important;">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col" class="text-center">Sale</th>
                <th scope="col" class="text-center">Created By</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">
                    {{$product->id}}
                </th>
                <td>
                    <a href="{{ URL::route('product.edit', ['id' => $product->id]) }}" data-method="PUT">{{$product->name}}</a>
                </td>
                <td>{{$product->price}}</td>
                <td >{{$product->category['name']}}</td>
                <td class="text-center">
                    @if($product->is_sale == 1)
                        Sale
                    @else
                        Not Sale
                    @endif
                </td>
                <td class="text-center">{{ucfirst($product->user['name'])}}</td>
                <td>
                    <img src="{{ asset('images').'/'.$product['img'] }}" width="60" height="60">
                </td>
                <td class="text-center">
                    <a href="{{URL::route('product.edit',$product->id)}}" data-method="PUT">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a href="{{ url('admin/product/delete/'.$product->id)}}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection