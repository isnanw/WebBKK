<h2>Data Galeri</h2><hr>
<div class="row">
  <div class="panel-body">
    <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
    <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
    <a href="?page=galeri&aksi=tambah"><button type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Tambah Data</button></a>
  </div>
  <div class="col-md-12">
  <!-- Advanced Tables -->
    <div class="panel panel-primary">
      <div class="panel-body">                        
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	        <thead>
            <tr>
              <th width="65">No</th>
              <th>Judul</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
  	      </thead>
    	    <tbody>
<?php
    $no = 1;
    $sql = $koneksi->query("select * from tbl_galeri");
    while ($data= $sql->fetch_assoc()){
?>
          <tr>
      	    <td><?php echo $no++; ?></td>
      	    <td><?php echo $data['Judul']; ?></td>
            <td><img width="200" height="100" src="page/galeri/img/<?php echo $data['Gambar']; ?>"></td>            
            <td>
              <a href="?page=galeri&aksi=ubah&no=<?php echo $data['No']; ?>"><button class="btn btn-outline btn-primary"><i class="fa fa-edit "></i></button></a>
              <a onclick="return confirm('Anda Yakin Akan Menghapus Data?')" href="?page=galeri&aksi=hapus&no=<?php echo $data['No']; ?>"><button class="btn btn-outline btn-danger"><i class="fa fa-times "></i></button></a>                     
            </td>
          </tr>
<?php } ?>
        	</tbody>
       	</table>
      </div>
    </div>
  </div>
</div>
</div>

