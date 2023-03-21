<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	
	//setcookie ("name",$name,time()+ (60 * 60 * 24 * 30)); 

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="assets/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<Script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

 
   <style>
   .col-12 {
    flex: 0 0 auto;
    width: 100%;
}
h6.product_name,span.name_brand{display:block;text-transform:uppercase}#invoice,.inforgraphic{width:100%;}h1.specifications,h6.product_name,span.name_brand{text-transform:uppercase}#invoice,.col-12.grid-margin.stretch-card{background:#fff}#dw_bt,.flex_check{margin-bottom:20px}img.whileicons{max-width:100%;height:30px;position:relative;top:50px;left:40px}h6.product_name{font-size:38px;margin:0;padding:14px;color:#000;font-weight:700;text-align:center;position:relative;top:8px;float:right;right:11px}span.name_brand{color:#b11;font-weight:900;font-size:50px;text-align:right;letter-spacing:2px;position:relative;right:20px;width:1000px}.imge_cont,h1.specifications{font-weight:600;position:relative}h1.disp,p.engine{text-align:center;margin:0}h1.brandname{float:right;position:relative;top:27px}h1.specifications{background:#000;color:#fff;width:345px;border-radius:0 50px 50px 0;margin:0;padding:5px;font-size:35px}.setborder{padding:10px 0;border:4px solid #000;position:relative;top:122px;width:360px;border-left:0 solid #000;border-radius:0 50px 50px 0;left:-11px}h1.specifications span{position:relative;left:16px}img.image_data{width:90%;height:90%;right:0;float:right}.imge_cont{top:105px;left:42px}p.engine{padding:28px;background:#fe5915;font-size:30px;color:#000;font-weight:900;border-radius:0 0 30px 30px}#dw_bt,h1.disp{background:#000}#dw_bt,input.button_check{border-radius:5px;color:#fff}h1.disp{font-size:29px;font-weight:600;padding:12px;color:#fff}.imagetable{margin-top:42px;width:100%;height:100%}.ma-tab{width:1080px;height:1080px;padding:12px}div#lefy{position:relative;top:50px;padding-left:46px;padding-right:46px}div#power_data{position:relative;top:129px}#transmission{padding:16px 10px 10px;height:106px;position:relative;top:0;line-height:1.1}div#row_data_show .imge_cont{padding-right:11px}#main{overflow:hidden}input.button_check{width:100%;background:#111011;padding:1px}#dw_bt{padding:4px 21px;margin-left:25px;padding:4p;position:relative;z-index:9;margin-top:20px}p.engine.Clearance{height:92px;padding-top:21px}label.title_check{font-size:18px;font-weight:600}.flex_check{display:flex;margin-top:25px}
@media (min-width: 1200px)
#main, #footer {
    margin-left: 0;
}
#main, #footer {
    margin-left: 0;
}
.col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
    float: left;
}
button#my_button {
    position: relative;
    left: 20%;
}
.col-12.grid-margin.stretch-card {
    padding: 30px;
}div#my_div {
    font-size: 20px;
    font-weight: 600;
   
}
.imgcheck.active{
    background: red;
    width: 69px;
    border-radius: 10px;
    color: #fff;
    font-weight: 600;
	cursor: pointer;
	padding-left: 15px;
}

.img-data {
     display: flex;
    align-items: center;
    padding: 7px;
	    top: 7px;
		position: relative;

}
div#second_img {
    margin: 0 30px;
	cursor: pointer;
}
div#first_img {
    cursor: pointer;
}
button.increaseFont, button.decreaseFont {
    width: 160px;
    margin-top: 20px;
    background: #ccc;
    border: 0;
    padding: 5px;
}
button.decreaseFont {
    position: relative;
    left: 27px;
}
#main {
    margin-top: 0;
    padding: 20px 30px;
    transition: all 0.3s;
}
select.input {
    width: 170px;
    position: relative;
    left: 45px;
    height: 34px;
    top: 20px;
}
#underline_tetx {
    width: 140px;
    margin-top: 20px;
    background: #ccc;
    border: 0;
    padding: 5px;
    position: relative;
    left: 61px;
    top: 0;
}
#italic_tetx{
	   width: 140px;
    margin-top: 20px;
    background: #ccc;
    border: 0;
    padding: 5px;
    position: relative;
    left: 71px;
    top: 0;
}
img#show_img_two, img#show_img_one {
    width: 500px;
    height: 300px;
}
div#my_div {
     position: absolute;
    /* top: 0; */
   color: #fff; 
    padding: 10px;
    left: 45%;
    /* top: -31%; */
    margin-top: 11%;
}
.change_text {
    width: 173px;
    position: relative;
    left: 81px;
}
a.imgcheck {
    text-decoration: none;
    color: #000;
    font-size: 20px;
    margin: 0 20px;
}
button#btn-decrease {
    margin: 0 20px;
}
   </style>
    
