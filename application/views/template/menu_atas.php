<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('siswa') ?>">CI CRUD (Create Read Update Delete)</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">Sugeng Rawuh, <?php echo $this->user_login->nama_user ?></a>
        </li>
        <li><a href="<?php echo site_url('login/act_logout') ?>">Metu</a></li>
      </ul>
      
    </div>
  </div>
</nav>