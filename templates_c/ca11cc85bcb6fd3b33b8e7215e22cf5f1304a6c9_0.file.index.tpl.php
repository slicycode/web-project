<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-30 08:50:22
  from 'C:\laragon\www\tps\projet\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a5e5ce15d296_26101146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca11cc85bcb6fd3b33b8e7215e22cf5f1304a6c9' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\index.tpl',
      1 => 1638262220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a5e5ce15d296_26101146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46385991761a5e5ce158318_58456427', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176724281261a5e5ce15b249_26928293', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_46385991761a5e5ce158318_58456427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_46385991761a5e5ce158318_58456427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_176724281261a5e5ce15b249_26928293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_176724281261a5e5ce15b249_26928293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
    <h1>Accueil</h1>
    <p>Voici l'accueil</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
