
@extends('pages.base')

@section('content')

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>id</th>
        <th>full_name</th>
        <th>username</th>
        <th>email</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection