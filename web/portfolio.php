<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Work Center Theme, Portfolio Page</title>
<meta name="keywords" content="work center, portfolio, theme, free css templates, free webdesign, templatemo" />
<meta name="description" content="Work Center, Portfolio, free CSS template by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
    <script type="text/javascript">
        jQuery(function(){ alert($(".mySel").html());
            $(".mySel").find("a [href='portfolio.php']").attr("class","selected");
        });
    </script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>

</head>

<body id="home">

<?php include_once("head.html"); ?>

<div id="templatemo_main_top"></div>
<div id="templatemo_main">
		<h2>Our Portfolio</h2>
		<div class="gallery_box">
       		<a href="images/portfolio/01.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/01.jpg" alt="Image 01" class="image_frame"/></a>
            <a href="#">Fermentum Lorem</a>
            <p>Praesent sit amet magna nisl.</p>
        </div>
        <div class="gallery_box">
            <a href="images/portfolio/08.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/08.jpg" alt="Image 08" class="image_frame"/></a>
            <a href="#">Quisque Tortor Arcu</a>
            <p>Dictum vitae tristique nec.</p>
        </div>
        <div class="gallery_box">
        	<a href="images/portfolio/03.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/02.jpg" alt="Image 03" class="image_frame"/></a>            
            <a href="#">Suspendisse Potenti</a>
            <p>Vivamus eu nisi ut magna consequat.</p>
        </div>
        <div class="gallery_box no_margin_right">
        	<a href="images/portfolio/04.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/03.jpg" alt="Image 04" class="image_frame"/></a>
            <a href="#">Mollis Tempus Tortor</a>
            <p>Aliquam rutrum vehicula turpis.</p>
        </div>
        <div class="gallery_box">
        	<a href="images/portfolio/07.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/07.jpg" alt="Image 07" class="image_frame"/></a>
            <a href="#">Mauris Fringilla Est</a>
            <p>Ut condimentum auctor justo.</p>
        </div>
        <div class="gallery_box">
            <a href="images/portfolio/05.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/05.jpg" alt="Image 05" class="image_frame"/></a>
            <a href="#">Egestas Risus Nec</a>
            <p>Donec tristique, urna non gravida.</p>
        </div>
        <div class="gallery_box">
        	<a href="images/portfolio/06.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/06.jpg" alt="Image 06" class="image_frame"/></a>
            <a href="#">Velit Magna Sollicitudin</a>
            <p>Nulla sapien augue, condimentum at. </p>
        </div>
        
        <div class="gallery_box no_margin_right">
        	<a href="images/portfolio/07.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/07.jpg" alt="Image 07" class="image_frame"/></a>
            <a href="#">Praesent Venenatis</a>
            <p>Integer venenatis pharetra magna.</p>
        </div>
        <div class="gallery_box">
			<a href="images/portfolio/08.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/08.jpg" alt="Image 08" class="image_frame"/></a>
            <a href="#">Fringilla Lacus Vitae</a>
            <p>Vivamus laoreet euismod eros in.</p>
        </div>
        <div class="gallery_box">
        	<a href="images/portfolio/02.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/02.jpg" alt="Image 02" class="image_frame"/></a>
            <a href="#">Massa Bibendum</a>
            <p>Proin sodales pellentesque blandit.</p>
        </div>
        <div class="gallery_box">
        	<a href="images/portfolio/01.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/01.jpg" alt="Image 01" class="image_frame"/></a>
            <a href="#">Pellentesque Blandit</a>
            <p>Sed auctor et. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        </div>
        
        <div class="gallery_box no_margin_right">
        	<a href="images/portfolio/04.jpg" rel="lightbox[portfolio]"><img src="images/portfolio/04.jpg" alt="Image 12" class="image_frame"/></a>
            <a href="#">Tempor Non Cursus</a>
            <p>Aenean at sem risus, quis placerat velit.</p>
        </div>
        
        <div class="cleaner"></div>
        <div class="pagging">
            <ul>
                <li><a href="http://www.templatemo.com" target="_parent">Previous</a></li>
                <li><a href="http://www.templatemo.com/page/1" target="_parent">1</a></li>
                <li><a href="http://www.templatemo.com/page/2" target="_parent">2</a></li>
                <li><a href="http://www.templatemo.com/page/3" target="_parent">3</a></li>
                <li><a href="http://www.templatemo.com/page/4" target="_parent">4</a></li>
                <li><a href="http://www.templatemo.com/page/5" target="_parent">5</a></li>
                <li><a href="http://www.templatemo.com/page/6" target="_parent">6</a></li>
                <li><a href="http://www.templatemo.com/page/7" target="_parent">Next</a></li>
            </ul>
        </div> 
    
    <div class="cleaner"></div>
</div> <!-- END of main -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
	
		<div class="col col_14">
        	<h5>Blogroll</h5>
            <ul class="footer_list">
                <li><a href="http://www.templatemo.com/page/1">Free CSS Templates</a></li>
                <li><a href="http://www.webdesignmo.com/blog">Web Design Resources</a></li>
            	<li><a href="http://www.flashmo.com">Free Flash Templates</a></li>
                <li><a href="http://www.templatemo.com">Website Templates</a></li>
                <li><a href="http://www.koflash.com">Free Web Gallery</a></li>
			</ul>   
        </div>
        <div class="col col_14">
        	<h5>Pages</h5>
            <ul class="footer_list">
            	<li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
			</ul>
        </div>
        <div class="col col_14">
        	<h5>Follow Us</h5>	
            
            <ul class="footer_list">
                <li><a href="#" class="social facebook">Facebook</a></li>
                <li><a href="#" class="social twitter">Twitter</a></li>
                <li><a href="#" class="social feed">Feed</a></li>
			</ul>
        </div>
        
        <div class="col col_14 no_margin_right">
        	<h5>Newsletter</h5>
            <form action="#" method="get">
              <input type="text" value="Subscribe" name="email" id="email" title="email" onfocus="clearText(this)" onblur="clearText(this)" class="newsletter_txt" />
              <input type="submit" name="Subscribe" value=" Subscribe " alt="Subscribe" id="subscribe_button" title="Subscribe" class="subscribe_button"  />
            </form>
            <div class="cleaner h30"></div>
            Copyright © 2048 <a href="#">Your Company Name</a> Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div>
        
    <div class="cleaner"></div>
    </div>
</div> <!-- END of footer -->

</body>
</html>
