<header class="hd-bg">
    <div class="container">
      <div class="hd-flex">
          <a href="" class="logo" ><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
          <div class="banner">
            <a href="" ><img src="<?= _upload_hinhanh_l.$bannerlang["photo"] ?>" alt="banner"></a>
            <p><?= $company["diachi"] ?></p>
          </div>
          <div class="hd-right">
            <div class="mxh"><?= lay_mxh("mxh") ?></div>           
            <p>Hotline: <a href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
              <?= $company['dienthoai'] ?></a></p>
          </div>
      </div>
    </div>
</header>