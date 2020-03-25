<header class="hd-bg">
  <div class="hd-top">
    <div class="container">
      <div class="hd-top-flex">
        <marquee class="hd-marquee" behavior="" direction=""><?= $company["slogan"] ?></marquee>
        <div class="hd-top-right">
          <p><i class="fas fa-home"></i><?= $company["diachi"] ?></p>
          <p><i class="fas fa-home"></i><?= $thuoctinh["tt_giomo"] ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="hd-bot">
    <div class="container">
      <div class="hd-bot-flex">
          <a href="" class="logo" ><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
          <div id="search">
            <div class="my-search">
              <input type="text" class="form-control keyword" required="true" 
              onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." 
              onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" 
              onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
              <span onclick="onSearch($(this));return false;" class="btn_search">
                <i class="fas fa-search"></i></span></div>
              </div>
          <div class="hd-bot-right">
           
            <div class="hd-bot-right__item">
              <a href="gio-hang.html"><i class="fas fa-home"></i></a>
              <div class="hd-bot-right__text giohang_fix">
                <p><a href="gio-hang.html">Giỏ hàng</a></p>
                <p><strong>(<span><?= count($_SESSION["cart"]) ?></span>)</strong> <?= _sanpham ?></p>
              </div>
            </div>
            <div class="hd-bot-right__item">
              <i class="fas fa-home"></i>
              <div class="hd-bot-right__text">
                <p>Tư vấn mua hàng</p>
                <p class="link-hotline">Hotline: <a href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>"><?= $company['dienthoai'] ?></a></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</header>