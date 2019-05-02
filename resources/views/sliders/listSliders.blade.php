@extends('admin')

@section('title', 'Slider')

@section('content')
    <div class="container">
        <div >
            <div class="float-left">
                <button class="btn btn-primary">
                    <a style="color: #FFF; text-decoration: none;" href="{{ route('slider.create') }}">
                        Create
                    </a>
                </button>
            </div>
        </div>

        <table id="listProduct" class="table table-striped no-footer" style="color: rgb(76, 74, 74) !important;">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                {{--<th scope="col">Tittle</th>--}}
                <th scope="col" class="text-center">Des Main</th>
                <th scope="col" class="text-center">Desciption Extra</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders as $slider)
            <tr>
                <th scope="row">
                    {{$slider->id}}
                </th>
                <td>
                    <a href="{{ URL::route('slider.edit', ['id' => $slider->id]) }}" data-method="PUT">
                        <img src="{{ asset('images').'/'.$slider['img'] }}" width="120" height="">
                    </a>
                </td>
                {{--<td>--}}
                    {{--<a href="{{ URL::route('slider.edit', ['id' => $slider->id]) }}" data-method="PUT">{{$slider->img}}</a>--}}
                {{--</td>--}}
                <td class="text-center">{{$slider->des_main}}</td>
                <td class="text-center">{{$slider->des_extra}}</td>
                <td class="text-center">
                    <a href="{{URL::route('slider.edit',$slider->id)}}" data-method="PUT">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a href="{{route('slider.delete',$slider->id)}}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection