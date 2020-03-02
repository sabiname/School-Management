@extends ('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Testimonials Table</div>
                </div>
                <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                           width="100%">
                        <thead class="thead-dark">
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Testimonial</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($testimonial as $form)
                            <tr>
                                <td><a href="{{asset('storage/'. $form->profile)}}" target="_blank">
                                        <img src="{{asset('storage/'. $form->profile)}}" class="img-thumbnail" style="height: auto; max-width:50px">
                                    </a>
                                </td>
                                <td>{{$form->name}}</td>
                                <td>{!! $form->testimonial !!}</td>
                                <td>{{$form->role}}</td>
                                <td><a href="{{ route('testimonials.edit', $form->id) }}">
                                        <button type="button" class="btn btn-primary">
                                            {{ __('Edit') }}</button>
                                    </a>
                                </td>
                                <td>

                                    @include('layouts.delete-item')

                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$form->id}})"
                                       data-target="#DeleteModal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('testimonials.create')}}">
                        <button type="button" class="btn btn-primary" style="background-color:limegreen; border:none;">
                            {{ __('Add Testimonials') }}</button>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function deleteData(id) {
            var id = id;
            var url = '{{ route("testimonials.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>
@endsection
