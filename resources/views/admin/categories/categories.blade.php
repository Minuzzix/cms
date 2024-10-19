@extends('layout.master')
@section('content')
<div id="content">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <a href="{{route('categories.create')}}" class="btn btn-outline-primary rounded-pill w-100 shadow-lg">Add New Category</a>
            </div>
            <div class="col-md-3 mt-1">
                <a href="{{route('categories.restore')}}" class="btn btn-outline-primary btn-sm rounded-pill w-85 shadow-lg"><i class="fa-solid fa-trash-arrow-up"></i> Restore All</a>
            </div>
        </div>
        <div class="row mt-3">
            @if ($message = Session::get('success'))
                <span class="alert alert-success d-block">{{$message}}</span>
            @endif
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                <table class="table table-hover table-bordered shadow">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Parent Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$category->name}}</td>
                                @if($category->parent == null)
                                    <td>-</td>
                                @else
                                    <td>{{$category->parent->name}}</td>
                                @endif
                                <td data-url="{{route('categories.destroy', $category->id)}}">
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-outline-success rounded-circle"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <!-- <form action="{{route('categories.destroy',$category->id)}}" class="d-inline p-2" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-outline-danger rounded-circle btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                                    </form> -->
                                    <button class="btn btn-outline-danger rounded-circle btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <span class="text-danger">*Not available Category data. Empty List.</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{$categories->links()}}
    </div>
</div>
@endsection