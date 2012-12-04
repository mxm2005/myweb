<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们--秋枫工作室</title>
<meta name="keywords" content="work center, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Work Center Theme is a free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

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
</head>

<body id="home">

<?php include_once("head.html"); ?>

<div id="templatemo_main_top"></div>
<div id="templatemo_main">
	<h2>联系我们</h2>
    <div class="col_12 float_l">
    	<h4>Studio Address</h4>
        <h6><strong>Company Name</strong></h6>
          		140-280 Nam dictum lorem mollis,<br />
                Phasellus viverra faucibus, 14100<br />
                Laoreet non cursus tincidunt<br /><br />
				
		<strong>Phone:</strong> 010-020-0340 <br />
        <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a>  <br />
        
        <div class="cleaner h40"></div>  
        <h4>Our Location</h4>
	  	<iframe width="450" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe>
        
	</div>
    <div class="col_12 float_r">
    	<h4>如果您有项目需要开发或修改，请给我留言！</h4>
        <p>
            您好，如果您有项目需要开发或者修改，请您给我留言，我会尽快和您联系！
        </p>
        <div id="contact_form">
           <form method="post" name="contact" action="#">
                        
                        <label for="author">名 称:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
						<label for="subject">主 题:</label> <input type="text" name="subject" id="subject" class="input_field" />

						<div class="cleaner h10"></div>
        
                        <label for="text">留 言:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input onclick="javascript:Main.addMsg()" type="button" value="提 交" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="重 置" id="reset" name="reset" class="submit_btn float_r" />
                        <div class="cleaner"></div>
            </form>
        </div>
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
              <input type="text" value="Subscribe" name="email" id="subemail" title="email" onfocus="clearText(this)" onblur="clearText(this)" class="newsletter_txt" />
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
<script type="text/javascript" src="js/main.js?v=1"></script>
<script type="text/javascript">
    $(function(){
        $(".mySel").find("a[href='contact.php']").attr("class","selected");
    });
</script>