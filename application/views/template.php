<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>APOTEK SEHAT</title>

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap-datetimepicker/datertimepicker.css" />
  <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/lib/advanced-datatable/css/DT_bootstrap.css" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <div class="top-menu">
        <a href="<?php echo base_url();?>index.php/Welcome/index" class="logo">
          <img src="<?php echo base_url();?>assets/img/apotek.png" class="img-circle" width="40"> 
          <b>APOTEK SEHAT</b>
        </a>
      </div>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url();?>index.php/user/logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <h5 class="centered">Hi, <?= ucwords($this->session->userdata('nama_kasir')) ?></h5>
          
          <li class="mt">
            <a href="<?php echo base_url();?>index.php/Welcome/index">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url();?>index.php/admin/tampil_admin">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>Kasir</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url();?>index.php/supplier/data_supplier">
              <!-- <i class="fa fa-desktop"></i> -->
              <span>Supplier</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url();?>index.php/obat/data_obat">
              <!-- <i class="fa fa-desktop"></i> -->
              <span>Obat</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url();?>index.php/transaksi/transaksi_page">
              <!-- <i class="fa fa-desktop"></i> -->
              <span>Transaksi</span>
              </a>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <?php $this->load->view($main_view);?>

  </section>


    <!--sidebar end -->
       
   <!-- footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Apotek Sehat</strong> 2019. All Rights Reserved
        </p>
        
          <a href="" class="go-top">
             <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
 
  <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/lib/advanced-datatable/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url();?>assets/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="<?php echo base_url();?>assets/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="<?php echo base_url();?>assets/lib/advanced-form-components.js"></script>

</body>

</html>

<script>
  $("#add-obat-btn").click(function(){
    form_length = $(".form-add-obat").length;
    form_count = form_length+1;
    $(".div-obat-append").append('<div class="form-group form-add-obat" id="'+form_count+'-form-group">'+
                      '<div class="col-lg-2"></div>'+
                      '<div class="col-lg-6">'+
                        '<select class="form-control select_obat_value" name="id_obat[]" id="select_obat_'+form_count+'" onchange="get_value_obat('+form_count+')">'+
                          '<option>'+
                            '<?php
                         
                              foreach($join_transaksiObat as $j){ ?>'+
                                '<option  value="<?php echo $j['id_obat'] ?>"><?php echo $j['nama_obat'] ?></option>'+

                              '<?php
                            } ?>'+
                          '</option>'+
                        '</select>'+
                      '</div>'+
                      '<div class="col-lg-1">'+
                        '<input class="form-control "id="banyak_obat_'+form_count+'" type="input" name="banyak_obat[]" placeholder="Jmlh" style="text-align: center;" />'+
                      '</div>'+
                      '<div class="col-lg-2">'+
                        '<input class="form-control " id="harga_obat_'+form_count+'" type="input" name="harga_obat[]" placeholder="Harga" style="text-align: center;" readonly/>'+
                      '</div>'+
                      '<div class="col-lg-1">'+
                        '<input id="delete-obat-btn" onclick="deleteFormObat('+form_count+')" type="button" value="-" class="btn btn-danger">'+
                      '</div>'+
                    '</div>');
  });

  function deleteFormObat(id){
    $("#"+id+"-form-group").remove();
  }

  function get_value_obat(form_index) {
    id_obat = $("#select_obat_"+form_index).val();
    $.ajax({
          type: 'POST',
          url: '/tubes_apotek/index.php/transaksi/get_harga_obat/'+id_obat+'/'+form_index,
          dataType: 'json',
          success: function(data) {
            console.log(data.form_index);
            $("#harga_obat_"+data.form_index).val(data.data_obat[0].harga_obat);
          }
      });
  }

  $("#lihat_total_harga").click(function(){
    length_row = $(".select_obat_value").length;
    perkalian = 0;
    total_harga = 0;

    for (var i = length_row - 1; i >= 0; i--) {
      perkalian = parseInt($("#banyak_obat_"+i).val()) * parseInt($("#harga_obat_"+i).val());


      total_harga = total_harga + perkalian;
    }

    $("#total_harga").val(total_harga);

  });
</script>

<script type="text/javascript">
    /* Formating function for row details */
   /* function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }*/
    

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      /*nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";*/

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>