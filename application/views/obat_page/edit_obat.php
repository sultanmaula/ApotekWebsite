<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> EDIT OBAT</h3>
    <div class="row mt">
      <div class="col-lg-12">
        
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">

                <?php if(!empty($notif)){
                  echo '<div class="alert alert-danger">'.$notif.' </div>';
                } ?>

                <form class="cmxform form-horizontal style-form" id="form_tambah_obat" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/obat/edit_obat/<?php echo $detil->id_obat;?>">
                  
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nama Obat</label>
                    <div class="col-lg-10">
                      <input class=" form-control" value="<?php echo $detil->nama_obat;?>" id="nama_obat" name="nama_obat" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="charga" class="control-label col-lg-2">Harga Obat</label>
                    <div class="col-lg-10">
                      <input class="form-control" value="<?php echo $detil->harga_obat;?>" id="harga_obat" name="harga_obat" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cstok" class="control-label col-lg-2">Stok Obat</label>
                    <div class="col-lg-10">
                      <input class="form-control" value="<?php echo $detil->stok_obat;?>" id="stok_obat" type="input" name="stok_obat"  required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="csupplier" class="control-label col-lg-2">Supplier</label>
                    <div class="col-lg-10">
                    <select class="form-control" name="id_supplier" id="id_supplier">
                
                      <option>
                        <?php 
                          foreach ($join as $j) { 
                            if ($detil->id_supplier ==  $j['id_supplier']) {
                        ?>
                        
                            <option value="<?php echo $j['id_supplier']?>" selected>
                              <?php echo $j['nama_supplier'] ?>
                            </option>
                        
                        <?php
                            } else {
                        ?>
                            
                            <option value="<?php echo $j['id_supplier']?>">
                              <?php echo $j['nama_supplier'] ?>
                            </option>
                        
                        <?php
                            }
                        ?>
                           
                         <?php
                          } 
                        ?> 
                      </option>
                     
                    </select>

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="submit" name="simpanobat" id="simpanobat" value="Simpan" class="btn btn-theme">
                      <input type="reset" name="reset" value="Reset" class="btn btn-theme04" >
                    </div>
                  </div>


                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->

      </div>
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->


