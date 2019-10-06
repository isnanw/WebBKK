<?php
$koneksi = new mysqli ("localhost","root","","db_mybkk");
?>

<div class="panel-body">
                <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
                <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
            </div>
<div class="panel panel-primary">
<div class="panel-heading">
    Tambah Data
</div>
<!-- Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <div class="col-lg-12">
                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" required="required">
                            </div>
            
                            <div class="form-group">
                                <label>Level</label>
                                <input class="form-control" type="text" name="level" placeholder="admin/user" required="required">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"> 
                                <button type="reset" class="btn btn-default" onClick="history.go(0)">Reset</button>
                                <button type="submit" class="btn btn-danger" onClick="history.go(-1)">Batal</button>
                            </div>                                       
                    </form>
                            </div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
          </div>

<?php
    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $level = @$_POST['level'];
    $simpan = @$_POST['simpan'];
    
    if ($simpan) {
        $sql = $koneksi->query("insert into tbl_user (username, password, level) values ('$username','$password', '$level')");

    if ($sql) {
    ?>
            <script type="text/javascript">
                alert ('Data Berasil Disimpan');
                window.location.href="?page=akun"
            </script>
    <?php
            }elseif (@$simpan) {
                    echo "gagal upload";
            }
        }
?>
