<?php
$static = substr($p->url, strrpos($p->url, "/") + 1);
$subPages = get_static_sub_post($static, null);
usort($subPages, function($a, $b) { return $b->file == $a->file ? 0 : (($b->file < $a->file) ? 1 : -1); });
if (isset($is_page) && count($subPages) >= 1):?>

<div class="container">
  <div class="row">
    <?php foreach ($subPages as $sp):?>
        <div class="col-lg-6" style="margin-bottom:2em;">
            <div class="card">
            <h3 class="card-header"><a href="<?php echo $sp->url;?>" style="color:#1a1a1a;"><?php echo $sp->title;?></a></h3>
                <a href="<?php echo $sp->url;?>"><img height="200px" style="object-fit: cover;" class="card-img-top" src="<?php echo get_image($sp->body);?>" alt="<?php echo $sp->title;?>"></a>
                <div class="card-body">
                    <a href="<?php echo $sp->url;?>" class="btn btn-outline-info">Info</a> <a href="<?php echo $sp->url;?>#download" class="btn btn-outline-primary">Download</a> <?php if (login()) { echo '<span><a class="btn btn-info" href="'. $sp->url .'/edit?destination=post">Edit</a></span>'; } ?>
                </div>
            </div>
        </div>
    <?php endforeach;?>
  </div>
</div>

<?php endif;?>


 <!--Edited 27/12/21-->
 <?php
$static = substr($p->url, strrpos($p->url, "/") + 1);
$subPages = get_static_sub_post($static, null);
usort($subPages, function($a, $b) { return $b->file == $a->file ? 0 : (($b->file < $a->file) ? 1 : -1); });
if (isset($is_page) && count($subPages) >= 1):?>

<div class="container">
  <div class="row">
  <ul class="subPageMenu">
    <?php foreach ($subPages as $sp):?>
        <div class="col-lg-6" style="margin-bottom:10px;">
            <div class="card">
            <li class="card-header"><a href="<?php echo $sp->url;?>" style="color:#1a1a1a;"><?php echo $sp->title;?></a></li>
            </div>
        </div>
    <?php endforeach;?>
  </ul>
  </div>
</div>

<?php endif;?>
