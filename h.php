<?php
    include 'php/linkdb.php'; 
    
    $info = [];
    $info1=[];
    $info2=[];

if ($query = $db->query("SELECT * FROM pc")) {
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

if ($query = $db->query("SELECT * FROM services")) {
    $info1 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}
if ($query = $db->query("SELECT * FROM goods")) {
    $info2 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

$periphery = array(
    array('Мониторы','img/mon.jpg'),
    array('Мыши','img/mous.jpg'),
    array('Клавиатуры','img/key.jpg'),
    array('Наушники','img/headp.jpg'),
    array('Микрофоны','img/mic.jpg'),
    array('Коврики для мыши','img/carp.jpg'),
);
?>