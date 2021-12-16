<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 16:16:55
  from 'C:\laragon\www\ProjetWeb\web-project\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb6677dffd79_56353623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a32def00e5ace717b444dac86b612e5c7fe4b7ad' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\admin.tpl',
      1 => 1639671119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb6677dffd79_56353623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21320657261bb6677dfe780_13111978', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65493075561bb6677dff6e5_71286331', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_21320657261bb6677dfe780_13111978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_21320657261bb6677dfe780_13111978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pannel Administrateur<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_65493075561bb6677dff6e5_71286331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_65493075561bb6677dff6e5_71286331',
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
