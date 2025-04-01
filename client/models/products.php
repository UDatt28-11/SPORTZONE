<?php

function loadall_sanpham_home()
{
    $sql = "SELECT  sp.id, sp.name, sp.date_create, sp.description, sp.status, dm.category_id,
            MIN(hasp.main_image) as main_image
            FROM products sp 
            LEFT JOIN main_image hasp ON sp.id = hasp.id 
            LEFT JOIN categories dm ON sp.category_id = dm.category_id
            GROUP BY sp.id, sp.name, sp.date_create, sp.description, 
                     sp.status, dm.category_id
            ORDER BY sp.id DESC LIMIT 10  ";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadAllCategories() {
    $sql = "SELECT * FROM categories WHERE status = 1 ORDER BY name ASC"; // Assuming there's a 'trang_thai' field to filter active categories
    return pdo_query($sql);
}

