<?php
function HeaderPage(string $imagePath, string $title)
{

    echo "<header class='header wrapper'>
   <h1 class='header-title'>$title</h1>

   <nav>
   <img src='./images/logo.png' class='logo' />
    <ul class='menu'>
    <a href='index.php'>
    <li class='menu-item'>Accueil</li>
    </a>
    <a href='sneakers.php'>
    <li class='menu-item'>Sneakers</li>
    </a>
    <a href='ensemble.php'>
    <li class='menu-item'>Ensembles</li>
    </a>
    <a href='tshirts.php'>
    <li class='menu-item'>T-shirts</li>
    </a>
    <a href='contact.php'>
    <li class='menu-item'>Contact</li>
    </a>


    </ul>
   </nav>
   <img src=$imagePath alt='header' class='header-image' />
</header>";
}