<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-17 14:03:31
  from 'C:\laragon\www\ProjetWeb\web-project\templates\liste_utilisateurs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bc98b3a5a802_66961116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2c653331a27c48b159890b7770c1107070eb21' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\liste_utilisateurs.tpl',
      1 => 1639749761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bc98b3a5a802_66961116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11157892361bc98b3a50040_38669499', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84509503061bc98b3a50910_99899427', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_11157892361bc98b3a50040_38669499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11157892361bc98b3a50040_38669499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des candidatures<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_84509503061bc98b3a50910_99899427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_84509503061bc98b3a50910_99899427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='app'>
    <h1>Liste des utilisateurs</h1>
    <div class="liste">
        <div class="liste__item">
            <p>Numéro</p>
        </div>

        <div class="liste__item">
            <p>Nom</p>
        </div>

        <div class="liste__item">
            <p>Prénom</p>
        </div>

        <div class="liste__item">
            <p>Email</p>
        </div>

        <div class="liste__item">
            <p>Adresse</p>
        </div>

        <div class="liste__item">
            <p>Code postal</p>
        </div>

        <div class="liste__item">
            <p>Téléphone</p>
        </div>

        <div class="liste__item">
            <p>Administrateur</p>
        </div>

    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['utilisateurs']->value, 'utilisateur');
$_smarty_tpl->tpl_vars['utilisateur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['utilisateur']->value) {
$_smarty_tpl->tpl_vars['utilisateur']->do_else = false;
?>
    <div class="liste">
        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value[0];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value[1];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value[2];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value[3];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value[5];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value[6];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value[7];?>
</p>
        </div>

        <div class="liste__item">
            <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value[8];?>
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
