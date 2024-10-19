@extends('layout.master')
@section('content')
<div id="content">
    <div class="container">
        <h3 class="mt-3 mb-3 text-center">Add Category</h3>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 mt-3 mb-3">
                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    <div>
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" name="name" id="" class="form-control shadow">
                        @error('name')
                        <span class="text-danger">*{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Parent Category</label>
                        <select name="parent_id" id="" class="form-control shadow">
                            <option value="">No Parent</option>
                            @foreach ($parents as $parent)
                                <option value="{{$parent->id}}">{{$parent->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-primary w-100 rounded-pill shadow">Add</button>
                        <a href="{{route('categories.index')}}" class="btn btn-secondary rounded-pill w-100 mt-3 shadow">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection