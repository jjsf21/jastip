<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pesanan_khusus')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_pesanan_khusus ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Nama Barang<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_brg" name="nama_brg" placeholder="Isi Nama Barang" required="required" class="form-control col-12" value="<?= $ferdi->nama_brg?>">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >Kategori<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="kategori" name="kategori" placeholder="Isi Kategori" required="required" class="form-control col-12" value="<?= $ferdi->kategori?>">
          </div>
        </div>
        


       <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pesanan_khusus" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
