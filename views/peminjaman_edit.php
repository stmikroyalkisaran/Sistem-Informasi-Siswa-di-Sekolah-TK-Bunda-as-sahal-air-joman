<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_guru WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pelajaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode Pelajaran</label>
                             <div class="col-sm-9">
								<input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nomor Perkara">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pelajaran" class="col-sm-3 control-label">Mata Pelajaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="pelajaran" value="<?=$data['pelajaran']?>"class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pelajaran" class="col-sm-3 control-label">Mata Pelajaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" value="<?=$data['kelas']?>"class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pinjaman
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama=$_POST['nama'];
     $pelajaran=$_POST['pelajaran'];
      $kelas=$_POST['kelas'];
	
    //buat sql
    $sql="UPDATE data_guru SET nama = '$nama', pelajaran='$pelajaran', kelas='$kelas' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



