@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="mt-4">Update Book</h2>
        <form action="{{route('books.update',['book' => $book])}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" value="{{$book->title}}" id="exampleInputEmail1">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input type="text" name="author" class="form-control" value="{{$book->author}}" id="exampleInputEmail1">
                @error('author')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" min=0 name="price"class="form-control" value="{{$book->price}}" id="exampleInputEmail1">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{$book->isbn}}" id="exampleInputEmail1">
                @error('isbn')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection