<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url(); ?>assets/img/Logo.png"> 
    <!-- Custom fonts for this template-->
    <link href="<?php base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?php base_url(); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap5 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    
    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="<?php base_url(); ?>assets/dataTable/twitter-bootstrap.css" />
    <link rel="stylesheet" href="<?php base_url(); ?>assets/dataTable/dataTable.bootstrap.css" />
  
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fontawesome/css/all.min.css">

    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/style/sweetalert/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/style/sweetalert/sweetalert2.min.css">

    <!-- MyStyle -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/style/css/style.css"> 
   

</head>

<body id="page-top">
<?php 
    if(!$this->session->userdata()){
        redirect('/');
    }
?>