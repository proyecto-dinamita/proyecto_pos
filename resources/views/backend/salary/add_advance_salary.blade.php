@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Agregar adelanto de salario</a></li>

                        </ol>
                    </div>
                    <h4 class="page-title">Agregar adelanto de salario</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <form method="post" action="{{ route('advance.salary.store') }}">
                                @csrf

                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Salario</h5>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Nombre</label>
                                            <select name="employee_id" class="form-select @error('employee_id') is-invalid @enderror" id="example-select">
                                                <option selected disabled>Seleccione al empleado</option>
                                                @foreach($employee as $item)
                                                <option value="{{  $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Mes del salario</label>
                                            <select name="month" class="form-select @error('month') is-invalid @enderror" id="example-select">
                                                <option selected disabled>Selecciona el mes</option>
                                                <option value="Enero">Enero</option>
                                                <option value="Febrero">Febrero</option>
                                                <option value="Marzo">Marzo</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Mayo">Mayo</option>
                                                <option value="Junio">Junio</option>
                                                <option value="Julio">Julio</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Septiembre">Septiembre</option>
                                                <option value="Octubre">Octubre</option>
                                                <option value="Noviembre">Noviembre</option>
                                                <option value="Diciembre">Diciembre</option>
                                            </select>
                                            @error('month')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Año del salario</label>
                                            <select name="year" class="form-select @error('year') is-invalid @enderror" id="example-select">
                                                <option selected disabled>Selecciona el año del salario</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                            </select>
                                            @error('year')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Adelanto de salario</label>
                                            <input type="text" name="advance_salary" class="form-control @error('advance_salary') is-invalid @enderror">
                                            @error('advance_salary')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Guardar</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->
@endsection