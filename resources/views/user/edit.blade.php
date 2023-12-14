@extends('layouts.app')

@section('content')
    <h2>Edit User</h2>

    <form action="{{ url('user/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="name" id="" class="form-control" value="{{ $row->name }}">
        </div>
        <div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control" value="{{ $row->email }}">
        </div>
        <div class="mb-3">
            <label for="">EMAIL VERIFIKASI</label>
            <input type="text" name="email_verified_at" id="" class="form-control" value="{{ $row->email_verified_at }}">
        </div>
        <div class="mb-3">
            <label for="">PASSWORD</label>
            <input type="text" name="password" id="" class="form-control" value="{{ $row->password }}">
        </div>
        <div class="mb-3">
            <label for="">TOKEN</label>
            <input type="text" name="remember_token" id="" class="form-control" value="{{ $row->remember_token }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
