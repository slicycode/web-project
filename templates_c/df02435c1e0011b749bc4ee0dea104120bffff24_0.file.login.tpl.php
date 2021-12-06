<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 17:52:58
  from 'C:\laragon\www\ProjetWeb\web-project\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61abaafa26b737_15654891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df02435c1e0011b749bc4ee0dea104120bffff24' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\login.tpl',
      1 => 1638640290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61abaafa26b737_15654891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205998655061abaafa25c3a0_55768705', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12090570461abaafa25ce43_11314760', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_205998655061abaafa25c3a0_55768705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_205998655061abaafa25c3a0_55768705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12090570461abaafa25ce43_11314760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12090570461abaafa25ce43_11314760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">

    <h1>Connectez-vous</h1>

    <form class="form" action="login" method="post">
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
<?php
}
}
/* {/block 'body'} */
}
