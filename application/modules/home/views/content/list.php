<?php

if(!empty($content['data']))
{
  ?>
  <ul class="list-unstyled">
    <?php 
    $data = $content['data'];
    foreach ($data as $key => $value) 
    {
      $link = content_link($value['slug']);
      $css = ($key%2 == 0) ? 'my-4' : '';
      ?>
      <li class="media <?php echo $css ?>">
        <?php 
        if(!empty($value['image']))
        {
          ?>
          <a href="<?php echo $link; ?>"><img class="thumb mr-3" src="<?php echo image_module('content', $value['id'].'/'.$value['image']);?>" alt="<?php echo $value['title'] ?>" width="200"></a>
          <?php
        }
        ?>
        <div class="media-body">
          <a href="<?php echo $link; ?>"><h5 class="mt-0 mb-1"><?php echo $value['title'] ?></h5></a>
          <?php echo $value['intro'] ?>
          <div class="row">
            <div class="col">
              <p class="pull-right">
                <span class="badge">created : <?php echo content_date($value['created']); ?></span>
              </p>
            </div>
          </div>
        </div>
      </li>
      <?php
    }
    ?>
  </ul>
  <?php
  if(!empty($content['pagination']))
  {
    echo $content['pagination'];
  }
}