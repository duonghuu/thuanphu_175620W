<div class="intro-bg">
  <div class="intro-head">
    <div class="container">
      <div class="intro-head-flex">
        <a href="" class="intro-logo"><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
        <div class="intro-info">
          <a href="" class="intro-banner"><img src="<?= _upload_hinhanh_l.$bannerlang["photo"] ?>" alt="banner"></a>  
          <p><?= $company["diachi"] ?></p>
        </div>
        <div class="intro-mxh">
          <div class="mxh mxh-intro"><?= lay_mxh("mxh") ?></div>
          <p>Email: <?= $company["email"] ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="intro-body">
    <p class="intro-hotline text-center text-capitalize">Hotline: <a href="tel:
      <?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>"><?= $company['dienthoai'] ?></a> - Kinh doanh hỗ trợ
    </p>
    <div class="container">
      <div class="intro-product">
        <?php foreach ($product_danhmuc as $key => $value) {
            $link = "san-pham/".$value["tenkhongdau"]."-".$value["id"];
            $img = _upload_sanpham_l.$value["photo"];
         ?>
          <div class="intro-product-item"><a href="<?= $link ?>">
              <figure><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></figure>
              <h2><?= $value["ten"] ?></h2>
            </a></div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="intro-foot">
    Copyright © 2020 <?= $company["ten"] ?>. Design by Nina
  </div>
</div>
