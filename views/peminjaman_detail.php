<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">DATA GURU</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM data_guru WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">KODE</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>MATA PELAJARAN</td> <td><?= $data['pelajaran'] ?></td>
                        </tr>
                         <tr>
                            <td>MATA PELAJARAN</td> <td><?= $data['kelas'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pembelajaran</a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

