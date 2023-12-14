@extends('layouts.app')
@section('content')

<h2>User</h2>

<a href="{{ url('user/create') }}" class="btn btn-primary mb-3 float-end">Add User</a>

<table class="table table-bordered">
      <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>EMAIL VERIFIKASI</th>
            <th>PASSWORD</th>
            <th>TOKEN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->email_verified_at }}</td>
                  <td>{{ $row->password }}</td>
                  <td>{{ $row->remember_token }}</td>
                  <td><a href="{{ url('user/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('user/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection