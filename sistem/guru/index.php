<a class="btn btn-success m-2" href="index.php?page=4" >Tambah Data</a>
<table class="table">
  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">NIP</th>
        <th scope="col">Nama</th>
        <th scope="col">Gelar</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</h>
        <th scope="col">Kontak</th>
        <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php
                                if(isset($_GET['cari'])){
                                    $cari = $_GET['cari'];
                                    $data = mysqli_query($koneksi, "SELECT * from tb_guru where username like '%".$cari."%'");				
                                }else{
                                    $data = mysqli_query($koneksi,"SELECT * from tb_guru");		
                                }
                                $no = 1;
                                while($d = mysqli_fetch_array($data)){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nip']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['gelar']; ?></td>
                                <td><?php echo $d['jeniskelamin']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['kontak']; ?></td>                        
                                <td>
                                <a name="nip" class="btn btn-primary fas fa-file text-light" href="index.php?page=8&nip=<?php echo $d['nip']; ?>"> Lihat</a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
</table>