<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="<?php echo $deskripsi; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <meta charset="utf-8">
    <meta name="robots" content="all">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <title><?php echo $title; ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/typography.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/global.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/elements.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/shortcodes.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/widgets.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/menu.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.flexslider.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/settings.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/fullwidth.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/absolution_revolution.css"/>
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.tweet.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.isotope.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.jcarousel.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/responsive-gs-12col.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/mediaqueries.css"/>   
</head>
<body>

<header class="header-top">
    <div class="container clr">
        <div class="row no-margin-col">
            <div class="col span_5">
                <div class="floatleft">
                    <ul class="inline-ul no-margin">
                        <li><p class="phone-top nova-text">&nbsp;&nbsp;(+62) 87755925565</p></li>
                        <li><p class="mail-top nova-text">&nbsp;&nbsp;&nbsp;&nbsp;ahmadrizalafani@gmail.com</p></li>
                    </ul>          
                </div>
            </div>

            <div class="col span_7">
                <div class="header-social-icons-parent">
                    <div class="header-social-icons clr">
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-dribbble"></div>
                        </a>
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-facebook"></div>
                        </a>
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-twitter"></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>  
</header>

<header class="header-container">
    <div class="header-elements container">
        <div class="row span_12 no-margin-col">

            <div class="col span_3">
                <div class="logo">
                    <img src="<?php echo base_url(); ?>asset/web/logo.png" alt="logo">
                </div>
            </div>

            <div class="col span_9">
                <nav class="menu-system">
                    <ul class="absolution">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="icon"><span class="menu-icon menu-icon-home"></span></span>HOME
                            </a>
                        </li>                      
                        <li>
                            <a href="javascript:void(0)">
                                <span class="icon"><span class="menu-icon menu-icon-contact"></span></span>CONTACT
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>

<section class="title-large">
    <div class="title-large-inner">
        <div class="container clr">
            <div class="row span_12 no-margin-col">

                <div class="col span_6">
                    <h2>Welcome to <a href="http://calonpresident.blogspot.com" target="_blank"><span class="text-bold">calonpresident.blogspot.com</span></a></h2>                    
                </div>

                <div class="col span_6">
                    <ul class="inline-ul breadcrumb">
                        <li><a href="javascript:void(0)">Detail post</a></li>                        
                    </ul>
                </div>

            </div>
        </div>      
    </div>            
</section>

<section class="container clr">
    <div class="row span_12">
        <div class="col span_12">
            <div class="entry single-entry">
                <div class="entry-meta">
                    <div class="meta-date">
					<?php
						$p_satu = explode(' ',$content['tanggal']);
						$tgl =explode('-',$p_satu[0]); 
						$bulan = array('Jan','Feb','Mar', 'Apr', 'Mei', 'Jun','Jul','Ags','Sep','Okt', 'Nov','D');
					?>
                        <p><?php echo $tgl[2]; ?></p>
                        <p><?php echo $bulan[($tgl[1]-1)]; ?></p>
                    </div>
                </div>
                <div class="entry-image" style="width:100%;">
                    <div class="image-hover blog-image" style="width:100%;">
                         <img src="<?php echo $content['header_post']; ?>" alt="redpassion_large"style="width:100%;">
                         <div class="extra-info blog-image"style="width:100%;">
                            <a href="#" class="entry-img-hover-loupe" ></a>
                         </div>                
                    </div>
                    <div class="image-shadow"></div>                    
                </div>
                <div class="entry-text">
                    <a href="#">
                        <h3 class="content-green-hover no-margin text-bold"><?php echo $content['judul_content']; ?></h3>
                    </a>
                    <ul class="inline-ul entry-text-ul">
                        <li>
                            <span class="gray-text">Posted by: </span>
                            <span class="gray-text"><?php echo $content['penulis']; ?></span>
                        </li>
                        <li>
                            <span class="gray-text">Comments: </span>
                            <span class="gray-text"><a href="#">#</a></span>
                        </li>
                        <li>
                            <ul class="inline-ul no-margin">
                                <li><span class="gray-text">Taged by: </span></li>
                                <li>
									<ul class="inline-ul no-margin">
									<?php 
										$tags = explode(',',$content['tags']);
										foreach($tags as $tag){
									?>
										<li><a href="javascript:void(0)"><?php echo $tag; ?>,</a></li>
									<?php } ?>
                                    </ul> 
                                </li>
                            </ul>
                        </li>
                    </ul>
					<div style="text-align:justify;">
                    <p><?php echo $content['isi']; ?></p>
                    </div>
                </div>
            </div>

            <div class="title-medium" style="width:60%;">
                <h3>About the author</h3>
            </div>
			<?php foreach($penulis as $p){ ?>
            <div class="author-shortcode clr" style="width:60%;">                
                <div class="floatleft author-shortcode-text">                    
                    <ul class="inline-ul">
                        <li><span class="text-bold"><?php echo $p['nama_lengkap']; ?></span></li>
                        <li><span>Web Developer</span></li>
                    </ul>
                    <p><?php echo $p['about']; ?></p>
                    <div class="footer-social-icons small">
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-dribbble"></div>
                        </a>
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-facebook"></div>
                        </a>
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-twitter"></div>
                        </a>
                    </div>

                </div>
            </div><?php } ?>

        <div class="comments-div" style="width:60%;">
        </div>
        </div>
    </div>
