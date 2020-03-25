<?php foreach ($product_danhmucnb as $kdm => $vdm) { 
$cls = (($kdm+1) % 2 == 0)?"odd":"even";
$featureimg = _upload_sanpham_l.$vdm["photo"];
$link1 = "san-pham/".$vdm["tenkhongdau"]."-".$vdm["id"];
$product=get_result("select ten$lang as ten,mota$lang as mota,tenkhongdau,id,thumb,photo,type,gia,giakm 
    from #_product where type='san-pham' and id_danhmuc='".$vdm["id"]."' and noibat>0
     and hienthi>0 order by stt asc limit 0,6");
  ?>
  <div class="spnoibat-bg ">
    <div class="idx-tit">
      <h4><img src="images/idx-tit.png" alt="arrow"><a href="<?= $link1 ?>"><?= $vdm["ten"] ?></a></h4>
      <a href="" class="xemthem"><i class="fas fa-home"></i>Xem thêm</a>
    </div>
    <style>

    </style>
    <div class="spnoibat-flex <?= $cls ?>">
      <a href="<?= $link1 ?>" class="feature-img">
        <img src="<?= $featureimg ?>" alt="<?= $vdm["ten"] ?>">
      </a>
      <div class="product-grid">
        <?php foreach ($product as $key => $value) {
          showProduct($value);
        } ?>
      </div>
    </div>
  </div>
<?php } ?>
<div class="qc-main">
  <?php foreach ($quangcao as $key => $value) { 
      $img = _upload_hinhanh_l.$value["photo"];
    ?>
    <div class="qc-item"><a href="<?= $value["link"] ?>"><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></a></div>
  <?php } ?>
</div>