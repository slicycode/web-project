<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-06 13:43:48
  from 'C:\laragon\www\ProjetWeb\web-project\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ae1394566ea4_02073058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5626643a47647956513cfac73ab93521385d8103' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\layout.tpl',
      1 => 1638798220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ae1394566ea4_02073058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15199317461ae13944a17b5_42937807', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91730449761ae13944cb6c4_74249450', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25901047861ae13944cd672_11786593', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107814975061ae1394566855_92139870', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_15199317461ae13944a17b5_42937807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15199317461ae13944a17b5_42937807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_91730449761ae13944cb6c4_74249450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_91730449761ae13944cb6c4_74249450',
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
class Block_25901047861ae13944cd672_11786593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_25901047861ae13944cd672_11786593',
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
    <a href='logout'>Me déconnecter</a>
    <?php }?>
    <a href='admin'>Administrateur</a> 
</div>
<?php
}
}
/* {/block 'nav'} */
/* {block 'body'} */
class Block_107814975061ae1394566855_92139870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_107814975061ae1394566855_92139870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
