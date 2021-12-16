{extends file='layout.tpl'}
{block name=title}Liste des candidatures{/block}
{block name=body}
<div class='app'>
    <h1>Liste des candidatures</h1>
    <div class="liste">
        <div class="liste__item">
            <p style="font-weight: bold;">id</p>
        </div>

        <div class="liste__item">
            <p>Détails</p>
        </div>

        <div class="liste__item">
            <p>Nom du groupe</p>
        </div>

        <div class="liste__item">
            <p>Département</p>
        </div>

        <div class="liste__item">
            <p>Scène</p>
        </div>

        <div class="liste__item">
            <p>Style de musique</p>
        </div>

        <div class="liste__item">
            <p>Date de création</p>
        </div>

    </div>
    {foreach from=$candidatures item=candidature}
    <div class="liste">
        <div class="liste__item">
            <p style="font-weight: bold;">{$candidature[0]}</p>
        </div>

        <div class="liste__item">
            <a href="./candidature-{$candidature[0]}">Détails</a>
        </div>

        <div class="liste__item">
            <p>{$candidature[2]}</p>
        </div>

        <div class="liste__item">
            <p>{$candidature[3]}</p>
        </div>

        <div class="liste__item">
            <p>{$candidature[4]}</p>
        </div>

        <div class="liste__item">
            <p>{$candidature[5]}</p>
        </div>

        <div class="liste__item">
            <p>{$candidature[7]}</p>
        </div>

    </div>
    {/foreach}
</div>
{/block}