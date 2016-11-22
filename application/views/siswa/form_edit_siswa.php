<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<?php echo $this->session->flashdata('alert_msg'); ?>

  	<h1 class="page-header"><?php echo $judul; ?></h1>
	<form class="form-horizontal" method="POST" action="<?php echo site_url('siswa/act_edit') ?>">
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
	    <div class="col-sm-10">
	      <input type="hidden" class="form-control" name="id" value="<?php echo $data_siswa->id ?>" id="inputEmail3" placeholder="Nama" readonly>
	      <input type="text" class="form-control" name="nama" value="<?php echo $data_siswa->nama ?>" id="inputEmail3" placeholder="Nama">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="alamat" value="<?php echo $data_siswa->alamat ?>" id="inputPassword3" placeholder="Alamat">
	    </div>
	  </div>
	  <div class="form-group">
		  <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
		  <div class="col-sm-10">
		  	<select name="id_kelas" class="form-control">
		  		<option value="">--Pilih Kelas--</option>
		  		<?php 
		  		foreach ($kelas as $key => $value){
		  			if($value->id_kelas == $data_siswa->id_kelas){
		  				$selected = 'selected';
		  			}
		  			else{
		  				$selected = '';
		  			} ?>
		  		<option value="<?=$value->id_kelas?>" <?=$selected?> > <?=$value->nama_kelas?> </option>
		  		<?php } ?>
		  	</select>
		  </div>
	  </div>
	  
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success">Simpan</button>
	      <a href="<?php echo site_url('siswa') ?>" class="btn btn-primary">Kembali</a>
	    </div>
	  </div>
	</form>
</div>