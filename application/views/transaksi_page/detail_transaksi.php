  <section id="main-content">
        <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> DETAIL TRANSAKSI</h3>
          <div class="row mb">
            <!-- page start-->
            <div class="content-panel">
              <div class="adv-table">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <div class="showback">
                    <a href='<?php echo base_url();?>index.php/transaksi/transaksi_page'><button type="button" class="btn btn-round btn-danger fa fa-undo" > Kembali</button></a>
                  </div>  
                  <thead>
                    <tr>
                      <th>Tanggal Transaksi</th>
                      <th>Kode Transaksi</th>
                      <th>Petugas</th>
                      <th>Nama Obat</th>
                      <th>Harga Obat</th>
                      <th>Banyaknya</th>
                      <th>Total Harga</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      foreach ($detil as $data) {
                      echo 
                      '<tr>
                       <td> '.$data->tanggal_beli.' </td>
                       <td> '.$data->kode_transaksi.' </td>
                       <td> '.$data->nama_kasir.' </td>
                       <td> '.$data->nama_obat.' </td>
                       <td> '.$data->harga_obat.' </td>
                       <td> '.$data->banyak_obat.' </td>
                       <td> '.$data->total_harga.' </td>
                      
                      </tr>'
                      ;
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- page end-->
          </div>
          <!-- /row -->
        </section>
        <!-- /wrapper -->
      </section>  