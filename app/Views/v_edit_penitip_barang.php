<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_penitip_barang')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_penitip_barang ?>">
        
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" name="nama" placeholder="Isi Nama" required="required" class="form-control col-12" value="<?= $ferdi->nama?>">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >Email<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="email" name="email" placeholder="Isi Email" required="required" class="form-control col-12" value="<?= $ferdi->email?>">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >Alamat<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat" name="alamat" placeholder="Isi Alamat" required="required" class="form-control col-12" value="<?= $ferdi->alamat?>">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >No HP<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="no_hp" name="no_hp" placeholder="Isi No HP" required="required" class="form-control col-12" value="<?= $ferdi->no_hp?>">
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
            <a href="/home/penitip_barang" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
