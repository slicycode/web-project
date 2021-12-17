<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-17 11:07:17
  from 'C:\laragon\www\ProjetWeb\web-project\templates\detailscandidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bc6f65564832_75798985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffa633ef26392478a35a15ec9fd8d405df4a7f0c' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\detailscandidature.tpl',
      1 => 1639739177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bc6f65564832_75798985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21037233361bc6f6555c095_55869850', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210285706461bc6f6555c8c1_33013962', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_21037233361bc6f6555c095_55869850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_21037233361bc6f6555c095_55869850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_210285706461bc6f6555c8c1_33013962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_210285706461bc6f6555c8c1_33013962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="ma__candidature">
    <div class="hero__img">
        <h1><?php echo $_smarty_tpl->tpl_vars['candidature']->value[2];?>
</h1>
        <a href="./liste_candidatures">Retourner à la liste</a>
        <img src="uploads/Photos/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[21];?>
"/>
    </div>

    <div class="content">
        <h3>Musique 1</h3>
        <audio
            controls
            src="uploads/Musiques/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[16];?>
">
            Your browser does not support the
                <code>audio</code> element.
        </audio>
        <h3>Musique 2</h3>
        <audio
            controls
            src="uploads/Musiques/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[17];?>
">
            Your browser does not support the
                <code>audio</code> element.
        </audio>
        <h3>Musique 3</h3>
        <audio
            controls
            src="uploads/Musiques/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[17];?>
">
            Your browser does not support the
                <code>audio</code> element.
        </audio>

        <div class="content__item">
            <h3>Département : </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[3];?>
</p>
        </div>
        
        <div class="content__item">
            <h3>Style : </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[5];?>
</p>
        </div>

        <div class="content__item">
            <h3>Youtube : </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[12];?>
</p>
        </div>

        <div class="content__item">
            <h3>Soundcloud : </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[11];?>
</p>
        </div>

        <div class="content__item">
            <h3>Site : </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[10];?>
</p>
        </div>

        <div class="content__item">
            <h3>Presentation : </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[8];?>
</p>
        </div>

        <div class="content__item">
            <h3>Experience : </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[9];?>
</p>
        </div>

        <div class="content__footer">
            <a href="uploads/DossiersPresse/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[19];?>
" download>
                Dossier
            </a>
            <a href="uploads/SACEM/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[23];?>
" download>
                SACEM
            </a>
            <a href="uploads/FicheTechnique/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[22];?>
" download>
                Fiche Technique
            </a>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
