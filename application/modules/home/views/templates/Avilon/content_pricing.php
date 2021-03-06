<?php 
if(!empty($home['content_pricing']))
{
  $category = @$home['content_pricing'][0]['category'];
  ?>
  <div class="container">
    <div class="section-header">
      <h3 class="section-title"><?php echo @$category['title']; ?></h3>
      <span class="section-divider"></span>
      <p class="section-description"><?php echo @$category['description'] ?></p>
    </div>
    <div class="row">
      <?php 
      foreach ($home['content_pricing'] as $key => $value) 
      {
        ?>
        <div class="col-lg-4 col-md-6">
          <div class="box wow fadeInUp">
            <h3><?php echo $value['title'] ?></h3>
            <?php echo $value['content'] ?>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
  <?php
}