</head>

<body>

  <main id="main" class="main">



    <section class="section dashboard ">
    <div class="row" >
			 
					<div class="img-data">
					
					<a href="./?img=1"  class="imgcheck">IMG 1</a>
					 <a href="./?img=2" class="imgcheck">IMG 2</a>
						</div>
<BR><BR><BR><BR>
	  
	   <div class="col-lg-12">
      <div id="chcp_font_size" class="input-group">
        <span class="input-group-btn">
		     <button id="btn-increase" class="btn btn-default" type="button">Increase Font Size</button>
          <button id="btn-decrease" class="btn btn-default" type="button">  Decrease Font Size</button>
         
     
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
	     <select  class="input"
        onchange="changeFontStyle (this);">
   <option selected="selected" > Select Font Family</option>
        <option style="font-family: 'Agency FB'">Agency FB</option>
  <option style="font-family: 'Aharoni'">Aharoni</option>
  <option style="font-family: 'Alef'">Alef</option>
  <option style="font-family: 'Algerian'">Algerian</option>
  <option style="font-family: 'Andalus'">Andalus</option>
  <option style="font-family: 'Angsana New'">Angsana New</option>
  <option style="font-family: 'AngsanaUPC'">AngsanaUPC</option>
  <option style="font-family: 'Aparajita'">Aparajita</option>
  <option style="font-family: 'Arabic Typesetting'">Arabic Typesetting</option>
  <option style="font-family: 'Arial'">Arial</option>
  <option style="font-family: 'Arial Black'">Arial Black</option>
  <option style="font-family: 'Arial Narrow'">Arial Narrow</option>
  <option style="font-family: 'Arial Unicode MS'">Arial Unicode MS</option>
  <option style="font-family: 'Baskerville Old Face'">Baskerville Old Face</option>
  <option style="font-family: 'Batang'">Batang</option>
  <option style="font-family: 'BatangChe'">BatangChe</option>
  <option style="font-family: 'Bauhaus 93'">Bauhaus 93</option>
  <option style="font-family: 'Bell MT'">Bell MT</option>
  <option style="font-family: 'Berlin Sans FB'">Berlin Sans FB</option>
  <option style="font-family: 'Bernard MT Condensed'">Bernard MT Condensed</option>
  <option style="font-family: 'Blackadder ITC'">Blackadder ITC</option>
  <option style="font-family: 'Bodoni Bd BT'">Bodoni Bd BT</option>
  <option style="font-family: 'Bodoni Bk BT'">Bodoni Bk BT</option>
  <option style="font-family: 'Bodoni MT'">Bodoni MT</option>
  <option style="font-family: 'Bodoni MT Black'">Bodoni MT Black</option>
  <option style="font-family: 'Bodoni MT Condensed'">Bodoni MT Condensed</option>
  <option style="font-family: 'Book Antiqua'">Book Antiqua</option>
  <option style="font-family: 'Bookman Old Style'">Bookman Old Style</option>
  <option style="font-family: 'Bookshelf Symbol 7'">Bookshelf Symbol 7</option>
  <option style="font-family: 'Bradley Hand ITC'">Bradley Hand ITC</option>
  <option style="font-family: 'Broadway'">Broadway</option>
  <option style="font-family: 'Browallia New'">Browallia New</option>
  <option style="font-family: 'BrowalliaUPC'">BrowalliaUPC</option>
  <option style="font-family: 'Brush Script MT'">Brush Script MT</option>
  <option style="font-family: 'Calibri'">Calibri</option>
  <option style="font-family: 'Calibri Light'">Calibri Light</option>
  <option style="font-family: 'Californian FB'">Californian FB</option>
  <option style="font-family: 'Calisto MT'">Calisto MT</option>
  <option style="font-family: 'Cambria'">Cambria</option>
  <option style="font-family: 'Cambria Math'">Cambria Math</option>
  <option style="font-family: 'Candara'">Candara</option>
  <option style="font-family: 'Castellar'">Castellar</option>
  <option style="font-family: 'Centaur'">Centaur</option>
  <option style="font-family: 'CentSchbkCyrill BT'">CentSchbkCyrill BT</option>
  <option style="font-family: 'Century'">Century</option>
  <option style="font-family: 'Century Gothic'">Century Gothic</option>
  <option style="font-family: 'Century Schoolbook'">Century Schoolbook</option>
  <option style="font-family: 'Century725 Cn BT'">Century725 Cn BT</option>
  <option style="font-family: 'Century751 BT'">Century751 BT</option>
  <option style="font-family: 'Century751 No2 BT'">Century751 No2 BT</option>
  <option style="font-family: 'Century751 SeBd BT'">Century751 SeBd BT</option>
  <option style="font-family: 'Chapenettoer 8 THIN'">Chapenettoer 8 THIN</option>
  <option style="font-family: 'Chiller'">Chiller</option>
  <option style="font-family: 'Clarendon Blk BT'">Clarendon Blk BT</option>
  <option style="font-family: 'Clarendon BT'">Clarendon BT</option>
  <option style="font-family: 'Clarendon Lt BT'">Clarendon Lt BT</option>
  <option style="font-family: 'Colonna MT'">Colonna MT</option>
  <option style="font-family: 'Comic Sans MS'">Comic Sans MS</option>
  <option style="font-family: 'Consolas'">Consolas</option>
  <option style="font-family: 'Constantia'">Constantia</option>
  <option style="font-family: 'Cooper Black'">Cooper Black</option>
  <option style="font-family: 'Copperplate Gothic Light'">Copperplate Gothic Light</option>
  <option style="font-family: 'Corbel'">Corbel</option>
  <option style="font-family: 'Cordia New'">Cordia New</option>
  <option style="font-family: 'CordiaUPC'">CordiaUPC</option>
  <option style="font-family: 'Courier'">Courier</option>
  <option style="font-family: 'Courier New'">Courier New</option>
  <option style="font-family: 'Curlz MT'">Curlz MT</option>
  <option style="font-family: 'DaunPenh'">DaunPenh</option>
  <option style="font-family: 'DeVinne Txt BT'">DeVinne Txt BT</option>
  <option style="font-family: 'DFGothic-EB'">DFGothic-EB</option>
  <option style="font-family: 'DFKai-SB'">DFKai-SB</option>
  <option style="font-family: 'DFMincho-SU'">DFMincho-SU</option>
  <option style="font-family: 'DFMincho-UB'">DFMincho-UB</option>
  <option style="font-family: 'DFPOP1-W9'">DFPOP1-W9</option>
  <option style="font-family: 'DilleniaUPC'">DilleniaUPC</option>
  <option style="font-family: 'DokChampa'">DokChampa</option>
  <option style="font-family: 'Dotum'">Dotum</option>
  <option style="font-family: 'DotumChe'">DotumChe</option>
  <option style="font-family: 'Ebrima'">Ebrima</option>
  <option style="font-family: 'Edwardian Script ITC'">Edwardian Script ITC</option>
  <option style="font-family: 'Elephant'">Elephant</option>
  <option style="font-family: 'Embassy BT'">Embassy BT</option>
  <option style="font-family: 'Engravers MT'">Engravers MT</option>
  <option style="font-family: 'EngraversGothic BT'">EngraversGothic BT</option>
  <option style="font-family: 'Estrangelo Edessa'">Estrangelo Edessa</option>
  <option style="font-family: 'EucrosiaUPC'">EucrosiaUPC</option>
  <option style="font-family: 'Euphemia'">Euphemia</option>
  <option style="font-family: 'Exotc350 Bd BT'">Exotc350 Bd BT</option>
  <option style="font-family: 'Exotc350 DmBd BT'">Exotc350 DmBd BT</option>
  <option style="font-family: 'FangSong'">FangSong</option>
  <option style="font-family: 'Felix Titling'">Felix Titling</option>
  <option style="font-family: 'Fixedsys Excelsior 3.01'">Fixedsys Excelsior 3.01</option>
  <option style="font-family: 'Footlight MT Light'">Footlight MT Light</option>
  <option style="font-family: 'Forte'">Forte</option>
  <option style="font-family: 'Franklin Gothic Book'">Franklin Gothic Book</option>
  <option style="font-family: 'Franklin Gothic Heavy'">Franklin Gothic Heavy</option>
  <option style="font-family: 'Franklin Gothic Medium'">Franklin Gothic Medium</option>
  <option style="font-family: 'Freehand521 BT'">Freehand521 BT</option>
  <option style="font-family: 'FreesiaUPC'">FreesiaUPC</option>
  <option style="font-family: 'Freestyle Script'">Freestyle Script</option>
  <option style="font-family: 'French Script MT'">French Script MT</option>
  <option style="font-family: 'Futura Bk BT'">Futura Bk BT</option>
  <option style="font-family: 'Futura Md BT'">Futura Md BT</option>
  <option style="font-family: 'Gabriola'">Gabriola</option>
  <option style="font-family: 'Garamond'">Garamond</option>
  <option style="font-family: 'Gautami'">Gautami</option>
  <option style="font-family: 'Geometr212 BkCn BT'">Geometr212 BkCn BT</option>
  <option style="font-family: 'Geometr415 Blk BT'">Geometr415 Blk BT</option>
  <option style="font-family: 'Geometr706 BlkCn BT'">Geometr706 BlkCn BT</option>
  <option style="font-family: 'Georgia'">Georgia</option>
  <option style="font-family: 'GeoSlab703 Md BT'">GeoSlab703 Md BT</option>
  <option style="font-family: 'GeoSlab703 MdCn BT'">GeoSlab703 MdCn BT</option>
  <option style="font-family: 'Gigi'">Gigi</option>
  <option style="font-family: 'Gill Sans MT'">Gill Sans MT</option>
  <option style="font-family: 'Gill Sans MT Condensed'">Gill Sans MT Condensed</option>
  <option style="font-family: 'Gisha'">Gisha</option>
  <option style="font-family: 'Goudy Old Style'">Goudy Old Style</option>
  <option style="font-family: 'Goudy Stout'">Goudy Stout</option>
  <option style="font-family: 'Gulim'">Gulim</option>
  <option style="font-family: 'GulimChe'">GulimChe</option>
  <option style="font-family: 'Gungsuh'">Gungsuh</option>
  <option style="font-family: 'GungsuhChe'">GungsuhChe</option>
  <option style="font-family: 'Guttman Logo1'">Guttman Logo1</option>
  <option style="font-family: 'Haettenschweiler'">Haettenschweiler</option>
  <option style="font-family: 'Harrington'">Harrington</option>
  <option style="font-family: 'High Tower Text'">High Tower Text</option>
  <option style="font-family: 'Humanst521 BT'">Humanst521 BT</option>
  <option style="font-family: 'Humanst521 Lt BT'">Humanst521 Lt BT</option>
  <option style="font-family: 'Humnst777 Blk BT'">Humnst777 Blk BT</option>
  <option style="font-family: 'Humnst777 BlkCn BT'">Humnst777 BlkCn BT</option>
  <option style="font-family: 'Humnst777 BT'">Humnst777 BT</option>
  <option style="font-family: 'Humnst777 Cn BT'">Humnst777 Cn BT</option>
  <option style="font-family: 'Humnst777 Lt BT'">Humnst777 Lt BT</option>
  <option style="font-family: 'Impact'">Impact</option>
  <option style="font-family: 'Imprint MT Shadow'">Imprint MT Shadow</option>
  <option style="font-family: 'Informal Roman'">Informal Roman</option>
  <option style="font-family: 'IrisUPC'">IrisUPC</option>
  <option style="font-family: 'Japanese'">Japanese</option>
  <option style="font-family: 'JasmineUPC'">JasmineUPC</option>
  <option style="font-family: 'Jokerman'">Jokerman</option>
  <option style="font-family: 'Juice ITC'">Juice ITC</option>
  <option style="font-family: 'KaiTi'">KaiTi</option>
  <option style="font-family: 'Kalinga'">Kalinga</option>
  <option style="font-family: 'Kartika'">Kartika</option>
  <option style="font-family: 'Kaufmann BT'">Kaufmann BT</option>
  <option style="font-family: 'Khmer UI'">Khmer UI</option>
  <option style="font-family: 'KodchiangUPC'">KodchiangUPC</option>
  <option style="font-family: 'Kokila'">Kokila</option>
  <option style="font-family: 'Kristen ITC'">Kristen ITC</option>
  <option style="font-family: 'Kunstler Script'">Kunstler Script</option>
  <option style="font-family: 'Lao UI'">Lao UI</option>
  <option style="font-family: 'Latha'">Latha</option>
  <option style="font-family: 'Leelawadee'">Leelawadee</option>
  <option style="font-family: 'Levenim MT'">Levenim MT</option>
  <option style="font-family: 'LilyUPC'">LilyUPC</option>
  <option style="font-family: 'Liron'">Liron</option>
  <option style="font-family: 'Lithos Pro Light'">Lithos Pro Light</option>
  <option style="font-family: 'Lucida Bright'">Lucida Bright</option>
  <option style="font-family: 'Lucida Calligraphy'">Lucida Calligraphy</option>
  <option style="font-family: 'Lucida Console'">Lucida Console</option>
  <option style="font-family: 'Lucida Fax'">Lucida Fax</option>
  <option style="font-family: 'Lucida Handwriting'">Lucida Handwriting</option>
  <option style="font-family: 'Lucida Sans'">Lucida Sans</option>
  <option style="font-family: 'Lucida Sans Typewriter'">Lucida Sans Typewriter</option>
  <option style="font-family: 'Lucida Sans Unicode'">Lucida Sans Unicode</option>
  <option style="font-family: 'LuzSans-Book'">LuzSans-Book</option>
  <option style="font-family: 'Magneto'">Magneto</option>
  <option style="font-family: 'Maiandra GD'">Maiandra GD</option>
  <option style="font-family: 'Malgun Gothic'">Malgun Gothic</option>
  <option style="font-family: 'Mangal'">Mangal</option>
  <option style="font-family: 'Matura MT Script Capitals'">Matura MT Script Capitals</option>
  <option style="font-family: 'Meiryo'">Meiryo</option>
  <option style="font-family: 'Meiryo UI'">Meiryo UI</option>
  <option style="font-family: 'Microsoft Himalaya'">Microsoft Himalaya</option>
  <option style="font-family: 'Microsoft JhengHei'">Microsoft JhengHei</option>
  <option style="font-family: 'Microsoft New Tai Lue'">Microsoft New Tai Lue</option>
  <option style="font-family: 'Microsoft PhagsPa'">Microsoft PhagsPa</option>
  <option style="font-family: 'Microsoft Sans Serif'">Microsoft Sans Serif</option>
  <option style="font-family: 'Microsoft Tai Le'">Microsoft Tai Le</option>
  <option style="font-family: 'Microsoft Uighur'">Microsoft Uighur</option>
  <option style="font-family: 'Microsoft YaHei'">Microsoft YaHei</option>
  <option style="font-family: 'Microsoft Yi Baiti'">Microsoft Yi Baiti</option>
  <option style="font-family: 'MingLiU'">MingLiU</option>
  <option style="font-family: 'MingLiU-ExtB'">MingLiU-ExtB</option>
  <option style="font-family: 'MingLiU_HKSCS'">MingLiU_HKSCS</option>
  <option style="font-family: 'MingLiU_HKSCS-ExtB'">MingLiU_HKSCS-ExtB</option>
  <option style="font-family: 'Miriam'">Miriam</option>
  <option style="font-family: 'Miriam Fixed'">Miriam Fixed</option>
  <option style="font-family: 'Mistral'">Mistral</option>
  <option style="font-family: 'Modern No. 20'">Modern No. 20</option>
  <option style="font-family: 'Monotype Corsiva'">Monotype Corsiva</option>
  <option style="font-family: 'Monotype Hadassah'">Monotype Hadassah</option>
  <option style="font-family: 'MoolBoran'">MoolBoran</option>
  <option style="font-family: 'MS Gothic'">MS Gothic</option>
  <option style="font-family: 'MS Mincho'">MS Mincho</option>
  <option style="font-family: 'MS PGothic'">MS PGothic</option>
  <option style="font-family: 'MS PMincho'">MS PMincho</option>
  <option style="font-family: 'MS Reference Sans Serif'">MS Reference Sans Serif</option>
  <option style="font-family: 'MS Reference Specialty'">MS Reference Specialty</option>
  <option style="font-family: 'MS Sans Serif'">MS Sans Serif</option>
  <option style="font-family: 'MS UI Gothic'">MS UI Gothic</option>
  <option style="font-family: 'MV Boli'">MV Boli</option>
  <option style="font-family: 'Myriad Pro'">Myriad Pro</option>
  <option style="font-family: 'Myriad Pro Light'">Myriad Pro Light</option>
  <option style="font-family: 'Narkisim'">Narkisim</option>
  <option style="font-family: 'News701 BT'">News701 BT</option>
  <option style="font-family: 'News706 BT'">News706 BT</option>
  <option style="font-family: 'NewsGoth BT'">NewsGoth BT</option>
  <option style="font-family: 'NewsGoth Cn BT'">NewsGoth Cn BT</option>
  <option style="font-family: 'NewsGoth Lt BT'">NewsGoth Lt BT</option>
  <option style="font-family: 'Niagara Engraved'">Niagara Engraved</option>
  <option style="font-family: 'Niagara Solid'">Niagara Solid</option>
  <option style="font-family: 'NSimSun'">NSimSun</option>
  <option style="font-family: 'Nyala'">Nyala</option>
  <option style="font-family: 'OCR-A BT'">OCR-A BT</option>
  <option style="font-family: 'OCR-B 10 BT'">OCR-B 10 BT</option>
  <option style="font-family: 'Old English Text MT'">Old English Text MT</option>
  <option style="font-family: 'Onyx'">Onyx</option>
  <option style="font-family: 'Palace Script MT'">Palace Script MT</option>
  <option style="font-family: 'Palatino Linotype'">Palatino Linotype</option>
  <option style="font-family: 'Papyrus'">Papyrus</option>
  <option style="font-family: 'Parchment'">Parchment</option>
  <option style="font-family: 'Perpetua'">Perpetua</option>
  <option style="font-family: 'Perpetua Titling MT'">Perpetua Titling MT</option>
  <option style="font-family: 'Plantagenet Cherokee'">Plantagenet Cherokee</option>
  <option style="font-family: 'Playbill'">Playbill</option>
  <option style="font-family: 'PMingLiU'">PMingLiU</option>
  <option style="font-family: 'PMingLiU-ExtB'">PMingLiU-ExtB</option>
  <option style="font-family: 'Poor Richard'">Poor Richard</option>
  <option style="font-family: 'Pristina'">Pristina</option>
  <option style="font-family: 'Raavi'">Raavi</option>
  <option style="font-family: 'Ravie'">Ravie</option>
  <option style="font-family: 'Rockwell'">Rockwell</option>
  <option style="font-family: 'Rockwell Condensed'">Rockwell Condensed</option>
  <option style="font-family: 'Rod'">Rod</option>
  <option style="font-family: 'Sakkal Majalla'">Sakkal Majalla</option>
  <option style="font-family: 'Schadow BT'">Schadow BT</option>
  <option style="font-family: 'Segoe Print'">Segoe Print</option>
  <option style="font-family: 'Segoe Script'">Segoe Script</option>
  <option style="font-family: 'Segoe UI'">Segoe UI</option>
  <option style="font-family: 'Segoe UI Light'">Segoe UI Light</option>
  <option style="font-family: 'Segoe UI Semibold'">Segoe UI Semibold</option>
  <option style="font-family: 'Segoe UI Symbol'">Segoe UI Symbol</option>
  <option style="font-family: 'Shonar Bangla'">Shonar Bangla</option>
  <option style="font-family: 'Showcard Gothic'">Showcard Gothic</option>
  <option style="font-family: 'Shruti'">Shruti</option>
  <option style="font-family: 'SimHei'">SimHei</option>
  <option style="font-family: 'Simplified Arabic'">Simplified Arabic</option>
  <option style="font-family: 'Simplified Arabic Fixed'">Simplified Arabic Fixed</option>
  <option style="font-family: 'SimSun'">SimSun</option>
  <option style="font-family: 'SimSun-ExtB'">SimSun-ExtB</option>
  <option style="font-family: 'Snap ITC'">Snap ITC</option>
  <option style="font-family: 'Square721 BT'">Square721 BT</option>
  <option style="font-family: 'Square721 Cn BT'">Square721 Cn BT</option>
  <option style="font-family: 'Stencil'">Stencil</option>
  <option style="font-family: 'Swis721 Blk BT'">Swis721 Blk BT</option>
  <option style="font-family: 'Swis721 BlkCn BT'">Swis721 BlkCn BT</option>
  <option style="font-family: 'Swis721 BT'">Swis721 BT</option>
  <option style="font-family: 'Swis721 Cn BT'">Swis721 Cn BT</option>
  <option style="font-family: 'Swis721 Hv BT'">Swis721 Hv BT</option>
  <option style="font-family: 'Swis721 Lt BT'">Swis721 Lt BT</option>
  <option style="font-family: 'Swis721 LtEx BT'">Swis721 LtEx BT</option>
  <option style="font-family: 'Swis721 WGL4 BT'">Swis721 WGL4 BT</option>
  <option style="font-family: 'Sylfaen'">Sylfaen</option>
  <option style="font-family: 'Symbol'">Symbol</option>
  <option style="font-family: 'Tahoma'">Tahoma</option>
  <option style="font-family: 'Tamir'">Tamir</option>
  <option style="font-family: 'Tempus Sans ITC'">Tempus Sans ITC</option>
  <option style="font-family: 'Times New Roman'">Times New Roman</option>
  <option style="font-family: 'Traditional Arabic'">Traditional Arabic</option>
  <option style="font-family: 'Trebuchet MS'">Trebuchet MS</option>
  <option style="font-family: 'Tunga'">Tunga</option>
  <option style="font-family: 'Tw Cen MT'">Tw Cen MT</option>
  <option style="font-family: 'Tw Cen MT Condensed'">Tw Cen MT Condensed</option>
  <option style="font-family: 'TypoUpright BT'">TypoUpright BT</option>
  <option style="font-family: 'Utsaah'">Utsaah</option>
  <option style="font-family: 'Vani'">Vani</option>
  <option style="font-family: 'Verdana'">Verdana</option>
  <option style="font-family: 'Vijaya'">Vijaya</option>
  <option style="font-family: 'Viner Hand ITC'">Viner Hand ITC</option>
  <option style="font-family: 'Vivaldi'">Vivaldi</option>
  <option style="font-family: 'Vladimir Script'">Vladimir Script</option>
  <option style="font-family: 'Vrinda'">Vrinda</option>
  <option style="font-family: 'Webdings'">Webdings</option>
  <option style="font-family: 'Wide Latin'">Wide Latin</option>
  <option style="font-family: 'Wingdings'">Wingdings</option>
  <option style="font-family: 'Wingdings 2'">Wingdings 2</option>
  <option style="font-family: 'Wingdings 3'">Wingdings 3</option>
  <option style="font-family: 'WP Arabic Sihafa'">WP Arabic Sihafa</option>
  <option style="font-family: 'WP ArabicScript Sihafa'">WP ArabicScript Sihafa</option>
  <option style="font-family: 'WP CyrillicA'">WP CyrillicA</option>
  <option style="font-family: 'WP Greek Century'">WP Greek Century</option>
  <option style="font-family: 'WP Greek Courier'">WP Greek Courier</option>
  <option style="font-family: 'WP Greek Helve'">WP Greek Helve</option>
  <option style="font-family: 'WP Hebrew David'">WP Hebrew David</option>
  <option style="font-family: 'WP MultinationalA Courier'">WP MultinationalA Courier</option>
  <option style="font-family: 'WP MultinationalA Helve'">WP MultinationalA Helve</option>
  <option style="font-family: 'WP MultinationalA Roman'">WP MultinationalA Roman</option>
  <option style="font-family: 'WP MultinationalB Courier'">WP MultinationalB Courier</option>
  <option style="font-family: 'ＤＦ中太楷書体'">ＤＦ中太楷書体</option>
  <option style="font-family: 'ＤＦ明朝体W5'">ＤＦ明朝体W5</option>
    </select>
	<button type="button" onclick="document.getElementById('my_div').style['text-decoration']='underline'" id="underline_tetx">Underline Text</button>
	
	<button type="button"  onclick="changeStyle()" id="italic_tetx">italic Text</button>
