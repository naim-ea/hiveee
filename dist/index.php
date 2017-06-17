<?php 

// Routing
$q = isset($_GET['q']) ? $_GET['q'] : '';

if($q === '')
{
    $page = 'home';
}
else if($q === 'home')
{
    $page = 'home';
}
else if($q === 'about')
{
    $page = 'about';
}
else if($q === 'contact')
{
    $page = 'contact';
}
else if($q === 'f-a-q')
{
    $page = 'f-a-q';
}
else if($q === 'legalnotice')
{
    $page = 'legalnotice';
}

// Includes
include 'partials/header.php';
include 'pages/'.$page.'.php';
include 'partials/footer.php';