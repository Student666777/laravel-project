@extends('layouts.admin')
@section('content')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <a href="{{ route('index')  }}" class='btn btn-primary'>Back</a>

        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" name="price" class="form-control">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">slug</label>
            <input type="text" name="slug" class="form-control">
            @error('slug')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input type="text" name="description" class="form-control">
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </form>
@endsection
