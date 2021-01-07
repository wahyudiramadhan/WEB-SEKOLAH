<a  class="btn btn-secondary fas fa-arrow-circle-left m-1 fas "href="index.php?page=2"> Back</a>
                        <div class="card-body border">
                        
                            <!-- =================== -->
                            <?php
                                $id = $_GET['nip'];
                                $data = mysqli_query($koneksi,"SELECT * from tb_guru where nip='$id'");
                                while($d = mysqli_fetch_array($data)){
                            ?>
                            <!-- =================== -->
                            <form  method="post" action="guru/edit1.php">
                                <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">NIP</label>
                                        <div class="col-sm-5">
                                        <label for="text1" class="col-sm-2 rounded col-form-label"><?php echo $d['nip']; ?></label>
                                        <input type="hidden" name="nip" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">NAMA</label>
                                        <div class="col-sm-5">
                                         <input type="hidden" name="nip"    class="form-control" id="text1" value="<?php echo $d['nip']; ?>">
                                        <input type="text" name="nama" class="form-control" id="text1" value="<?php echo $d['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">GELAR</label>
                                        <div class="col-sm-5">
                                         <input type="hidden" name="nip"    class="form-control" id="text1" value="<?php echo $d['nip']; ?>">
                                        <input type="text" name="gelar" class="form-control" id="text1" value="<?php echo $d['gelar']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                                        <div class="col-sm-5">
                                        <input type="hidden" name="nip"    class="form-control" id="text1" value="<?php echo $d['nip']; ?>">
                                        <select class="form-select form-control" name="jeniskelamin" id="text1">
                                            <option value="laki-laki"  >Laki-Laki</option>
                                            <option value="perempuan" >Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">ALAMAT</label>
                                        <div class="col-sm-5">
                                         <input type="hidden" name="nip"    class="form-control" id="text1" value="<?php echo $d['nip']; ?>">
                                        <input type="text" name="alamat" class="form-control" id="text1" value="<?php echo $d['alamat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">KONTAK</label>
                                        <div class="col-sm-5">
                                         <input type="hidden" name="nip"    class="form-control" id="text1" value="<?php echo $d['nip']; ?>">
                                        <input type="text" name="kontak" class="form-control" id="text1" value="<?php echo $d['kontak']; ?>">
                                        </div>
                                    </div>
                                    <button  class="btn btn-success  fas fa-user-edit" type="submit" name="update"> UPDATE</button>
                                    <a name="username" class="btn btn-danger fas fa-file" href="guru/hapus.php?nip=<?php echo $d['nip']; ?>"> Hapus Akun</a>
                            </form>
                            <?php 
                            }
                            ?>
                        </div>