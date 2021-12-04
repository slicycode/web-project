<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:08:32
  from 'C:\laragon\www\ProjetWeb\web-project\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab92800764d2_75771794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5626643a47647956513cfac73ab93521385d8103' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\layout.tpl',
      1 => 1638627281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab92800764d2_75771794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114466834461ab9280058347_58426349', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61821516461ab9280059116_13267138', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28434604261ab928005a1e4_75156179', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191900856361ab928005b7a8_30414565', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_114466834461ab9280058347_58426349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_114466834461ab9280058347_58426349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_61821516461ab9280059116_13267138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_61821516461ab9280059116_13267138',
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
class Block_28434604261ab928005a1e4_75156179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_28434604261ab928005a1e4_75156179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="nav">
    <a href='./'>Accueil</a>
    <a href='register'>S'inscrire</a> 
    <a href='login'>Se connecter</a> 
    <a href='candidature'>Ma candidature</a> 
</div>
<?php
}
}
/* {/block 'nav'} */
/* {block 'body'} */
class Block_191900856361ab928005b7a8_30414565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_191900856361ab928005b7a8_30414565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
