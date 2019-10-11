@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  You are loged in

                  <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($all_users as $myuser)
                            <tr>
                              <td>{{ $myuser->name  }}</td>
                              <td>{{ $myuser->email  }}</td>
                              <td>{{ $myuser->created_at  }}</td>
                              <td>{{ $myuser->updated_at  }}</td>
                            </tr>
                          @endforeach

                        </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
