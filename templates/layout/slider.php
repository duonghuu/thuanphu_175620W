      <?php 
      if($source == "index"){
        $slider = get_result("select ten$lang as ten,photo,thumb from #_slider 
          where hienthi=1 and type='slider' order by stt");
         ?>
         <div class="slider-bg">
           <div class="container">
           <div class="slider-flex">
            <?php include _template."layout/menu_left.php";?>
             <div id="slideshow">
               <div class="slideshow-slider-main">
                 <?php 
                 foreach ($slider as $key => $v) {
                  ?>
                  <div class="slideshow-slider-item">
                   <section>
                    <a href="<?= $v["link"] ?>" class="slider-link"><picture>
                      <source media="(min-width: 1024px)" srcset="<?= _upload_hinhanh_l.$v["thumb"] ?>" />
                        <source media="(min-width: 550px)" srcset="thumb/768x320/1/<?= _upload_hinhanh_l.$v["photo"] ?>" />
                          <img src="thumb/425x177/1/<?= _upload_hinhanh_l.$v["photo"] ?>" 
                          alt="<?= $v["ten"] ?>" />
                        </picture></a>
                      </section>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            </div>
          </div>
          <?php }else{ 
  // $bntype = $type;
  // if($type=="about") $bntype = 'gioi-thieu';
  // if($type=="thong-tin") $bntype = 'tin-tuc';
  // $bntrong=get_fetch("select ten$lang as ten,tenkhongdau,photo,thumb from #_news where type='bntrong' and ten='".$bntype."'");
  // <div class="inner-banner" style="background-image: url(images/banner.jpg)">
  // </div>
          }
          ?>
