@extends('admin')

@section('title', 'Sale Product')

@section('content')
    <div class="container">
        <div class="col-lg-12">
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
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row col-lg-12">
            <div class="col-lg-6">
                <h4 class="text-center">Products</h4>
                <ul id="not-sale" class="list-group sale connectedSortable" status="0">
                    @foreach($product as $pr)
                        @if($pr['is_sale'] == 0)
                            <li class="list-group-item" value="{{$pr['id']}}">
                            <div class="row">
                                    <div>
                                        <img src="{{ asset('images').'/'.$pr['img'] }}" width="60" height="60">
                                    </div>
                                    <div style="width: 80%; padding-left: 5px;">
                                        <h6>
                                            <a href="{{ route('product.edit',$pr['id']) }}">
                                                {{$pr['name']}}
                                            </a>
                                        </h6>
                                        <a id="date-sale" class="text-primary">
                                            {{$pr['date_sale']->format('d/m/Y')}}
                                        </a>
                                        &nbsp &nbsp Price:
                                        <span class="text-danger">
                                            {{number_format($pr['price'])}} vnd
                                        </span>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <h4 class="text-center">Products Sale</h4>
                <ul id="for-sale" class="list-group sale sale-list connectedSortable" status="1">
                    @foreach($product as $pr)
                        <?php
//                            dd($pr['img']);
                        ?>
                        @if($pr['is_sale'])
                            <li class="list-group-item" value="{{$pr['id']}}">
                                <div class="row">
                                    <div>
                                        <img src="{{ asset('images').'/'.$pr['img'] }}" width="60" height="60">
                                    </div>
                                    <div style="width: 80%; padding-left: 5px;">
                                        <span class="text-danger float-right">
                                            <i class="fas fa-gift"></i>
                                        </span>
                                        <h6>
                                            <a href="{{ route('product.edit',$pr['id']) }}">
                                                {{$pr['name']}}
                                            </a>
                                        </h6>
                                        <a id="date-sale" class="text-primary">
                                            {{$pr['date_sale']->format('d/m/Y')}}
                                        </a>
                                        &nbsp &nbsp Price:
                                        <span class="text-danger">
                                            {{number_format($pr['price'])}} vnd
                                        </span>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
