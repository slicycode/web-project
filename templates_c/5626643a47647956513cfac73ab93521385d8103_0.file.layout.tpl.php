<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-17 14:09:04
  from 'C:\laragon\www\ProjetWeb\web-project\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bc9a00752790_09209635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5626643a47647956513cfac73ab93521385d8103' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\layout.tpl',
      1 => 1639750141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bc9a00752790_09209635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91307786161bc9a0074a3b5_29972719', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41774424861bc9a0074b928_64677718', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72562995261bc9a0074bef8_01522424', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212458670061bc9a00752295_27614823', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_91307786161bc9a0074a3b5_29972719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_91307786161bc9a0074a3b5_29972719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_41774424861bc9a0074b928_64677718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_41774424861bc9a0074b928_64677718',
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
class Block_72562995261bc9a0074bef8_01522424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_72562995261bc9a0074bef8_01522424',
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
            <?php if ($_smarty_tpl->tpl_vars['session']->value['informations'][8] == 0) {?>
                <a id="bienvenue" href='./'>Bienvenue <?php echo $_smarty_tpl->tpl_vars['session']->value['informations'][2];?>
 <?php echo $_smarty_tpl->tpl_vars['session']->value['informations'][1];?>
 </a>
                <a href='candidature'>Ma candidature</a>
                <a href='logout'>Me déconnecter</a>
            <?php } else { ?>
                <a href='./'>Menu admin</a>
                <a href='liste_candidatures'>Les candidatures</a>
                <a href='liste_utilisateurs'>Les utilisateurs</a>
                <a href='logout'>Me déconnecter</a>
            <?php }?>
        <?php }?>
        
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
class Block_212458670061bc9a00752295_27614823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_212458670061bc9a00752295_27614823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
