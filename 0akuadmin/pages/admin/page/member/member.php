<h2>Data Member</h2><hr>
<div class="row">
  
  <div class="panel-body">
    <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
    <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
  </div>
  
  <div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-primary">
      <div class="panel-heading">Tables</div>
        <div class="panel-body">                        
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            
            <thead>
              <tr>
                <th>No</th>
                <th>Foto Profil</th>
                <th>Username</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            
            <tbody>
<?php
$no = 1;
$sql = $koneksi->query("select * from tbl_member");
while ($data = $sql->fetch_assoc()) {
  ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><img style=" border-radius : 50%; "  width="40" height="40" src="page/member/img/<?php echo $data['gambar']; ?>"></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td>
                  <a href="?page=member&aksi=ubah&id_member=<?php echo $data['id_member']; ?>"><button class="btn btn-outline btn-primary"><i class="fa fa-edit "></i></button></a>
                  <a onclick="return confirm('Anda Yakin Akan Menghapus Data?')" href="?page=member&aksi=hapus&id_member=<?php echo $data['id_member']; ?>"><button class="btn btn-outline btn-danger"><i class="fa fa-times "></i></button></a>                  
                </td>
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
</div>