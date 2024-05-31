@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('main-title', 'Home')

@section('content')
<table class="table table-striped table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($data as $d)
        <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$d->name}}</td>
            <td>{{$d->email}}</td>
            <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @empty
            <h1>data table kosong</h1>
        @endforelse
    </tbody>
  </table>
@endsection


