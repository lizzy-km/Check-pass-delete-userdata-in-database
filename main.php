<?php?>
 <!DOCTYPE html>
 <html lang="en">
     <head>
         <title></title>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="css/style.css" rel="stylesheet">
         <style>
             body{
                 color: green;
                 background-color: black;
             }
             #alert{

                width: 20%;
                 margin: auto;
                 margin-top:200px;
                 font-weight:bolder;
                 font-size: x-large;
                 text-shadow: 1px 2px 1px 1px greenyellow ;

             }
         </style>
     </head>
     <body>
         <div id="alert">
     <?php
include('config.php');
session_start();

$pass = $_POST['password'];
 $email = $_POST['email'];
 $name=$_POST['name'];
 $uppercase = preg_match('@[A-Z]@', $pass);
 $lowercase = preg_match('@[a-z]@', $pass);
 $number    = preg_match('@[0-9]@', $pass);
 $specialChars = preg_match('@[^\w]@', $pass);

if($uppercase && $lowercase && $number && $specialChars && strlen($pass) > 8) {
    $hash=password_hash($pass,PASSWORD_DEFAULT);
 $sql = "INSERT INTO user_data_2 (Email, Password, Name) VALUES ('$email', '$hash','$name')";
mysqli_query($conn,$sql);

 
header("Location: datatable.php" );
//  echo "Done!"."<br>"."<br>";
//  echo $hash."<br>"."<br>".$email."<br>"."<br>".$name;
//  echo "<br>".;

 }
