<nav>
        <div class="gauche">
            <p>Mes societes</p>
            <p>Les creations</p>
            <p>Me contacter</p>
        </div>
    <?php if(isConnected()):?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php $user= getUser($_SESSION['userid'], $db); ?>  <?=$user['email'] ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="logout.php">Se deconnecter</a>
        </div>
    </li>
    <?php else:?>
        <div class="droite">
            <a href="connexion.php" class="btn btn1">J'ai déjà un compte</a>
            <a href="inscription.php" class="btn btn2">S'enregister</a>

        </div>
    <?php endif;?>
</nav>