<?php

//open connection
function connect() {
    $connection = mysqli_connect("localhost", "root", "", "patstore");
    return $connection;
}

//insert
function insert($sql) {
    $connection = connect();
    mysqli_query($connection, $sql);
    mysqli_close($connection);
}

//update
function update($sql) {
    $connection = connect();
    mysqli_query($connection, $sql);
    mysqli_close($connection);
}

//delete
function delete($sql) {
    $connection = connect();
    mysqli_query($connection, $sql);
    mysqli_close($connection);
}

//select
function select($sql) {
    $connection = connect();
    $table = mysqli_query($connection, $sql);

    $obj = mysqli_fetch_object($table);

    while ($obj != null) {
        $arr[] = $obj;
        $obj = mysqli_fetch_object($table);
    }
    mysqli_close($connection);
    return $arr;
}

