{extends file='layout.tpl'}
{block name=title}Liste des candidatures{/block}
{block name=body}
<div class='app'>
    <h1>Liste des candidatures</h1>
    <div class="liste">
        <div class="liste__item">
            <p style="font-weight: bold;">0</p>
        </div>

        <div class="liste__item">
            <a href="./candidature">Détails</a>
        </div>

        <div class="liste__item">
            <p>Nom du groupe</p>
        </div>

        <div class="liste__item">
            <p>Département</p>
        </div>

        <div class="liste__item">
            <p>Adresse</p>
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

        <div class="liste__item">
            <p>Présentation</p>
        </div>

        <div class="liste__item">
            <p>Expérience</p>
        </div>

    </div>
</div>
{/block}