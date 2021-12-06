<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 17:53:38
  from 'C:\laragon\www\ProjetWeb\web-project\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61abab22ecf924_21653846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a32def00e5ace717b444dac86b612e5c7fe4b7ad' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\admin.tpl',
      1 => 1638640290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61abab22ecf924_21653846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192969084561abab22ec6dd5_18364016', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101889626061abab22ec7659_72649950', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_192969084561abab22ec6dd5_18364016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_192969084561abab22ec6dd5_18364016',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pannel Administrateur<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_101889626061abab22ec7659_72649950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_101889626061abab22ec7659_72649950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
    <h1>Pannel Administrateur</h1>

    <form class="form" action="register" method="post">
        <div class="form__input">
            <label for="stacked-password">Mot de passe administrateur</label>
            <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
            <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['password'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
        </div>
    </form>
</div>
<?php
}
}
/* {/block 'body'} */
}
