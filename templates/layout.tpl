<html>
<head>
    <title>{block name=title}Default Page Title{/block}</title>
    {block name=head}
    <link rel="stylesheet" href="templates/style.css">
    {/block}
</head>
<body>

{block name=nav}
<div class="nav">
    <div class="nav-menu">
        {if !isset($session.session_on)}
        <a href='./'>Accueil</a>
        <a href='register'>S'inscrire</a> 
        <a href='login'>Se connecter</a>
        {else}
        <a href='./'>Bienvenue {$session.informations[2]} {$session.informations[1]} </a>
        <a href='candidature'>Ma candidature</a>
        <a href='logout'>Me déconnecter</a>
        {/if}
        <a href='admin'>Administrateur</a> 
    </div>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</div>

<script>
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle("active");
        nav.classList.toggle("active");
    }
</script>

{/block}
{block name=body}Accueil{/block}
</body>
</html>
