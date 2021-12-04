<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:08:44
  from 'C:\laragon\www\ProjetWeb\web-project\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab928c0c6d40_98280777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f46a41272ae6d432921af64a243e1f98e6b3562f' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\candidature.tpl',
      1 => 1638627281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab928c0c6d40_98280777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66052616561ab928c0c5e89_06603968', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55981780161ab928c0c6744_88304626', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_66052616561ab928c0c5e89_06603968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_66052616561ab928c0c5e89_06603968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_55981780161ab928c0c6744_88304626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_55981780161ab928c0c6744_88304626',
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
