<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
    </h1>
      
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Data User</li>
      </ol>
    </section>

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
                  <th>Id User</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Password </th>
          <th colspan="2"><a href="<?php echo base_url('cnt_user/insert');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a></th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                    foreach($profile as $sh) {
      ?>  
    
        <tr>
          <td><?php echo $sh['id_user']; ?></td>
          <td><?php echo $sh['name']; ?></td>
          <td><?php echo $sh['email']; ?></td>
          <td><?php echo $sh['username']; ?></td>
          <td><?php echo $sh['password']; ?></td>
          <td><a href="<?php echo base_url('cnt_user/update/');?><?php echo $sh['id_user'];?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
          <td><a href="<?php echo base_url('cnt_user/delete_user/');?><?php echo $sh['id_user'];?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
        </tr>
      <?php   
          } 
      ?>        
        

        </tbody>
         </table>
        </div> 
       </div>
      </div>  
    </div>
    <a href="<?php echo base_url('cnt_user/insert');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data  </b><i class="fa fa-plus"></i></button></div> </a>
    </section>