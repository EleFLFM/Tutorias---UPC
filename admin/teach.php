<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Docentes / Tutorias UPC-SA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="img/logo UPC.png" alt="" width="30px">
                        UPC-SA
                    </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0" style="color: black;">
                            Luis Mejia
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="home-admin.html" class="nav-link " >
                        <i class="bi bi-house-door-fill me-2">
                        </i>
                        Inicio
                    </a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-person-plus-fill me-2">
                            </i>
                            Agregar
                        </a> 
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_student.html" class="dropdown-item">Estudiante</a>
                            <a href="add_teach.html" class="dropdown-item">Docente</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-table me-2">
                            </i>
                            Tablas
                        </a> 
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="students.html" class="dropdown-item">Estudiante</a>
                            <a href="teach.html" class="dropdown-item">Docente</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="#" class="sidebar-toggler flex-shrink-0" style="background-color: rgb(255, 255, 255);">
                    <img src="img/logo UPC.png" alt="" width="30px">
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4"> 
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h3 class="mb-0" style="color: #4fa570;"><em><u>Docentes</u></em></h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-hover mb-0">
                            <thead>
                                <tr  style="color: #4fa570;">
                                    <th scope="col"><u>Documento</u></th>
                                    <th scope="col"><u>Nombre</u></th>
                                    <th scope="col"><u>Usuario</u></th>
                                    <th scope="col"><u>Contraseña</u></th>
                                    <th scope="col"><u>Cargo</u></th>
                                    <th scope="col"><u>Estado</u></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td>  
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td>  
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td>  
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                                <tr>
                                    <td>1147885179</td>
                                    <td>Pedro Perez</td>
                                    <td>pedroper</td>
                                    <td>Pedro@123</td>
                                    <td>Estudiante</td>
                                    <td>Activo</td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
            <!-- Recent Sales End -->

        </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>