</section>
<footer class="footer-container">
    <div class="container">
        <div class="widget-area row">

            <div class="col span_3">
                <div class="widget text-widget">
                    <img class="margin-bottom" src="<?php echo base_url(); ?>asset/web/logo.png" alt="logo">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed suscipit metus. In sed risus leo, eu aliquet est.</p>
                    <div class="footer-social-icons small clr">
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-dribbble"></div>
                        </a>
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-facebook"></div>
                        </a>
                        <a href="javascript:void(0)" target="_blank">
                            <div class="social-icon-twitter"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col span_3">
                <div class="widget widget_recent_entries">
                    <div class="title-small clr">
                        <h5>Recent <span class="text-bold">Posts</span></h5>
                    </div>
                    <ul>
                    <?php foreach($recent_post as $r){ ?>
                        <li><a href="javascript:void(0)"><?php echo $r['judul_content']; ?></a></li>
					<?php } ?>
                    </ul>
                </div>
            </div>
			<?php $temp_user_twitter = explode('/',$twitter); ?>
            <div class="col span_3">
                <div class="title-small clr">
                    <h5>Follow me <span class="text-bold">on Twitter</span></h5>
                </div>
				<object type="application/x-shockwave-flash" data="http://www.twpics.com/BUTTON8/twitbutton.swf" width="200" height="200">
				<param name="movie" value="http://www.twpics.com/BUTTON8/twitbutton.swf"></param><param name="allowscriptaccess" value="always"></param>
				<param name="menu" value="false"></param><param name="wmode" value="transparent"></param>
				<param name="flashvars" value="username=<?php echo $temp_user_twitter[3]; ?>"></param>
				<a href="http://www.gamblinginsider.ca/casino-games/" title="find casino games at GamblingInsider">find casino games at GamblingInsider</a>
				<embed src="http://www.twpics.com/BUTTON8/twitbutton.swf" type="application/x-shockwave-flash" allowscriptaccess="always" width="200" height="200" menu="false" wmode="transparent" flashvars="username=<?php echo $temp_user_twitter[3]; ?>"></embed></object>
			</div>
			
            <div class="col span_3">
                <div class="title-small clr">
                    <h5>Find us on <span class="text-bold">facebook</span></h5>
                </div>
                <div class="flickr clr">
                    <div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=309896558224";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
					</script>			
					<div class="fb-like-box" data-href="<?php echo $fb_fans_page; ?>" data-width="300" data-height="180" data-show-faces="true" data-stream="false" data-header="false" style="border:"></div>
					</div>
				</div>
        </div>
    </div>

    <div class="copyright-container">
        <div class="container">
            <p class="white-text">© Copyright Absolution by<a target="blank" href="www.rubidium-style.html" class="green-hover"> Rubidium Style </a>- 2013</p>
        </div>
    </div>

</footer>
<div class="to-top"></div>

<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.gmap-1.1.0-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.isotope.min.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/main.js"></script>

</body>
</html>
<script>
	$(document).ready(function(){
		$.get('<?php echo base_url(); ?>index.php/web/ajaxcaptcha/<?php echo $content[0]['kode_content']; ?>',function(data){
			$("#AjaxCaptcha").html(data)
		});
		$("#formcomment").submit(function(){
			$.post('<?php echo base_url(); ?>index.php/web/validasicaptcha',$("#formcomment").serialize(),function(data){
				if(data == 0){
					alert("character captcha tidak valid !!!");
					$.get('<?php echo base_url(); ?>index.php/web/ajaxcaptcha/<?php echo $content[0]['kode_content']; ?>',function(data){
						$("#AjaxCaptcha").html(data)
					});	
				}else{
					$.post("<?php echo base_url(); ?>index.php/web/savecomment",$("#formcomment").serialize(),function(data){
						if(data == 1){
							window.location = '<?php echo base_url(); ?>index.php/web/detail/<?php echo $content[0]['kode_content']; ?>';
						}else{
							alert("gagal simpan komentar !!\ntolong ulangi lagi ... ");
						}
					});				
				}
			});
			return false;
		});
	});
</script>