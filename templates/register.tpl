{extends file='layout.tpl'}
{block name=title}Register{/block}
{block name=body}
<h1>Register</h1>
<div id='main'>
<body>

<form class="pure-form pure-form-stacked" action="register" method="post">
    <fieldset>
        <div class="pure-control-group">
            <label for="stacked-name">Utilisateur</label>
            <input name="user" value="{$valeurs.user|escape|default:''}" type="text" id="stacked-name" placeholder="Nom d'utilisateur" />
            <span class="erreur"> {$messages.user|escape|default:''}</span>

        </div>
        <div class="pure-control-group">
            <label for="stacked-password">Mot de passe</label>
            <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
            <span class="erreur"> {$messages.password|escape|default:''}</span>

        </div>
        <div class="pure-control-group">
            <label for="stacked-email">Adresse Email</label>
            <input name="email" value="{$valeurs.email|escape|default:''}" type="email" id="stacked-email" placeholder="Addresse mail" />
            <span class="erreur"> {$messages.email|escape|default:''}</span>
        </div>
        <div class="pure-control-group">
            <label for="stacked-foo">Ville</label>
            <input name="city" value="{$valeurs.city|escape|default:''}"  type="text" id="stacked-foo" placeholder="Ville" />
            <span class="erreur"> {$messages.city|escape|default:''}</span>

        </div>
        <div class="pure-control-group">
            <label for="stacked-foo">Pays</label>
            <input name="country" value="{$valeurs.country|escape|default:''}" type="text" id="stacked-foo" placeholder="Pays" />
            <span class="erreur"> {$messages.country|escape|default:''}</span>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
</div>
{/block}