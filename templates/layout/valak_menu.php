<div id="valak_mmenu">
  <div class="logomini-box">
    <a href="" class="valak-home"><i class="fas fa-home"></i></a>
    <div class="logomini_valak"><a href=""><strong>MENU</strong><?php /* 
    <img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"> */?></a></div>
    <a id="humber_valak" href="javascript:;"><i class="fas fa-bars"></i></a>
  </div>
  <?php /* <div class="logomini-box-right">
       <a class="valak-phone" href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
       <i class="fas fa-phone-alt"></i> <?= $company["dienthoai"] ?></a> 
      </div> */?>
  <?php /* <div id="valak_lang"> <a href="index.php?com=ngonngu&lang=en" title="English">
  <img src="images/en.png" alt="English" /> </a> <a href="index.php?com=ngonngu&lang=" title="Việt Nam">
  <img src="images/vi.png" alt="Việt Nam" /></a> </div><!--END #lang--> */?>
  <?php /* <?php if($deviceType!="computer"){ ?>
          <a href="gio-hang.html" class="giohang_fix"><i></i><span><?= count($_SESSION["cart"]) ?></span></a>
        <?php } ?> */?>
  <div class="valak-search"> <input type="text" id="txtCountry2" class="form-control keyword placeholder-1"
   required="true" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...')
   {this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
   <span onclick="onSearch($(this));return false;" class="btn_search"><i class="fas fa-search"></i></span> </div>
</div>
<div id="valak_openmmenu">
  <div id="valak_main">
    <div id="close_valak"></div>
    <div class="scroll_menu_valak">
      <div class="logo_valak">MENU<?php /* 
      <img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"> */?></div>
      <div class="linebrk_valak"></div>
      <div class="main_manu_valak">
        <ul >
          <?php //include _template."layout/menu_content.php";?>
          <?php foreach($product_danhmuc as $kdm => $vdm){
            
            $dmsp1 = get_result("select ten$lang as ten,tenkhongdau,id,type from #_product_list where type='san-pham' and
             id_danhmuc='".$vdm["id"]."' and hienthi>0 order by stt asc");
            $clshas = (!empty($dmsp1))?"has-sub":"";  
          ?>
          <li class=""><a href="san-pham/<?= $vdm["tenkhongdau"] ?>-<?= $vdm["id"] ?>">
            <?= $vdm["ten"] ?></a>
            <?php 
            if($clshas == 'has-sub'){ echo '<ul>';
            foreach($dmsp1 as $k => $v){ ?>
            <li><a href="san-pham/<?= $v["tenkhongdau"] ?>-<?= $v["id"] ?>/"><?= $v["ten"] ?></a></li>
          <?php } echo '</ul>'; }?>
          </li>
          <?php } ?>
          <li><a href="khuyen-mai.html">
            Tổng hợp khuyến mãi
          </a></li>
          <li><a href="mien-phi-dung-thu.html">
            Miễn phí dùng thử
          </a></li>
          <li><a href="tang-1-nam-bao-hanh.html">
            Tặng 1 năm bảo hành
          </a></li>
          <li><a href="1-doi-1-trong-1-nam.html">
            1 đổi 1 trong 1 năm
          </a></li>
      </div>
      <div class="linebrk_valak"></div>
      <div class="valak_mmenuf">
        <h2><?=$company['ten']?></h2>
        <p><?=_diachi?>: <?=$company['diachi']?></p>
        <p>Email: <?=$company['email']?></p>
        <p><?=_dienthoai?>: <?=$company['dienthoai']?></p>
        <?php /* <p>Fax: <?=$company['fax']?></p> */?>
        <p>Website: <?=$company['website']?></p>
      </div>
    </div>
  </div>
  <div class="mask_menu"></div>
</div>
<?php /* <script>
  $(document).ready(function() {
    $('.main_manu_valak ul li').each(function(index, el) {
      if($(this).children("ul").length) {
        $(this).prepend('<div class="btn_expand_menu_valak"></div>');
      }
    });
  });
  $(document).on('click', '#humber_valak', function(event) {
    event.preventDefault();
    $("#valak_openmmenu").addClass('expand_menu');
  });
  $(document).on('click', '#close_valak', function(event) {
    event.preventDefault();
    $("#valak_openmmenu").removeClass('expand_menu');
  });
  $(document).on('click', '.btn_expand_menu_valak', function(event) {
    event.preventDefault();
    if($(this).hasClass('more')) {
      $(this).removeClass('more');
    }
    else {
      $(this).addClass('more');
    }
    $(this).parent('li').children('ul').toggle();
  });
  $(window).scroll(function() {
    if($(window).scrollTop() >= $(".hd-bg").height()) 
      // if($(window).scrollTop() >= 50) 
    {
      // $("div.menu").css({position:"fixed",left:'0px',right:'0px',top:'0px',zIndex:'999',
      //height:"45px",background:"#86186F"});
      $("#valak_mmenu").css({position:"fixed",left:'0px',right:'0px',top:'0px',zIndex:'999'});
      // $(".logo").css({top:"8px",width:"130px"});
    }
    else
    {
      // $("div.menu").css({position:"static",height:"95px",background:"#fff"});
      $("#valak_mmenu").css({position:"relative"});
      // $(".logo").css({top:"18px",width:"auto"});
    }
  });
</script> */?>