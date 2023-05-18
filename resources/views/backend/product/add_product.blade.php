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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Agregar producto</a></li>

                        </ol>
                    </div>
                    <h4 class="page-title">Agregar producto</h4>
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
                            <form id="myForm" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                @csrf

                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Agregar</h5>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Nombre</label>
                                            <input type="text" name="product_name" class="form-control">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Categoria</label>
                                            <select name="category_id" class="form-select" id="example-select">
                                                <option selected disabled>Seleccione la categoria</option>
                                                @foreach($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Proveedor </label>
                                            <select name="supplier_id" class="form-select" id="example-select">
                                                <option selected disabled>Seleccione al proveedor</option>
                                                @foreach($supplier as $sup)
                                                <option value="{{ $sup->id }}">{{ $sup->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        
                                    <!--    
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Product Code </label>
                                            <input type="text" name="product_code" class="form-control ">

                                        </div>
                                    </div>
                                     -->

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">Almacenamiento del producto</label>
                                                <input type="text" name="product_garage" class="form-control ">

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">Tienda</label>
                                                <input type="text" name="product_store" class="form-control ">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">Fecha compra</label>
                                                <input type="date" name="buying_date" class="form-control ">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">Fecha vencimiento</label>
                                                <input type="date" name="expire_date" class="form-control ">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">Precio Compra</label>
                                                <input type="text" name="buying_price" class="form-control ">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">Precio venta</label>
                                                <input type="text" name="selling_price" class="form-control ">

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="example-fileinput" class="form-label">Imagen del producto</label>
                                                <input type="file" name="product_image" id="image" class="form-control">

                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="example-fileinput" class="form-label"> </label>
                                                <img id="showImage" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                            </div>
                                        </div> <!-- end col -->

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

<script type="text/javascript">
    $(document).ready(function() {
        $('#myForm').validate({
            rules: {
                product_name: {
                    required: true,
                },
                category_id: {
                    required: true,
                },
                supplier_id: {
                    required: true,
                },
                product_garage: {
                    required: true,
                },
                product_store: {
                    required: true,
                },
                buying_date: {
                    required: true,
                },
                expire_date: {
                    required: true,
                },
                buying_price: {
                    required: true,
                },
                selling_price: {
                    required: true,
                },
                product_image: {
                    required: true,
                },
            },
            messages :{
                product_name: {
                    required : 'Por favor ingrese el nombre del producto',
                }, 
                category_id: {
                    required : 'Por favor seleccione una categoria',
                },
                supplier_id: {
                    required : 'Seleccione al proveedor',
                },
                product_garage: {
                    required : 'Ingrese el almacenamiento',
                },
                product_store: {
                    required : 'Ingrese la tienda del producto',
                },
                buying_date: {
                    required : 'Ingrese la fecha de compra',
                },
                expire_date: {
                    required : 'Ingrese la fecha de vencimiento',
                },
                buying_price: {
                    required : 'Ingrese el precio de compra',
                },
                selling_price: {
                    required : 'Ingrese el procio de venta',
                },
                product_image: {
                    required : 'Seleccione la imagen del producto',
                }, 
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection