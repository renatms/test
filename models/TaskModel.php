<?php

class TaskModel
{
    public $notAdmin = 'disabled="disabled"';
    public $status = [0 => 'Не выполнено', 1 => 'Выполнено'];

    /**
     * @param $task
     * @param $user_id
     * @param $status
     * @param $user_sort
     * @param $task_sort
     */
    function addTask($task, $user_id, $status, $user_sort, $task_sort)
    {
        $sql = "INSERT INTO `tasks`(`id`, `task`, `user_id`, `status`, `user_sort`, `email_sort`) 
            VALUES ('NULL','" . $task . "','" . $user_id . "','" . $status . "','" . $user_sort . "','" . $task_sort . "')";
        //d($sql);
        mysql_query($sql);
    }

    /**
     * @param $task
     * @param $st
     * @param $id
     */
    function updateRecordForId($task, $st, $id)
    {
        $sql = "UPDATE `tasks` SET `task`='" . $task . "', `status`=" . $st . " WHERE id=" . $id;
        //d($sql);
        mysql_query($sql);
    }

    /**
     * @param $sort
     * @param string $sort_ASC
     * @param $active
     * @param $count
     * @return array
     */
    function getAllTasks($sort, $sort_ASC = 'ASC', $active, $count)
    {
        //$sql = 'SELECT * FROM tasks';
        //if($active<0) $active=0;
        $sql = "SELECT * FROM tasks ORDER BY {$sort} {$sort_ASC} LIMIT {$active},{$count}";
        //d($sql);
        $rs = mysql_query($sql);

        $smartyRS = array();
        while ($row = mysql_fetch_assoc($rs)) {
            $smartyRS[] = $row;
        }

        return $smartyRS;
    }

}

