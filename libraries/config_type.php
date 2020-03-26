<?php
$type = (string)(isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
$act = (string)(isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$act = explode('_',$act);
if(count($act>1)){
	$act = $act[1];
} else {
	$act = $act[0];
}

$config['type'] = array();
$config['title'] = array();
$config['ck'] = array();
switch($type){
//-------------san pham------------------
	case 'san-pham':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten','seo','noibat','hinhanh');
		$config['title'] = array('noibat'=>"Nổi bật",'tieubieu'=>"Hiện menu",'hinhanh2'=>"Icon");
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 560 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400 );
		@define ( _height_thumb2 , 560 );
		@define ( _widthhinhanh_thumb , 40 );
		@define ( _heighthinhanh_thumb , 40 );
		@define ( _stylehinhanh_thumb , 2 );
		@define ( _widthhinhanh_thumb2 , 40 );
		@define ( _heighthinhanh_thumb2 , 40 );
		break;

		case 'list':
		$config['type'] = array('seo','ten');
		$config['title'] = array('noibat'=>"Hiện cột left");
		@define ( _width_thumb , 300 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 2 );
		break;

		case 'cat':
		$config['type'] = array('seo','ten');
		@define ( _width_thumb , 250 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		break;

		default:
		$config['type'] = array('seo','ten','mota','gia','giakm','noibat','danhmuc','list','hinhanh','hinhthem','noidung');
		$config['ck'] = array('mota2');
		$config['title'] = array('tieubieu'=>"Sản phẩm chính",'noibat'=>"Nổi bật",
			'spmoi'=>"Mới",'spbanchay'=>"Bán chạy","mota"=>"Mô tả","toado"=>"Iframe google map",
			"mota2"=>"Mô tả",'mattien'=>"Số người","dientich"=>"Giá","thuonghieu"=>"Thương hiệu",
			"vitri"=>"Vị trí");
		@define ( _width_thumb , 270 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 440 );
		break;
	}
	break;
//-------------san pham------------------
	case 'mausac':
	switch($act){
		default:
		$config['type'] = array('hinhanh', 'ten', 'color','noibat');
		$config['title']["noibat"] = "Dùng hình ảnh";
		@define ( _width_thumb , 200 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 200 );
		@define ( _height_thumb2 , 200 );
		break;
	}
	break;
	case 'size':
	switch($act){
		default:
		$config['type'] = array('ten');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400 );
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'id_hientrang':
	case 'id_huong':
	switch($act){
		default:
		$config['type'] = array('ten');
		break;
	}
	break;
	case 'tailieu':
	switch($act){
		default:
		$config['type'] = array('seo','taptin','ten','mota');
		break;
	}
	break;
	case 'bntrong':
	switch($act){
		default:
		$config['type'] = array('hinhanh','ten');
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'thuonghieu':
	switch($act){
		default:
		$config['type'] = array('hinhanh2', 'hinhanh','ten','seo');
		$config['title'] = array('hinhanh2'=>'Icon', 'hinhanh'=>'Hình ảnh');
		@define ( _width_thumb , 590 );
		@define ( _height_thumb , 480 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 590 );
		@define ( _height_thumb2 , 480 );
		@define ( _width_thumb4 , 145 );
		@define ( _height_thumb4 , 110 );
		break;
	}
	break;
	case 'thongtin':
	switch($act){
		default:
		$config['type'] = array('seo','ten','mota','noidung','hinhanh');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 400 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 400 );
		break;
	}
	break;
	case 'hoatdong':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung','hinhanh','hinhthem');
		@define ( _width_thumb , 360 );
		@define ( _height_thumb , 220 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1024);
		@define ( _height_thumb2 , 630 );
		break;
	}
	break;
	case 'hoidap':
	switch($act){
		default:
		$config['type'] = array('seo','ten','mota','noidung','hinhanh');
		@define ( _width_thumb , 145 );
		@define ( _height_thumb , 125 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 340 );
		break;
	}
	break;
	case 'doingu':
	switch($act){
		default:
		$config['type'] = array('seo','ten','chucvu','noidung','hinhanh');
		@define ( _width_thumb , 240 );
		@define ( _height_thumb , 310 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 425);
		@define ( _height_thumb2 , 550 );
		break;
	}
	break;
	case 'tai-sao':
	switch($act){
		default:
		$config['type'] = array('ten','mota','hinhanh');
		@define ( _width_thumb , 70 );
		@define ( _height_thumb , 70 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 70);
		@define ( _height_thumb2 , 70 );
		break;
	}
	break;
	case 'dich-vu':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten','mota','hinhanh');
		@define ( _width_thumb , 340 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 340);
		@define ( _height_thumb2 , 300 );
		break;
		case 'list':
		$config['type'] = array('seo','ten','hinhanh');
		@define ( _width_thumb , 145 );
		@define ( _height_thumb , 105 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 425);
		@define ( _height_thumb2 , 310 );
		break;
		default:
		$config['type'] = array('seo','ten','noidung','hinhanh','mota','danhmuc');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'cong-trinh':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','hinhanh','noibat','mota');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'tin-tuc':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','mota','hinhanh','noibat');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'loc-san-pham':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten');
		break;
		default:
		$config['type'] = array('ten','danhmuc');
		break;
	}
	break;
	case 'khuyen-mai':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','mota','hinhanh');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'hotline':
	switch($act){
		default:
		$config['type'] = array('ten','link');
		$config['title'] = array('link'=>"SĐT",'chucvu'=>"Bộ phận");
		break;
	}
	break;
	case 'diachi':
	switch($act){
		default:
		$config['type'] = array('ten','mota');
		$config['title'] = array('mota'=>"Địa chỉ");
		break;
	}
	break;
	case 'tags':
	switch($act){
		default:
		$config['type'] = array('ten', 'link');
		break;
	}
	break;
