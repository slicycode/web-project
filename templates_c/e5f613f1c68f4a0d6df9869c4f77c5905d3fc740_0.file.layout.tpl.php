<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-06 16:47:06
  from 'C:\laragon\www\tps\projet\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ae3e8a3780f4_04813547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f613f1c68f4a0d6df9869c4f77c5905d3fc740' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\layout.tpl',
      1 => 1638809221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ae3e8a3780f4_04813547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132387233061ae3e8a347be7_19124738', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61862172261ae3e8a34e8c7_42248861', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202019780361ae3e8a350794_94100213', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207274310961ae3e8a3765d6_19638025', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_132387233061ae3e8a347be7_19124738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_132387233061ae3e8a347be7_19124738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_61862172261ae3e8a34e8c7_42248861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_61862172261ae3e8a34e8c7_42248861',
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
class Block_202019780361ae3e8a350794_94100213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_202019780361ae3e8a350794_94100213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="nav">
    <div class="nav-menu">
        <?php if (!(isset($_smarty_tpl->tpl_vars['session']->value['session_on']))) {?>
        <a href='./'>Accueil</a>
        <a href='register'>S'inscrire</a> 
        <a href='login'>Se connecter</a>
        <?php } else { ?>
        <a href='./'>Bienvenue <?php echo $_smarty_tpl->tpl_vars['session']->value['informations'][2];?>
 <?php echo $_smarty_tpl->tpl_vars['session']->value['informations'][1];?>
 </a>
        <a href='candidature'>Ma candidature</a>
        <a href='logout'>Me déconnecter</a>
        <?php }?>
        <a href='admin'>Administrateur</a> 
    </div>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</div>

<?php echo '<script'; ?>
>
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle("active");
        nav.classList.toggle("active");
    }
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'nav'} */
/* {block 'body'} */
class Block_207274310961ae3e8a3765d6_19638025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_207274310961ae3e8a3765d6_19638025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
