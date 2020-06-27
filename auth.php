<?php
    // LOGIN
    function cek_username_login($username){
        global $link;
        $username = mysqli_real_escape_string($link,$username) ;

        $query = ("SELECT * FROM users WHERE username = '$username'");

        $result = mysqli_query($link,$query);

        if (mysqli_num_rows($result) != 0){
            return true;
        }
        else return false;
    }

    function cek_password($username,$password){

        global $link;

        $username = mysqli_real_escape_string($link,$username) ;
        $password = mysqli_real_escape_string($link,$password) ;

        $query = ("SELECT password FROM users WHERE username='$username'");

        $result = mysqli_query($link,$query);

        $data = mysqli_fetch_assoc($result)['password'];

        if($password == $data){
            return true;
        }
        else return false;

        // if(password_verify($password,$data)){
        //     return true;
        // }
        // else return false;


        die(print_r($data));

      
    }


