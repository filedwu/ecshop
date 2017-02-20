<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block  main clearfix">
  
  <div class="AreaL" style="display:none">
    
    <div class="box">
     <div class="box_1">
      <h3><span><?php echo $this->_var['lang']['shop_notice']; ?></span></h3>
      <div class="boxCenterList RelaArticle">
        <?php echo $this->_var['shop_notice']; ?>
      </div>
     </div>
    </div>
    <div class="blank5"></div>
    
  
<?php echo $this->fetch('library/cart.lbi'); ?>
<?php echo $this->fetch('library/top10.lbi'); ?>
<?php echo $this->fetch('library/email_list.lbi'); ?>


  </div>
  

  
  <div class="AreaR">
   
    <div class="box clearfix">
     <div class="box_1 clearfix">
       <div class="focus" id="focus">
       <?php echo $this->fetch('library/index_ad.lbi'); ?>
       </div>
     </div>
    </div>
    <div class="blank5"></div>
   
   
    <div class="clearfix" style='display:none'>

      <?php echo $this->fetch('library/recommend_promotion.lbi'); ?>

      <div class="box f_r brandsIe6">
       <div class="box_1 clearfix" id="brands">
        <?php echo $this->fetch('library/brands.lbi'); ?>
       </div>
      </div>
    </div>
    <div class="blank5"></div>
   
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

  </div>
  
</div>
<div class="blank5"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>
<div class="blank"></div>







<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
