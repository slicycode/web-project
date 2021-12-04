<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:08:38
  from 'C:\laragon\www\ProjetWeb\web-project\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab9286e63d16_44647258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1966bf327650a329030d69562579fd2cfa23f603' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\register.tpl',
      1 => 1638627281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab9286e63d16_44647258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113953553061ab9286e4a614_32861356', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126818151061ab9286e4b110_17339971', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_113953553061ab9286e4a614_32861356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_113953553061ab9286e4a614_32861356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inscription<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_126818151061ab9286e4b110_17339971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_126818151061ab9286e4b110_17339971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
<h1>Inscrivez-vous</h1>
<form class="form" action="register" method="post">
    <div class="form__input">
        <label for="stacked-name">Nom d'utilisateur</label>
        <input autofocus="autofocus" name="user" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['user'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-name" placeholder="Nom" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['user'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

    </div>
    <div class="form__input">
        <label for="stacked-password">Mot de passe</label>
        <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['password'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

    </div>
    <div class="form__input">
        <label for="stacked-email">Adresse mail</label>
        <input name="email" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="email" id="stacked-email" placeholder="Email" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
    </div>
    <div class="form__input">
        <label for="stacked-foo">Ville</label>
        <input name="city" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['city'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"  type="text" id="stacked-foo" placeholder="Ville" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['city'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

    </div>
    <div class="form__input">
        <label for="stacked-foo">Pays</label>
        <input name="country" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['country'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-foo" placeholder="Pays" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['country'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
    </div>

    <div class="pure-controls">
        <button type="submit" class="pure-button pure-button-primary">S'inscrire</button>
    </div>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
