<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_user')?>" method="post">
                <h1></h1>        
        <div class="item form-group">
          <label class="control-label col-12" >Username<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="username" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="username" required="required" placeholder="username">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Password<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="password" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="password" required="required" placeholder="Password">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Level <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="level" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="level" required="required">
              <option>Pilih Level</option>
              <option value="Super Admin">Super Admin</option>
              <option value="Admin">Admin</option>
              <option value="Pegawai">Pegawai</option>
            </select>
          </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/user" type="submit" class="btn btn-secondary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
            </div>