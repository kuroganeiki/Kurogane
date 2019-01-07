<html>
<head>
</head>
<body>
 <div class="content">
        <div class="col-md-12 well">
			<div class="container">
				<div class="row">
                    <h2><b>Table siswa</b></h2>
                    <div class="jumbotron">
    <table class="table">
        <tr>
        <td>NIS</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Jurusan</td>
        <td>Action</td>
        </tr>
        <?php foreach ($content->result() as $key):?>
        <tr>
        <td><?php echo $key->NIS ?></td>
        <td><?php echo $key->Nama ?></td>
        <td><?php echo $key->Kelas ?></td>
        <td><?php echo $key->Jurusan ?></td>
        <td><a href="<?php echo base_url()?>index.php/crud/delete1/<?php echo $key->NIS ?>">Delete</a></td>
        </tr>
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