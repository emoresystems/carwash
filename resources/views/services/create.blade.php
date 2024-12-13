@extends('home')

@section('content')
    <div class="container-fluid">
        <hr>
        <h4>Create New Service</h4>
        <hr>

        <!-- Display success message if it exists -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-3">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group my-3">
                <label for="heading">Heading:</label>
                <input type="text" class="form-control" id="heading" name="heading">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-2">Submit</button>
        </form>
    </div>
@endsection
