<?php
class items extends Db
{
    public function getAllItems()
    {
        $sql = self::$connection->prepare("SELECT *FROM items");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getFeaturedItem()
    {
        $sql = self::$connection->prepare("SELECT * FROM `items`
        WHERE `featured` = 1 ORDER BY `created_at` DESC LIMIT ?.?");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
