<?php
    require 'Config.php';
    require_once 'SendMail.php';
    $uploads_dir = '../Resource/upload';
    ob_start();
    session_start();
    //check register
    if(isset($_POST['register'])){
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $image_front_id = $_FILES['image_front_id']['name'];
        $image_back_id = $_FILES['image_back_id']['name'];
        $image_front_id_tmp = $_FILES['image_front_id']['tmp_name'];
        $image_back_id_tmp = $_FILES['image_back_id']['tmp_name'];
        $image_front_id_size = $_FILES['image_front_id']['size'];
        $image_back_id_size = $_FILES['image_back_id']['size'];
        $image_front_id_type = $_FILES['image_front_id']['type'];
        $image_back_id_type = $_FILES['image_back_id']['type'];
        $image_front_id_error = $_FILES['image_front_id']['error'];
        $image_back_id_error = $_FILES['image_back_id']['error'];
        $image_front_id_ext = explode('.', $image_front_id);
        $image_back_id_ext = explode('.', $image_back_id);
        $image_front_id_ext = strtolower(end($image_front_id_ext));
        $image_back_id_ext = strtolower(end($image_back_id_ext));
        $image_front_id_new_name = uniqid('', true).'.'.$image_front_id_ext;
        $image_back_id_new_name = uniqid('', true).'.'.$image_back_id_ext;
        $image_front_id_destination = $uploads_dir.'/'.$image_front_id_new_name;
        $image_front_id_destination_db = '../upload/';
        $image_back_id_destination = $uploads_dir.'/'.$image_back_id_new_name;
        $image_back_id_destination_db = '../upload/';
        //username is a string have 9 length with random 0-9 characters
        $username = substr(str_shuffle('0123456789'), 0, 9);
        $password = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,6);

        //insert data
        if(empty($phone_error) && empty($email_error) && empty($dob_error) && empty($image_front_id_error) && empty($image_back_id_error)){
            $sql_insert = "INSERT INTO __account(phone, email, dob, frontImg, backImg,username,password,status,error) VALUES('$phone', '$email', '$dob', 
            '$image_front_id_destination_db', '$image_back_id_destination_db','$username','$password',0,0)";
            if(mysqli_query($conn, $sql_insert)){
                move_uploaded_file($image_front_id_tmp, $image_front_id_destination);
                move_uploaded_file($image_back_id_tmp,$image_back_id_destination);
                
            }else{
                echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
            }
            //send mail
            sendMail($username, $password, $email);
            //render to log in
            header('Location: ../View/login.php');
        }
        
        
    }
?>