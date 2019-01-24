

<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);


?>

<?php
$ambil1=  mysqli_query($koneksi, "SELECT * FROM data_guru ") or die ("SQL Edit error");
$data1= mysqli_fetch_array($ambil1);


?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Kelas</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">Nis</label>
                            <div class="col-sm-9">
								<input type="text" name="nis_siswa" value="<?=$data['nip']?>" class="form-control" id="inputEmail3" placeholder="Nip" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Jenis" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jenis" value="<?=$data['jk']?>" class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" readonly="true">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="Tanggal_L" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="Tanggal_L" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="wali" class="col-sm-3 control-label">Wali Kelas</label>
                               <div class="col-sm-3 ">
                                <select name="wali_kelas" class="form-control">
                                <option value="" selected">Guru</option>    
                                    <!--ambil data dari database, dan tampilkan kedalam tabel-->
                                   <?php
                                   while ($data1= mysqli_fetch_array($ambil1)) {
                                      
                                  
                                    ?>
                                <option value="<?php echo $data1['nama']; ?> - <?php echo $data1['kelas']; ?>" selected"><?php echo $data1['nama']; ?> - <?php echo $data1['kelas']; ?></option>
                                <?php
                                }
                                ?>    
                                </select>
                            </div>
                        </div>

						

						

						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Peminjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $siswa=$_POST['nis_siswa'];
    $wali=$_POST['wali_kelas'];
   

 
    
    //buat sql
    $sql="INSERT INTO data_wali VALUES ('','$siswa','$wali')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=siswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
