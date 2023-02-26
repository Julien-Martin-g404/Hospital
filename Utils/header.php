<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/Hospital/Utils/mep.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-warning-subtle">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Patient
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../Vues/ajoutpatient.php">Ajouter un patient</a></li>
                                <li><a class="dropdown-item" href="../Vues/listepatients.php">Liste des patients</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Rendez-vous
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ajoutrdv.php">Ajouter un rendez-vous</a></li>
                                <li><a class="dropdown-item" href="listerdv.php">Liste des rendez-vous</a></li>
                            </ul>
                        </li>

                    </ul>

                    <h1 class='h1'><a class="nav-link active">Hospital</a></h1>

                </div>
            </div>
        </nav>
    </header>