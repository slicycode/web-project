<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-30 13:49:56
  from 'C:\laragon\www\tps\projet\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a62c042d0783_17436690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c53f24f84ae9ab8f406f15a3bee2a6fb1f62c6' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\candidature.tpl',
      1 => 1638280195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a62c042d0783_17436690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194580961261a62c042cf6a9_34827785', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97826286161a62c042d0142_60736210', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_194580961261a62c042cf6a9_34827785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_194580961261a62c042cf6a9_34827785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_97826286161a62c042d0142_60736210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_97826286161a62c042d0142_60736210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
<h1>Ma candidature</h1>
<p>Contenu de la candidature</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
