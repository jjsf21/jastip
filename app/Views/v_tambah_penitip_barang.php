<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_penitip_barang')?>" method="post">
                <h1></h1>
        
      
        <div class="item form-group">
          <label class="control-label col-12" >Nama<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama" required="required" placeholder=" Isi nama">
          </div>
        </div>
          <div class="item form-group">
          <label class="control-label col-12" >Email<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="email" name="email" placeholder="Isi Email" required="required" class="form-control col-12">
          </div>
            <div class="item form-group">
          <label class="control-label col-12" >Alamat<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="alamat" required="required" placeholder=" Isi Alamat">
          </div>
        </div>
          <div class="item form-group">
          <label class="control-label col-12" >No Hp<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="no_hp" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="no_hp" required="required" placeholder=" Isi Nomor Telepon">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >Tanggal<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="tanggal" required="required" placeholder=" Isi Tanggal">
          </div>
        </div>
    


        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/penitip_barang" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>