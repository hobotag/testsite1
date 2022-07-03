<?php

class News {

    /**
     * Returns single news item with specified id
     * $param integer $id
     */
    public static function getNewsitemById($id) {

        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news where id= ' . $id);

//        $result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    /**
     *  Returns an array of news items
     */
    public static function getnewsList() {

        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content, content, author_name, preview, type '
                . 'FROM news '
                . 'ORDER BY date DESC '
                . 'LIMIT 6');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['content'] = $row['content'];
            $newsList[$i]['author_name'] = $row['author_name'];
            $newsList[$i]['preview'] = $row['preview'];
            $newsList[$i]['type'] = $row['type'];
            $i++;
        }

        return $newsList;
    }

}
