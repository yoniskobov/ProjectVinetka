@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Вид на превозното средство</td>
          <td>Регистрационен номер</td>
          <td>Период на валидност</td>
          <td>Националност на превозното средство</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($shares as $share)
        <tr>
            <td>{{$share->id}}</td>
            <td>{{$share->mps_type}}</td>
            <td>{{$share->licence_plate}}</td>
            <td>{{$share->validity}}</td>
            <td>{{$share->mps_nationality}}</td>
            <td><a href="{{ route('shares.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('shares.destroy', $share->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection