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
           setcookie("ccookie",encrypt_decrypt('encrypt', $id), time() + (86400 * 30), "/",null,null,true);
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
        
         $i = encrypt_decrypt('decrypt', $_COOKIE['ccookie']);
        
        $stmt->bind_param("ss",$pass,$i);
   
        $stmt->execute();

        $stmt->store_result();
        
        $stmt->bind_result($id);

        $stmt->fetch();
        
            if($stmt->num_rows >0)
        {
           setcookie ("sessionuid",encrypt_decrypt('encrypt', $i), time() + (86400 * 30),"/",null,null,true);
           setcookie("ccookie",encrypt_decrypt('encrypt', $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']), time() + (86400 * 30), "/",null,null,true);
              return "t";
        }
        

       
       // echo sha1(1);
    }
    return "f";
}


function catalogeDisplay()
{
    $con = connect();
    
    $query = "select * from ArticalData";

    $result = $con->query($query);
    
    while($row = mysqli_fetch_row($result))
    {
           echo ' <div class="img">
				 <a target="_blank" href="prodDetail.php?id='.$row[0].'"><img src="images/'.$row[4].'" alt="2" width="110" height="90"></a>
				 <div class="desc">Price: '.$row[2].'$ <br> ('.$row[2].'% off)</div>
			</div>';  
        
    
    }
   
}

function productDetailDisplay(){

    $id = $_GET['id'];
    $con = connect();
    
    $stmt = $con->prepare("select * from ArticalData where id=?");
    $stmt->bind_param("s",$id);
    $stmt->execute();

    $result = $stmt->get_result();
    
    while($row = $result->fetch_assoc())
    {
        $tempString = '<div class = "col-sm-4 image">
                <img src="images/'.$row[4].'">
            </div>
            <div class = "col-sm-8 text">
                <div class="col-sm-12">
                    <h4>'.$row[1].'</h4>
                    <p>'.$row[5].'</p>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <div class="col-sm-5">
                            <label>Qty:</label>
                        </div>
                        <div class = "col-sm-6">
                            <select class="form-control">';
                for ($i=0; $i < $row[3]; $i++) { 
                    $num = $row[3]+1;
                    $tempString += '<option>'.$num.'</option>';
                }
            $tempString += '</select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <button type="button" class="btn btn-info">Add to Cart</button>
                    </div>
                </div>
            </div>';  

            echo $tempString;
        
    
    }
}

function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

function insert()
{
    $con = connect();
    
 
    
    for($i=22;$i<=26;$i++)
    {
           $r = rand(10,100);
           $q = "INSERT INTO `bluestore`.`ArticalData` (`id`, `Name`, `Price`, `Quantity`, `Image`) VALUES (NULL, 'clothes', $r, '2', '$i.jpg')";
        
           $con->query($q);
    }
}

//insert();
?>