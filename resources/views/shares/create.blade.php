@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('shares.store') }}">
      <div class="form-group">
              @csrf
              <label for="type">Вид на превозното средство:</label>
              <input type="text" class="form-control" name="mps_type"/>
          <div class="form-group">
              <label for="plate">Регистрационен номер:</label>
              <input type="text" class="form-control" name="licence_plate"/>
          </div>
          <div class="form-group">
              <label for="val">Период на валидност:</label>
              <input type="text" class="form-control" name="validity"/>
          </div>
          <div class="form-group">
              <label for="natinality">Националност на превозното средство:</label>
              <input type="text" class="form-control" name="mps_nationality"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection