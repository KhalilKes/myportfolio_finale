<?php 
    include('../../login/session.php');

    if(!isset($_SESSION['login_user'])){
        header("location:../../login/adminlogin.php");
    }

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/knight.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Administrateur</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="gray" data-image="assets/img/bg-cat.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Panel d'administrateur
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="pe-7s-user"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="pe-7s-graph"></i>
                            <p>Tableau de bord </p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#">
                                    <i class="fa fa-refresh"></i> 3
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-comments-o"></i> 0
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-plus"></i> Nouveau poste
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    SEO
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Khalil Kessa
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../../login/logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Profile</h4>
                                    <div class="content">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Le site </label>
                                                        <input type="text" class="form-control" disabled
                                                            placeholder="Company" value="Khalil's portfolio">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Utilisateur</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Utilisateur" value="Admin">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email </label>
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Prénom</label>
                                                        <input type="text" class="form-control" placeholder="Company"
                                                            value="Admin">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nom</label>
                                                        <input type="text" class="form-control" placeholder="Last Name"
                                                            value="Admin">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Adresse</label>
                                                        <input type="text" class="form-control" placeholder="L'adresse"
                                                            value=" rue xx, Khouribga">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Ville</label>
                                                        <input type="text" class="form-control" placeholder="City"
                                                            value="Youssoufia">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pays</label>
                                                        <input type="text" class="form-control" placeholder="Country"
                                                            value="Maroc">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Code Postal </label>
                                                        <input type="number" class="form-control" placeholder="25020">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>A propos de moi</label>
                                                        <textarea rows="5" class="form-control"
                                                            placeholder="Here can be your description"
                                                            value="khalil">"Béni soit l'homme qui, n'ayant rien à dire, s'abstient d'en administrer la preuve en paroles"</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit"
                                                class="btn btn-info btn-fill pull-right">Modifier</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="assets/img/toto.jpg" alt="..." />
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="assets/img/avatar.jpg" alt="..." />

                                            <h4 class="title">Khalil Kessa<br />
                                                <small>akakhalilyo@gmail.com</small>
                                            </h4>
                                        </a>
                                    </div>
                                    <p class="description text-center"> "Bienvenu, sur le panel d'adminstration <br>
                                        L'admin Khalil".
                                    </p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button href="#" class="btn btn-simple"><i
                                            class="fa fa-facebook-square"></i></button>
                                    <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                    <button href="#" class="btn btn-simple"><i
                                            class="fa fa-google-plus-square"></i></button>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Acceuil
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="#">l'administrateur</a>, créer pour administrer et gérer!
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>