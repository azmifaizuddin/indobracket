@extends('adminlte.master')

@section('content')

<div class="pt-3 pl-3">
    <form method="POST" action="/questions">
        @csrf
        <div class="form-group" >
            <label for="formGroupExampleInput">Masukkan Pertanyaan</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name='question'>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

@endsection
