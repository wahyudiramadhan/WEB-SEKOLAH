<a class="btn btn-success m-2 fas fa-user-plus" href="index.php?page=5" > Tambah User</a>
<table class="table">
  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Username</th>
        <th scope="col">Nama</th>
        <th scope="col">Level</th>
        <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php
                                if(isset($_GET['cari'])){
                                    $cari = $_GET['cari'];
                                    $data = mysqli_query($koneksi, "SELECT * from tb_user where username like '%".$cari."%'");				
                                }else{
                                    $data = mysqli_query($koneksi,"SELECT * from tb_user");		
                                }
                                $no = 1;
                                while($d = mysqli_fetch_array($data)){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['username']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['level']; ?></td>                        
                                <td>
                                    <a name="username" class="btn btn-primary fas fa-file text-light" href="index.php?page=7&username=<?php echo $d['username']; ?>"> Lihat</a>
                                                                
                                    
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
</table>