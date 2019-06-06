<?php

include_once '../models/TaskModel.php';
include_once '../models/UserModel.php';

function indexAction($smarty)
{
    $users = new UserModel();
    $tasks = new TaskModel();

    $count_show_pages = 3;

    //сохранение измененных данных
    if (isset($_POST['id'])) {
        //d($_POST,0);
        //d($_POST['task'][$_POST['id'] - ($count_show_pages+1)]);
        $tasks->updateRecordForId($_POST['task'][$_POST['id'] - ($count_show_pages+1)], $_POST['field'][$_POST['id'] - ($count_show_pages+1)], $_POST['id']);
    }

    //выход
    if ($_POST['logout'] == 'exit') {
        session_unset();
    }

    //добавление записи
    if ($_POST['add'] == 'add') {
        if ($_SESSION['admin'] != 0) $tasks->notAdmin = '';

        //Проверка email в БД
        $rsExistEmail = 0;
        $rUser ='';

        $rsUsers = $users->getAllUsers();
        foreach ($rsUsers as $key=>$item) {
            if ($item['1'] == $_POST['email']) {
                $rsExistEmail = $key;
                $rUser =$item['0'];
            }
        }

        if ($rsExistEmail == 0) {
            $user_Id = $users->addUser($_POST['name'], $_POST['email']);
            $tasks->addTask($_POST['addtask'], $user_Id, 0, $_POST['name'], $_POST['email']);
        } else {
            $tasks->addTask($_POST['addtask'], $rsExistEmail, 0,  $rUser, $_POST['email']);
        }

    }

    //авторизация под админом
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        if ($_POST['login'] == 'admin' && $_POST['password'] == '123') {

            $users->admin = 1;
            $tasks->notAdmin = '';
            $_SESSION['admin'] = $users->admin;
            $_SESSION['notAdmin'] = $tasks->notAdmin;
        }
    }

    //Сортировка по БД
    if ($_GET['sort']) {
        $sort = $_GET['sort'];
    } else $sort = 'id';

    // Пагинация
    //*
    $count_pages = 30;

    $url = "/index.tpl";
    $url_page = "/index.tpl?record=";

    if($_GET["record"]>=0) $active =  (int) $_GET["record"]; else $active=0;
    //*

    $rsTasks = $tasks->getAllTasks($sort,'ASC',$active, $count_show_pages);
    $rsUsers = $users->getAllUsers();


    $smarty->assign('pageTitle', 'Задачник');
    $smarty->assign('rsTasks', $rsTasks);
    $smarty->assign('rsUsers', $rsUsers);
    $smarty->assign('notAdmin', $tasks->notAdmin);
    $smarty->assign('admin', $_SESSION['admin']);
    $smarty->assign('status', $tasks->status);

    $smarty->assign('count_pages', $count_pages);
    $smarty->assign('active', $active);
    $smarty->assign('count_show_pages', $count_show_pages);
    $smarty->assign('url', $url);
    $smarty->assign('url_page', $url_page);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}

