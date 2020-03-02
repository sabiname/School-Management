@extends ('admin.layouts.master')
@section('content')

    <div class="content-wrapper">

        <div class="page-content fade-in-up">
            <div class="ibox ibox-success">
                <div class="ibox-head">
                    <div class="ibox-title">Data Table</div>
                </div>
                <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Edit</th>
                            <th>Delete</th>
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
                                <td><a href="{{route('notice.edit', $form->id)}}">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a></td>
                                <td>
                                    @include('layouts.delete-item')

                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$form->id}})"
                                       data-target="#DeleteModal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('notice.create')}}">
                        <button type="button" class="btn btn-primary" style="background-color:limegreen; border:none;">
                            {{ __('Add Notice') }}</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function deleteData(id) {
            var id = id;
            var url = '{{ route("notice.destroy",":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }


    </script>
@endsection
