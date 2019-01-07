<html>
<head>

</head>
<body>
<h1>Mengubah Data Barang  </h1>
					<form class="form-inline" role="form" action="<?php echo base_url();?>index.php/crud/action_update<?php echo $key->kode_barang ?>" method="post"> 
					<div class="form-group"> 
					<label for="inputdefault">Kode barang</label> <br>
					<input class="form-control" id="inputdefault" type="text" name="kode_Barang" value="<?php echo $key->kode_Barang ?>"><br>
					
					<label for="inputdefault">Nama Barang</label> <br>
					<input class="form-control" id="inputdefault" type="text" name="Nama_Barang" value="<?php echo $key->Nama_Barang ?>"> <br>
					
                     
					<label for="inputdefault">Jumlah Barang</label> <br>
					<input class="form-control" id="inputdefault" type="text" name="Jumlah_barang" value="<?php echo $key->Jumlah_barang ?>"> <br>
					
                        
                        <input type="submit" value="Update" class="btn btn-default"></div> <br>
					</form> <br>
</body>
</html>