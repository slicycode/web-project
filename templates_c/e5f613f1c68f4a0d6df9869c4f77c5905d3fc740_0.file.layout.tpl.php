<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:09:03
  from 'C:\laragon\www\tps\projet\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab929fd7c754_52908581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f613f1c68f4a0d6df9869c4f77c5905d3fc740' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\layout.tpl',
      1 => 1638634142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab929fd7c754_52908581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30414983361ab929fd6eee7_75412724', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46307313761ab929fd771c9_93927461', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9837009561ab929fd79145_61562817', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6127686061ab929fd7adc5_61205017', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_30414983361ab929fd6eee7_75412724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_30414983361ab929fd6eee7_75412724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_46307313761ab929fd771c9_93927461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_46307313761ab929fd771c9_93927461',
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
class Block_9837009561ab929fd79145_61562817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_9837009561ab929fd79145_61562817',
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
class Block_6127686061ab929fd7adc5_61205017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6127686061ab929fd7adc5_61205017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
