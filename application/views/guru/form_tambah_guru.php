<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <h1 class="page-header"><?php echo $judul; ?></h1>
<?= $this->session->flashdata('alert_msg'); ?>
<form class="form-horizontal" method="POST" action="<?=base_url('guru/act_Tambah/') ?>">

  <div class="form-group">
    <label  class="col-sm-2 control-label">Nama Guru</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Nama guru" name="nama_guru">
    </div>
  </div>
  <div class="form-group" style="padding-top: 25px;">
    <div class="col-sm-offset-2 col-sm-10">
    <a href="<?= base_url('guru') ?>" class="btn btn-default" >Kembali</a>
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </div>
</form>
</div>