<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 18:10:37
  from 'C:\laragon\www\ProjetWeb\web-project\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb811d357602_23977722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '696a0ae42d6fda3510ead18924b016d0a1509678' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\success.tpl',
      1 => 1638640290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb811d357602_23977722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81654929561bb811d356625_34295228', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213738048061bb811d357066_64077655', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_81654929561bb811d356625_34295228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_81654929561bb811d356625_34295228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès !<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_213738048061bb811d357066_64077655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_213738048061bb811d357066_64077655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
Votre inscription a bien été enregistrée, vous pouvez maintenant vous rendre sur la page de <a href='login'>connexion</a>
</div>
<?php
}
}
/* {/block 'body'} */
}
