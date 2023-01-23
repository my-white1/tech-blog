@extends('admin.layouts.base')

@section('base_content')

<div class="container-fuid mt-5">
    
<form action="{{ route('admin.category.store') }}" method="post">
    @csrf
    <input type="text" name="name" class="form-control">
    <button type="submit" class="btn btn-danger mt-2">Add</button
</form>
</div>

@endsection