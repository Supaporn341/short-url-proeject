@extends('layout.app')
@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">
                    <div class="d-flex justify-content-between">
                        <div>Create</div>
                    </div>
                </h5>
                <form action="/" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="student_no">Past Long URL</label>
                        <input type="url" class="form-control" id="long_url" name="long_url">
                    </div>
                    <br>
                    <button class="btn btn-primary">Create Short URL</button>
                </form>
            </div>
        </div>
    </div>
@endsection
