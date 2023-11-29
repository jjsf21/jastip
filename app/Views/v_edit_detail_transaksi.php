<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_detail_transaksi')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_detail_transaksi ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Harga satuan pesanan khusus<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="harga_satuan_pesanan_khusus" name="harga_satuan_pesanan_khusus" placeholder="Isi Harga" required="required" class="form-control col-12" value="<?= $ferdi->harga_satuan_pesanan_khusus?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Biaya jasa titipan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="biaya_jasa_titipan" name="biaya_jasa_titipan" placeholder="Isi Biaya" required="required" class="form-control col-12" value="<?= $ferdi->biaya_jasa_titipan?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal" name="tanggal" placeholder="Isi Tanggal" required="required" class="form-control col-12" value="<?= $ferdi->tanggal?>">
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
