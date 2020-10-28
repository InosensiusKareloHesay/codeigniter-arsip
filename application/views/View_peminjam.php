<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>User Peminjam</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peminjam</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>NIP</th>
                  <th>Nama User</th>
                  <th>Jabatan</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th colspan="2"><a href="<?php echo base_url('c_home/loadInputUser');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                  $i = $this->uri->segment('3')+1; 
                    foreach($user as $data){ 
                ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $data['nip']; ?></td>
                  <td><?php echo $data['nama_user']; ?></td>
                  <td><?php echo $data['jabatan']; ?></td>
                  <td><?php echo $data['username']; ?></td>
                  <td><?php echo $data['password']; ?></td>
                  <td colspan="2"><a href="<?php echo base_url('edit/getDataUser/');?><?php echo $data['id_user']?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo base_url('delete/delete_user/');?><?php echo $data['id_user']?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
                <?php echo $this->pagination->create_links(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>