<div class="change_text">	Change text color: &nbsp; &nbsp; <input type="color" value="#ff0000" id="colorChoice" style="width:100px;" />
</div>
</div>

  <div class="col-12 grid-margin stretch-card">

<h4>Add Name</h4>

<form action="" method="post"> 
<div class="col-md-4">
 
   <div class="form-group"> 
              
                <input id="name" class="form-control"
                    type="text" name="name"
                    placeholder="Input Your Name Here" autocomplete="off"> 
            </div>
 
</div>
<div class="col-md-4">


 <input type="submit"  name="submit" class="btn btn-success" value=" Add Name">
 </div>
      
              
  
		
					
					</div>

              
<div id="invoice" class='box' >
	<div class="inforgraphic">
	<br><br>
      <center>  <div id="my_div"><?php echo $name;?></div> <br><br>
	  
	   <?php
	  error_reporting(0);
	 $img =  $_GET['img'];
	
	 
	 if($img == '' OR $img == 1)
	 {
	  ?>
	   <img src="royal-enfield-meteor-350-fireball20201106124644%20(2).jpg" id="show_img_one">
	  <?php
	 }
	else if($img == 2)
	 {
		 
	
	  ?>
	   <img src="honda-hness-cb350-dlx20201113120847.jpg"  id="show_img_two">
	 <?php
	 }
	 ?>
	 
	 
	  </center>
	  <br>
	  
	</div>
	<br><br><br>
