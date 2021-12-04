<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 17:50:09
  from 'C:\laragon\www\ProjetWeb\web-project\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61abaa51958d81_17396651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5626643a47647956513cfac73ab93521385d8103' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\layout.tpl',
      1 => 1638640206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61abaa51958d81_17396651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186625925961abaa5194e701_54328113', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3703957461abaa519525b8_68743446', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28204995161abaa51952c49_19915528', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146511497461abaa51958853_25367894', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_186625925961abaa5194e701_54328113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_186625925961abaa5194e701_54328113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_3703957461abaa519525b8_68743446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3703957461abaa519525b8_68743446',
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
class Block_28204995161abaa51952c49_19915528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_28204995161abaa51952c49_19915528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="nav">
    <a href='./'>Accueil</a>
    <?php if (!(isset($_smarty_tpl->tpl_vars['session']->value['session_on']))) {?>
    <a href='register'>S'inscrire</a> 
    <a href='login'>Se connecter</a>
    <?php } else { ?>
    <p>Bienvenue <?php echo $_smarty_tpl->tpl_vars['session']->value['informations'][2];?>
 <?php echo $_smarty_tpl->tpl_vars['session']->value['informations'][1];?>
 </p>
    <a href='candidature'>Ma candidature</a>
    <?php }?>
    <a href='admin'>Administrateur</a> 
</div>
<?php
}
}
/* {/block 'nav'} */
/* {block 'body'} */
class Block_146511497461abaa51958853_25367894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_146511497461abaa51958853_25367894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
