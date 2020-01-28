<?php

require_once 'DAL.php';
require_once 'cats.php';
//get data
function getCats(){
    $sql = "SELECT id,name,age,color FROM cats";
    
    $catsList = select($sql);
    
    foreach ($catsList as $p){
        $oopCats[] = new cats($p->id,$p->name, $p->name, $p->age ,$p->color);
    }
    return $oopCats;
}


//insert data
//function insertToData($productName,$catagoryName,$price,$units,$image,$date){
//    $sql = "INSERT INTO products(productName,catagoryName,price,unitsinStock,image,dateAdded) VALUES('$productName','$catagoryName','$price','$units','$image','$date')";
//    
//    insert($sql);
//    header("location: index.php");
//}

//delete
function deleteRow($id){
    $sql = "delete from cats where id = $id";
    delete($sql);
//    header("location: index.php");
}