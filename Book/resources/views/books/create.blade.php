@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="mt-4">Create Book</h2>
        <form action="{{route('books.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}" id="exampleInputEmail1">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input type="text" name="author" class="form-control" value="{{old('author')}}" id="exampleInputEmail1">
                @error('author')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" min=0 name="price"class="form-control" value="{{old('price')}}" id="exampleInputEmail1">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{old('isbn')}}" id="exampleInputEmail1">
                @error('isbn')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection