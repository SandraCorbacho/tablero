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
function existUser($db, $email, array &$data = null){
   
    try{   
         
        $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
        $stmt->execute([':email'=>$email]);
      
        $count=$stmt->rowCount();
        
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
        

        if($count==1){ 
            $data = $row;
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
      
        $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1;');
       
        $stmt->execute([':email'=>$mail]);
        $count=$stmt->rowCount();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);  
        
        if($count==1){  
           
            $user=$row[0];
            
            $res=password_verify($password,$user['password']);
            
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
function selectWithoutJoin($db, $table, string $joins,$fields, string $email):array{
    $sql="SELECT * FROM users INNER JOIN tasks on users.id = tasks.user INNER JOIN task_items on tasks.id = task_items.taskeid WHERE users.email='$email';";
    
    
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows; 
}

function registerUser($db,$data){
    
    $stmt = $db->prepare("INSERT INTO users (email,name,subname,password,role) values ('{$data['email']}','{$data['name']}', '{$data['surname']}', '{$data['pass']}', {$data['role']});");
    
    $stmt->execute();
    header('Location:/?url=home');
}

function registerRol($db){
    $sql1 = "INSERT INTO roles (role) values ('admin')";
    $sql2 = "INSERT INTO roles (role) values ('user')";
    $db->exec($sql1);
    $db->exec($sql2);

}
function insertTask($db, $data){
    $user=[];
   
    existUser($db, $data['email'], $user);
      
    $sql = "INSERT INTO tasks (description,user,start_date,finish_date) values ('{$data['description']}',{$user[0]['id']},'{$data['start_date']}','{$data['finish_date']}');";
    
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $stmt=$db->prepare("SELECT MAX(id) AS id FROM tasks;");
    $stmt->execute();
    $row=$stmt->fetchAll(PDO::FETCH_ASSOC);  
   
    $stmt = $db->prepare("INSERT INTO task_items (taskeId,completed,itemName) values ({$row[0]['id']},0,'{$data['description']}');");
    $stmt->execute();
    
  
}