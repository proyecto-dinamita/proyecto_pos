<div class="left-side-menu">
    <div class="h-100" data-simplebar>

        <!-- User box -->
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Menú</li>

                <li>
                    <a href="{{ url('/dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Tablero </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Aplicaciones</li>

                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-badge-account-outline"></i>
                        <span>Empleados</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.employee') }}">Lista</a>
                            </li>
                            <li>
                                <a href="{{ route('add.employee') }}">Agregar nuevo</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Clientes </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.customer') }}">Clientes</a>
                            </li>
                            <li>
                                <a href="{{ route('add.customer') }}">Agregar clientes</a>
                            </li>


                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Correo </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="email-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="email-read.html">Read Email</a>
                            </li>
                            <li>
                                <a href="email-compose.html">Compose Email</a>
                            </li>
                            <li>
                                <a href="email-templates.html">Email Templates</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSupplier" data-bs-toggle="collapse">
                        <i class="mdi mdi-truck-fast"></i>
                        <span> Proveedores </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSupplier">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.supplier') }}">Mostrar Proveedores</a>
                            </li>
                            <li>
                                <a href="{{ route('add.supplier') }}">Agregar Proveedores</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSalary" data-bs-toggle="collapse">
                        <i class="mdi mdi-cash-multiple"></i>
                        <span> Salarios </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSalary">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.advance.salary') }}">Agregar adelanto de salario</a>
                            </li>
                            <li>
                                <a href="{{ route('all.advance.salary') }}">Todos los adelantos de salario</a>
                            </li>
                            <li>
                                <a href="{{ route('pay.salary') }}">Pagar salarios</a>
                            </li>

                            <li>
                                <a href="{{ route('month.salary') }}">Ultimo mes pagado</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#attendence" data-bs-toggle="collapse">
                        <i class="mdi mdi-check-underline-circle-outline"></i>
                        <span> Asistencias de Empleados </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="attendence">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('employee.attend.list') }}">Asistencia de Empleados</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#category" data-bs-toggle="collapse">
                        <i class="mdi mdi-shape-plus"></i>
                        <span> Categorias </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="category">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.category') }}">Mostrar Categorias</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#product" data-bs-toggle="collapse">
                        <i class="mdi mdi-basket-outline"></i>
                        <span> Productos </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="product">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.product') }}">Mostrar Productos</a>
                            </li>

                            <li>
                                <a href="{{ route('add.product') }}">Agregar Productos</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Personalizado</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span> Gastos </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.expense') }}">Agregar Gasto</a>
                            </li>
                            <li>
                                <a href="{{ route('today.expense') }}">Gastos del dia</a>
                            </li>
                            <li>
                                <a href="{{ route('month.expense') }}">Gastos mensuales</a>
                            </li>
                            <li>
                                <a href="{{ route('year.expense') }}">Gastos anuales</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->
    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>