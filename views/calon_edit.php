 <?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_pelamar WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color:#1e313e">
                    <h3 class="panel-title">Form Update Data Calon Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tgl Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tgl Lahir" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label">No.Telp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" value="<?=$data['no_telp']?>" class="form-control" id="inputEmail3" placeholder="Inputkan No.Telp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Pendidikan Terakhir</label>
                            <div class="col-sm-9">
                                <input type="text" name="p_terakhir" value="<?=$data['p_terakhir']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Pendidikan Terakhir" required>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success" style="background-color:#1e313e">
                                    <span class="fa fa-edit"></span> Update Data Calon Karyawan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=calon&actions=tampil" class="btn btn-danger btn-sm" >
                        Kembali Ke Data Calon Karyawan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama     =$_POST['nama'];
    $alamat   =$_POST['alamat'];
    $tgllahir =$_POST['tgl_lahir'];
    $notelp   =$_POST['no_telp'];
    $pterakhir=$_POST['p_terakhir'];
    //buat sql
    $sql="UPDATE tb_pelamar SET nama='$nama',alamat='$alamat',tgl_lahir='$tgllahir',no_telp='$notelp',p_terakhir='$pterakhir' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=calon&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



