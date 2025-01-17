<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-17 14:57:53
  from 'C:\laragon\www\ProjetWeb\web-project\templates\liste_candidatures.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bca57170d8b9_71882634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b8a314c1c7345ee120e86c465064d1fdcd3371' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\liste_candidatures.tpl',
      1 => 1639752907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bca57170d8b9_71882634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65991319861bca5717041f9_69108316', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9928853461bca571704a82_39902774', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_65991319861bca5717041f9_69108316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_65991319861bca5717041f9_69108316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des candidatures<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9928853461bca571704a82_39902774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9928853461bca571704a82_39902774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
    <h1>Liste des candidatures</h1>
    <div class="liste">
        <div class="liste__item">
            <p>Numéro</p>
        </div>

        <div class="liste__item">
            <p>Détails</p>
        </div>

        <div class="liste__item">
            <p>Supprimer</p>
        </div>

        <div class="liste__item">
            <p>Nom du groupe</p>
        </div>

        <div class="liste__item">
            <p>Département</p>
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

    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidatures']->value, 'candidature');
$_smarty_tpl->tpl_vars['candidature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['candidature']->value) {
$_smarty_tpl->tpl_vars['candidature']->do_else = false;
?>
    <div class="liste">
        <div class="liste__item">
            <p style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['candidature']->value[0];?>
</p>
        </div>

        <div class="liste__item">
            <a style="font-weight: bold;" href="./candidature-<?php echo $_smarty_tpl->tpl_vars['candidature']->value[0];?>
">Détails</a>
        </div>

        <div class="liste__item">
            <a style="font-weight: bold;" href="./supprimercandidature-<?php echo $_smarty_tpl->tpl_vars['candidature']->value[0];?>
">Supprimer</a>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[2];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[3];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[4];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[5];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[7];?>
</p>
        </div>

    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
/* {/block 'body'} */
}
