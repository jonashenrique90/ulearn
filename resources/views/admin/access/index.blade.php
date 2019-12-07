@extends('layouts.backend.index')
@section('content')
<div class="page-header">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Acessos</li>
  </ol>
  {{-- <h1 class="page-title">Acessos</h1> --}}
</div>

<div class="page-content">

<div class="panel">
        <div class="title text-center container">
          <h2>Lista de Acessos</h2>
        </div>
        <div class="panel-heading mb-5 mt-5">
          <div class="panel-title ">

          </div>
          <div class="panel-actions">
          <form method="GET" action="{{ route('admin.accesses') }}">
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ Request::input('search') }}">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-original-title="Search"><i class="icon wb-search" aria-hidden="true"></i></button>
                  <a href="{{ route('admin.accesses') }}" class="btn btn-danger" data-toggle="tooltip" data-original-title="Clear Search"><i class="icon wb-close" aria-hidden="true"></i></a>
                </span>
              </div>
          </form>
          </div>
        </div>

        <div class="panel-body">
          <table class="table table-hover table-striped w-full">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>email</th>
                <th>IP</th>
                <th>Data</th>
                <th>Hora</th>
              </tr>
            </thead>
            <tbody>
              @foreach($accesses as $access)
              <tr>
                <td>{{ $access->first_name }}"</td>
                <td>{{ $access->last_name }}</td>
                <td>{{ $access->email }}</td>
                <td>{{ $access->ip }}</td>
                <td>{{ date('d/m/Y', strtotime($access->datetime)) }}</td>
                <td>{{ date('H:m', strtotime($access->datetime)) }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="float-right">
            {{ $accesses->appends(['search' => Request::input('search')])->links() }}
          </div>


        </div>
      </div>
      <!-- End Panel Basic -->
</div>

@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function()
    {

    });
</script>
@endsection
