
<html>
<head>
    <!--Unicode transformation format -->
    <meta charset="utf-8" /> <!-- Spécifiez l'encodage des caractères -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../src/css/headerView.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../src/js/mainView.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
</head>

<body id="body-pd">

<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="position-absolute top-50 start-50 translate-middle">
        <h2>Gestion de visite</h2>
    </div>

    <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" style="color: #ffffff; background-color: #031d57; border-color: white" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            Mon profil
        </button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
            <li>
                <a class="bx bx-user nav_icon dropdown-item" href="../../MVC/controller/user_controller.php?AboutMe=true"> About Me</a>
            </li>
            <li>
                <a class="bx bx-key nav_icon dropdown-item" href="../../MVC/controller/user_controller.php?updatePWD=true"> Update Password</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a class="bx bx-log-out nav_icon dropdown-item" href="../../MVC/controller/user_controller.php?Logout=true"> Logout</a>
            </li>
        </ul>
    </div>
</header>

<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="../../MVC/controller/user_controller.php" class="nav_logo">
                <i class='bx bx-layer nav_logo-icon'></i>
                <span class="nav_logo-name">Gestion de visite</span>
            </a>
            <div class="nav_list">

                <a href="../controller/medecin_controller.php" class="nav_link">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Medecins</span>
                </a>

                <a href="../controller/rapport_controller.php" class="nav_link">
                    <i class='bx bx-file nav_icon'></i>
                    <span class="nav_name">Rapport</span>
                </a>

                <a href="../controller/medicament_controller.php" class="nav_link">
                    <i class='bx bx-box nav_icon'></i>
                    <span class="nav_name">Medicaments</span>
                </a>

            </div>
        </div>

    </nav>
</div>

</html>


