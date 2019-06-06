<?php

class UserModel
{

    public $admin = 0;

    /**
     * @param $name
     * @param $email
     * @return int
     */
    function addUser($name, $email)
    {
        $sql = "INSERT INTO `users`(`id`, `name`, `email`) VALUES ('NULL','" . $name . "','" . $email . "')";
        mysql_query($sql);
        $lastId = mysql_insert_id();
        return $lastId;
    }

    /**
     * @return array
     */
    function getAllUsers()
    {
        $sql = 'SELECT * FROM users';

        $rs = mysql_query($sql);

        $smartyRS = array();
        while ($row = mysql_fetch_assoc($rs)) {
            $smartyRS[] = $row;
        }

        $smartyRS = $this->sortUser($smartyRS);

        return $smartyRS;
    }

    /**
     * @param $rsSmarty
     * @return array
     */
    function sortUser($rsSmarty)
    {
        $ms = [];
        foreach ($rsSmarty as $item) {
            $ms[$item['id']] = [$item['name'], $item['email']];
        }
        return $ms;
    }
}
