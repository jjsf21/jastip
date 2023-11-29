<div align="center">

<!-- <img align="center" src="data:image/jpg;base64,<?= $foto?>" width="82%" height="18%" > -->
<div>
  <br>
  <br>
</div>

 <table id="datatable-buttons" align="center" border="1" align="center" width="100%" class="table table-bordered table-striped verticle-middle table-responsive-sm">
  <thead>
    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>No Hp</th>
<!--       <th class="text-center">Total SPP Payment</th>
 -->    </tr>
  </thead>

  <tbody>


                    <?php
                    $no=1;
                    foreach ($ferdi as $jes){
                      ?>
                      <tr>
                        <td><?php echo $jes->nama?></td>
                        <td><?php echo $jes->email?></td>
                        <td><?php echo $jes->alamat?></td>
                        <td><?php echo $jes->no_hp?></td>
                        
                      </tr>
    <?php }?>
</tbody>
</table>
</div>
<script>
  window.print();
</script>