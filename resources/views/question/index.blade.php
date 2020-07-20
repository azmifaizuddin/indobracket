@extends('adminlte.master')

@section('content')
<div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Pertanyaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($questions as $key => $question)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$question->question}}</td>
                            <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>



@endsection
