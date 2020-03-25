<footer id="footer">
  <div class="ft-top ">
    <div class="container">
      <div class="ft-flex">
        
        <div class="ft-info">
          <h4 class="ft-company"><a href=""><?= $company["ten"] ?></a></h4>
          <div class="content"> <?php echo lay_text('footer'); ?> </div> 
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit"><span>Về chúng tôi</span></p>
          <?= for1("news","ve-chung-toi","ve-chung-toi",".html") ?>
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit"><span>Hỗ trợ khách hàng</span></p>
          <?= for1("news","ho-tro","ho-tro",".html") ?>
        </div>
        <div class="ft-dknt">
          <p class="ft-tit"><span><?= _dangkynhantin ?></span></p>
          <div class="maildesc"><?= _maildesc ?></div>
          <?php include _template."layout/dangkynhantin.php"; ?>
        </div>
        
    </div>
  </div>
</div>
<div class="copyright">
  <div class="container">
    <div class="ft-wrap">
      <p class="text">Copyright © 2020 <?= $company["ten"] ?>. Design by Nina</p>
             <?php /*  
      <ul class="ft-thongke">
        <li>Online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></li>
        <li><?=_tongtruycap?>: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></li>
                           <li><?=_thongketuan?>: <span><?=$trongtuan;?></span></li>   
                            
            </ul>
                            */?>
      <?php /*
<li><?=_thongkethang?>: <span><?=$trongthang;?></span></li> <li><?=_ngayhomqua?>: <span><?=$homqua;?></span></li> 
      */?> 
    </div>
  </div>
</div>
</footer>
          <?php /* <div class="codebando"><?= $company["bando"] ?></div>  include _template."layout/dangkynhantin.php";<img src="http://placehold.it/600x520" alt="" style="   -webkit-clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);   "> https://bennettfeely.com/clippy/ */?>