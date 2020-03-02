@extends('admin.layouts.master')

@section('content')

    <div class="content-wrapper">

        {{--        Notice--}}
        <div class="page-content fade-in-up" >
            <div class="row">
                <div class="col-md-6">
                    <div class="ibox ibox-primary">
                        <div class="ibox-head">
                            <div class="ibox-title">Notice Table</div>
                            <div class="ibox-tools">
                                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                <a class="ibox-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table table-condensed" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>File</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($notices as $form)
                                    <tr>
                                        <td>{{$form->id}}</td>
                                        <td>{{$form->category}}</td>
                                        <td>{{$form->title}}</td>
                                        <td>{!!$form->description!!}</td>
                                        <td><a href="{{asset('storage/'. $form->file)}}">{{$form->file}}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                {{--        Gallery--}}

                <div class="col-md-6">
                    <div class="ibox ibox-success">
                        <div class="ibox-head">
                            <div class="ibox-title">Gallery Table</div>
                            <div class="ibox-tools">
                                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                <a class="ibox-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table table-condensed" >
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Title</th>
                                    <th> Description</th>
                                    <th> Image</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($gallery as $form)
                                    <tr>
                                        <td> {{$form->id}} </td>
                                        <td> {{$form->title}} </td>
                                        <td> {!! $form->description !!} </td>
                                        <td>
                                            <a href="{{asset('storage/'. $form->image)}}" target="_blank">
                                                <img src="{{asset('storage/'. $form->image)}}" class="img-thumbnail"
                                                     style="height: auto; max-width:50px">
                                            </a></td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                {{-- testimonials--}}

                <div class="col-md-6">
                    <div class="ibox ibox-danger">
                        <div class="ibox-head">
                            <div class="ibox-title">Testimonials Table</div>
                            <div class="ibox-tools">
                                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                <a class="ibox-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table table-condensed" >
                                <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Testimonial</th>
                                    <th>Role</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($testimonial as $form)
                                    <tr>
                                        <td><a href="{{asset('storage/'. $form->profile)}}" target="_blank">
                                                <img src="{{asset('storage/'. $form->profile)}}" class="img-thumbnail"
                                                     style="height: auto; max-width:50px">
                                            </a>
                                        </td>
                                        <td>{{$form->name}}</td>
                                        <td>{!! $form->testimonial !!}</td>
                                        <td>{{$form->role}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>



@endsection
