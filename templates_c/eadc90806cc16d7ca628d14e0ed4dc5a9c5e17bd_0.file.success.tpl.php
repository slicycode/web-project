<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-08 12:11:00
  from 'C:\laragon\www\tps\projet\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b0a0d49dc003_24244201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadc90806cc16d7ca628d14e0ed4dc5a9c5e17bd' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\success.tpl',
      1 => 1638638051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b0a0d49dc003_24244201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209688777661b0a0d49d57b1_17942495', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33232476261b0a0d49daf84_87058245', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_209688777661b0a0d49d57b1_17942495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_209688777661b0a0d49d57b1_17942495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès !<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_33232476261b0a0d49daf84_87058245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_33232476261b0a0d49daf84_87058245',
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
