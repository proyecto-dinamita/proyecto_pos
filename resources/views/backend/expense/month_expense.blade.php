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
                            <a href="{{ route('add.expense') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar gasto </a>
                        </ol>
                    </div>
                    <h4 class="page-title">Gasto mensual</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        @php
        $month = date("F");
        $expensemonth = App\Models\Expense::where('month',$month)->sum('amount');
        @endphp

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title"> Gasto mensual </h4>
                        <h4 style="color:white; font-size: 30px;" align="center"> Total : Q. {{ $expensemonth }}</h4>
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Detalles</th>
                                    <th>Monto</th>
                                    <th>Mes</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($monthexpense as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->details }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->month }}</td>
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