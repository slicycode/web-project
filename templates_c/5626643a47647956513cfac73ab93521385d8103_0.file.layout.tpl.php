<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:16:01
  from 'C:\laragon\www\ProjetWeb\web-project\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab9441d179c1_50220792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5626643a47647956513cfac73ab93521385d8103' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\layout.tpl',
      1 => 1638634530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab9441d179c1_50220792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84207081461ab9441d15431_55422754', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86251667061ab9441d168f7_20266574', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82157470461ab9441d16f00_87395683', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44830876061ab9441d174a3_92190620', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_84207081461ab9441d15431_55422754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_84207081461ab9441d15431_55422754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_86251667061ab9441d168f7_20266574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_86251667061ab9441d168f7_20266574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'nav'} */
class Block_82157470461ab9441d16f00_87395683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_82157470461ab9441d16f00_87395683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="nav">
    <a href='./'>Accueil</a>
    <a href='register'>S'inscrire</a> 
    <a href='login'>Se connecter</a> 
    <a href='candidature'>Ma candidature</a> 
    <a href='admin'>Administrateur</a> 
</div>
<?php
}
}
/* {/block 'nav'} */
/* {block 'body'} */
class Block_44830876061ab9441d174a3_92190620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_44830876061ab9441d174a3_92190620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
