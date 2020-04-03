<div class="nav-bg">
<div class="container">
  <div class="dmspbox">
    <p class="tit text-uppercase"><i class="fas fa-bars" aria-hidden="true"></i> <?php echo _danhmucsanpham ?></p>
    <?php if($source != "index" && $template != "product_danhmuc"){ ?>
    <div class="dmsp-container " >
       <ul class="scrollstyle-4">
      <?php foreach($product_danhmuc as $kdm => $vdm){
        
        $dmsp1 = get_result("select ten$lang as ten,tenkhongdau,id,type from #_product_list where type='san-pham' and
         id_danhmuc='".$vdm["id"]."' and hienthi>0 order by stt asc");
        $clshas = (!empty($dmsp1))?"has-sub":"";  
      ?>
      <li class="<?= $clshas ?> hoverhori"><a href="san-pham/<?= $vdm["tenkhongdau"] ?>-<?= $vdm["id"] ?>">
        <?= $vdm["ten"] ?></a>
        <?php 
        if($clshas == 'has-sub'){ echo '<ul>';
        foreach($dmsp1 as $k => $v){ 
          $dmsp2 = get_result("select ten$lang as ten,tenkhongdau,id,type from #_product_cat where type='san-pham' and
           id_list='".$v["id"]."' and hienthi>0 order by stt asc");
          ?>
        <li><a href="san-pham/<?= $v["tenkhongdau"] ?>-<?= $v["id"] ?>/"><?= $v["ten"] ?></a>
<?php if(!empty($dmsp2)){ echo '<ul>'; 
foreach($dmsp2 as $key => $value){ 
?>
<li><a href="san-pham/<?= $value["tenkhongdau"] ?>/<?= $value["id"] ?>"><?= $value["ten"] ?></a></li>
<?php } echo '</ul>'; }?>
        </li>
      <?php } echo '</ul>'; }?>
      </li>
      <?php } ?>
      </ul>
    </div>
    
    <?php } ?>
  </div>
    <div class="main-nav">
      <ul >
        <?php include _template."layout/menu_content.php";?>
      </ul>
      <?php /* <button class="openBtn timkiem_icon" ><i class="fas fa-search"></i></button>
            <div id="search">
              <div class="my-search">
                <input type="text" class="form-control keyword" required="true" 
                onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." 
                onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" 
                onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
                <span onclick="onSearch($(this));return false;" class="btn_search">
                  <i class="fas fa-search"></i></span></div>
                </div>
            </div> */?>
    <?php /* <button class="openBtn timkiem_icon" ><i class="fas fa-search"></i></button> <div id="search" > <div class="my-search"> <input type="text" class="form-control keyword" required="true" onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> <span onclick="onSearch($(this));return false;" class="btn_search"><i class="fas fa-search"></i></span> </div> </div> <div id="myOverlay" class="overlay" style="display: none;"> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span> <div class="overlay-content"> <input type="text" autocomplete="off" placeholder="Nhập từ khóa cần tìm" class="keyword" required="true" placeholder="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> <button type="button" onclick="onSearch($(this));return false;"><i class="fas fa-search"></i></button> </div> </div> */?>
  </div>
  </div>
  </div>
<?php /* 
<script> function openSearch() {document.getElementById("myOverlay").style.display = "block"; } function closeSearch() {document.getElementById("myOverlay").style.display = "none"; } </script> 
<script type="text/javascript">
  $(document).ready(function() {
    $('.timkiem_icon').click(function(event) {
      if($('#search').hasClass('hien')){
        $('#search').removeClass('hien');
      }else{
        $('#search').addClass('hien');
      }
    });
  });
</script>
*/?>