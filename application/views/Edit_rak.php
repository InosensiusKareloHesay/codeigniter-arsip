<div class="content-wrapper">    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data Rak
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
        <div class="col-md-7">
          <div class="box">

            <?php $id = $this->uri->segment(3); ?>
            <form class="form-horizontal" method="post" action="<?php echo base_url('edit/update_rak/');?><?php echo $id; ?>" enctype="multipart/form-data">
              <?php foreach($row as $data) { ?>
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Nama Ruang</label>
                  <div class="col-sm-8">                                                                
                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'];?>">
                  </div>
                </div>
				      <?php } ?>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              <!-- /.box-footer -->
            </form>
            <form action="<?php echo base_url('c_home/loadRak'); ?>" method="post">
            <button class="btn btn-default">Batal</button></div>
            </form>
		</div>
	</div>	
	</section>
</div>