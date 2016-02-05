<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $project; ?> | <?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>media/bootstrap-3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>media/bootstrap-3.3.5/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>media/bootstrap-3.3.5/css/bootstrapValidator.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>media/font-awesome-4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>media/css/style.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>media/fusioncharts/js/fusioncharts.js"></script>   
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" onclick="location.href = '<?php echo base_url() ?>admin'"
                       href="#">HOME</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>


