<div class="content-wrapper">    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Dokumen
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-11">
          <div class="box">
            <form class="form-horizontal" method="post" action="<?php echo base_url('input/input_dokumen');?>" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-md-2 control-label">Lokasi Penyimpanan</label>
            <div class="col-md-2">
              <b>Ruang</b>
            </div>
            <div class="col-md-2">
              <b>Rak</b>
            </div>
            <div class="col-md-2">
              <b>Box</b>
            </div>
            <div class="col-md-2">
              <b>Map</b>
            </div>
            <div class="col-md-2">
              <b>Urut</b>
            </div>
        </div>
      <div class="form-group">
        <label class="col-md-2 control-label"></label>
          <div class="col-md-2">
            <select name="ruang" class="default-select2 form-control">
              <?php foreach ($ruang as $dataRuang) { ?>
                <option value="<?php echo $dataRuang['nama']; ?>"><?php echo $dataRuang['nama']; ?></option>
              <?php }?>
            </select>            
          </div>
          <div class="col-md-2">
            <select name="rak" class="default-select2 form-control">
              <?php foreach ($rak as $dataRak) { ?>
                <option value="<?php echo $dataRak['nama']; ?>"><?php echo $dataRak['nama']; ?></option>
              <?php }?>
            </select>           
          </div>
            <div class="col-md-2">
              <select name="box" class="default-select2 form-control">
              <?php foreach ($box as $dataBox) { ?>
                <option value="<?php echo $dataBox['nama']; ?>"><?php echo $dataBox['nama']; ?></option>
              <?php }?>
              </select>            
            </div>
            <div class="col-md-2">
              <select name="map" class="default-select2 form-control">
              <?php foreach ($map as $dataMap) { ?>
                <option value="<?php echo $dataMap['nama']; ?>"><?php echo $dataMap['nama']; ?></option>
              <?php }?>
              </select>            
            </div>
            <div class="col-md-1">
              <select name="urut" class="default-select2 form-control">
              <?php foreach ($urut as $dataUrut) { ?>
                <option value="<?php echo $dataUrut['nama']; ?>"><?php echo $dataUrut['nama']; ?></option>
              <?php }?>
              </select>           
            </div>
          </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Kode Dokumen</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="kode">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nomor Dokumen</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="nomor">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama Dokumen</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="nama">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Deskripsi</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="deskripsi">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">File</label>
                <div class="col-md-6">
                  <input type="file" class="form-control" name="file">
                </div>
            </div>
                &nbsp;
				        
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              <!-- /.box-footer -->
            </form>
            <form action="<?php echo base_url('c_home/loadInputDokumen'); ?>" method="post">
            <button class="btn btn-default">Batal</button></div>
            </form>
		</div>
	</div>	
	</section>
</div>