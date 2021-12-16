{extends file='layout.tpl'}
{block name=title}Candidature{/block}
{block name=body}
<div class="app">
    <h1>{$candidature[2]}</h1>
    <a href="./liste_candidatures">Retourner à la liste</a>
    <img src="uploads/Photos/{$candidature[21]}"/>
    <p>Musique 1</p>
    <audio
        controls
        src="uploads/Musiques/{$candidature[16]}">
        Your browser does not support the
            <code>audio</code> element.
    </audio>
    <p>Musique 2</p>
    <audio
        controls
        src="uploads/Musiques/{$candidature[17]}">
        Your browser does not support the
            <code>audio</code> element.
    </audio>
    <p>Musique 3</p>
    <audio
        controls
        src="uploads/Musiques/{$candidature[17]}">
        Your browser does not support the
            <code>audio</code> element.
    </audio>
    <p>Département : </p>
    <p>{$candidature[3]}</p>
    <p>Style : </p>
    <p>{$candidature[5]}</p>
    <p>Youtube : </p>
    <p>{$candidature[12]}</p>
    <p>Soundcloud : </p>
    <p>{$candidature[11]}</p>
    <p>Site : </p>
    <p>{$candidature[10]}</p>
    <p>Presentation : </p>
    <p>{$candidature[8]}</p>
    <p>Experience : </p>
    <p>{$candidature[9]}</p>
    <a href="uploads/DossiersPresse/{$candidature[19]}" download>
    	Dossier
	</a>
	<a href="uploads/SACEM/{$candidature[23]}" download>
    	SACEM
	</a>
	<a href="uploads/FicheTechnique/{$candidature[22]}" download>
    	Fiche Technique
	</a>
	<a href="./liste_candidatures">Retourner à la liste</a>
{/block}