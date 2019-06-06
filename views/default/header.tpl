<html>
<head>
    <link rel="stylesheet" href="{$templateWebPath}css/main.css" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>{$pageTitle}</title>
</head>
<body>
<div id="header">
    <h1>Задачник</h1>
</div>
{if $admin==0}
    <form action="/IndexController.php" method="post" class="form-inline">
        <input type="text" class="input-small" placeholder="Login" name="login">
        <input type="password" class="input-small" placeholder="Password" name="password">
        <button type="submit" class="btn">Войти</button>
    </form>
{else}
    <form action="/IndexController.php" method="post" class="form-inline">
        <button type="submit" class="btn" name="logout" value="exit">Выйти</button>
    </form>
{/if}

{*{include file = 'leftcolumn.tpl'}*}

<div id="centerColumn">
