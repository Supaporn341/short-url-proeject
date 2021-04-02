@extends('layout.app')
@section('content')
    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card mt-3">
             <div class="card-body">
                 <h5 class="card-title">
                     <div class="d-flex justify-content-between">
                         <div>Your Quota Remaining 8/10</div>
                         <div>
                             <a href="/new" class="btn btn-primary">Create</a>
                         </div>
                     </div>
                 </h5>
                 <table class="table table-striped">
                     <thead>
                     <tr>
                         <th>วันเดือนปี</th>
                         <th>Long URL</th>
                         <th>Short URL</th>
                     </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td>1</td>
                            <td>xxxxxxxxxxxx</td>
                            <td>xxx</td>
                     </tbody>
                 </table>
             </div>
        </div>
    </div>
@endsection
