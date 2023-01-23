@extends('admin.layouts.base')

@section('base_content')
    <div class="container-fuid mt-5">

        <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="container">
                <div class="card-body">

                    <div class="form-item">
                        <input type="text" name="title" class="form-control mb-3" placeholder="title">
                    </div>
                    <div class="form-item">
                        <select name="category" class="form-select ">
                            <option selected="">{{ __('Choose category to post') }}</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-item mt-3">
                        <label>{{ __('Choose image for post') }}</label>
                        <input type="file" name="image">
                    </div>

                    <div class="form-item mt-3">
                        <textarea name="description" class="form-control" rows="2" placeholder="{{ __('description') }}"
                            style="height: 76px;"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-danger mt-2">{{ __('Add') }}</button>
            </div>

        </form>
    </div>
@endsection
