<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 20:22:23
  from 'C:\laragon\www\tps\projet\templates\erreurcandidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb9fff7ecc40_93933983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e688dc47e250c2a4bdcd208d42ceb606042c7ea' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\erreurcandidature.tpl',
      1 => 1639685613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb9fff7ecc40_93933983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60045156261bb9fff7e6772_23629174', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175432456661bb9fff7ea899_58368823', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_60045156261bb9fff7e6772_23629174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_60045156261bb9fff7e6772_23629174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_175432456661bb9fff7ea899_58368823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_175432456661bb9fff7ea899_58368823',
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
