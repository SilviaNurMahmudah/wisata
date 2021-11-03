<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rute</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>https://objectstorage.ap-melbourne-1.oraclecloud.com/p/Zgbj48rtjoiRC1X2mGJ7Pe-sl4Czq_BaAtsOpel-z_TOGKl21977C9GTi4UT92vG/n/ax5kbrxjysuz/b/Uminur/o/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="<?php echo base_url(); ?>assets/css/styleutama.css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>https://objectstorage.ap-melbourne-1.oraclecloud.com/p/Zgbj48rtjoiRC1X2mGJ7Pe-sl4Czq_BaAtsOpel-z_TOGKl21977C9GTi4UT92vG/n/ax5kbrxjysuz/b/Uminur/o/styleutama2.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <?php echo $map['js']; ?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <!-- <a class="navbar-brand" href="index.html">Business Casual</a>
            </div> -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav">
                <li>
                        <a href="<?php echo base_url() ?>index.php">Wisata Malang Kota</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url() ?>index.php">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/destinasi">Destinasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/info_penting">Info Penting</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Rute</strong>
                    </h2>
                    <hr>
                </div>
                                    <?php
                                    $no=1;
                                          if(isset($lokasi)){
                                                foreach($lokasi as $row){
                                            ?>
                                        <div align="center"><img src="<?php echo base_url('uploads/'.$row->gambar) ?>" width="1110px" height="400px"><br><br></div>
                                          
                                        </tr>
                                    <?php }
                                             }
                                                ?>
                <div class="col-md-12">
                    <?php echo $map['html']; ?>
                    <div id="directionsDiv"></div>
                </div>
                
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Sekilas Informasi</strong>
                    </h2>
                    <hr>
                <?php echo $row->informasi; ?></div>
 </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>https://objectstorage.ap-melbourne-1.oraclecloud.com/p/Zgbj48rtjoiRC1X2mGJ7Pe-sl4Czq_BaAtsOpel-z_TOGKl21977C9GTi4UT92vG/n/ax5kbrxjysuz/b/Uminur/o/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>https://objectstorage.ap-melbourne-1.oraclecloud.com/p/Zgbj48rtjoiRC1X2mGJ7Pe-sl4Czq_BaAtsOpel-z_TOGKl21977C9GTi4UT92vG/n/ax5kbrxjysuz/b/Uminur/o/bootstrap.min.js"></script>

</body>

</html>
