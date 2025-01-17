<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-06 17:43:49
  from 'C:\laragon\www\ProjetWeb\web-project\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ae4bd5502d81_14846241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1966bf327650a329030d69562579fd2cfa23f603' => 
    array (
      0 => 'C:\\laragon\\www\\ProjetWeb\\web-project\\templates\\register.tpl',
      1 => 1638812576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ae4bd5502d81_14846241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12391368061ae4bd54f3d71_23461721', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73536918961ae4bd54f4605_54972139', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_12391368061ae4bd54f3d71_23461721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12391368061ae4bd54f3d71_23461721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inscription<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_73536918961ae4bd54f4605_54972139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_73536918961ae4bd54f4605_54972139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app">
<h1>Inscrivez-vous</h1>
<form class="form" action="register" method="post">
    <div class="form__input">
        <label for="stacked-name">Nom *</label>
        <input autofocus="autofocus" name="nom" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-name" placeholder="Nom" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

    </div>
    <div class="form__input">
        <label for="stacked-name">Prénom *</label>
        <input autofocus="autofocus" name="prenom" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="text" id="stacked-name" placeholder="Prénom" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

    </div>
    <div class="form__input">
        <label for="stacked-name">Adresse *</label>
        <input name="adresse" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['adresse'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"  type="text" id="stacked-name" placeholder="Adresse" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['adresse'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

    </div>
     <div class="form__input">
        <label for="stacked-foo">Code postal *</label>
        <input name="codepostal" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['codepostal'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"  type="text" id="stacked-foo" placeholder="Code postal" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['codepostal'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

    </div>

    <div class="form__input">
        <label for="stacked-password">Mot de passe *</label>
        <input name="password" type="password" id="stacked-password" placeholder="Mot de passe" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['password'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

    </div>
    <div class="form__input">
        <label for="stacked-email">Email *</label>
        <input name="email" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="email" id="stacked-email" placeholder="Email" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
    </div>
    
    <div class="form__input">
        <label for="stacked-phone">Téléphone *</label>
        <input name="telephone" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['telephone'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" type="telephone" id="stacked-phone" placeholder="Téléphone" />
        <span class="erreur"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['telephone'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
    </div>

    <span style="opacity: .9; font-style: italic; margin-top:10px;">*Champs obligatoires</span>

    <div class="pure-controls">
        <button type="submit" class="pure-button pure-button-primary">S'inscrire</button>
    </div>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
