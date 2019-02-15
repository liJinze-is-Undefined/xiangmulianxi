<?php
    header("Content-Type: text/html;charset=utf-8");
    $con = mysql_connect("localhost:3307","root","root");
    if(!$con){
        die("数据库连接失败".mysql_error());
    };
    mysql_select_db("mylist",$con);

    $search_query = "SELECT * FROM goods";

    $res = mysql_query($search_query);

    $josn_array = array();

    while($row = mysql_fetch_array($res)){
        array_push($json_array,$row);
    }

    $json_array = json_encode($json_array);

    echo "{
        \"list\":$json_array
    }";

?>