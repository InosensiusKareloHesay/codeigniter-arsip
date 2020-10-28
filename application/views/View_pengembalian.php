<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Transaksi
            <small>Pengembalian Peminjaman</small>
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
                  <th>No. Dok</th>
                  <th>Nama Dokumen</th>
                  <th>Tgl Ambil</th>
                  <th>Tgl Kembali</th>
                  <th>Peminjam</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $i = $this->uri->segment('3')+1;  
                    foreach($back as $data){ 
                ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nomor_dokumen']; ?></td>
                    <td ><?php echo $data['nama_dokumen']; ?></td>
                    <td ><?php echo $data['tanggal_pinjam']; ?></td>
                    <td ><?php echo $data['tanggal_kembali']; ?></td>
                    <td ><?php echo $this->session->userdata("name");?></td>
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
    <!-- /.content -->
  </div>