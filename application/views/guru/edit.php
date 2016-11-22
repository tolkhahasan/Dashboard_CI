    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              <h1 class="page-header"><?php echo $judul; ?></h1>
<form class="form-horizontal" method="POST" action="<?=base_url('guru/act_edit/') ?>">

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Guru</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat" name="nama_guru" value="<?= $data_guru->nama_guru ?>">
    </div>
  </div>

  <div class="form-group" style="padding-top: 25px;">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="hidden" name="id_guru" value="<?=$data_guru->id_guru ?>" readonly>
    <a href="<?= base_url('guru') ?>" class="btn btn-default" >Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
</div>