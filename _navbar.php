<div class="row navbar-row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 navbar-container">
        <a href="index.php" class="navbar-brand" id="go-to-top">Melius</a>

        <nav class="navbar navbar-full">
            <div class="collapse navbar-toggleable-md" id="tmNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link<?php if ($teou == 'Accueil') {echo(' active');} ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($teou == 'Programme') {echo(' active');} ?>" href="programme.php">Programme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($teou == 'Melius plus') {echo(' active');} ?>" href="plus.php">Melius plus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($teou == 'Contact') {echo(' active');} ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
            &#9776;
        </button>

    </div>
</div>
