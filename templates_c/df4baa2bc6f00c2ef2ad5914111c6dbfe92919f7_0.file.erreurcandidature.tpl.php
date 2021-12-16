<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 18:08:58
  from 'C:\laragon\www\ProjetWeb\web-project\templates\erreurcandidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb80ba89a2a0_10833126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4baa2bc6f00c2ef2ad5914111c6dbfe92919f7' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\erreurcandidature.tpl',
      1 => 1639678108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb80ba89a2a0_10833126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105733280061bb80ba899166_56883908', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132199541361bb80ba899c99_01717941', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_105733280061bb80ba899166_56883908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_105733280061bb80ba899166_56883908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_132199541361bb80ba899c99_01717941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_132199541361bb80ba899c99_01717941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
    <h1>Votre candidature a déjà été envoyée</h1>
    <a href="./">Retourner sur le site</a>
</div>
<?php
}
}
/* {/block 'body'} */
}
