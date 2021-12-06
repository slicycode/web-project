{extends file='layout.tpl'}
{block name=title}Candidature{/block}
{block name=body}
<div class="app">
    <h1>Ma candidature</h1>
    <form class="form" action="register" method="post">
    <div class="form__input">
        <label for="stacked-name">Nom du groupe</label>
        <input autofocus="autofocus" name="nom_groupe" value="{$valeurs.nom_groupe|escape|default:''}" type="text" id="stacked-name" placeholder="Nom du groupe" />
        <span class="erreur"> {$messages.nom_groupe|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-name">Département</label>
        <input autofocus="autofocus" name="id_dep" value="{$valeurs.id_dep|escape|default:''}" type="text" id="stacked-name" placeholder="Département" />
        <span class="erreur"> {$messages.id_dep|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-name">Scène</label>
        <input name="id_scene" value="{$valeurs.id_scene|escape|default:''}"  type="text" id="stacked-name" placeholder="Scène" />
        <span class="erreur"> {$messages.id_scene|escape|default:''}</span>

    </div>
     <div class="form__input">
        <label for="stacked-foo">Style</label>
        <input name="style" value="{$valeurs.style|escape|default:''}"  type="text" id="stacked-foo" placeholder="Style de musique" />
        <span class="erreur"> {$messages.style|escape|default:''}</span>

    </div>

    <div class="form__input">
        <label for="stacked-foo">Représentant du groupe</label>
        <input name="id_rep" type="text" id="stacked-foo" placeholder="Représentant du groupe" value="{$valeurs.style|escape|default:''}"/>
        <span class="erreur"> {$messages.id_rep|escape|default:''}</span>

    </div>
    <div class="form__input">
        <label for="stacked-foo">Année de création</label>
        <input name="annee" value="{$valeurs.annee|escape|default:''}" type="text" id="stacked-foo" placeholder="Année de création" />
        <span class="erreur"> {$messages.annee|escape|default:''}</span>
    </div>
    
    <div class="form__input">
        <label for="stacked-foo">Présentation</label>
        <input name="presentation" value="{$valeurs.presentation|escape|default:''}" type="text" id="stacked-foo" placeholder="Présentation" />
        <span class="erreur"> {$messages.presentation|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">Expérience</label>
        <input name="experience" value="{$valeurs.experience|escape|default:''}" type="text" id="stacked-foo" placeholder="Expérience" />
        <span class="erreur"> {$messages.experience|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">Site ou page Facebook</label>
        <input name="site" value="{$valeurs.site|escape|default:''}" type="text" id="stacked-foo" placeholder="Site ou page Facebook" />
        <span class="erreur"> {$messages.site|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">Youtube</label>
        <input name="youtube" value="{$valeurs.youtube|escape|default:''}" type="text" id="stacked-foo" placeholder="Chaîne Youtube" />
        <span class="erreur"> {$messages.youtube|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">Status associatif</label>
        <input name="assos" value="{$valeurs.assos|escape|default:''}" type="text" id="stacked-foo" placeholder="oui ou non" />
        <span class="erreur"> {$messages.assos|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">SACEM</label>
        <input name="assos" value="{$valeurs.assos|escape|default:''}" type="text" id="stacked-foo" placeholder="oui ou non" />
        <span class="erreur"> {$messages.assos|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">Producteur</label>
        <input name="producteur" value="{$valeurs.producteur|escape|default:''}" type="text" id="stacked-foo" placeholder="oui ou non" />
        <span class="erreur"> {$messages.producteur|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">*Photo de groupe 1*</label>
        <input name="photo1" value="{$valeurs.musique3|escape|default:''}" type="file" id="stacked-foo"/>
        <span class="erreur"> {$messages.musique3|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">*Photo de groupe 2*</label>
        <input name="photo2" value="{$valeurs.musique3|escape|default:''}" type="file" id="stacked-foo"/>
        <span class="erreur"> {$messages.musique3|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">*premier fichier audio*</label>
        <input name="musique1" value="{$valeurs.musique1|escape|default:''}" type="file" id="stacked-foo"/>
        <span class="erreur"> {$messages.musique1|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">*second fichier audio*</label>
        <input name="musique2" value="{$valeurs.musique2|escape|default:''}" type="file" id="stacked-foo"/>
        <span class="erreur"> {$messages.musique2|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">*troisième fichier audio*</label>
        <input name="musique3" value="{$valeurs.musique3|escape|default:''}" type="file" id="stacked-foo"/>
        <span class="erreur"> {$messages.musique3|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">*Le dossier de presse ici*</label>
        <input name="dossier" value="{$valeurs.dossier|escape|default:''}" type="file" id="stacked-foo"/>
        <span class="erreur"> {$messages.dossier|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">*Fiche technique*</label>
        <input name="ftechnique" value="{$valeurs.dossier|escape|default:''}" type="file" id="stacked-foo"/>
        <span class="erreur"> {$messages.dossier|escape|default:''}</span>
    </div>

    <div class="form__input">
        <label for="stacked-foo">*document SACEM PDF*</label>
        <input name="docsacem" value="{$valeurs.docsacem|escape|default:''}" type="file" id="stacked-foo"/>
        <span class="erreur"> {$messages.docsacem|escape|default:''}</span>
    </div>

    <div class="pure-controls">
        <button type="submit" class="pure-button pure-button-primary">Envoyer ma candidature</button>
    </div>
</form>
</div>
{/block}