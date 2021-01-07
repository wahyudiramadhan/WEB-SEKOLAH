                        <a  class="btn btn-secondary fas fa-arrow-circle-left m-1 fas "href="index.php?page=1"> Back</a>
                        <div class="card-body border">
                        
                            <!-- =================== -->
                            <?php
                                $id = $_GET['username'];
                                $data = mysqli_query($koneksi,"SELECT * from tb_user where username='$id'");
                                while($d = mysqli_fetch_array($data)){
                            ?>
                            <!-- =================== -->
                            <form  method="post" action="admin/edit1.php">
                                <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">USERNAME</label>
                                        <div class="col-sm-5">
                                        <label for="text1" class="col-sm-2 rounded col-form-label"><?php echo $d['username']; ?></label>
                                        <input type="hidden" name="username" class="form-control" >
                                        </div>
                                    </div> 
                                    <br>
                                    <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">NAMA</label>
                                        <div class="col-sm-5">
                                         <input type="hidden" name="username"    class="form-control" id="text1" value="<?php echo $d['username']; ?>">
                                        <input type="text" name="nama" class="form-control" id="text1" value="<?php echo $d['nama']; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="text1" class="col-sm-2 col-form-label">Level</label>                            
                                        <div class="col-sm-2">
                                            <select class="form-control" name="level" id="text1">
                                                <option value="admin"  >Admin</option>
                                                <option value="dokter" >Dokter</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <br>
                                    <button  class="btn btn-success  fas fa-user-edit" type="submit" name="update"> UPDATE</button>
                                    <a name="username" class="btn btn-danger fas fa-file" href="admin/hapus.php?username=<?php echo $d['username']; ?>"> Hapus Akun</a>
                            </form>
                            <?php 
                            }
                            ?>
                        </div>