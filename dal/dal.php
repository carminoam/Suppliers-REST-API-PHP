<?php

function connect() {
    $conn = mysqli_connect("localhost", "root", "", "northwind");
    return $conn;
}

function select($sql) {
    $conn = connect();
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($result);

    while($row) {
        $table[] = $row;
        $row = mysqli_fetch_object($result);
    }

    mysqli_close($conn);

    return $table;
    
}

function execute($sql) {

    $conn = connect();

    mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    mysqli_close($conn);

    return $id;
    
}
