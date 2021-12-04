<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:48:13
  from 'C:\laragon\www\ProjetWeb\web-project\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab9bcd758a27_92774318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '696a0ae42d6fda3510ead18924b016d0a1509678' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\success.tpl',
      1 => 1638627281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab9bcd758a27_92774318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28599722261ab9bcd7572c4_41623157', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67016249561ab9bcd758383_52490844', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_28599722261ab9bcd7572c4_41623157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_28599722261ab9bcd7572c4_41623157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès !<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_67016249561ab9bcd758383_52490844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_67016249561ab9bcd758383_52490844',
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