//  uppercase
 elseif(!$uppercase&&$lowercase&&$number&&$specialChars&&strlen($pass) > 8){
     $_SESSION['u']="Your Pass Must Include Uppercase!";
         header("location:new.php");
     
}
//  lowercase
 elseif($uppercase&&$number&&$specialChars&& !$lowercase&&strlen($pass) > 8){
    $_SESSION['l']="Your Pass Must Include Lowercase!";
    header("location:new.php");
}
// number
 elseif($uppercase&&$lowercase&&$specialChars&& !$number&&strlen($pass) > 8){
    $_SESSION['n']="Your Pass Must Include number!";
    header("location:new.php");
}
//  specialChars
 elseif( $uppercase&&$lowercase&&!$specialChars&& $number&&strlen($pass) > 8 ){
    $_SESSION['s']="Your Pass Must Include SpecialChars!";
    header("location:new.php");
}
// pass
 elseif( $uppercase&&$lowercase&&$specialChars&& $number&&strlen($pass) < 8){
    $_SESSION['p']="Your Pass Must Be Mor Than 8 Chatacters!";
    header("location:new.php");
}
//  uppercase & lowercase
 elseif(!$uppercase&&!$lowercase&&$number&&$specialChars&&strlen($pass) > 8){
 $_SESSION['ul']="uppercase & lowercase";
 header("location:new.php");
}
//  uppercase & number
  elseif(!$uppercase&&$lowercase&&!$number&&$specialChars&&strlen($pass) > 8){
    $_SESSION['un']="uppercase & number";
    header("location:new.php");
}
 //  uppercase & specialchars
  elseif(!$uppercase&&$lowercase&&$number&&!$specialChars&&strlen($pass) > 8){
        $_SESSION['us']="uppercase & specialchars";
        header("location:new.php");
}
// uppercase & pass
 elseif(!$uppercase&&$lowercase&&$number&&$specialChars&&strlen($pass) < 8){
            $_SESSION['up']="uppercase & pass";
            header("location:new.php");
}
// lowercase & number
 elseif($uppercase&&!$lowercase&&!$number&&$specialChars&&strlen($pass) > 8){
                $_SESSION['ln']="lowercase & number";
                header("location:new.php");
}
// lowercase & specialchars
 elseif($uppercase&&!$lowercase&&$number&&!$specialChars&&strlen($pass) > 8){
                    $_SESSION['ls']="lowercase & specialchars";
                    header("location:new.php");
}
// lowercase & pass
 elseif($uppercase&&!$lowercase&&$number&&$specialChars&&strlen($pass) < 8){
                        $_SESSION['lp']="lowercase & pass";
                        header("location:new.php");
}
// number & specialchars
 elseif($uppercase&&$lowercase&&!$number&&!$specialChars&&strlen($pass) > 8){
                            $_SESSION['ns']="number & specialchars";
                            header("location:new.php");
}
// number & pass
 elseif($uppercase&&$lowercase&&!$number&&$specialChars&&strlen($pass) < 8){
                                $_SESSION['np']="number & pass";
                                header("location:new.php");
}
// specialchars & pass
 elseif($uppercase&&$lowercase&&$number&&!$specialChars&&strlen($pass) < 8){
                                    $_SESSION['sp']="specialchars & pass";
                                    header("location:new.php");
}
// uppercase & lowercase & number
 elseif(!$uppercase&&!$lowercase&&!$number&&$specialChars&&strlen($pass) > 8){
                                        $_SESSION['uln']="uppercase & lowercase & number";
                                        header("location:new.php");
}
// upppercase & lowercase & specialchars
 elseif(!$uppercase&&!$lowercase&&$number&&!$specialChars&&strlen($pass) > 8){
                                            $_SESSION['uls']="upppercase & lowercase & specialchars";
                                            header("location:new.php");
}
// uppercae & lowercase & pass
 elseif(!$uppercase&&!$lowercase&&$number&&$specialChars&&strlen($pass) < 8){
                                                $_SESSION['ulp']="uppercae & lowercase & pass";
                                                header("location:new.php");
}
// uppercase & number & specialchars
 elseif(!$uppercase&&$lowercase&&!$number&&!$specialChars&&strlen($pass) > 8){
                                                    $_SESSION['uns']="uppercase & number & specialchars";
                                                    header("location:new.php");
}
// uppercase & number & pass
    elseif(!$uppercase&&$lowercase&&!$number&&$specialChars&&strlen($pass) < 8){
                                                        $_SESSION['unp']="uppercase & number & pass";
                                                        header("location:new.php");
}
// uppercase & specialchars & pass
 elseif(!$uppercase&&$lowercase&&$number&&!$specialChars&&strlen($pass) < 8){
                                                            $_SESSION['usp']="uppercase & specialchars & pass";
                                                            header("location:new.php");
}
// lowercase & number & specialchars
 elseif($uppercase&&!$lowercase&&!$number&&!$specialChars&&strlen($pass) > 8){
                                                                $_SESSION['lns']=" lowercase & number & specialchars";
                                                                header("location:new.php");
}
// lowercase & number & pass
 elseif($uppercase&&!$lowercase&&!$number&&$specialChars&&strlen($pass) < 8){
                                                                    $_SESSION['lnp']=" lowercase & number & pass";
                                                                    header("location:new.php");
}
// lowercase & specialchars & pass
 elseif($uppercase&&!$lowercase&&$number&&!$specialChars&&strlen($pass) < 8){
    $_SESSION['lsp']=" lowercase & specialchars & pass";
    header("location:new.php");
}
// number & specialchars & pass
 elseif($uppercase&&$lowercase&&!$number&&!$specialChars&&strlen($pass) < 8){
                                                                        $_SESSION['nsp']="number & specialchars & pass";
                                                                        header("location:new.php");
}
// uppercase & lowercase & number & specialchars
 elseif(!$uppercase&&!$lowercase&&!$number&&!$specialChars&&strlen($pass) > 8){
                                                                            $_SESSION['ulns']=" uppercase & lowercase & number & specialchars";
                                                                            header("location:new.php");
}
// uppercase & lowercase & number & pass
 elseif(!$uppercase&&!$lowercase&&!$number&&$specialChars&&strlen($pass) < 8){
                                                                                $_SESSION['ulnp']="uppercase & lowercase & number & pass";
                                                                                header("location:new.php");
}
// uppercase & lowercase & specialchars & pass
 elseif(!$uppercase&&!$lowercase&&$number&&!$specialChars&&strlen($pass) < 8){
    $_SESSION['ulsp']="uppercase & lowercase & number & pass";
    header("location:new.php");
}
// uppercase & number & specialchars & pass
 elseif(!$uppercase&&$lowercase&&!$number&&!$specialChars&&strlen($pass) < 8){
                                                                                    $_SESSION['unsp']="uppercase & number & specialchars & pass";
                                                                                    header("location:new.php");
}
// lowercase & number & specialchars & pass
 elseif($uppercase&&!$lowercase&&!$number&&!$specialChars&&strlen($pass) < 8){
                                                                                        $_SESSION['lnsp']="lowercase & number & specialchars & pass";
                                                                                        header("location:new.php");
}
// ERROR1
 elseif(!$uppercase&&!$lowercase&&!$number&&!$specialChars&&strlen($pass) < 8){
                                                                                            $_SESSION['error']="Out of policy!";
                                                                                            header("location:new.php");
 }

 ?>
 </div>
     </body>
 </html>
