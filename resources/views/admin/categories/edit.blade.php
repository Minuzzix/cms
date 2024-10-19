@extends('layout.master')
@section('content')
<div id="content">
    <div class="container">
        <h3 class="mt-3 mb-3 text-center">Edit Category</h3>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 mt-3 mb-3">
                <form action="{{route('categories.update', $category->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div>
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" name="name" id="" class="form-control shadow" value="{{$category->name}}">
                        @error('name')
                            <span class="text-danger">*{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Parent Category</label>
                        <select name="parent_id" id="" class="form-control shadow">
                            @if ($category->parent_id == null)
                                <option value="" selected>No Parent</option>
                                @foreach ($parents as $parent)
                                    <option value="{{$parent->id}}">{{$parent->name}}</option>
                                @endforeach
                            @else
                                <option value="">No Parent</option>
                                @foreach ($parents as $parent)
                                    @if ($parent->id == $category->parent->id)
                                        <option value="{{$parent->id}}" selected>{{$parent->name}}</option>
                                    @else
                                        <option value="{{$parent->id}}">{{$parent->name}}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary rounded-pill w-100 shadow">Update</button>
                        <a href="{{route('categories.index')}}" class="btn btn-secondary rounded-pill w-100 mt-3 shadow">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection