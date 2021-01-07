<div class="col">
        <form action="guru/aksi.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 m-3">
                <label for="text1" class=" col-form-label">NIP</label>
                <input type="text" name="nip" class="form-control " id="text1" placeholder="Masukan NIP">
            </div>
            <div class="col-sm-5 m-3">
                <label for="text1" class="col-form-label">Nama</label>
                <input type="text" name="nama" class="form-control " id="text1" placeholder="Masukan Nama Lengkap">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 m-3">
                <label for="text1" class="col-form-label">Gelar</label>
                <input type="text" name="gelar" class="form-control" id="text1" placeholder="Masukan Gelar">
            </div>
            <div class="col-sm-5 m-3">
                <label for="text1" class="col-form-label">Jenis Kelamin</label>
                <select class="form-select form-control" name="jeniskelamin" id="text1">
                    <option value="laki-laki"  >Laki-Laki</option>
                    <option value="perempuan" >Perempuan</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 m-3">
                <label for="text1" class="col-form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="text1" placeholder="Masukan Alamat">
            </div>
            <div class="col-sm-5 m-3">
                <label for="text1" class="col-sm-2 col-form-label">Kontak</label>
                <input type="text" name="kontak" class="form-control" id="text1" placeholder="masukan Nomor">
            </div>
        </div>
                <button  class="btn bg-success col-sm-2 " type="submit" name="tambah">Tambah</button> 
                <a  class="btn badge-warning col-sm-2" href="index.php?page=2">Kembali</a>            
        </form>    
    </div>
</div>