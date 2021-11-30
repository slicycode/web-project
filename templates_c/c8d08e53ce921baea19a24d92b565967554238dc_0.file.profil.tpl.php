<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-30 07:45:53
  from 'C:\laragon\www\tps\projet\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a5d6b13698d1_32092743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d08e53ce921baea19a24d92b565967554238dc' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\profil.tpl',
      1 => 1638258337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a5d6b13698d1_32092743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42387102761a5d6b1364ca7_12320741', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79599665261a5d6b1367e75_93073489', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_42387102761a5d6b1364ca7_12320741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_42387102761a5d6b1364ca7_12320741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_79599665261a5d6b1367e75_93073489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_79599665261a5d6b1367e75_93073489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
<h1>Mon profil</h1>
<p>Contenu du template profil</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
