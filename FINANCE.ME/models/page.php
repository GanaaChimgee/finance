<?php

class Page extends Model
{

    // Бүх вэбүүдийг базаас уншиж авах функц
    public function getList($is_published = false)
    {
        $sql = "SELECT * FROM pages where 1 ";

        if ($is_published) {
            $sql .= " and is_published=1 ";
        }

        return $this->db->query($sql);
    }

    // Вэб хуудсыг alias (slug) аар нь шүүж авч өгөх функц
    public function getByAlias($alias)
    {
        $alias = $this->db->escape($alias);
        $sql = "select * from pages where alias='$alias' limit 1";
        return $this->db->query($sql) ?? null;
    }
}