<?php date_default_timezone_set('UTC'); ?>
<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<?php if (!empty($breadcrumb)): ?>
    <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><?php echo $breadcrumb ?></div>
<?php endif; ?>
<?php if (login()) { echo tab($p); } ?>
<div class="post" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
    <div class="main">
        <h1 class="title-post" itemprop="name"><?php echo $p->title ?></h1>
        <div class="post-body" itemprop="articleBody">
		<?php
		// A file's last modification time as a
        // date that is in human-readable form
        // echo "Last time of file change: " . 
        // date("F d Y H:i:s.", filemtime());
  
?>
            <?php echo $p->body; ?>
        </div>
    </div>
</div>

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
            <li class="card-header"><a href="<?php echo $sp->url;?>" style="color:#7E909D;"><?php echo $sp->title;?></a></li>
            </div>
        </div>
    <?php endforeach;?>
  </ul>
  </div>
</div>

<?php endif;?>
<?php //echo $pagination['next'] ?>
<?php
// echo "test";
// echo $p->date;
// echo "<br>";
// echo $p->title;
// echo "<br>";
// echo $breadcrumb;
// echo "<br>";
?>

