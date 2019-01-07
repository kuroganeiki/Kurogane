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
	<link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">
	


</head>
<body>
	<div class="content">

	<div class="col-md-12 well">
			<div class="container">
				<div class="row">
					<h1>Menghapus data siswa </h1>
					<form class="form-inline" role="form" action="<?php echo base_url();?>index.php/crud/delete" method="post"> 
					<div class="form-group"> 
					<label for="inputdefault">NIS</label> <br>
					<input class="form-control" id="inputdefault" type="text" name="NIS"> 
					</div>
					
					<input type="submit" value="delete">
					</form>
					
				 <br>
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
</body>
</html>