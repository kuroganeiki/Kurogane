<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Crud</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="">
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
    </div>
</head>
<body>

    <div class="content">
        <div class="col-md-12 well">
			<div class="container">
				<div class="row">
                    <h2><b>Table barang</b></h2>
                <div class="jumbotron">
               
    <table class="table">
    <thead>
        <tr>
        <td>Kode Barang</td>
        <td>Nama Barang</td>
        <td>Jumlah Barang</td>
        <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($content->result() as $key):?>
        <tr>
        <td><?php echo $key->kode_Barang ?></td>
        <td><?php echo $key->Nama_Barang ?></td>
        <td><?php echo $key->Jumlah_barang ?></td>
        <td>
            <a href="<?php echo base_url()?>index.php/crud/delete/<?php echo $key->kode_Barang ?>">Delete</a>
            </td>
        </tr>
    </tbody>
        <?php endforeach ?>
    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link href="Sstyle.css" rel="stylesheet">

	<script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');?>"></script>

	<script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
 
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

    <script src="<?php echo base_url('assets/custom.js');?>"></script>
</body>
</html>