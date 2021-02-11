@extends('layouts.app')

@section('content')
<form action="{{route('store_blog_path')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="form-group">
<label for="title">Naziv</label>
<input type="text" name="title" class="form-control">
</div>

<div class="form-group">
<label for="content">Sadržaj</label>
<textarea name="content" rows="10" class="form-control"></textarea>
</div>

<br>

<div class="form-group">
<input type="file" name="images" class="form-control">
</div>

<br>

<div class="form-group">
<button type="submit" class="btn btn-outline-primary">Dodaj MojDnevnik objavu</button>
</div>
</form> 

@endsection