</div>
<center>


<!--<a href="preview.php" onclick="location.href=this.href+'?key='+scrt_var;return false;" id="linkdata">Link</a>-->
<!--<div id="linkdata" >Submit </div>-->

<?php
$img = $_GET['img'];
if($img == '' OR $img == 1)
{
?>
      <a href="preview.php?key=<?php echo $_POST['name'];?>&img=<?php echo 1;?>" class='btn btn-success'>Submit</a> 
	  <?php
}
else
{
	  ?>
	   <a href="preview.php?key=<?php echo $_POST['name'];?>&img=<?php echo 2;?>" class='btn btn-success'>Submit</a> 
	  <?php
}
	  ?>
        </form> 
		

<!--<a href="preview.php" onclick="location.href=this.href+'?key='+scrt_var;return false;" id="linkdata">Link</a>
</center>
<!--<div id="show_div_preview" style="display:none;">
<a id="btn-Convert-Html2Image" href="#">Download</a>
		 
<div id="previewImage">
    </div>-->
		 </div>
  

	</section>

  </main>



		<script>
var $affectedElements = $("#my_div"); // Can be extended, ex. $("div, p, span.someClass")

// Storing the original size in a data attribute so size can be reset
$affectedElements.each( function(){
  var $this = $(this);
  $this.data("orig-size", $this.css("font-size") );
});

