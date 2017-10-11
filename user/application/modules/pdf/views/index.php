<!-- page content -->
 <!-- Content Wrapper. Contains page content -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<style>
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {

        padding: 13px;
        max-width: 100px;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-all;
    }
    .table-danger, .table-danger>td, .table-danger>th {
        background-color: #f5c6cb;
    }
    .table-secondary, .table-secondary>td, .table-secondary>th {
        background-color: #dddfe2;
    }
    .table-primary, .table-primary>td, .table-primary>th {
        background-color: #b8daff;
    }
    .table-active, .table-active>td, .table-active>th {
        background-color: rgba(0,0,0,.075);
    }
    .table-warning, .table-warning>td, .table-warning>th {
        background-color: #ffeeba;
    }
</style>
  <div class="content-wrapper settingPage">
    <!-- Main content -->

    <section class="content">
      <!-- Default box -->
        <?php
        if($this->session->flashdata('success') || $this->session->flashdata('failed')) {
            ?>
            <div class="alert alert-info">
                <?= $this->session->flashdata('failed') ;?>
                <?= $this->session->flashdata('success') ;?>
            </div>
            <?php
        }
        ?>
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">PDFs </h3>
        </div>




        <div class="box-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-md-6 col-md-offset-1 aboutshift">
                  <div class="container">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover table-condensed  data-table ">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Name</th>
<!--                                      <th>Last Name</th>-->
                                      <th>Email</th>
<!--                                      <th>Phone</th>-->
<!--                                      <th>Address</th>-->
<!--                                      <th>Address 2</th>-->
                                      <th>Admin Status</th>
                                      <th>User Status</th>
<!--                                      <th>inst.</th>-->
<!--                                      <th>Black and White Pages</th>-->
<!--                                      <th>Colour Pages</th>-->
<!--                                      <th>Number of copies</th>-->
<!--                                      <th>Number of pages</th>-->
<!--                                      <th>Total Printing Cost</th>-->

<!--                                      <th>Black and White Pages</th>-->
<!--                                      <th>Colour Pages</th>-->
<!--                                      <th>Number of copies</th>-->
<!--                                      <th>Turnitn Report Total Cost</th>-->

<!--                                      <th>Binding Cover</th>-->
<!--                                      <th>Number of copies</th>-->
<!--                                      <th>Number of pages</th>-->
<!--                                      <th>Front and Spine Hotfoil Letters £3</th>-->
<!--                                      <th>Total Binding Cost</th>-->

