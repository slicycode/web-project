<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 15:57:25
  from 'C:\laragon\www\tps\projet\templates\liste_candidatures.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb61e513b9a6_81845799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a2c4ff92a138aa812008a31f67b97de613dc37c' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\liste_candidatures.tpl',
      1 => 1639670243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb61e513b9a6_81845799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136802872361bb61e513aaf2_53139350', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89614670861bb61e513b410_24480249', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_136802872361bb61e513aaf2_53139350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_136802872361bb61e513aaf2_53139350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des candidatures<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_89614670861bb61e513b410_24480249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_89614670861bb61e513b410_24480249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
    <h1>Liste des candidatures</h1>
    <div class="liste">
        <div class="liste__item">
            <p style="font-weight: bold;">0</p>
        </div>

        <div class="liste__item">
            <a href="./candidature">Détails</a>
        </div>

        <div class="liste__item">
            <p>Nom du groupe</p>
        </div>

        <div class="liste__item">
            <p>Département</p>
        </div>

        <div class="liste__item">
            <p>Adresse</p>
        </div>

        <div class="liste__item">
            <p>Scène</p>
        </div>

        <div class="liste__item">
            <p>Style de musique</p>
        </div>

        <div class="liste__item">
            <p>Date de création</p>
        </div>

        <div class="liste__item">
            <p>Présentation</p>
        </div>

        <div class="liste__item">
            <p>Expérience</p>
        </div>

    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
