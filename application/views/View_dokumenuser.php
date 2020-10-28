<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <small>Dokumen</small>
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
                  <th>Lokasi</th>
                  <th>No. Dok</th>
                  <th>Nama Dokumen</th>
                  <th>Size (KB)</th>
                  <th>Tgl Upload</th>
          <th colspan="2"><a href="<?php echo base_url('c_home/loadInputDokumen');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a></th>
          </tr>
            </thead>
              <tbody>
                <?php
                    $i = $this->uri->segment('3')+1;  
                    foreach($doc as $data){ 
                ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['lokasi']; ?></td>
            <td><?php echo $data['nomor_dokumen']; ?></td>
            <td><?php echo $data['nama_dokumen']; ?></td>
            <td><?php echo $data['size']; ?></td>
            <td><?php echo $data['tanggal_upload']; ?></td>
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