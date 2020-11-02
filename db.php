<?php
function selectAll($db, $table, array $fields=null):array{
    if(is_array($fields)){
        $columns = implode(',', $fields);
    }else{
        $columns = '*';
    }
    $sql = "SELECT {$columns} FROM $table";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows; 
}

function selectWithoutJoin($db, $table, array $joins=null):array{
    $sql="SELECT {$fields} FROM {$table} INNER JOIN {inners}";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows; 
}

function registerUser($db,$data){
    die($db);
    //$sql = "INSERT INTO users (email,name,subname,password,role) values ('{$data['email']}','{$data['name']}', '{$data['surname']}', '{$data['pass']}', {$data['role']});";
    //$db->exec($sql);
}

function registerRol($db){
    $sql1 = "INSERT INTO roles (role) values ('admin')";
    $sql2 = "INSERT INTO roles (role) values ('user')";
    $db->exec($sql1);
    $db->exec($sql2);

}