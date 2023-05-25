@extends('admin_dashboard')
@section('admin')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Empleados</a></li>
                            <li class="breadcrumb-item active">Lista</li>
                        </ol>
                        <ol class="breadcrumb m-0">
                            <a href="{{ route('add.employee') }}" class="btn btn-success rounded-pill waves efect waves-light">Nuevo
                                Empleado</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Empleados</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Tel.</th>
                                    <th>Sueldo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                            <tbody>
                                @foreach($employee as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td> <img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"> </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->salary }}</td>
                                    <td>
                                        <a href="{{ route('edit.employee',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>
                                        <a href="{{ route('delete.employee',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->
@endsection