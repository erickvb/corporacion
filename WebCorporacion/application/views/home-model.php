<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
<? $this->load->view("layout/header");?>
</head>
<body class=" fixed header-bg sticky-bar allpage-img off-canvas-right">

<div id="jm-allpage">
<div id="jm-allpage-in">

<? //ADD MOVIL?>

<!--TOP MENU-->
<? $this->load->view("layout/top-menu.php");?>
<!--FIN MENU TOP-->
<!--INICIO MENU-->
<? $this->load->view("layout/menu.php");?>
<!--FIN  MENU-->
<!--INICIO HEADER-->
<? //include("header-large.php");?>
<!-- fin header-->


<!-- section localizacion top personaas-->


<section id="jm-main">
<div class="container-fluid">


<div class="row-fluid">
   <div id="jm-breadcrumbs" class="span12 ">
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
         <li class="active"> You are here: &#160;</li>
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="jm-dating/" class="pathway">
            <span itemprop="name">Home</span></a>
            <span class="divider">
            <img src="jm-dating/templates/jm-dating/images/system/arrow.png" alt="" /></span>
            <meta itemprop="position" content="1">
         </li>
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="jm-dating/meet" class="pathway">
            <span itemprop="name"> Meet somebody</span>
            </a>
            <span class="divider">
            <img src="jm-dating/templates/jm-dating/images/system/arrow.png" alt="" /></span>
            <meta itemprop="position" content="2">
         </li>
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
            <span itemprop="name"> She's looking for Him</span>
            <meta itemprop="position" content="3">
         </li>
      </ul>
   </div>
</div>


<!-- INICIO LISTA -->
<div class="row-fluid">
   <div id="jm-content" class="span9 offset3" data-xtablet="span12" data-tablet="span12" data-mobile="span12">
      <div id="jm-maincontent">
         <div id="dj-classifieds" class="clearfix djcftheme-jm-dating">
            <div class="djcf-ad-top clearfix">
               <div class="moduletable">
                  <div class="custom"  >
                     <p style="margin: 0; text-align: center;">
                        <a href="http://dj-extensions.com/faq/dj-classifieds-faq/how-to-place-a-banner-adsense-into-dj-classifieds" target="_blank"><img src="jm-dating/images/modules/banner.png" alt="Custom Banner" border="0" /></a>
                     </p>
                  </div>
               </div>
            </div>
            <h1 class="main_cat_title">She's looking for Him<a
               class="rss_icon" href="jm-dating/meet-somebody/she-s-looking-for-him?format=feed&amp;type=rss">
               <img src="jm-dating/components/com_djclassifieds/assets/images/rss.png"  alt="rss" /></a>
            </h1>
            <div class="dj-items-blog">
               <div class="djcf_items_blog">
                  <!-- lista template-->
                 <!--  -->
                  <div class="clear_both" ></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--SLIDER LEFT-->
   <!-- FIN SLIDER -->
</div>
<!--Fin  lista-->
</div>
</section>
<!-- footer slider -->
<!-- fin footer slider -->

<!-- section red social-->

<? $this->load->view("layout/footer.php")?>
<script type="text/javascript">
var myUser = new User();
myUser.listUser();
</script>

<script id="user-template" type="text/x-handlebars-template">
     <div class="item_box item_auction" style="width:24.9%;">
                     <div class="item_box_bg0">
                        <div class="item_box_in">
                           <div class="item_box_in2 clearfix">
                              <div class="title">
                                 <h2><a href="jm-dating/single-ad-view-with-bids" >Vivian White</a></h2>
                                 <span class="type_button" style="display:inline-block; border:0px solid #DEDEDE;background:#6B4ECC;color:#FFFFFF;font-size: 10px;font-weight: bold;line-height: 20px;margin: 2px;padding: 0 5px;vertical-align:middle;" >FREEKY</span>
                                 <span class="auction_icon" ></span>
                              </div>
                              <div class="blog_det">
                                 <div class="item_img">
                                    <a href="jm-dating/single-ad-view-with-bids">
                                    <img src="jm-dating/components/com_djclassifieds/images/item/78_i14_thm.jpg" alt="i14"  /></a>
                                 </div>
                                 <div class="region">
                                    <span class="label_title"></span>New York
                                 </div>
                                 <div class="item_box_bottom">
                                    <div class="item_desc">
                                       <span class="label_title">About me</span>
                                       <span class="desc_info">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span>
                                    </div>
                                 </div>
                                 <div class="see_details_box">
                                    <a class="see_details" href="jm-dating/single-ad-view-with-bids" >More about me</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
</script>

</div>
</div>
</body>
</html>