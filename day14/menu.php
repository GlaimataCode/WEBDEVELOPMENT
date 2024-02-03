 <?php 
    $url = basename($_SERVER['REQUEST_URI']);
 ?>
 <h1>SISTEMA INFORMASAUN ESKOLA</h1>
        <p>Sistema Jere Dadus Estudante hotu iha Eskola ETI-DILI</p>
    </div>
    <div class="container">
        <ul class="nav nav-pills m-2">
            <li class="nav-item">
                <a class="nav-link <?= $url == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $url == 'materia.php' ? 'active' : '' ?>" href="materia.php">Materia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $url == 'utilizador.php' ? 'active' : '' ?>" href="utilizador.php">Utilizador</a>
            </li>
            <li class="nav-item dropdown ms-auto d-flex">
                <a class="nav-link dropdown-toggle <?= $url == 'profile.php.php' ? 'active' : '' ?>" data-bs-toggle="dropdown" href="#">Profile</a>
                <ul class="dropdown-menu">
                    <li> <a class="dropdown-item<?= $url == 'profile.php.php' ? 'active' : '' ?>" href="profile.php">My Profile</a></li>
                    <li> <a class="dropdown-item" href="profile.php">Setting</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
