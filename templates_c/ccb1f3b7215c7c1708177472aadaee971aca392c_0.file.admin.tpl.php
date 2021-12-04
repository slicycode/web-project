<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 17:50:15
  from 'C:\laragon\www\tps\projet\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61abaa577515b1_58194942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccb1f3b7215c7c1708177472aadaee971aca392c' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\admin.tpl',
      1 => 1638640058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61abaa577515b1_58194942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60156410261abaa5772b5c0_74915494', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121570433861abaa5772dcd8_90557942', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_60156410261abaa5772b5c0_74915494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_60156410261abaa5772b5c0_74915494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pannel Administrateur<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_121570433861abaa5772dcd8_90557942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_121570433861abaa5772dcd8_90557942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
    <h1>Pannel Administrateur</h1>

    <form class="form" action="login" method="post">
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
