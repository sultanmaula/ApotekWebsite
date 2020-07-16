<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> TAMBAH TRANSAKSI</h3>
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

                <form class="cmxform form-horizontal style-form" id="form_tambah_transaksi" enctype="multipart/form-data" method="post" action="<?php echo base_url()?>index.php/transaksi/simpan_transaksi">
                  <!-- <div class="form-group ">
                    <label for="cpetugas" class="control-label col-lg-2">Petugas</label>
                    <div class="col-lg-10">
                    <select class="form-control" name="id_kasir" id="id_kasir">
                
                      <option>
                        <?php
                         
                          foreach($join_transaksiKasir as $j){ ?>
                            <option  value="<?php echo $j['id_kasir'] ?>"><?php echo $j['nama_kasir'] ?></option>
                          <?php
                        } ?> 
                      </option>
                     
                    </select>

                    </div>
                  </div> -->
                  <div class="form-group ">
                    <div>
                      <label for="cnamaobat" class="control-label col-lg-2">Nama Obat</label>
                      <div class="col-lg-6">
                        <select class="form-control select_obat_value" name="id_obat[]" id="select_obat_0" onchange="get_value_obat(0)" required>
                    
                          <option>
                            
                            <?php
                         
                              foreach($join_transaksiObat as $j){ ?>
                                <option  value="<?php echo $j['id_obat'] ?>"><?php echo $j['nama_obat'] ?></option>

                              <?php
                            } ?> 

                          </option>
                         
                        </select>
                      </div>
                      <div class="col-lg-1">
                        <input class="form-control "id="banyak_obat_0" type="input" name="banyak_obat[]" placeholder ="Jmlh" style="text-align: center;" required/>
                      </div>
                      <div class="col-lg-2">
                        <input class="form-control" id="harga_obat_0" type="input" name="harga_obat[]" placeholder="Harga" style="text-align: center;" readonly />
                      </div>
                      <div class="col-lg-1">
                        <input id="add-obat-btn" type="button" class="btn btn-primary" value="+">
                      </div>
                    </div>   
                  </div>
                  <div class="div-obat-append"></div>
                  <div class="form-group ">
                    <label for="ctotalharga" class="control-label col-lg-2">Total Harga</label>
                      <div class="col-lg-6">
                        <input class="form-control" id="total_harga" type="input" name="total_harga" readonly required />
                      </div>
                      <div class="col-lg-2">
                        <input type="button" class="btn btn-success" value="Lihat Total Harga" id="lihat_total_harga" >
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="submit" name="simpantransaksi" id="simpantransaksi" value="Tambahkan" class="btn btn-theme">
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


