<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>  
<head>
<meta charset="UTF-8">
<title>
  Pendaftaran Akun | Tutorial Simple Login Register CodeIgniter @ http://recodeku.blogspot.com
</title>
</head>
<body>
  <h2>Pendaftaran Akun</h2>

  <?php 
        $this->load->view('admin/login');
   ?>

  <?php echo form_open('register');?>
 <!-- Page Content -->
 <div class="container">
<!-- /.row -->
<!-- ============ MODAL ADD =============== -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/register/tambah_pengguna'?>">
        <div class="modal-body">

            <div class="form-group">
                <label class="control-label col-xs-3" >Nama</label>
                <div class="col-xs-9">
                    <input name="nama" class="form-control" type="text" placeholder="Input Nama..." style="width:280px;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Username</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" placeholder="Input Username..." style="width:280px;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Password</label>
                <div class="col-xs-9">
                    <input name="password" class="form-control" type="password" placeholder="Input Password..." style="width:280px;" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-3" >Ulangi Password</label>
                <div class="col-xs-9">
                    <input name="password2" class="form-control" type="password" placeholder="Ulangi Password..." style="width:280px;" required>
                </div>
            </div> 

            <div class="form-group">
                <label class="control-label col-xs-3" >Level</label>
                <div class="col-xs-9">
                    <select name="level" class="form-control" style="width:280px;" required>
                        <option value="1">Admin</option>
                        <option value="2">Kasir</option>
                    </select>
                </div>
            </div>   

        </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-info">Simpan</button>
        </div>
    </form>
    </div>
    </div>
</div>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#mydata').DataTable();
} );
</script>
</body>
</html>