<html>
<head>
</head>
<body>
 <div class="content">
        <div class="col-md-12 well">
			<div class="container">
				<div class="row">
                    <h2><b>Table kartu peminjaman</b></h2>
                    <div class="jumbotron">
    <table class="table">
        <tr>
        <td>No kartu</td>
        <td>NIS</td>
        <td>Kode barang</td>
        <td>Nama barang</td>
        <td>Jumlah barang</td>
        <td>tanggal peminjaman</td>
        <td>Jam peminjaman</td>
        <td>Action</td>
        </tr>
        <?php foreach ($content->result() as $key):?>
        <tr>
        <td><?php echo $key->No_kartu ?></td>
        <td><?php echo $key->NIS ?></td>
        <td><?php echo $key->kode_barang ?></td>
        <td><?php echo $key->nama_barang ?></td>
        <td><?php echo $key->jumlah_barang ?></td>
        <td><?php echo $key->tgl_peminjaman ?></td>
        <td><?php echo $key->jam_peminjaman ?></td>
        <td><a href="<?php echo base_url()?>index.php/crud/delete2/<?php echo $key->No_kartu ?>">Delete</a></td>
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