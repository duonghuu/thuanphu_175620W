<?php 
$pro_danhmuc = get_result("select tenkhongdau,id,ten$lang as ten,thumb,photo,type 
  from table_product_danhmuc where type='san-pham' and hienthi>0 order by stt asc");
foreach ($pro_danhmuc as $kdm => $vdm) {
  $link1 = "san-pham/".$vdm["tenkhongdau"]."-".$vdm["id"];
  $sp = get_result("select tenkhongdau,id,ten$lang as ten,thumb,photo,type,
  gia,giakm from table_product where type='san-pham' and id_danhmuc= '".$vdm["id"]."' and hienthi>0 order by stt asc");
 ?>
<h2 class="pr-danhmuc-name"><a href="<?= $link1 ?>"><?= $vdm["ten"] ?></a></h2>
<div class="box_container">
<div class="product-grid">
    <?php foreach ($sp as $k => $v) { 
            showProduct($v);
    } ?>
</div>
</div>
<?php } ?>