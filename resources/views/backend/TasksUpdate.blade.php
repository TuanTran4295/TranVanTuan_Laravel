<!--Load file Layout.blade.php vào đây-->
@extends("backend.Layout")
@section("do-du-lieu-vao-layout")
<h1>Edit task</h1>
<form method='post' action='#' enctype= "multipart/form-data">
@csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter a title" name="title" value ="{{ isset($tasks->title)?$tasks->title:''}}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name="description" value ="{{ isset($tasks->description)?$tasks->description:''}}">
    </div>
    <div class="form-group" style="margin-top:5px;">
        <label for="description">Photo</label>
        <input type="file" class="form-control" id="photo"  name="photo">
	</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection