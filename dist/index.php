<?php 

$q = isset($_GET['q']) ? $_GET['q'] : '';
$cookies = true;

if($q === '')
{
    $page = 'home';
    $title = 'home';
    $description = "Hiveee est une plateforme collaborative faite pour vous. Testez l’ergonomie de votre site par des professionnels. L’UI/UI n’aura plus de secret pour vous.";
}
else if($q === 'home')
{
    $page = 'home';
    $title = 'home';
    $description = "Hiveee est une plateforme collaborative faite pour vous. Testez l’ergonomie de votre site par des professionnels. L’UI/UI n’aura plus de secret pour vous.";
}
else if($q === 'about')
{
    $page = 'about';
    $title = 'about';
    $description = "Découvrez l’histoire d’Hiveee, une plateforme collaborative faite pour vous !";
}
else if($q === 'contact')
{
    $page = 'contact';
    $title = 'contact';
    $description = "Contactez-nous sur notre page de contact. Hiveee vous répondra";
}
else if($q === 'f-a-q')
{
    $page = 'f-a-q';
    $title = 'f-a-q';
    $description = "Des questions ? Comment créer votre profil, qu’est ce que le crowd-testing... Hiveee vous répond";
}
else if($q === 'blog')
{
    $page = 'blog';
    $title = 'f-a-q';
    $description = "Des conseils en UX/UI, des avis de professionnels. Notre blog est fait pour vous ! Améliorer votre site et devenez un pro de l’ergonomie";
}
else if($q === 'legalnotice')
{
    $page = 'legalnotice';
    $title = 'legalnotice';
    $description = "Mentions légales de notre plateforme collaborative Hiveee";
}
else if($q === 'conditions')
{
    $page = 'conditions';
    $title = 'conditions';
    $description = "Conditions d'utilisation de notre plateforme collaborative Hiveee";
}

// Includes
include 'partials/header.php';
include 'pages/'.$page.'.php';
include 'partials/footer.php';