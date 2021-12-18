<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-18 15:13:45
  from 'C:\laragon\www\tps\projet\templates\liste_candidatures.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bdfaa9c69fc3_98189862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a2c4ff92a138aa812008a31f67b97de613dc37c' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\liste_candidatures.tpl',
      1 => 1639840423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bdfaa9c69fc3_98189862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121890742461bdfaa9c52c81_64797689', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105140131861bdfaa9c54366_03563473', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_121890742461bdfaa9c52c81_64797689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_121890742461bdfaa9c52c81_64797689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des candidatures<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_105140131861bdfaa9c54366_03563473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_105140131861bdfaa9c54366_03563473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
    <h1>Liste des candidatures</h1>
    <div class="liste__categories">
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
            <a style="font-weight: bold; color: #000;" href="./candidature-<?php echo $_smarty_tpl->tpl_vars['candidature']->value[0];?>
">Détails</a>
        </div>

        <div class="liste__item">
            <a style="font-weight: bold; color: #000;" href="./supprimercandidature-<?php echo $_smarty_tpl->tpl_vars['candidature']->value[0];?>
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
