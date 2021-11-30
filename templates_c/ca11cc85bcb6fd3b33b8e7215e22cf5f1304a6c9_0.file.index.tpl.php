<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-29 09:01:01
  from 'C:\laragon\www\tps\projet\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a496cdb9df96_33549283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca11cc85bcb6fd3b33b8e7215e22cf5f1304a6c9' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\index.tpl',
      1 => 1638176428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a496cdb9df96_33549283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114954424661a496cdb990c1_15391420', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82308562461a496cdb9bdd4_43478309', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_114954424661a496cdb990c1_15391420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_114954424661a496cdb990c1_15391420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Page d'accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_82308562461a496cdb9bdd4_43478309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_82308562461a496cdb9bdd4_43478309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Home</h1>
test
</div>
<?php
}
}
/* {/block 'body'} */
}
