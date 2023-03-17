
<?php
//fistpage button
$_conn=mysqli_connect('localhost','root','','Bankers') or die('Connection failed:'.mysqli_connect_error());


    if( isset($_POST['login']) ){  //&& (isset($_POST['submit']))


        if(isset($_POST['uname']) && isset($_POST['psw'])){
            $username= $_POST['uname'];
            $password= $_POST['psw'];

            // echo $username;
            //$sqli="INSERT INTO 'UserData' ('username','password') VALUES ('$username','$password')";
            $sql = "select * from  newusers where username='$username' && password = '$password' limit 1";
            $result = $_conn -> query($sql);
            // $row = $result -> fetch_assoc();

            if ($result = $_conn -> query($sql)){
                $row = $result -> fetch_row();
                // if(isset($row['username'])){
                if(count($row)){   
                // if($row['username'] != null){
                    
                    echo 'Login Successful';
                }else{
                    echo 'Login Failed 1';
                    
                }
            }else{
                echo 'Login Failed 0';
            }

        }else{
            echo 'alert("Fill in all required details)';
        }

    }

    else if(isset($_POST['register'])){

        $username= $_POST['user_name'];
        $first_name= $_POST['first_name'];
        $last_name= $_POST['last_name'];
        $e_mail= $_POST['e_mail'];
        $phone= $_POST['phone'];
        $address= $_POST['address'];
        $city_name= $_POST['city_name'];
        $password= $_POST['password'];
        $state= $_POST['state'];

        // echo $username;
        //$sqli="INSERT INTO 'UserData' ('username','password') VALUES ('$username','$password')";
        $sql = "INSERT INTO `newusers`(`firstName`, `lastName`, `emailAddress`, `phone`, `address`, `city`, `password`, `state`, `username`) 
                VALUES('$first_name', '$last_name', '$e_mail', '$phone', '$address', '$city_name', '$password', '$state' ,'$username')";
        // echo $sql;
        //$query=mysqli_query($_conn,$sql);
        if($_conn->query($sql) === TRUE){
            echo 'Entry Insertion Successful';
        }
        else {
            echo 'Error Occured';
        }

    }



?>