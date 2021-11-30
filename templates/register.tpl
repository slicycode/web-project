{extends file='layout.tpl'}
{block name=title}Inscription{/block}
{block name=body}
<div class="app">
<h1>Inscrivez-vous</h1>
<form class="form" action="register" method="post">
    <div class="form__input">
        <label for="stacked-name">Nom d'utilisateur</label>
        <input autofocus="autofocus" name="user" value="{$valeurs.user|escape|default:''}" type="text" id="stacked-name" placeholder="Nom" />
        <span class="erreur"> {$messages.user|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-password">Mot de passe</label>
        <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
        <span class="erreur"> {$messages.password|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-email">Adresse mail</label>
        <input name="email" value="{$valeurs.email|escape|default:''}" type="email" id="stacked-email" placeholder="Email" />
        <span class="erreur"> {$messages.email|escape|default:''}</span>
    </div>
    <div class="form__input">
        <label for="stacked-foo">Ville</label>
        <input name="city" value="{$valeurs.city|escape|default:''}"  type="text" id="stacked-foo" placeholder="Ville" />
        <span class="erreur"> {$messages.city|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-foo">Pays</label>
        <input name="country" value="{$valeurs.country|escape|default:''}" type="text" id="stacked-foo" placeholder="Pays" />
        <span class="erreur"> {$messages.country|escape|default:''}</span>
    </div>

    <div class="pure-controls">
        <button type="submit" class="pure-button pure-button-primary">S'inscrire</button>
    </div>
</form>
</div>
{/block}