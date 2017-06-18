<?php 

$q = isset($_GET['q']) ? $_GET['q'] : '';
$cookies = true;

if($q === '')
{
    $page = 'home';
    $title = 'Hiveee - Communauté de Crowd Testing UX-UI et de recrutement
';
    $description = "Hiveee est une plateforme collaborative faite pour les professionnels du numérique. Faites testez l’ergonomie de vos sites et interfaces par des professionnels.";
}
else if($q === 'home')
{
    $page = 'home';
    $title = 'Hiveee - Communauté de Crowd Testing UX-UI et de recrutement
';
    $description = "Hiveee est une plateforme collaborative faite pour les professionnels du numérique. Faites testez l’ergonomie de vos sites et interfaces par des professionnels.";
}
else if($q === 'about')
{
    $page = 'about';
    $title = 'Hiveee - A propos du service ';
    $description = "Vous saurez tout sur Hiveee, comment tout a commencé et comment a évolué sa création. Vous découvrirez l’équipe qui la compose et qui l’a construite.";
}
else if($q === 'contact')
{
    $page = 'contact';
    $title = 'Hiveee - Contactez-nous !';
    $description = "N’hésitez à nous envoyer vos retours ou à nous poser des  questions si vous avez besoin d’aide ou d’informations.";
}
else if($q === 'f-a-q')
{
    $page = 'f-a-q';
    $title = 'Hiveee - FAQ : Des réponses aux questions récurrentes ';
    $description = "Des questions sur Hiveee ? Comment créer votre profil, qu’est ce que le crowd-testing ou l’UX ? Comment créer un test ? Hiveee vous répond.";
}
else if($q === 'blog')
{
    $page = 'blog';
    $title = 'Blog Hiveee : articles sur l’UX-UI et le monde du digital';
    $description = "Le numérique est un milieu en constante évolution, c’est pourquoi nous partageons sur ce blog notre veille sur ce domaine, ses tendances et bonnes pratiques.";
}
else if($q === 'legalnotice')
{
    $page = 'legalnotice';
    $title = 'Hiveee - Mentions légales';
    $description = "Trouvez ici toutes les informations légales concernant Hiveee et sur l’utilisation des données personnelles sur notre site.";
}
else if($q === 'conditions')
{
    $page = 'conditions';
    $title = 'Hiveee - Conditions d\'utilisation';
    $description = "Trouvez ici toutes les informations légales concernant Hiveee et sur l’utilisation des données personnelles sur notre site.";
}

// Includes
include 'partials/header.php';
include 'pages/'.$page.'.php';
include 'partials/footer.php';