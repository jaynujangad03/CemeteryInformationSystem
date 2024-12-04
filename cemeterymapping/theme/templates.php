<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo htmlspecialchars($title ?? 'Cemetery Mapping and Information System'); ?> | Cemetery Mapping and Information System</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- datetime picker CSS -->
    <link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    
    <link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">
    <link rel="icon" href="<?php echo web_root; ?>img/favicon.ico" type="image/x-icon">
    
    <style type="text/css">
        .p {
            color: white;
            margin-bottom: 0;
            margin-top: 0;
            list-style: none;
        }

        .p > a { 
            color: white;
            text-decoration: none;
            background-color: #0000FF;
        }

        .p > a:hover, .p > a:focus {
            color: black;
            background-color: #2d52f2;
        }

        .title-logo {
            color: black;
            text-decoration: none;
            font-size: 50px;
            font-family: "broadway";
            padding: 0;
            margin: 0;
            top: 0;
        }

        .title-logo:hover {
            color: blue;
            text-decoration: none;
        }

        .carttxtactive {
            color: red;
            font-weight: bold;
            box-shadow: red;
        }

        .carttxtactive:hover {
            color: white;
        }
    </style>

    <?php
    if (isset($_SESSION['gcCart'])) {
        if (count($_SESSION['gcCart']) > 0) {
            $cart = '<label class="label label-danger">' . count($_SESSION['gcCart']) . '</label>';
        } 
    } 
    ?>
</head>

</body style="background-color:#e0e4e5" onload="totalprice()">

    <div class="navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <h5 class="navbar-menu p">Cemetery Mapping and Information System</h5>
                <button type="button" class="navbar-toggle btn-xs p" data-toggle="collapse" data-target=".smMenu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
            </div>
            <div class="collapse navbar-collapse smMenu"> 
                <ul class="navbar-nav p navbar-left tooltip-demo" style="margin-left:-8%;"> 
                    <li class="dropdown dropdown-toggle">
                        <a data-toggle="tooltip" data-placement="bottom" title="Cemetery Mapping and Information System" href="#"> 
                            <i class="fa fa-info fa-fw"></i>   
                        </a>
                    </li> 
                </ul>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:-2%"> 
        <div class="col-md-12" style="margin-bottom: 9px;">
            <div class="row">
                <?php require_once 'banner.php'; ?>
            </div>
        </div>
    </div>

    <div class="navbar navbar-static-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-menu p">Menu</div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bigMenu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
            </div>

            <div class="collapse navbar-collapse bigMenu" style="float:left">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-toggle <?php echo (isset($_GET['q']) && $_GET['q'] == '') ? "active" : ""; ?>">
                        <a href="<?php echo web_root . 'index.php'; ?>"> Home</a>
                    </li>
                    <li class="dropdown dropdown-toggle <?php echo (isset($_GET['q']) && $_GET['q'] == 'person') ? "active" : ""; ?>">
                        <a href="<?php echo web_root . 'index.php?q=person'; ?>"> Deceased Person</a>
                    </li>
                    <li class="dropdown-toggle <?php echo (isset($_GET['q']) && $_GET['q'] == 'contact') ? "active" : ""; ?>">
                        <a href="<?php echo web_root . 'index.php?q=contact'; ?>"> Contact Us</a>
                    </li>
                    <li class="dropdown-toggle <?php echo (isset($_GET['q']) && $_GET['q'] == 'about') ? "active" : ""; ?>">
                        <a href="<?php echo web_root . 'index.php?q=about'; ?>"> About Us</a>
                    </li>
                    <li class="dropdown-toggle <?php echo (isset($_GET['q']) && $_GET['q'] == 'reserve') ? "active" : ""; ?>">
                        <a href="<?php echo web_root . 'index.php?q=reserve'; ?>"> Reservation</a>
                    </li>
                </ul>           
            </div> 
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="page-wrapper">
                <?php
                if($title == 'Profile' or $title == 'Track Order'){
                    echo '<div class="row">';
                    require_once $content;
                    echo '</div><br/>';
                } else {
                    if (isset($_GET['category'])) {
                        $categid = isset($_GET['category']) ? $_GET['category'] : ''; 
                        $sql = "SELECT * FROM `tbltype` WHERE `TYPEID` = " . $categid;
                        $mydb->setQuery($sql);
                        $cur = $mydb->loadSingleResult();
                    }
                    ?>

                    <?php if (!isset($_GET['graveno'])): ?>
                        <div class="row">
                            <div class="col-lg-3">
                                <?php require_once "leftbar.php"; ?>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <b><?php echo $title . (isset($cur->TYPES) ? ' | ' . $cur->TYPES : ''); ?></b>
                                    </div>
                                    <div class="panel-body"> 
                                        <?php require_once $content; ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <?php require_once "sidebar.php"; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['graveno'])): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <b>Map Section | <a href="#" class="findgrave" style="color: red"><?php echo (isset($_GET['name']) ? $_GET['name'] : ''); ?></a></b>
                                    </div>
                                    <div class="panel-body"> 
                                        <?php require_once "map.php"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer class="panel-footer" style="background-color:#000;color:white">
        <p align="left">&copy; Cemetery Mapping and Information System</p>
    </footer>
</body>
</html>
