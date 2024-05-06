<?php
session_start();
// Tạo một chuỗi ngẫu nhiên bao gồm số và chữ cái (cả chữ in hoa và chữ in thường)
$random_alpha = md5(rand());
// Lấy 6 ký tự đầu tiên từ chuỗi ngẫu nhiên
$captcha_code = substr($random_alpha, 0, 6);
$_SESSION["captcha_code"] = $captcha_code;
// Tạo hình ảnh captcha
$target_layer = imagecreatetruecolor(170,70);
// Tạo màu cho background
$captcha_background = imagecolorallocate($target_layer, 255,255,255);
imagefill($target_layer,0,0,$captcha_background);
// Tạo màu chữ
$captcha_text_color = imagecolorallocate($target_layer, 39,55,70);

// Font chữ và thuộc tính
$font_size = 32;
$img_width = 80;
$img_height = 48;
/** For Lines */
$line_color = imagecolorallocate($target_layer, 64,64,64); 
for($i=0;$i<6;$i++) {
    imageline($target_layer,0,rand()%50,200,rand()%50,$line_color);
}

// Độ phân giải
$pixel_color = imagecolorallocate($target_layer, 0,0,255);
for($i=0;$i<1000;$i++) {
    // Lấy ngẫu nhiên chiều rộng và cao của chữ
    imagesetpixel($target_layer,rand()%200,rand()%50,$pixel_color);
}  
/* Text Size */
/* you are the one is a font file */
imagettftext($target_layer, $font_size, 0, 25, 35, $captcha_text_color, 'You are the one.ttf', $captcha_code);


header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>

