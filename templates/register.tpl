{extends file='layout.tpl'}
{block name=title}Inscription{/block}
{block name=body}
<div class="app">
<h1>Inscrivez-vous</h1>
<form class="form" action="register" method="post">
    <div class="form__input">
        <label for="stacked-name">Nom</label>
        <input autofocus="autofocus" name="nom" value="{$valeurs.nom|escape|default:''}" type="text" id="stacked-name" placeholder="Nom" />
        <span class="erreur"> {$messages.nom|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-name">Prénom</label>
        <input autofocus="autofocus" name="prenom" value="{$valeurs.prenom|escape|default:''}" type="text" id="stacked-name" placeholder="Prénom" />
        <span class="erreur"> {$messages.prenom|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-name">Adresse</label>
        <input name="adresse" value="{$valeurs.adresse|escape|default:''}"  type="text" id="stacked-name" placeholder="Adresse" />
        <span class="erreur"> {$messages.adresse|escape|default:''}</span>

    </div>
     <div class="form__input">
        <label for="stacked-foo">Code postal</label>
        <input name="code postal" value="{$valeurs.codepostal|escape|default:''}"  type="text" id="stacked-foo" placeholder="Code postal" />
        <span class="erreur"> {$messages.codepostal|escape|default:''}</span>

    </div>

    <div class="form__input">
        <label for="stacked-password">Mot de passe</label>
        <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
        <span class="erreur"> {$messages.password|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-email">Email</label>
        <input name="email" value="{$valeurs.email|escape|default:''}" type="email" id="stacked-email" placeholder="Email" />
        <span class="erreur"> {$messages.email|escape|default:''}</span>
    </div>
    
    <div class="form__input">
        <label for="stacked-phone">Téléphone</label>
        <input name="telephone" value="{$valeurs.telephone|escape|default:''}" type="telephone" id="stacked-phone" placeholder="Téléphone" />
        <span class="erreur"> {$messages.telephone|escape|default:''}</span>
    </div>

    <div class="pure-controls">
        <button type="submit" class="pure-button pure-button-primary">S'inscrire</button>
    </div>
</form>
</div>
{/block}