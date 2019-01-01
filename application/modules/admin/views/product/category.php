<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
  <div class="col-md-3">
    <?php
    $this->load->view('cat_edit');
    $this->zea->form();
    ?>
  </div>
  <div class="col-md-9">
    <?php
    $this->load->view('cat_list');
    ?>
  </div>
</div>