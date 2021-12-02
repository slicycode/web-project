<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-02 11:14:58
  from 'C:\laragon\www\tps\projet\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a8aab29725f1_20429898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c53f24f84ae9ab8f406f15a3bee2a6fb1f62c6' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\candidature.tpl',
      1 => 1638443688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a8aab29725f1_20429898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212239238961a8aab2965ca6_36519993', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2064291361a8aab296e835_94103443', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_212239238961a8aab2965ca6_36519993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_212239238961a8aab2965ca6_36519993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2064291361a8aab296e835_94103443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2064291361a8aab296e835_94103443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
    <h1>Ma candidature</h1>
    <div class="candidature">
        <div class="candidature__img">
            <img src="https://images.unsplash.com/photo-1638309024787-1bd16766f123?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80">
        </div>

        <div class="candidature__desc">
            <h2>TITRE</h2>
            <p>audio</p>
            <p>DESCRIPTION</p>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
