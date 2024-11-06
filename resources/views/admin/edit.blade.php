@extends('layouts.admin')
@section('content')
    <form action=" {{route ('update', $product->id) }}" method="POST" class='container' >
        @csrf
        @method('PUT')
        <a href="{{ route('index')  }}" class='btn btn-primary'>Back</a>
        <div class="mb-3">
            <label >name</label>
            <input type="text"name="name" class="form-control" value="{{$product->name}}">
            @error('name')
                <small class="text-danger"> {{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label >slug</label>
            <input type="text"name="slug" class="form-control" value="{{$product->slug}}">
            @error('name')
                <small class="text-danger"> {{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label >price</label>
            <input type="text"name="price" class="form-control" value="{{$product->price}}">
            @error('name')
                <small class="text-danger"> {{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label >description</label>
            <input type="text"name="description" class="form-control" value="{{$product->description}}">
            @error('name')
                <small class="text-danger"> {{$message}}</small>
            @enderror
        </div>
        <button class="btn-primiry" type="submit">
            Update now
        </button>
    </form>
@endsection