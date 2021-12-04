<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 17:13:14
  from 'C:\laragon\www\tps\projet\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61aba1aa291265_40923134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadc90806cc16d7ca628d14e0ed4dc5a9c5e17bd' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\success.tpl',
      1 => 1638365251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61aba1aa291265_40923134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23149692961aba1aa28ef27_54344140', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30347731961aba1aa290594_59804755', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_23149692961aba1aa28ef27_54344140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_23149692961aba1aa28ef27_54344140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès !<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_30347731961aba1aa290594_59804755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_30347731961aba1aa290594_59804755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
Bien enregistré, vous pouvez vous rendre sur la page de <a href='login'>connexion</a>
</div>
<?php
}
}
/* {/block 'body'} */
}
