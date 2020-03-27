<?php /* <div class="tieude_giua"><div><?=$title_cat?></div></div> */?>
<div class="box_container">
  <div class="box_detail_product">
    <div class="content ">
        <?=$row_detail['noidung']?>
    
</div><!--.content-->
<?php include _template."layout/share.php";?></div>
<?php if(count($tintuc) > 0) { ?>

            <div class="othernews">
              <h5><span class="badge badge-pill badge-primary"><?=$title_other?></span></h5>
             <ul class="khac">
              <?php foreach($tintuc as $k => $v) { ?>
                  <li><a href="<?=get_url($v,$com)?>" title="<?=$v['ten']?>"><?=$v['ten']?></a></li>
              <?php }?>
          </ul> 
          <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
      </div><!--.othernews-->
    <?php }?>
    <?php if(in_array($type, array("thanhlap","thaydoi"))){ ?>
    <div class="dk-tuvan">

      <h4 class="text-center text-uppercase">Liên hệ tư vấn</h4>
      <form action="" method="post">
        <div class="form-group d-flex form-group justify-content-between">
          <input type="text" class="form-control" name="fpu[ten]" required="" placeholder="<?= _hovaten ?>">
          <input type="text" class="form-control" name="fpu[dienthoai]" required="" placeholder="<?= _dienthoai ?>">
          <input type="text" class="form-control" name="fpu[mst]" required="" placeholder="Mã số thuế">
        </div>
        <div class="form-group">
          <textarea class="form-control" name="fpu[note]" required="" placeholder="<?= _noidung ?>" ></textarea>
        </div>
        <input type="hidden" name="rp2val" value="1">
        <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
        <input type="hidden" name="rp2token" value="<?= time() ?>">
        <div class="d-flex"><button class="btn btn-primary mx-auto" type="submit">Gửi</button></div>
      </form>
    </div>
  <?php } ?>
</div><!--.box_container-->