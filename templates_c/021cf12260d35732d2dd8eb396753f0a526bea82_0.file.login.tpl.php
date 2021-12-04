<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 17:26:26
  from 'C:\laragon\www\tps\projet\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61aba4c21c3395_94340402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '021cf12260d35732d2dd8eb396753f0a526bea82' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\login.tpl',
      1 => 1638638656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61aba4c21c3395_94340402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147960310261aba4c2190e30_04351563', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100162685161aba4c2193ee7_30072820', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_147960310261aba4c2190e30_04351563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_147960310261aba4c2190e30_04351563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_100162685161aba4c2193ee7_30072820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_100162685161aba4c2193ee7_30072820',
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
<?php
}
}
/* {/block 'body'} */
}
