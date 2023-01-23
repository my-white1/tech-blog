@extends('admin.layouts.base')

@section('base_content')

<div class="container-fuid mt-5">
    
<form action="{{ route('admin.category.update' , $category->id) }}" method="post">
    @csrf
    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
    <button type="submit" class="btn btn-danger mt-2">{{ __('Edit') }}</button
</form>
</div>

@endsection