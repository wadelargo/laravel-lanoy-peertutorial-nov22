
@extends('pages.base')

@section('content')

<table class="table table-bordered table-striped table-sm">
    <thead>
      <th>id</th>
      <th>full_name</th>
      <th>specialty</th>
      <th>created_at</th>
      <th>updated_at</th>
    </thead>
    <tbody>
        @foreach ($trainors as $trainor)
            <tr>
              <td>{{$trainor->id}}</td>
              <td>{{$trainor->user->full_name}}</td>
              <td>{{$trainor->specialty}}</td>
              <td>{{$trainor->created_at}}</td>
              <td>{{$trainor->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection