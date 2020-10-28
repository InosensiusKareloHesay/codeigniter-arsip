<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            History
            <small>Peminjaman</small>
          </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
        <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>No. Dok</th>
            <th>Nama Dokumen</th>
            <th>Tgl Ambil</th>
            <th>Tgl Kembali</th>
            <th>Approval</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
        <?php $i = $this->uri->segment('3')+1;
              foreach ($report as $data) { ?>
        <tr>    
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['nomor_dokumen'];?></td>
            <td><?php echo $data['nama_dokumen'];?></td>
            <td><?php echo $data['tanggal_pinjam'];?></td>
            <td><?php echo $data['tanggal_kembali'];?></td>
            <td><?php if($data['status'] == 0){
                        echo "Belum Disetujui";
                      } elseif($data['status'] == 1){
                        echo "Disetujui";
                      }?>
            </td>

            <td><?php $date=date('Y-m-d');
                  if($date > $data['tanggal_kembali']){ ?>
                    <button type="submit" class="btn btn-block btn-normal" disabled>Expired</button>
                    <?php } else {
                          if($data['status'] == 0) { ?>
                            <button type="button" class="btn btn-block btn-danger" disabled>Belum Disetujui</button>
                        <?php } elseif($data['status'] == 1) { ?>
                            <form action="<?php echo base_url('load/downloadFile/');?>" method="post">
                                <input type="hidden" name="filename" value="<?php echo $data['file_name'];?>">
                                <button type="submit" class="btn btn-block btn-success">Download</button>
                        <?php } else { ?> 
                                <button type="submit" class="btn btn-block btn-success" disabled>Expired</button>
                        <?php } ?>
                            </form>
                        <?php } ?>
            </td>
            </tr>
            <?php } ?>
             </tbody>
         </table>
        </div> 
       </div>
      </div>  
    </div>
    </section>
    <!-- /.content -->
  </div>