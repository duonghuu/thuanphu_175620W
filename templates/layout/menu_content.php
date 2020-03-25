<li class="<?php if($source=='index') echo 'active'; ?>"><a href=""><?php /* <i class="fas fa-home"></i> */?>
<?php echo _trangchu ?></a></li>
<li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
  <?= _gioithieu ?></a></li>
<li class="<?php if($com=='dao-tao') echo 'active'; ?>"><a href="dao-tao.html">Đào tạo</a></li>
<li class="<?php if($com=='bang-gia') echo 'active'; ?>"><a href="bang-gia.html">Bảng giá</a></li>
<li class="<?php if($com=='dich-vu') echo 'active'; ?>"><a href="dich-vu.html"><?= _dichvu ?></a>
  <?= for1('news_danhmuc','dich-vu','dich-vu','')?>
</li>
<li class="<?php if($com=='thu-vien') echo 'active'; ?>"><a href="thu-vien.html"><?= _thuvien ?></a></li>
<li class="<?php if($com=='tin-tuc') echo 'active'; ?>"><a href="tin-tuc.html"><?= _tintuc ?>
  </a></li>
<li class="<?php if($source == 'contact') echo 'active'; ?>"><a href="lien-he.html"><?= _lienhe ?>
  </a></li>
<?php /* 
<li class="<?php if($com=='san-pham') echo 'active'; ?>"><a href="san-pham.html"><?= _sanpham ?>
  </a>
  <?= for2cap('product_danhmuc','product_list','san-pham','san-pham','','/')?>
</li>
<?= for1('news_danhmuc','nang-luc','nang-luc','')?>  */?>