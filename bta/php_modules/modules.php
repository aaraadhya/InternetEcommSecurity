<?php

include 'config.php';


function credentialCheck($u,$q)
{
    $con = connect();
    
//    $query="select * from userData";
//
//    $result = $con->query($query);
//    
//    echo mysqli_num_rows($result);
//    
//    $row = mysqli_fetch_row($result);
  
    if( $stmt = $con->prepare("select id,FirstName from userData where userName=? and Personal_ans=?"))
    {
        
        $stmt->bind_param("ss",$u,$q);
   
        $stmt->execute();

        $stmt->store_result();
        
        $stmt->bind_result($id,$fname);

        $stmt->fetch();
        
          if($stmt->num_rows > 0)
        {
           setcookie("sessionuid", $id, time() + (86400 * 30), "/");
              return false;
        }

       
       // echo sha1(1);
    }
    return true;
}

function passwordCheck($pass)
{
    $con = connect();
    
    if( $stmt = $con->prepare("select id from userData where Password=? and id=?"))
    {
        
        $i = $_COOKIE['sessionuid'];
        
        $stmt->bind_param("ss",$pass,$i);
   
        $stmt->execute();

        $stmt->store_result();
        
        $stmt->bind_result($id);

        $stmt->fetch();
        
          if($stmt->num_rows <=0)
        {
           setcookie ("sessionuid", "", time() + (86400 * 30),"/");
              return true;
        }
        

       
       // echo sha1(1);
    }
    
}



?>