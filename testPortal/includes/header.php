<?php

error_reporting(E_ALL);

if (file_exists('Model/Model.php')){
    require_once 'Model/Model.php';
}else{
    require_once './Model/Model.php';
}
$dbModel = Model::instance();

?>
<html>
<head>
    <title>Test Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <style>
        #wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  
}
    </style>
</head>
<body>