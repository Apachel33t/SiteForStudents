<?php


class ConnectDB
{
    protected static mysqli $sql;

    // Инициализируем соединение с субд
    public function __construct()
    {
        $db_host = 'localhost';
        $db_port = '3306';
        $db_user = 'root';
        $db_password = '2601';
        $db_name = 'lead_collections';
        try {
            self::$sql = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);
            if (self::$sql->errno) {
                echo self::$sql->error;
            }
        } catch (Exception $e) {
            throw new Exception('Не удалось установить соединение с базой.');
        }
    }
}