$("#btn-increase").click(function(){
  changeFontSize(1);
})

$("#btn-decrease").click(function(){
  changeFontSize(-1);
})

$("#btn-orig").click(function(){
  $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , $this.data("orig-size") );
   });
})

function changeFontSize(direction){
    $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
    });
}
$(document).ready(function() {
	 $("div#second_img").on("click", function() {
	$('#show_img_one').hide();
	$('#show_img_two').show();
	});
	
	$("div#first_img").on("click", function() {
	$('#show_img_one').show();
	$('#show_img_two').hide();
	});
	
	  $("div.imgcheck").on("click", function() {
                $("div.imgcheck").removeClass("active")
				$(this).addClass("active");
            })
			
			
			$("italic_tetx").on("click", function() {
				var text = $('#my_div');
				document.getElementById('my_div').innerHTML = text.italics();
				
			})
			
})

   function changeStyle(){
        var element = document.getElementById("my_div");
        element.style.fontStyle = "italic";
    }
	  function append_to_div(div_name, data){
            document.getElementById(div_name).innerText += data;
        }
          
        document.getElementById("my_button")
                .addEventListener('click', function() {
              
            var user_name = document.getElementById("name");
            var value = user_name.value.trim();
              
            if(!value)
                alert("Name Cannot be empty!");
            else
                append_to_div("my_div", value+"\n");
              
            user_name.value = "";
        });
		 
		

</script>
<script>
$(document).ready(function(){
	 $("#linkdata").on("click", function() {
		$('#show_div_preview').show();
		//window.open("http://localhost/project/project/preview.php" , '_blank');
var element = $("#invoice"); // global variable
var getCanvas; 
 html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage", '_blank').append(canvas);  
                getCanvas = canvas;
				window.open("http://localhost/project/project/preview.php",canvas.toDataURL("#previewImage"), '_blank');
             }
         });

	$("#btn-Convert-Html2Image").on('click', function () {
   // var imgageData = window.open("http://localhost/project/project/preview.php",getCanvas.toDataURL("image/png", '_blank'));
	 var imgageData = getCanvas.toDataURL("image/png");

    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "image.png").attr("href", newData);

	});

});
});

</script>

<script>
    var changeFontStyle = function (font) {
            document.getElementById(
                "my_div").style.fontFamily
                        = font.value;
        }
		
    </script>
<script>
	  $('#colorChoice').on('change', function() {
    var newbgcolor = this.value;
    $('#my_div').css('color', newbgcolor); 
	
});
    </script>
</body>

</html>