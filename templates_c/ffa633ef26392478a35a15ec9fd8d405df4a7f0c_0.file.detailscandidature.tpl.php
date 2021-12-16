<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 17:56:05
  from 'C:\laragon\www\ProjetWeb\web-project\templates\detailscandidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb7db5d01df2_90760174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffa633ef26392478a35a15ec9fd8d405df4a7f0c' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\detailscandidature.tpl',
      1 => 1639677364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb7db5d01df2_90760174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194152975861bb7db5cf8647_78997354', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19482464461bb7db5cf9038_92509385', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_194152975861bb7db5cf8647_78997354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_194152975861bb7db5cf8647_78997354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19482464461bb7db5cf9038_92509385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19482464461bb7db5cf9038_92509385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
    <h1><?php echo $_smarty_tpl->tpl_vars['candidature']->value[2];?>
</h1>
    <a href="./liste_candidatures">Retourner à la liste</a>
    <img src="uploads/Photos/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[21];?>
"/>
    <p>Musique 1</p>
    <audio
        controls
        src="uploads/Musiques/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[16];?>
">
        Your browser does not support the
            <code>audio</code> element.
    </audio>
    <p>Musique 2</p>
    <audio
        controls
        src="uploads/Musiques/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[17];?>
">
        Your browser does not support the
            <code>audio</code> element.
    </audio>
    <p>Musique 3</p>
    <audio
        controls
        src="uploads/Musiques/<?php echo $_smarty_tpl->tpl_vars['candidature']->value[17];?>
">
        Your browser does not support the
            <code>audio</code> element.
    </audio>
    <p>Département : </p>
    <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[3];?>
</p>
    <p>Style : </p>
    <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[5];?>
</p>
    <p>Youtube : </p>
    <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[12];?>
</p>
    <p>Soundcloud : </p>
    <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[11];?>
</p>
    <p>Site : </p>
    <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[10];?>
</p>
    <p>Presentation : </p>
    <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[8];?>
</p>
    <p>Experience : </p>
    <p><?php echo $_smarty_tpl->tpl_vars['candidature']->value[9];?>
</p>
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
	<a href="./liste_candidatures">Retourner à la liste</a>
<?php
}
}
/* {/block 'body'} */
}
