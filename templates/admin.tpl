{extends file='layout.tpl'}
{block name=title}Pannel Administrateur{/block}
{block name=body}
<div class="app">
    <h1>Pannel Administrateur</h1>

    <form class="form" action="login" method="post">
        <div class="form__input">
            <label for="stacked-email">Adresse mail</label>
            <input autofocus="autofocus" name="email" value="{$valeurs.email|escape|default:''}" id="stacked-email" placeholder="Email" />
            <span class="erreur"> {$messages.email|escape|default:''}</span>
        </div>

        <div class="form__input">
            <label for="stacked-password">Mot de passe administrateur</label>
            <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
            <span class="erreur"> {$messages.password|escape|default:''}</span>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
        </div>
    </form>
</div>
{/block}