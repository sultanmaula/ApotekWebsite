<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> TRANSAKSI</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <div class="showback">
                <a href='<?php echo base_url();?>index.php/transaksi/tambah_transaksi_page'><button type="button" class="btn btn-round btn-primary fa fa-plus"> Tambah Transaksi</button></a>
              </div>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Tanggal Transaksi</th>
                    <th>Kode Transaksi</th>
                    <th>Petugas</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    foreach ($detil_transaksi as $data) {
                    echo '
                    <tr>
                     <td> '.$data->tanggal_beli.' </td>
                     <td> '.$data->kode_transaksi.' </td>
                     <td> '.$data->nama_kasir.' </td>
                     <td>
                        <a href="'.base_url().'index.php/transaksi/detail_transaksi/'.$data->kode_transaksi.'"><button class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Detail Transaksi</button></a>
                     </td>
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