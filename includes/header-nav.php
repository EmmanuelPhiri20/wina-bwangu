<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">WINABWANGU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>"" aria-current="page" href="#">Dashboard</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Locations") {?>active<?php }?>"" href="php-templates/locations.php">Locations</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Services") {?>active<?php }?>"" href="#">Services</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Income") {?>active<?php }?>"" href="#">Income</a>
        </div>
        </div>
    </div>
</nav>