//-------------tin tuc------------------
	case 'y-kien':
	switch($act){
		default:
		$config['type'] = array('ten','chucvu','hinhanh','mota');
		@define ( _width_thumb , 230 );
		@define ( _height_thumb , 230 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 230 );
		@define ( _height_thumb2 , 230 );
		break;
	}
	break;
	case 'thu-vien':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten','hinhanh','noibat');
		@define ( _width_thumb , 280 );
		@define ( _height_thumb , 280 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600);
		@define ( _height_thumb2 , 600 );
		break;
		default:
		$config['type'] = array('seo','ten','hinhthem','hinhanh','noibat');
		@define ( _width_thumb , 280 );
		@define ( _height_thumb , 280 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600);
		@define ( _height_thumb2 , 600 );
		break;
	}
	break;
//-------------chinh sach / ho tro / cham soc khach hang------------------
	case 'chinh-sach':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung');
		break;
	}
	break;

//-------------tin tuc------------------
//-------------Dạng photo------------------
	case 'logo':
	switch($act){
		default:
		@define ( _width_thumb2 , 270 );
		@define ( _height_thumb2 , 170 );
		break;
	}
	break;
	case 'dong':
	switch($act){
		default:
		@define ( _width_thumb , 100 );
		@define ( _height_thumb , 100 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 250 );
		@define ( _height_thumb2 , 250 );
		break;
	}
	break;
	case 'banner':
	switch($act){
		default:
		@define ( _width_thumb , 660 );
		@define ( _height_thumb , 120);
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 660 );
		@define ( _height_thumb2 , 120 );
		break;
	}
	break;
	case 'bgbn':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 110 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 110 );
		break;
	}
	break;
	case 'bgft':
	switch($act){
		default:
		@define ( _width_thumb , 700 );
		@define ( _height_thumb , 500 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 700 );
		@define ( _height_thumb2 , 500 );
		break;
	}
	break;
	case 'banner_mobi':
	switch($act){
		default:
		@define ( _width_thumb , 600 );
		@define ( _height_thumb , 150 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 150 );
		break;
	}
	break;
	case 'pupop':
	switch($act){
		default:
		@define ( _width_thumb2 , 550 );
		@define ( _height_thumb2 , 480 );
		@define ( _style_thumb2 , 1 );
		break;
	}
	break;
	case 'slider':
	case 'slider2':
	switch($act){
		default:
		@define ( _width_thumb , 930 );
		@define ( _height_thumb , 450);
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 930 );
		@define ( _height_thumb2 , 450);
		break;
	}
	break;
	case 'slidermb':
	switch($act){
		default:
		@define ( _width_thumb , 768 );
		@define ( _height_thumb , 300);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 768 );
		@define ( _height_thumb2 , 300);
		break;
	}
	break;
	case 'letruot':
	switch($act){
		default:
		@define ( _width_thumb , 150 );
		@define ( _height_thumb , 390 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 150 );
		@define ( _height_thumb2 , 390 );
		break;
	}
	break;
	case 'doi-tac':
	switch($act){
		default:
		@define ( _width_thumb2 , 160 );
		@define ( _height_thumb2 , 100 );
		break;
	}
	break;
	case 'quang-cao':
	switch($act){
		default:
		@define ( _width_thumb , 600 );
		@define ( _height_thumb , 210 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 210 );
		break;
	}
	break;
	case 'quang-cao2':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 410 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 410 );
		break;
	}
	break;
//-------------Dạng 1 bài viết------------------
	case 'gioi-thieu':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung','mota','hinhanh');
		@define ( _width_thumb , 585 );
		@define ( _height_thumb , 400 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 585 );
		@define ( _height_thumb2 , 400 );
		break;
	}
	break;
	case 'mien-phi-dung-thu':
	case 'tang-1-nam-bao-hanh':
	case '1-doi-1-trong-1-nam':
	switch($act){
		default:
		$config['type'] = array('seo','noidung','hinhanh');
		@define ( _width_thumb , 40 );
		@define ( _height_thumb , 40 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 40 );
		@define ( _height_thumb2 , 40 );
		break;
	}
	break;
	case 'dao-tao':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung','mota');
		break;
	}
	break;
	case 'lienhe':
	switch($act){
		default:
		$config['type'] = array('noidung');
		break;
	}
	break;
	case 'footer':
	switch($act){
		default:
		$config['type'] = array('noidung');
		break;
	}
	break;
//-------------tin tuc------------------

//--------------defaut main---------------
	default:
	$source = "";
	$template = "index";
	break;
}