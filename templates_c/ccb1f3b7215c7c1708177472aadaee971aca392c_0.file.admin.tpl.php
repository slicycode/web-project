<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:09:06
  from 'C:\laragon\www\tps\projet\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab92a2cd9910_11731653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccb1f3b7215c7c1708177472aadaee971aca392c' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\admin.tpl',
      1 => 1638634094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab92a2cd9910_11731653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89318894061ab92a2cd56b7_35270888', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117705346161ab92a2cd7c55_56974476', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_89318894061ab92a2cd56b7_35270888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_89318894061ab92a2cd56b7_35270888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pannel Administrateur<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_117705346161ab92a2cd7c55_56974476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_117705346161ab92a2cd7c55_56974476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
    <h1>Administrateur</h1>
    <div class="candidature">
        <div class="candidature__img">
            <img src="https://images.unsplash.com/photo-1638309024787-1bd16766f123?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80">
        </div>

        <div class="candidature__desc">
            <h2>TITRE</h2>
            <p>audio</p>
            <p>DESCRIPTION</p>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
