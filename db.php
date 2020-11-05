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
function existUser($db,$email){
    try{   
            
        $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
        $stmt->execute([':email'=>$email]);
        $count=$stmt->rowCount();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if($count==1){ 
            return true;   
        }else{
            return false;
        }
    }catch(PDOException $e){
        return false;
    }
}
function selectUser($db,$mail,$password){
    try{   
            
        $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
        $stmt->execute([':email'=>$email]);
        $count=$stmt->rowCount();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);  
        
        if($count==1){       
            $user=$row[0];
            $res=password_verify($pass,$user['passw']);
           
            if ($res){
            $_SESSION['name']=$user['name'];
            $_SESSION['email']=$user['email'];
       
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }catch(PDOException $e){
        return false;
    }
}
function selectWithoutJoin($db, $table, string $joins,$fields, int $user):array{
    $sql="SELECT * FROM users INNER JOIN tasks on users.id = tasks.user INNER JOIN task_items on tasks.id = task_items.taskeid WHERE users.id=8;";
    //"SELECT {$fields} FROM {$table} INNER JOIN {$joins} WHERE user=$user;";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows; 
}

function registerUser($db,$data){
    
    $stmt = $db->prepare("INSERT INTO users (email,name,subname,password,role) values ('{$data['email']}','{$data['name']}', '{$data['surname']}', '{$data['pass']}', {$data['role']});");
    //die($sql);
    $stmt->execute();
}

function registerRol($db){
    $sql1 = "INSERT INTO roles (role) values ('admin')";
    $sql2 = "INSERT INTO roles (role) values ('user')";
    $db->exec($sql1);
    $db->exec($sql2);

}