{extends file='layout.tpl'}
{block name=title}Liste des candidatures{/block}
{block name=body}
<div class='app'>
    <h1>Liste des utilisateurs</h1>
    <div class="liste">
        <div class="liste__item">
            <p>Numéro</p>
        </div>

        <div class="liste__item">
            <p>Nom</p>
        </div>

        <div class="liste__item">
            <p>Prénom</p>
        </div>

        <div class="liste__item">
            <p>Email</p>
        </div>

        <div class="liste__item">
            <p>Adresse</p>
        </div>

        <div class="liste__item">
            <p>Code postal</p>
        </div>

        <div class="liste__item">
            <p>Téléphone</p>
        </div>

        <div class="liste__item">
            <p>Administrateur</p>
        </div>

    </div>
    {foreach from=$utilisateurs item=utilisateur}
    <div class="liste">
        <div class="liste__item">
            <p>{$utilisateur[0]}</p>
        </div>

        <div class="liste__item">
            <p>{$utilisateur[1]}</p>
        </div>

        <div class="liste__item">
            <p>{$utilisateur[2]}</p>
        </div>

        <div class="liste__item">
            <p>{$utilisateur[3]}</p>
        </div>

        <div class="liste__item">
            <p>{$utilisateur[5]}</p>
        </div>

        <div class="liste__item">
            <p>{$utilisateur[6]}</p>
        </div>

        <div class="liste__item">
            <p>{$utilisateur[7]}</p>
        </div>

        <div class="liste__item">
            <p>{$utilisateur[8]}</p>
        </div>

    </div>
    {/foreach}
</div>
{/block}