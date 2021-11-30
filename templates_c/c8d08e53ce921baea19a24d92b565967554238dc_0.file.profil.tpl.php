<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-29 08:47:44
  from 'C:\laragon\www\tps\projet\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a493b051efd9_42451405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d08e53ce921baea19a24d92b565967554238dc' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\profil.tpl',
      1 => 1636278196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a493b051efd9_42451405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134797214761a493b051aa76_85216159', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112411668761a493b051d6f9_66473345', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_134797214761a493b051aa76_85216159 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_134797214761a493b051aa76_85216159',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_112411668761a493b051d6f9_66473345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_112411668761a493b051d6f9_66473345',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Mon profil</h1>
<p>Contenu du template profil</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
