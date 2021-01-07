        <div class="card-body">
            <form action="admin/aksi.php" method="post">
                <div class="mb-3">
                    <label for="text1" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-5">
                        <input type="text" name="username" class="form-control" id="text1" placeholder="Masukan username">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="text1" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" name="nama" class="form-control" id="text1" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="text1" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" class="form-control" id="text1" placeholder="Masukan password">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="text1" class="col-sm-2 col-form-label">Level</label>                            
                    <div class="col-sm-2">
                        <select class="form-control" name="level" id="text1">
                            <option value="admin"  >Admin</option>
                            <option value="dokter" >Guru</option>
                            <option value="siswa" >Siswa</option>
                        </select>
                    </div>
                </div>  
                <button  class="btn bg-success ml-3 col-sm-1" type="submit" name="tambah">Tambah</button> 
                <a  class="btn badge-warning col-sm-1" href="index.php?page=1">Kembali</a>            
            </form>
        </div>