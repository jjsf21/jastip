<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_detail_transaksi')?>" method="post">
                <h1></h1>
        
        <div class="item form-group">
          <label class="control-label col-12" >Harga satuan pesanan khusus<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="harga_satuan_pesanan_khusus" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="harga_satuan_pesanan_khusus" required="required" placeholder="Isi Harga">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Biaya jasa titipan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="biaya_jasa_titipan" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="biaya_jasa_titipan" required="required" placeholder="Isi Biaya">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="tanggal" required="required" placeholder="Isi Tanggal">
          </div>
        </div>
        


        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/detail_transaksi" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>