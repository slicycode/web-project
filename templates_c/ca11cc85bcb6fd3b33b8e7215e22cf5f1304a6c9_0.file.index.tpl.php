<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-17 18:27:04
  from 'C:\laragon\www\tps\projet\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bcd6783cfae4_10716003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca11cc85bcb6fd3b33b8e7215e22cf5f1304a6c9' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\index.tpl',
      1 => 1639765607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bcd6783cfae4_10716003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128333836861bcd6783c8ef5_94072285', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69856406661bcd6783cde40_41651442', 'body');
?>
  <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_128333836861bcd6783c8ef5_94072285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_128333836861bcd6783c8ef5_94072285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_69856406661bcd6783cde40_41651442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_69856406661bcd6783cde40_41651442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='background__img'></div>
<div class='accueil'>
    <h1>Bienvenue sur le site du festival ! </h1>
    <p>Veuillez vous inscrire sur la page d'inscription, ainsi que vous connecter puis vous pourrez établir votre candidature pour avoir une chance de participer au festival devant plusieurs milliers de personnes !</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
