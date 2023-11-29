<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_ulasan')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_ulasan ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Rating<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="rating" name="rating" placeholder="Isi Rating" required="required" class="form-control col-12" value="<?= $ferdi->rating?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Komen<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="komen" name="komen" placeholder="Isi Komen" required="required" class="form-control col-12" value="<?= $ferdi->komen?>">
          </div>
        </div>
     


       <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/ulasan" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
