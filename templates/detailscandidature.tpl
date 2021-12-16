{extends file='layout.tpl'}
{block name=title}Candidature{/block}
{block name=body}
<div class="ma__candidature">
    <div class="hero__img">
        <h1>{$candidature[2]}</h1>
        <a href="./liste_candidatures">Retourner à la liste</a>
        <img src="uploads/Photos/{$candidature[21]}"/>
    </div>

    <div class="content">
        <h3>Musique 1</h3>
        <audio
            controls
            src="uploads/Musiques/{$candidature[16]}">
            Your browser does not support the
                <code>audio</code> element.
        </audio>
        <h3>Musique 2</h3>
        <audio
            controls
            src="uploads/Musiques/{$candidature[17]}">
            Your browser does not support the
                <code>audio</code> element.
        </audio>
        <h3>Musique 3</h3>
        <audio
            controls
            src="uploads/Musiques/{$candidature[17]}">
            Your browser does not support the
                <code>audio</code> element.
        </audio>

        <div class="content__item">
            <h3>Département : </h3>
            <p>{$candidature[3]}</p>
        </div>
        
        <div class="content__item">
            <h3>Style : </h3>
            <p>{$candidature[5]}</p>
        </div>

        <div class="content__item">
            <h3>Youtube : </h3>
            <p>{$candidature[12]}</p>
        </div>

        <div class="content__item">
            <h3>Soundcloud : </h3>
            <p>{$candidature[11]}</p>
        </div>

        <div class="content__item">
            <h3>Site : </h3>
            <p>{$candidature[10]}</p>
        </div>

        <div class="content__item">
            <h3>Presentation : </h3>
            <p>{$candidature[8]}</p>
        </div>

        <div class="content__item">
            <h3>Experience : </h3>
            <p>{$candidature[9]}</p>
        </div>

        <div class="content__footer">
            <a href="uploads/DossiersPresse/{$candidature[19]}" download>
                Dossier
            </a>
            <a href="uploads/SACEM/{$candidature[23]}" download>
                SACEM
            </a>
            <a href="uploads/FicheTechnique/{$candidature[22]}" download>
                Fiche Technique
            </a>
        </div>
    </div>
{/block}