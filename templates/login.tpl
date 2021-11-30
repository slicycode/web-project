{extends file='layout.tpl'}
{block name=title}Connexion{/block}
{block name=body}
<div class="app">

    <h1>Connectez-vous</h1>

    <form class="form" action="register" method="post">
        <div class="form__input">
            <label for="stacked-email">Adresse mail</label>
            <input autofocus="autofocus" name="email" value="{$valeurs.email|escape|default:''}" type="email" id="stacked-email" placeholder="Email" />
            <span class="erreur"> {$messages.email|escape|default:''}</span>
        </div>

        <div class="form__input">
            <label for="stacked-password">Mot de passe</label>
            <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
            <span class="erreur"> {$messages.password|escape|default:''}</span>

        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
        </div>
    </form>

    <div class="member">
        <button onclick="openForm()" id="formButton__open" type="button">Êtes-vous un responsable de l'association ?</button>
    </div>

    <form id="form__member" action="register" method="post">
        <button type="button" class="formButton__close" onclick="closeForm()">Fermer</button>

        <h1>Connectez-vous</h1>

        <div class="form__input">
            <label for="stacked-email">Adresse mail du responsable</label>
            <input autofocus="autofocus" name="email" value="{$valeurs.email|escape|default:''}" type="email" id="stacked-email" placeholder="Email" />
            <span class="erreur"> {$messages.email|escape|default:''}</span>
        </div>

        <div class="form__input">
            <label for="stacked-password">Mot de passe du responsable</label>
            <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
            <span class="erreur"> {$messages.password|escape|default:''}</span>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
        </div>
    </form>
</div>

<script>
let openForm = function() {
    document.getElementById("form__member").style.display="block";
}

let closeForm = function() {
    document.getElementById("form__member").style.display="none";
}
</script>
{/block}