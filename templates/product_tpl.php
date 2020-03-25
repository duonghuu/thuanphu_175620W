<?php /* <div class="tieude_giua"><div><?=$title_cat?></div></div> */?>
<?php echo $bread->display(); ?>
<div class="box_container">
<div class="product-grid" id="content_sp_return">
    <?php foreach ($product as $k => $v) { 
            showProduct($v);
    } ?>
</div>
<?php /* <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div> */?>
</div>

