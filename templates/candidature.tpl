{extends file='layout.tpl'}
{block name=title}Candidature{/block}
{block name=body}
<div class="app">
    <h1>Ma candidature</h1>
    {if isset($session.session_on)}
        <form class="form" action="candidature" method="post", enctype="multipart/form-data">
            <div class="form__input">
                <label for="stacked-name">Nom du groupe</label>
                <input autofocus="autofocus" name="nom_groupe" value="{$valeurs.nom_groupe|escape|default:''}" type="text" id="stacked-name" placeholder="Nom du groupe" />
                <span class="erreur"> {$messages.nom_groupe|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-name">Département</label>
                <select name="id_dep">
                    {foreach from=$departements item=departement}
                        <option value="{$departement.id_dep}">{$departement.id_dep} - {$departement.nom_dep}</option> 
                    {/foreach}
                </select>
                <span class="erreur"> {$messages.id_dep|escape|default:''}</span>

            </div>

            <div class="form__input">
                <label for="stacked-name">Scène</label>
                <select name="id_scene">
                    {foreach from=$scenes item=scene}
                        <option value="{$scene.id_scene}">{$scene.id_scene} - {$scene.nom_scene}</option> 
                    {/foreach}
                </select>
                <span class="erreur"> {$messages.id_scene|escape|default:''}</span>

            </div>
        
            <div class="form__input">
                <label for="stacked-foo">Style</label>
                <input name="style" value="{$valeurs.style|escape|default:''}"  type="text" id="stacked-foo" placeholder="Style de musique" />
                <span class="erreur"> {$messages.style|escape|default:''}</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Nom du représentant</label>
                <input name="nom_rep" type="text" id="stacked-foo" placeholder="Nom du représentant" value="{$valeurs.nom_rep_rep|escape|default:''}"/>
                <span class="erreur"> {$messages.nom_rep|escape|default:''}</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Prénom du représentant</label>
                <input name="prenom_rep" type="text" id="stacked-foo" placeholder="Prénom du représentant" value="{$valeurs.prenom_rep|escape|default:''}"/>
                <span class="erreur"> {$messages.prenom_rep|escape|default:''}</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Email du représentant</label>
                <input name="email_rep" type="email" id="stacked-foo" placeholder="Email du représentant" value="{$valeurs.email_rep|escape|default:''}"/>
                <span class="erreur"> {$messages.email_rep|escape|default:''}</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Code postal du représentant</label>
                <input name="postal_rep" type="text" id="stacked-foo" placeholder="Code postal du représentant" value="{$valeurs.postal_rep|escape|default:''}"/>
                <span class="erreur"> {$messages.postal_rep|escape|default:''}</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Adresse du représentant</label>
                <input name="adresse_rep" type="text" id="stacked-foo" placeholder="Adresse du représentant" value="{$valeurs.adresse_rep|escape|default:''}"/>
                <span class="erreur"> {$messages.adresse_rep|escape|default:''}</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Téléphone du représentant</label>
                <input name="tel_rep" type="text" id="stacked-foo" placeholder="Téléphone du représentant" value="{$valeurs.tel_rep|escape|default:''}"/>
                <span class="erreur"> {$messages.tel_rep|escape|default:''}</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Année de création</label>
                <input name="annee" value="{$valeurs.annee|escape|default:''}" type="text" id="stacked-foo" placeholder="Année de création" />
                <span class="erreur"> {$messages.annee|escape|default:''}</span>
            </div>
            
            <div class="form__input">
                <label for="stacked-foo">Présentation</label>
                <textarea style="resize: vertical;" name="presentation" value="{$valeurs.presentation|escape|default:''}" type="text" id="stacked-foo" placeholder="Présentation" >
                </textarea>
                <span class="erreur"> {$messages.presentation|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Expérience</label>
                <textarea style="resize: vertical;" name="experience" value="{$valeurs.experience|escape|default:''}" type="text" id="stacked-foo" placeholder="Expérience">
                </textarea>
                <span class="erreur"> {$messages.experience|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Site ou page Facebook</label>
                <input name="site" value="{$valeurs.site|escape|default:''}" type="text" id="stacked-foo" placeholder="URL du site ou de la page Facebook" />
                <span class="erreur"> {$messages.site|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">SoundCloud</label>
                <input name="soundcloud" value="{$valeurs.soundcloud|escape|default:''}" type="text" id="stacked-foo" placeholder="URL vers votre SoundCloud" />
                <span class="erreur"> {$messages.soundcloud|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Youtube</label>
                <input name="youtube" value="{$valeurs.youtube|escape|default:''}" type="text" id="stacked-foo" placeholder="URL vers votre chaîne Youtube" />
                <span class="erreur"> {$messages.youtube|escape|default:''}</span>
            </div>

            <div class="form__input">
            <label for="stacked-foo">Status associatif</label>
                <select name="assos">
                    <option value=FALSE>Non</option>
                    <option value=TRUE>Oui</option> 
                </select>
                <span class="erreur"> {$messages.assos|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">SACEM</label>
                <select name="sacem">
                    <option value=FALSE>Non</option>
                    <option value=TRUE>Oui</option> 
                </select>
                <span class="erreur"> {$messages.sacem|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Producteur</label>
                <select name="producteur">
                    <option value=FALSE>Non</option>
                    <option value=TRUE>Oui</option> 
                </select>
                <span class="erreur"> {$messages.producteur|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*Photo de groupe 1*</label>
                <input name="photo1" value="{$valeurs.photo1|escape|default:''}" type="File" id="stacked-foo"/>
                <span class="erreur"> {$messages.photo1|escape|default:''}</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*Photo de groupe 2*</label>
                <input name="photo2" value="{$valeurs.photo2|escape|default:''}" type="file" id="stacked-foo"/>
                <span class="erreur"> {$messages.photo2|escape|default:''}</span>
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
                <input name="ftechnique" value="{$valeurs.ftechnique|escape|default:''}" type="file" id="stacked-foo"/>
                <span class="erreur"> {$messages.ftechnique|escape|default:''}</span>
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
        
    {else}
        <a href="login"> Veuillez vous connecter pour candidater </a>
        <a href="register"> Ou créer un compte </a>
    {/if}
</div>
{/block}