<!--                                      <th>CD</th>-->
<!--                                      <th>CD Poket</th>-->
<!--                                      <th>Turnitin Report Sleeve</th>-->
<!--                                      <th>Total Extra(s) Cost</th>-->
                                      <th>Total Cost</th>
                                      <th>file</th>
                                      <th>t_file</th>
                                      <th>created</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php

                              if (isset($result) && !empty($result)) {
                                  foreach ($result->result_object as $row) {
                                      ?>
                                      <tr class="<?php


                                      if(CheckPermission("users", "own_read")){
                                          if($row->admin_status == '1'){
                                              echo 'table-active';
                                          }elseif($row->admin_status == '2'){
                                              echo 'table-primary';
                                          }elseif($row->admin_status == '3'){
                                              echo 'table-secondar';
                                          }elseif($row->admin_status == '4'){
                                              echo 'table-warning';
                                          }elseif($row->admin_status == '5'){
                                              echo 'table-danger';
                                          }

                                      }

                                      ?>" >
                                          <td><a href="<?= base_url()?>pdf/id/<?= $row->id ?>"><?= $row->id ?></a></td>
                                          <td><?= $row->name; ?></td>
<!--                                          <td>--><?php // echo $row->lname; ?><!--</td>-->
                                          <td><?= $row->email; ?></td>
<!--                                          <td>--><?php // echo $row->cell; ?><!--</td>-->
<!--                                          <td>--><?php // echo $row->address; ?><!--</td>-->
<!--                                          <td>--><?php // echo $row->address2; ?><!--</td>-->
                                          <td><?php
                                              if($row->admin_status == '1'){
                                                  echo 'working';
                                              }elseif($row->admin_status == '2'){
                                                  echo 'pending';
                                              }elseif($row->admin_status == '3'){
                                                  echo 'Pending';
                                              }elseif($row->admin_status == '4'){
                                                  echo 'Pause';
                                              }elseif($row->admin_status == '5'){
                                                  echo 'Cancel';
                                              }
                                              ?></td>
                                          <td><?php

                                              if($row->user_status == '1'){
                                                  echo 'Urgent';
                                              }elseif($row->user_status == '2'){
                                                  echo 'Normal';
                                              }elseif($row->user_status == '3'){
                                                  echo 'Pause';
                                              }elseif($row->user_status == '4'){
                                                  echo 'Cancel';
                                              }

                                              ?></td>
<!--                                          <td>--><?php // echo  $row->inst; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->p_BW; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->p_clr; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->p_copies; ?><!--</td>-->
<!---->
<!--                                          <td>--><?php // echo $row->p_pages; ?><!--</td>-->
<!--                                          <td>--><?php // echo $row->p_total; ?><!--</td>-->
<!---->
<!--                                          <td>--><?php // echo  $row->t_BW; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->t_clr; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->t_copies; ?><!--</td>-->
<!---->
<!--                                          <td>--><?php // echo  $row->t_pages; ?><!--</td>-->
<!--                                          <td>--><?php // echo $row->t_total; ?><!--</td>-->
<!---->
<!--                                          <td>--><?php // echo  $row->b_bin; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->b_copies; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->b_true; ?><!--</td>-->
<!--                                          <td>--><?php // echo $row->b_total; ?><!--</td>-->
<!---->
<!--                                          <td>--><?php // echo  $row->e_cd; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->e_cdp; ?><!--</td>-->
<!--                                          <td>--><?php // echo  $row->e_tr; ?><!--</td>-->
<!--                                          <td>--><?php // echo $row->e_total; ?><!--</td>-->
                                          <td><?= str_replace('Â£ ', '£ ', $row->grand_total); ?></td>
                                          <td><a href="http://www.idissertation.co.uk/uploads/<?= $row->file; ?>" target="_blank"><?= $row->file; ?></a></td>
                                          <td><a href="http://www.idissertation.co.uk/uploads/<?= $row->file2; ?>" target="_blank"><?= $row->file2; ?></a></td>
                                          <td><?= $row->created; ?></td>
                                          <td>
                                              <?php
                                          if(CheckPermission("users", "own_read")){
                                            ?>
                                              <a class="btn btn-warning" href="<?= base_url()?>pdf/admin_edit/<?= $row->id; ?>">Edit Status</a>
                                              <?php
                                          }else {
                                              ?>
                                              <a class="btn btn-warning" href="<?= base_url()?>pdf/edit_status/<?= $row->id; ?>">Edit Status</a>
                                              <?php
                                          }
                                          if($row->payment == '' || $row->payment == '2'){
                                              ?>
                                              <form action="https://secure-test.worldpay.com/wcc/purchase" method="POST">
                                                  <input type="hidden" name="testMode" value="100">
                                                  <input type="hidden" name="instId" value="1233012">
                                                  <input type="hidden" name="cartId" value="<?= $row->id; ?>">
                                                  <input type="hidden" name="amount" value="<?= str_replace("£ ","", $row->grand_total); ?>">
                                                  <input type="hidden" name="currency" value="GBP">
                                                  <input type="submit" value=" Pay Here " class="btn btn-success btn-block">
                                              </form>

                                              <?php
                                          }

                                              ?>

                                              </td>
                                      </tr>
                                      <?php
                                  }
                              } else {
                                  echo "<td colspan=23><center>No Results Found</center></td>";
                              }
                              ?>

                              </tbody>
                          </table>
                      </div>
                  </div>
                  <br>



                  <br>
              </div>
                <script>
                    $(document).ready(function() {
                        $('.data-table').DataTable({
                            "order": [[ 0, "desc" ]]
                        });
                    } );
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->