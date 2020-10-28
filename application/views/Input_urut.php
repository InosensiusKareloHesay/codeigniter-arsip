<div class="content-wrapper">    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Urut
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


            <form class="form-horizontal" method="post" action="<?php echo base_url('input/input_urut');?>" enctype="multipart/form-data">

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Nama Urut</label>
                  <div class="col-sm-8">                                                                
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              <!-- /.box-footer -->
            </form>
            <form action="<?php echo base_url('c_home/loadUrut'); ?>" method="post">
            <button class="btn btn-default">Batal</button></div>
            </form>
		</div>
	</div>	
	</section>
</div>