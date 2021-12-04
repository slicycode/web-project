<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:08:36
  from 'C:\laragon\www\ProjetWeb\web-project\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab92846d8609_00315937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df02435c1e0011b749bc4ee0dea104120bffff24' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\login.tpl',
      1 => 1638627281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab92846d8609_00315937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141778990361ab9284454180_16444099', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179381734261ab9284454e36_39259414', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_141778990361ab9284454180_16444099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_141778990361ab9284454180_16444099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_179381734261ab9284454e36_39259414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_179381734261ab9284454e36_39259414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">

    <h1>Connectez-vous</h1>

    <form class="form" action="register" method="post">
        <div class="form__input">
            <label for="stacked-email">Adresse mail</label>
            <input autofocus="autofocus" name="email" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="email" id="stacked-email" placeholder="Email" />
            <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
        </div>

        <div class="form__input">
            <label for="stacked-password">Mot de passe</label>
            <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
            <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['password'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

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
            <input autofocus="autofocus" name="email" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="email" id="stacked-email" placeholder="Email" />
            <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
        </div>

        <div class="form__input">
            <label for="stacked-password">Mot de passe du responsable</label>
            <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
            <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['password'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
        </div>
    </form>
</div>

<?php echo '<script'; ?>
>
let openForm = function() {
    document.getElementById("form__member").style.display="block";
}

let closeForm = function() {
    document.getElementById("form__member").style.display="none";
}
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
