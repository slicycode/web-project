<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 16:44:05
  from 'C:\laragon\www\ProjetWeb\web-project\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb6cd57bc7d4_38691515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f46a41272ae6d432921af64a243e1f98e6b3562f' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\candidature.tpl',
      1 => 1639671119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb6cd57bc7d4_38691515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174401890261bb6cd562d943_53269618', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118800277061bb6cd562e421_38039040', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_174401890261bb6cd562d943_53269618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_174401890261bb6cd562d943_53269618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_118800277061bb6cd562e421_38039040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_118800277061bb6cd562e421_38039040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
    <h1>Ma candidature</h1>
    <?php if ((isset($_smarty_tpl->tpl_vars['session']->value['session_on']))) {?>
        <form class="form" action="candidature" method="post", enctype="multipart/form-data">
            <div class="form__input">
                <label for="stacked-name">Nom du groupe</label>
                <input autofocus="autofocus" name="nom_groupe" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_groupe'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-name" placeholder="Nom du groupe" />
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nom_groupe'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-name">Département</label>
                <select name="id_dep">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departements']->value, 'departement');
$_smarty_tpl->tpl_vars['departement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['departement']->value) {
$_smarty_tpl->tpl_vars['departement']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['departement']->value['id_dep'];?>
"><?php echo $_smarty_tpl->tpl_vars['departement']->value['id_dep'];?>
 - <?php echo $_smarty_tpl->tpl_vars['departement']->value['nom_dep'];?>
</option> 
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['id_dep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

            </div>

            <div class="form__input">
                <label for="stacked-name">Scène</label>
                <select name="id_scene">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scenes']->value, 'scene');
$_smarty_tpl->tpl_vars['scene']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scene']->value) {
$_smarty_tpl->tpl_vars['scene']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['scene']->value['id_scene'];?>
"><?php echo $_smarty_tpl->tpl_vars['scene']->value['id_scene'];?>
 - <?php echo $_smarty_tpl->tpl_vars['scene']->value['nom_scene'];?>
</option> 
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['id_scene'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

            </div>
        
            <div class="form__input">
                <label for="stacked-foo">Style</label>
                <input name="style" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['style'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"  type="text" id="stacked-foo" placeholder="Style de musique" />
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['style'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Nom du représentant</label>
                <input name="nom_rep" type="text" id="stacked-foo" placeholder="Nom du représentant" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_rep_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nom_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Prénom du représentant</label>
                <input name="prenom_rep" type="text" id="stacked-foo" placeholder="Prénom du représentant" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['prenom_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Email du représentant</label>
                <input name="email_rep" type="email" id="stacked-foo" placeholder="Email du représentant" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['email_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Code postal du représentant</label>
                <input name="postal_rep" type="text" id="stacked-foo" placeholder="Code postal du représentant" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['postal_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['postal_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Adresse du représentant</label>
                <input name="adresse_rep" type="text" id="stacked-foo" placeholder="Adresse du représentant" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['adresse_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['adresse_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Téléphone du représentant</label>
                <input name="tel_rep" type="text" id="stacked-foo" placeholder="Téléphone du représentant" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['tel_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['tel_rep'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

            </div>

            <div class="form__input">
                <label for="stacked-foo">Année de création</label>
                <input name="annee" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['annee'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-foo" placeholder="Année de création" />
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['annee'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>
            
            <div class="form__input">
                <label for="stacked-foo">Présentation</label>
                <textarea style="resize: vertical;" name="presentation" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['presentation'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-foo" placeholder="Présentation" >
                </textarea>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['presentation'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Expérience</label>
                <textarea style="resize: vertical;" name="experience" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['experience'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-foo" placeholder="Expérience">
                </textarea>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['experience'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Site ou page Facebook</label>
                <input name="site" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['site'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-foo" placeholder="URL du site ou de la page Facebook" />
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['site'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">SoundCloud</label>
                <input name="soundcloud" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['soundcloud'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-foo" placeholder="URL vers votre SoundCloud" />
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['soundcloud'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Youtube</label>
                <input name="youtube" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['youtube'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-foo" placeholder="URL vers votre chaîne Youtube" />
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['youtube'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
            <label for="stacked-foo">Status associatif</label>
                <select name="assos">
                    <option value=FALSE>Non</option>
                    <option value=TRUE>Oui</option> 
                </select>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['assos'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">SACEM</label>
                <select name="sacem">
                    <option value=FALSE>Non</option>
                    <option value=TRUE>Oui</option> 
                </select>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['sacem'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">Producteur</label>
                <select name="producteur">
                    <option value=FALSE>Non</option>
                    <option value=TRUE>Oui</option> 
                </select>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['producteur'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*Photo de groupe 1*</label>
                <input name="photo1" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['photo1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="File" id="stacked-foo"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['photo1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*Photo de groupe 2*</label>
                <input name="photo2" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['photo2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="file" id="stacked-foo"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['photo2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*premier fichier audio*</label>
                <input name="musique1" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['musique1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="file" id="stacked-foo"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['musique1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*second fichier audio*</label>
                <input name="musique2" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['musique2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="file" id="stacked-foo"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['musique2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*troisième fichier audio*</label>
                <input name="musique3" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['musique3'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="file" id="stacked-foo"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['musique3'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*Le dossier de presse ici*</label>
                <input name="dossier" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['dossier'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="file" id="stacked-foo"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['dossier'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*Fiche technique*</label>
                <input name="ftechnique" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['ftechnique'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="file" id="stacked-foo"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['ftechnique'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>

            <div class="form__input">
                <label for="stacked-foo">*document SACEM PDF*</label>
                <input name="docsacem" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['docsacem'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="file" id="stacked-foo"/>
                <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['docsacem'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
            </div>
            <div class="pure-controls">
                <button type="submit" class="pure-button pure-button-primary">Envoyer ma candidature</button>
            </div>

        </form>
        
    <?php } else { ?>
        <a href="login"> Veuillez vous connecter pour candidater </a>
        <a href="register"> Ou créer un compte </a>
    <?php }?>
</div>
<?php
}
}
/* {/block 'body'} */
}
