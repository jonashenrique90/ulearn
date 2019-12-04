@extends('layouts.backend.index')
@section('content')
<div class="page-header">
  <h1 class="page-title">Dashboard</h1>
</div>
<div class="page-content container-fluid">
    <div class="row">
    <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block p-30 bg-red-600">
            <div class="card-watermark darker font-size-80 m-15"><i class="fa fa-chalkboard" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{ $metrics['students'] }}</span>
                <span class="counter-number-related text-capitalize">Alunos</span>
              </div>
              <div class="counter-label text-capitalize">Cadastrados</div>
            </div>
          </div>
          <!-- End Card -->
        </div>

        <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block p-30 bg-blue-600">
            <div class="card-watermark darker font-size-80 m-15"><i class="fas fa-bullhorn" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{ $metrics['instructors'] }}</span>
                <span class="counter-number-related text-capitalize">Instrutores</span>
              </div>
              <div class="counter-label text-capitalize">Cadastrados</div>
            </div>
          </div>
          <!-- End Card -->
        </div>

        <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block p-30 bg-green-600">
            <div class="card-watermark darker font-size-60 m-15"><i class="far fa-play-circle" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{ $metrics['courses'] }}</span>
                <span class="counter-number-related text-capitalize">Cursos</span>
              </div>
              <div class="counter-label text-capitalize">Ativos</div>
            </div>
          </div>
          <!-- End Card -->
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
                <div class="panel-title">
                <h4>Cursos Adicionados Recentemente</h4>
                </div>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Subtítulo</th>
                    <th>Categoria</th>
                    <th>Instrutor</th>
                    <th>Preço</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $course->course_title }}</td>
                    <td>{{ $course->course_slug }}</td>
                    <td>{{ $course->category_name }}</td>
                    <td>{{ $course->instructor_name }}</td>
                    <td>{{ $course->price ? $course->price : 'Free' }}</td>
                    <td>
                        @if($course->is_active)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
