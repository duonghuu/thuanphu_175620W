<?php 
$tinnb=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,thumb,photo,type,ngaytao,luotxem from #_news where type='tintuc' and noibat>0 and hienthi>0 order by stt asc");
$video = get_result("select ten$lang as ten,link,id from #_video where type='video' and hienthi=1 order by stt asc");
 ?>
 <div class="datlich-bg lazy" id="formdatlich" data-bg="url(images/datlich.jpg)">
     <div class="container">
         <div class="pharaon-tit">
             <img src="images/text-phara.png" alt="pharaon">
             <strong class="white">Đặt Lịch</strong>
         </div>

         <form action="index.html" method="post">
             <input type="text" class="form-control placeholder-2" name="fpu[ten]" placeholder="<?= _hovaten ?>">
             <input type="text" class="form-control placeholder-2" name="fpu[email]" placeholder="Email của bạn">
             <input type="text" class="form-control placeholder-2" name="fpu[dienthoai]" placeholder="<?= _dienthoai ?>">
             <select name="chondichvu" class="form-control placeholder-2">
                 <option value="">Chọn dịch vụ</option>
                 <option value="karaoke">Karaoke</option>
                 <option value="beer">Beer</option>
                 <option value="coffee">Coffee</option>
             </select>
             <input type="text" id="time" placeholder="Chọn giờ" name="chontime" class="form-control placeholder-2" readonly />
             <input type="text" id="date" placeholder="Chọn ngày" name="chondate" class="form-control placeholder-2" readonly />
             <input type="number" class="form-control placeholder-2" name="chonso" placeholder="Số người">
             <textarea name="note" class="form-control placeholder-2" placeholder="<?= _noidung ?>"></textarea>
             <div class="btngui"><button class="btn btn-primary" type="submit">Gửi</button></div>
             <input type="hidden" value="1" name="rp2val">
             <input type="hidden" id="recaptchaResponse" name="recaptchaResponse">
             <input type="hidden" value="<?= time() ?>" name="rp2token">
         </form>
     </div>
 </div>
<div class="tin-video-bg lazy" data-bg="url(images/tinnb-bg.jpg)">
    <div class="container">
        <div class="pharaon-tit">
            <img src="images/text-phara.png" alt="pharaon">
            <strong class="white">Điểm tin</strong>
        </div>

        <div class="tin-video-flex">
            <div class="tinnb-main clearfix">
                <?php foreach ($tinnb as $key => $value) {
                    $link='';
                    $img=_upload_tintuc_l.$value["photo"];
                    echo '<div class="tinnb-item"><a href="'.$link.'">
                            <figure><img class="img-fill " data-lazy="'.$img.'" alt="'.$value["ten"].'"></figure>
                            <div class="info">
                                <h5 class="line-clamp">'.$value["ten"].'</h5>
                                <div class="line-clamp desc">'.$value["mota"].'</div>
                            </div>
                        </a></div>';
                } ?>
            </div>
            <div class="video-bg">
                <div class="video-main">
                    <?php 
                        $cov = getYoutubeIdFromUrl($video[0]["link"]);
                        $img = 'https://i.ytimg.com/vi/'.$cov.'/mqdefault.jpg';
                        echo '<div class="video-item"><a data-fancybox="videoff" href="https://www.youtube.com/watch?v='.$cov.'" ><figure><img class="img-fill" src="'.$img.'" alt="'.$video[0]["ten"].'"></figure></a></div>';
                     ?>
                </div>
                <div class="video-khac-main clearfix">
                    <?php foreach ($video as $key => $value) {
                        $cov = getYoutubeIdFromUrl($value["link"]);
                        $img = 'https://i.ytimg.com/vi/'.$cov.'/mqdefault.jpg';
                        echo '<div class="video-khac"><a data-fancybox="videoff" href="https://www.youtube.com/watch?v='.$cov.'"><figure><img class="img-fill" src="'.$img.'" alt="'.$value["ten"].'"></figure></a></div>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>