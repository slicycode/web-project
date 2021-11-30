<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-30 14:34:55
  from 'C:\laragon\www\tps\projet\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a6368f71eea9_15943825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca11cc85bcb6fd3b33b8e7215e22cf5f1304a6c9' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\index.tpl',
      1 => 1638282894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a6368f71eea9_15943825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197162120061a6368f71d764_50909374', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130074656961a6368f71e736_26099453', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_197162120061a6368f71d764_50909374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_197162120061a6368f71d764_50909374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_130074656961a6368f71e736_26099453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_130074656961a6368f71e736_26099453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
    <div class='accueil'>
        <h1>Bienvenue sur le site du festival *insérer un nom* ! </h1>
        <span>Du 27 au 29 Juin 2022</span>
        <p>Veuillez vous inscrire sur la page d'inscription, ainsi que vous connectez puis vous pourrez établir votre candidature pour avoir une chance de participer au festival devant plusieurs milliers de personnes !</p>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
