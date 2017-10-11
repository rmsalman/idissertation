<style>
    @media screen and (min-width: 769px){
        .row_mrg .col-sm-6:first-child {
    text-align: right;
}

    }
</style>

<div class="content-wrapper settingPage">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">PDFs </h3>
            </div>
            <div class="box-body">

                    <?php
                        if(isset($result->result_object[0]) && !empty($result->result_object[0])){
                        ?>
                            <div class="col-sm-6">
                                <h1>Status from Admin</h1>
                                <p><strong>Status:</strong> <?php
                                    $admin_status = $result->result_object[0]->admin_status;
                                    if($admin_status == '1'){
                                        echo 'working';
                                    }elseif($admin_status == '2'){
                                        echo 'working';
                                    }elseif($admin_status == '3'){
                                        echo 'Pending';
                                    }elseif($admin_status == '4'){
                                        echo 'Pause';
                                    }elseif($admin_status == '5'){
                                        echo 'Cancel';
                                    }

                                    ?></p>
                                <p><strong>Note:</strong> <?= $result->result_object[0]->admin_notes ?></p>
                                <p><strong>Tracking Code:</strong> <?= $result->result_object[0]->tracking ?></p>
                            </div>
                            <div class="col-sm-6">
                                <h1>Status from User</h1>
                                <p><strong>Status:</strong> <?php
                                    $user_status = $result->result_object[0]->user_status;
                                    if($user_status == '1'){
                                        echo 'Urgent';
                                    }elseif($user_status == '2'){
                                        echo 'Normal';
                                    }elseif($user_status == '3'){
                                        echo 'Pause';
                                    }elseif($user_status == '4'){
                                        echo 'Cancel';
                                    }
                                    ?></p>
                                <p><strong>Note:</strong> <?= $result->result_object[0]->user_notes ?></p>
<p><strong>File 1:</strong> <a target="_blank" href="http://www.idissertation.co.uk/uploads/<?= $result->result_object[0]->file ?>"><?= $result->result_object[0]->file ?></a></p>
                                <p><strong>file 2:</strong> <a href="http://www.idissertation.co.uk/uploads/<?= $result->result_object[0]->file2 ?>"><?= $result->result_object[0]->file2 ?></a></p>
                            </div>
<div class="col-sm-6">
  <h1>Total Summary</h1>
    <div class="p_cost">
      <h4>Printing</h4>
      <h6>Black and White Pages <strong class="p_BW"><?= $result->result_object[0]->p_BW; ?></strong> <i>x 5p per page</i></h6>
      <h6>Colour Pages <strong class="p_clr"><?= $result->result_object[0]->p_clr; ?></strong> <i>x 40p per page</i></h6>
      <h6>Number of pages <strong class="p_sets"><?= $result->result_object[0]->p_pages; ?></strong></h6>
      <h6>Number of copies <strong class="p_copies"><?= $result->result_object[0]->p_copies; ?></strong></h6>
      <strong>Total Printing Cost = <span class="p_total"><?= str_replace('Â£ ', '£ ', $result->result_object[0]->p_total) ; ?></span></strong>
    </div>
    <div class="t_cost">
      <h4>Printing Turnitin Report</h4>
      <h6>Black and White Pages <strong class="t_BW"><?= $result->result_object[0]->t_BW; ?></strong> <i>x 5p per page</i></h6>
      <h6>Colour Pages <strong class="t_clr"><?= $result->result_object[0]->t_clr; ?></strong> <i>x 40p per page</i></h6>
      <h6>Number of pages <strong class="t_pages"><?= $result->result_object[0]->t_pages; ?></strong> <i></i></h6>
      <h6>Number of copies <strong class="t_copies"><?= $result->result_object[0]->t_copies; ?></strong> <i></i></h6>
      <strong>Turnitn Report Total Cost = <span class="t_total"><?=  str_replace('Â£ ', '£ ', $result->result_object[0]->t_total); ?></span></strong>
    </div>
    <div class="b_cost">
      <h4>Binding</h4>
      <h6>Binding Cover Select <strong class="b_bin">
      
      
      
      <?php 
      $bcover = $result->result_object[0]->b_bin;
      
      
      
      
     if($bcover == '0' ){
     
     echo 'Not Selected';
     }elseif($bcover  == '18') {
     echo 'Hard Bound Buckram Cover (£18)';
     }elseif($bcover  == '15') {
     echo 'Hard Bound Magesta Cover (£15)';
     }elseif($bcover  == '10') {
     echo 'Soft Bound Magesta Cover (£10)';
     }elseif($bcover  == '7') {
     echo 'Soft Bound Acetate Covers (£7)';
     }elseif($bcover  == '5') {
     echo 'Wiro Bound (£5)';
     }
      
      ?>
      
      
      
      </strong></h6>
      <h6>Number of copies <strong class="b_copies"><?= $result->result_object[0]->b_copies; ?></strong> </h6>
      <h6>Front and Spine Hotfoil Letters £3 <strong class="b_true"><?= $result->result_object[0]->b_true; ?></strong></h6>
      <strong>Total Binding Cost = <span class="b_total"><?= str_replace('Â£ ', '£ ', $result->result_object[0]->b_total); ?></span></strong>
    </div>
    <div class="e_cost">
      <h4>Extras</h4>
      <h6>CD <strong class="e_cd"><?= $result->result_object[0]->e_cd; ?></strong>   x £2.00 per item</h6>
      <h6>CD Poket <strong class="e_cdp"><?= $result->result_object[0]->e_cdp; ?></strong> </h6>
      <h6>Turnitin Report Sleeve <strong class="e_tr"><?= $result->result_object[0]->e_tr; ?></strong>  x £0.20 per item</h6>
      <strong>Total Extra(s) Cost = <span class="e_total"><?= str_replace('Â£ ', '£ ', $result->result_object[0]->e_total); ?></span></strong>
    </div>
    <div class="total">
      <h3>Total Cost <strong class="grand_total"><?= str_replace('Â£ ', '£ ', $result->result_object[0]->grand_total); ?></strong></h3>
    </div>
</div>
                <div class="col-sm-6">

                    <form action="" method="POST">
                        <h1>Personal Info</h1>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">First Name </label><br>
                                    <label for="name"><strong><?= $result->result_object[0]->name; ?></strong> </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lname">Last Name </label><br>
                                    <label for="name"><strong><?= $result->result_object[0]->lname; ?></strong> </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label><br>
                            <label for="name"><strong><?= $result->result_object[0]->email; ?></strong> </label>
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number</label><br>
                            <label for="name"><strong><?= $result->result_object[0]->cell; ?></strong> </label>
                         </div>
                        <div class="form-group">
                            <label for="inst">University or Insititution</label><br>
                            <label for="name"><strong><?= $result->result_object[0]->inst; ?></strong> </label>
                        </div>
                        <div class="form-group">
                            <label for="addr">Address</label><br>
                            <label for="name"><strong><?= $result->result_object[0]->address; ?></strong> </label>
                        </div>
                        <div class="form-group">
                            <label for="addr1">Address 2</label><br>
                            <label for="name"><strong><?= $result->result_object[0]->address2; ?></strong> </label>
                        </div>
                        <div class="form-group">
                            <label for="addr2">Postal Code</label><br>
                            <label for="name"><strong><?= $result->result_object[0]->postal_code; ?></strong> </label>
                        </div>
                        <div class="form-group">
                            <label for="Notes">Notes</label><br>
                            <label for="name"><strong><?= $result->result_object[0]->notes; ?></strong> </label>
                        </div>
                    </form>

                </div>


<div class="col-sm-12">
    <form action="" method="POST">
                        <h1>Front and Spine Hotfoil Letters</h1>

<!-- 
<br>
<pre>
    <?php 


   // print_r($result);


    ?>
</pre>

<br> -->


                    
                        <div class="form-group row_mrg">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Top to Bottom 1 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->tp_bm_1; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="lname">Top to Bottom 2 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->tp_bm_2; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Top to Bottom 3 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->tp_bm_3; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="lname">Top to Bottom 4 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->tp_bm_4; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Top to Bottom 5 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->tp_bm_5; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Top to Bottom 6 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->tp_bm_6; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Foil 1 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->foil_1; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="lname">Foil 2 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->foil_2; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="lname">Foil 3 </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->foil_3; ?></strong> </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Text Color </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->text_color; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Spine Up/Down </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->spine_up_down; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="lname">Logo </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->logo; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="lname">Logo Position </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><?= $result->result_object[0]->l_position; ?></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Cover </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><strong><img src="http://www.idissertation.co.uk/<?= $result->result_object[0]->hotfoilcolour; ?>" alt="Cover" style="max-width: 100%;"></strong> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="lname">Logo </label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name"><img src="http://www.idissertation.co.uk/uploads/<?= $result->result_object[0]->myImage; ?>" alt="Logo" style="max-width: 100%;"></label>
                                </div>
                            </div>
                        </div>
</div>

<?php }else {?>

                <h2><center>Sorry no such PDF Found</center></h2>
                <?php }?>
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