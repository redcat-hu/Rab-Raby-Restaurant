<?php
    function Printmenu()
    {
        echo '
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="home">Főoldal</a></li>
            <li class="nav-item"><a class="nav-link" href="menu">Menü</a></li>
            <li class="nav-item"><a class="nav-link" href="groups">Csoportok</a></li>
            <li class="nav-item"><a class="nav-link" href="about">Rólunk</a></li>
            <li class="nav-item"><a class="nav-link" href="contact">'. $lang .'</a></li>';
    }

?>


