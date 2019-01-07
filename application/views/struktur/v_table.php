<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>

 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar CI</title>
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('style.css');?>" rel="stylesheet">
	<header>
<div class="row">
        <div class="col-md-12 header" id="site-header">
            <header>
    <h1 class="title-site">Belajar Bootstrap</h1>
    <p class="description">Belajar Membuat Template Website Dengan Bootstrap</p>
</header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="<?php echo base_url('index.php/view');?>">Home</a></li>
        <li><a href="<?php echo base_url('index.php/welcome')?>">Delete </a></li>
        <li class="active"><a href="#">Table</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    </div>
    
<body>
	<div class="content">

	<div class="col-md-12 well">
			<div class="container">
				<div class="row">
                    <table border="1">
		<tr>
			<th>NIS</th>
			<th>Nama</th>
			<th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
		</tr>
		<?php foreach($t_siswa->result() as $u){ ?>
		<tr>
			<td><?php echo $u->NIS ?></td>
			<td><?php echo $u->Nama ?></td>
			<td><?php echo $u->Kelas ?></td>
            <td><?php echo $u->Jurusan ?></td>
            <td><?php echo $u->Alamat ?></td>
		</tr>
		<?php endforeach ?>
	</table>
                    
				</div>
			</div>
		</div>
		
        
		
    <div class="row">
        <div class="col-md-12 footer" id="site-footer">
            <footer class=”copyright text-center”><p>&copy;<font color="blue"> 2018 Risman Taufik Rohendi, XI-RPL 1</font></p></footer>
        </div>
    </div>


<link href="Sstyle.css" rel="stylesheet">

	<script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');?>"></script>

	<script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
 
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

    <script src="<?php echo base_url('assets/custom.js');?>"></script>
    </div>
    </body>
    </header>
    </head>
</html>
  
    