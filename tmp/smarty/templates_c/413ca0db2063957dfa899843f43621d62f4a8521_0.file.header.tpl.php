<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-02 22:57:50
  from 'D:\Programs\Openserver\OSPanel\domains\testmade\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5cf42a3e99f9b3_16108495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '413ca0db2063957dfa899843f43621d62f4a8521' => 
    array (
      0 => 'D:\\Programs\\Openserver\\OSPanel\\domains\\testmade\\views\\default\\header.tpl',
      1 => 1559505425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf42a3e99f9b3_16108495 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
<div id="header">
    <h1>Задачник</h1>
</div>
<?php if ($_smarty_tpl->tpl_vars['admin']->value == 0) {?>
    <form action="/IndexController.php" method="post" class="form-inline">
        <input type="text" class="input-small" placeholder="Login" name="login">
        <input type="password" class="input-small" placeholder="Password" name="password">
        <button type="submit" class="btn">Войти</button>
    </form>
<?php } else { ?>
    <form action="/IndexController.php" method="post" class="form-inline">
        <button type="submit" class="btn" name="logout" value="exit">Выйти</button>
    </form>
<?php }?>


<div id="centerColumn">
<?php }
}
