<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 20:14:41
  from 'C:\laragon\www\tps\projet\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb9e316f6ea4_55327369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f613f1c68f4a0d6df9869c4f77c5905d3fc740' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\layout.tpl',
      1 => 1639685613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb9e316f6ea4_55327369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5819626361bb9e311e4928_80541580', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15857303361bb9e312ce223_70006083', 'head');
?>

</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147658153661bb9e312d4443_04249641', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206324652161bb9e316f5209_23691823', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_5819626361bb9e311e4928_80541580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5819626361bb9e311e4928_80541580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_15857303361bb9e312ce223_70006083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15857303361bb9e312ce223_70006083',
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
class Block_147658153661bb9e312d4443_04249641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_147658153661bb9e312d4443_04249641',
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
            <a id="bienvenue" href='./'>Bienvenue <?php echo $_smarty_tpl->tpl_vars['session']->value['informations'][2];?>
 <?php echo $_smarty_tpl->tpl_vars['session']->value['informations'][1];?>
 </a>
            <?php if ($_smarty_tpl->tpl_vars['session']->value['informations'][8] == 0) {?>
                <a href='candidature'>Ma candidature</a>
                <a href='logout'>Me déconnecter</a>
            <?php } else { ?>
                <a href='liste_candidatures'>Les candidatures</a> 
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
class Block_206324652161bb9e316f5209_23691823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_206324652161bb9e316f5209_23691823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'body'} */
}
