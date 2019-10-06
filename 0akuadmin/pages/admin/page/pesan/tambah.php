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
                <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="Nama" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label>Pesan</label>
                                <input class="form-control" type="text" name="Pesan" placeholder="Pesan" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"> 
                                <button type="reset" class="btn btn-default" onClick="history.go(0)">Reset</button>
                                <button type="submit" class="btn btn-danger" onClick="history.go(-1)">Batal</button>
                            </div>                                       
                    </form>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
          </div>

<?php
    $Nama = @$_POST['Nama'];
    $Email = @$_POST['Email'];
    $Pesan = @$_POST['Pesan'];
    $simpan = @$_POST['simpan'];
    
    if ($simpan) {
        $sql = $koneksi->query("insert into tbl_pesan (Nama, Email, Pesan) values ('$Nama','$Email', '$Pesan')");

    if ($sql) {
    ?>
            <script type="text/javascript">
                alert ('Data Berasil Disimpan');
                window.location.href="?page=pesan"
            </script>
    <?php
            }elseif (@$simpan) {
                    echo "gagal upload";
            }
        }
?>
