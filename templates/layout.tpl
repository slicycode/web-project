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
    <a href='./'>Accueil</a>
    {if !isset($session.session_on)}
    <a href='register'>S'inscrire</a> 
    <a href='login'>Se connecter</a>
    {else}
    <span>Bienvenue {$session.informations[2]} {$session.informations[1]} </span>
    <a href='candidature'>Ma candidature</a>
    <a href='logout'>Me déconnecter</a>
    {/if}
    <a href='admin'>Administrateur</a> 
</div>
{/block}
{block name=body}Accueil{/block}
</body>
</html>
