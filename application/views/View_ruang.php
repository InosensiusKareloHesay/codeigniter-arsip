<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Ruang Penyimpanan</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
        <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>ID</th>
                  <th>Nama Ruang </th>
          <th colspan="2"><a href="<?php echo base_url('c_home/loadInputRuang');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a></th>
                </tr>
                </thead>
                <tbody>
        <?php
          $i = $this->uri->segment('3')+1; 
          foreach($ruang as $data){ 
        ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td colspan="2"><a href="<?php echo base_url('edit/getDataRuang/');?><?php echo $data['id']?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="<?php echo base_url('delete/delete_ruang/');?><?php echo $data['id']?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
        </tr>  
        <?php
            } 
         ?>
        </tbody>
         </table>
        <?php echo $this->pagination->create_links(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>