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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Agregar categoria</button>
                        </ol>
                    </div>
                    <h4 class="page-title">Todas las categorias</h4>
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
                                    <th>Categoria </th>
                                    <th>Accion</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($category as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>
                                        <a href="{{ route('edit.category',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                                            </svg> Editar</a>
                                        <a href="{{ route('delete.category',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7Zm2-4h2V8H9v9Zm4 0h2V8h-2v9Z" />
                                            </svg>Eliminar</a>
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

<!-- Signup modal content -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">

                <form class="px-3" method="post" action="{{ route('category.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de la categoria</label>
                        <input class="form-control" type="text" name="category_name" placeholder="Agregar categoria">
                    </div>


                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Guardar cambios</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection