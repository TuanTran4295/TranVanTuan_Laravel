<!--Load file Layout.blade.php vào đây-->
@extends("backend.Layout")
@section("do-du-lieu-vao-layout")
<h1>Tasks</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="{{ url('admin/tasks/create') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
        <tr>
            <th>STT</th>
            <th>Photo</th>
            <th>Task</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        @foreach ($tasks as $index => $rows)
        <tr>
            <td>{{ $index+1 }}</td>
            <td></td>
            <td>{{ $rows->title }}</td>
            <td>{{ $rows->description }}</td>
            <td class='text-center'>
            <!-- dòng lệnh tắt: đặt tên cho đường dẫn là update <a class='btn btn-info btn-xs' href="{{route('update',['id'=>$rows->id])}} "><span class="glyphicon glyphicon-edit"></span> Edit</a> -->
                <a class='btn btn-info btn-xs' href="{{ url('admin/tasks/update/'.$rows->id) }} "><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                <a href="{{ url('admin/tasks/delete/' .$rows->id) }}" onclick="return window.confirm('Are you sure?');" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection