<!--

 Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 Since Mar 31, 2016
 Time 4:29:42 PM
 Encoding UTF-8
 Project Aplikasi-Kebudayaan-Aceh
 Package Expression package is undefined on line 9, column 12 in Templates/Scripting/EmptyPHPWebPage.php.
  
-->
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">Aplikasi Kebudayaan Aceh</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="<?php echo base_url(); ?>index.php/admin"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/admin/kuliner"><i class="glyphicon glyphicon-dashboard"></i> Kuliner Aceh</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/admin/wisata"><i class="glyphicon glyphicon-dashboard"></i> Wisata Aceh</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/admin/musik"><i class="glyphicon glyphicon-dashboard"></i> Musik Aceh</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/admin/tarian"><i class="glyphicon glyphicon-dashboard"></i> Tarian Aceh</a>
            </li>
        </ul>
    </div>
</nav>
