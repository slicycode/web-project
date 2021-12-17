<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-17 18:20:29
  from 'C:\laragon\www\tps\projet\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bcd4edb92257_09012016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f613f1c68f4a0d6df9869c4f77c5905d3fc740' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\layout.tpl',
      1 => 1639765227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bcd4edb92257_09012016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91696413061bcd4edb73e68_00681358', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161758910461bcd4edb78bc4_32333443', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26199764261bcd4edb7a1e3_81128707', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165204533961bcd4edb90da8_88001267', 'body');
?>

    <?php echo '<script'; ?>
 async>
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle("active");
        nav.classList.toggle("active");
    }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'title'} */
class Block_91696413061bcd4edb73e68_00681358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_91696413061bcd4edb73e68_00681358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_161758910461bcd4edb78bc4_32333443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_161758910461bcd4edb78bc4_32333443',
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
class Block_26199764261bcd4edb7a1e3_81128707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_26199764261bcd4edb7a1e3_81128707',
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
<?php
}
}
/* {/block 'nav'} */
/* {block 'body'} */
class Block_165204533961bcd4edb90da8_88001267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_165204533961bcd4edb90da8_88001267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
