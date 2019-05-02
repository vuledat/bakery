@extends('admin')

@section('title', 'Category')

@section('content')
    <div class="container">
        <div >
            <div class="float-left">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    {{--<a style="color: #FFF; text-decoration: none;" href="{{ route('category.create') }}">--}}
                        Create
                    {{--</a>--}}
                </button>
            </div>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table id="listProduct" class="table table-striped no-footer" style="color: rgb(76, 74, 74) !important;">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $ca)
                <tr id="cate{{$ca->id}}">
                    <th scope="row">
                        {{$ca->id}}
                    </th>
                    <td>
                        <a href="{{ URL::route('category.edit', ['id' => $ca->id]) }}" data-method="PUT">{{$ca->name}}</a>
                    </td>
                    <td class="text-center">
                        <a href="#" class="edit-cate open_modal" value="{{$ca->id}}"ß>
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="#" class="delete-cate" value="{{$ca->id}}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    {!! form($form) !!}
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id="btn-update" data-dismiss="modal">Update</button>

                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            cate_id = 0;
            //delete Category
            $( ".delete-cate" ).click(function() {
                $id_cate = $(this).attr('value');
                $.ajax({
                    type: "GET",
                    url: 'category/delete/'+$id_cate,
                    success: function (data) {
                        $('#cate'+$id_cate).remove();
                        $.notify(data, "success");
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            //edit Category
            });$( "#btn-update" ).click(function() {
                // $id_cate = $(this).attr('value');
                console.log(cate_id);
                var formData = {
                    name: $('#name').val(),
                }
                $.ajax({
                    type: "PUT",
                    url: 'category/update/'+cate_id,
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        // $('#cate'+$id_cate).remove();
                        // $.notify(data, "success");
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });
            //getData edit
            $(document).on('click','.open_modal',function(){
                cate_id = $(this).attr('value');
                $('#myModal').modal('show');
                $.ajax({
                    type: "GET",
                    url: 'category/' + cate_id,
                    success: function (data) {
                        console.log(data.name);
                        $('#name').val(data.name);

                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });
        });
    </script>
@endsection
