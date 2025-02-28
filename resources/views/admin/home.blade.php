@extends('admin.layout.app')
@section('content')
    <div class="d-flex flex-column vh-100 justify-content-center align-items-center">
        <h1 class="text-capitalize">Hello {{ Auth::user()->name }}</h1>
    </div>
@endsection
