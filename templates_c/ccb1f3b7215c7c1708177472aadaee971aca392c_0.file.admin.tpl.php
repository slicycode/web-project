<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 14:46:11
  from 'C:\laragon\www\tps\projet\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb5133163eb3_54469227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccb1f3b7215c7c1708177472aadaee971aca392c' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\admin.tpl',
      1 => 1639665968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb5133163eb3_54469227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64170127361bb5133162771_03733864', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20859009661bb51331638a5_24193398', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_64170127361bb5133162771_03733864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_64170127361bb5133162771_03733864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pannel Administrateur<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20859009661bb51331638a5_24193398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20859009661bb51331638a5_24193398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
    <h1>Pannel Administrateur</h1>

</div>
<?php
}
}
/* {/block 'body'} */
}
