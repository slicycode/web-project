<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-04 16:08:31
  from 'C:\laragon\www\ProjetWeb\web-project\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ab927fe82505_46687161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a802f888106169c183b29920e3f05a59baf264e' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\index.tpl',
      1 => 1638627281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab927fe82505_46687161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118772356561ab927fe80ab9_18491769', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163660401061ab927fe81e97_89579794', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_118772356561ab927fe80ab9_18491769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_118772356561ab927fe80ab9_18491769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_163660401061ab927fe81e97_89579794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_163660401061ab927fe81e97_89579794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
    <div class='accueil'>
        <h1>Bienvenue sur le site du festival *insérer un nom* ! </h1>
        <span>Du 27 au 29 Juin 2022</span>
        <p>Veuillez vous inscrire sur la page d'inscription, ainsi que vous connecter puis vous pourrez établir votre candidature pour avoir une chance de participer au festival devant plusieurs milliers de personnes !</p>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
