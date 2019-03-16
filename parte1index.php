
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Bootstrap 4 business website template - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /*Google Fonts*/
@import url('https://fonts.googleapis.com/css?family=Montserrat:500,600,700');
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700');
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

body, html{
	height: 100%;
	width:100%;
}
body{
	font-size: 1rem;
	font-family: 'Source Sans Pro', sans-serif;
}

/* ========== Universal Stylings ========== */
h1,h2,h3,h4,h5{
	position: relative;
	font-family: 'Montserrat', sans-serif;
}
h6{
	position: relative;
	text-transform: uppercase;
}
.bg-primary{
	background-color: #35CBDF!important;
}
.text-inverse{
	color: #074052;
}
.text-primary{
	color: #35CBDF!important;
}
.btn{
	font-family: 'Montserrat', sans-serif;
	font-size: 1rem;
	font-weight: 600;
	
}
.btn-primary{
	background-color: #35CBDF;
	border-color: #35CBDF;
	text-shadow: 1px 1px 2px rgba(0,0,0,0.4)
}
.btn-primary:hover,.btn-primary:focus{
	background-color: #00BED7;
	border-color: #00BED7;
}
.btn-capsul{
	border-radius: 50px;
}
i.box-circle-outline{
	border-color: inherit;
	border-width: 1px;
	border-style:solid;
	border-radius: 50%;
	height: 50px;
    line-height: 50px;
    text-align: center;
    width: 50px;
}
i.box-circle-solid{
	background-color:#35CBDF;
	border-radius: 50%;
    color: #fff;
    font-size: 22px;
    height: 55px;
    line-height: 55px;
    text-align: center;
    width: 55px;
}
.text-underline-white:before{
	content:"";
	position: absolute;
	width:100px;
	height: 4px;
	left:50%;
	margin-left:-50px;
	background:#fff;
	bottom: -15px;
	border-radius: 10px;
}
.text-underline-rb-white:before{
	content:"";
	position: absolute;
	width:100px;
	height: 4px;
	left:0;
	background:#fff;
	bottom: -15px;
	border-radius: 10px;
}
.text-underline-primary:before{
	content:"";
	position: absolute;
	width:50px;
	height: 4px;
	left:50%;
	margin-left:-25px;
	background:#35CBDF;
	bottom: -15px;
	border-radius: 10px;
}
.text-underline-rb-primary:before{
	content:"";
	position: absolute;
	width:100px;
	height: 4px;
	left:0;
	background:#35CBDF;
	bottom: -15px;
	border-radius: 10px;
}
.bg-overlay:before{
	content:"";
	background:rgba(0,0,0,0.7);
	position: absolute;
	height: 100%;
	width:100%;
	left:0;
	top:0;
	z-index: -1;
}
.bg-overlay-light:before{
	content:"";
	background:rgba(0,0,0,0.4);
	position: absolute;
	height: 100%;
	width:100%;
	left:0;
	top:0;
	z-index: -1;
}
.parallax{
	background-attachment: fixed!important;
}


/* ========== Loader ========== */

.loaders {
	width: 100%;
	box-sizing: border-box;
	display: flex;
	flex: 0 1 auto;
	flex-direction: row;
	flex-wrap: wrap;
}
.loaders .loader {
	box-sizing: border-box;
	display: flex;
	flex: 0 1 auto;
	flex-direction: column;
	flex-grow: 1;
	flex-shrink: 0;
	flex-basis: 25%;
	max-width: 25%;
	height: 200px;
	align-items: center;
	justify-content: center;
}
.loader {
	display: table;
	height: 100%;
	position: fixed;
	width: 100%;
	z-index: 1200;
}
.loader-bg {
	background: #35CBDF;
}
.loader-inner {
	display: table-cell;
	text-align: center;
	vertical-align: middle;
}

.loader .ball-clip-rotate-pulse {
    left: 50%;
    position: absolute;
    top: 50%;
}

/* ========== Top Navigation ========== */
.top-nav {
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    height: 80px;
    transition: 0.5s ease-in;
	-webkit-transition: 0.5s ease-in;
	-moz-transition: 0.5s ease-in;
}
.top-nav .navbar-nav li .nav-link {
    color: #fff;
    font-size: 14px;
    padding:29px 15px;
    font-weight: 600;
    text-transform: uppercase;
    transition: 0.5s ease-in;
	-webkit-transition: 0.5s ease-in;
	-moz-transition: 0.5s ease-in;
}
.top-nav li a.nav-link:hover, .top-nav .nav-item.active a.nav-link{
    border-bottom: 3px solid #35cbdf;
    color: #35cbdf;
    transition: 0.5s ease-in;
	-webkit-transition: 0.5s ease-in;
	-moz-transition: 0.5s ease-in;
}
.top-nav .navbar-brand{
	font-size: 28px;
	color: #fff;
	font-family: 'Montserrat', sans-serif;
}
.top-nav.light-header{
	height: 60px;
	background: #fff;
	box-shadow: 0 0 10px rgba(0,0,0,0.23);
	transition: 0.5s ease-in;
	-webkit-transition: 0.5s ease-in;
	-moz-transition: 0.5s ease-in;
}
.top-nav.light-header .navbar-brand{
	color: #212121;
}
.top-nav.light-header .navbar-nav li .nav-link {
    color: #212121;
    padding: 19px 15px;
    transition: 0.5s ease-in;
	-webkit-transition: 0.5s ease-in;
	-moz-transition: 0.5s ease-in;
}

.top-nav.light-header li a.nav-link:hover, .top-nav.light-header .nav-item.active a.nav-link{
	border-bottom: 3px solid #35cbdf;
    color: #35cbdf;
    transition: 0.5s ease-in;
	-webkit-transition: 0.5s ease-in;
	-moz-transition: 0.5s ease-in;
}


/* ========== Intro Header ========== */
.intro{
	float: left;
	width:100%;
	display: flex;
	align-items:center;
	height:100%;
	position: relative;
	z-index: 1;
}
.intro.intro-small{
	height: 60%;
}
.intro-bg{
	background:url("../img/intro-bg-03.jpg");
	background-repeat:no-repeat;
	background-position: center center;
	background-size:cover;
}
.caption-container{
	width:50rem;
	margin:0 auto;
}
.caption-two-panel{
	display: flex;
	align-items:center;
}
.intro h1{
	font-weight: 700;
}
.intro-caption .btn i{
	float: left;
	margin-right:15px;
}
.intro .carousel-item{
	height: 100vh;
}
.intro .carousel-item::before{
	content:"";
	background:rgba(0,0,0,0.6);
	position: absolute;
	width:100%;
	height: 100vh;
}
.intro  .carousel-caption{
	top:25%;
}

/* ========== Who We Are ========== */

.info-section{
	float: left;
	width:100%;
	padding:5rem 0;
	position: relative;
	z-index: 1;
}
.info-section h2{
	font-weight: 700;
	font-size: 2.5rem;
}

.info-section .head-sec{
	float: left;
	width:100%;
}

.info-section h3{
	font-size: 1.4rem;
}
.info-section p {
    font-size: 1rem;
    line-height: 1.3rem;
}
.info-section .box h2{
    font-size:24px;
    margin-bottom:20px;
    margin-top:0;
}

.info-section .box i{
    font-size:20px;
}
.info-section .box{
    display:flex;
}
.info-section .text-box{
    flex:1 1 0;
    text-align:left;
}
.info-section .icon-box{
    line-height: 1.2;
    width:70px;
}
.info-section .service-block-overlay{
	transition: .5s;
	-webkit-transition: .5s;
	-moz-transition: .5s;
}
.info-section .service-block-overlay:hover{
	background: #fff none repeat scroll 0 0;
    border-radius: 5px;
    box-shadow: 0 0 90px rgba(0, 0, 0, 0.1);
    float: left;
    margin-top: -10px;
    position: relative;
    width: 100%;
	transition: .5s;
	-webkit-transition: .5s;
	-moz-transition: .5s;
}
.content-half{
    color:#fff;
}
.content-half ul{
    padding:0;
    list-style:none;
}
.content-half ul li{
    margin:15px 0;
    float:left;
    width:100%;
}
.content-half ul li i{
    float:left;
    font-size:30px;
    padding-top:10px;
    padding-bottom:10px;
}
.content-half ul li .list-content{
    float:left;
    margin-left:20px;
}
.content-half ul li strong{
    font-size:19px;
    font-weight:700;
}
.content-half .btn{
    margin-top:20px;
}
/*--- three Block Panel ---*/
.three-panel-block{
	float: left;
	width: 100%;
}
.three-panel-block i{
	font-size: 1.5rem;
	margin-bottom: 15px;
}
.three-panel-block i.box-round{
	border-color: inherit;
	border-width: 1px;
	border-style:solid;
	padding:16px;
	border-radius: 50%;
}

/*--- Two Block Panel ---*/
.two-panel-block{
	float: left;
	width: 100%;
}
.two-panel-block p{
	font-size:16px;
}


/*--- Two Block Panel ---*/
.four-panel-block{
	float: left;
	width:100%;
}

/* ========== Who We Are ========== */
.widget{
	float: left;
	width:100%;
	position: relative;
	z-index: 1;
}

/* ========== Copy Content Styles ========== */
.copy-content-sec{
	float: left;
	width:100%;
	padding:5rem 0;
	position: relative;
	z-index: 1;
}
.copy-container{
	display: flex;
	align-items: center;
}
.copy-content{
	float: left;
	width:100%;
}
.copy-content li i{
	float: left;
	width:30px;
	margin-top:5px;
	color: #5CB85C;
}

/* ========== Team Section ========== */

.team-section{
	float: left;
	width:100%;
	position: relative;
	z-index: 1;
	background-color:#fff;
}
.team-footer{
	float: left;
	width:100%;
	padding: 15px;
}
.team-footer h3{
	font-size: 1.5rem;
	text-transform: capitalize;
}
.member-box{
  width:100%
  float:left;
  position:relative;
  overflow:hidden
}
.member-box:hover> img{
transform: scale(1.05);
transition:1s ease-in;  
}
.member-box img{
  transition:0.3s ease-in;  
}
.member-box.t-bottom .overlay-content{
	display:flex;
	flex-direction:column;
	justify-content:flex-end;
}
.member-box.t-center .overlay-content{
	display:flex;
	flex-direction:column;
	justify-content:center;
	align-items: center;
}
.member-box i.box-circle-solid{
	padding: 0;
	width:40px;
	height: 40px;
	text-align: center;
	line-height: 40px;
}
/* style 1 */
.member-box.anim-lf .overlay-content{
  position:absolute;
  background-color:rgba(0,0,0,0.6);
  left:-100%;
  bottom:0;
  width: 100%;
  height:100%;
  transition:0.4s ease-in;
}
.member-box.anim-lf:hover>.overlay-content{
  left:0;
  transition:0.4s ease-in;
}
/* style 1 */
.member-box.anim-bt .overlay-content{
  position:absolute;
  background-color:rgba(0,0,0,0.6);
  bottom:-100%;
  width: 100%;
  height:100%;
  transition:0.6s ease-in;
}

.member-box.anim-bt:hover>.overlay-content{
  bottom:0;
  transition:0.4s ease-in;
}

/* ========== Testimonial Section ========== */
.testimonial-section{
	float: left;
	width:100%;
	position: relative;
	z-index: 1;
}
.testimonial-section .block-style-03 img{
	width:100px;
}

/* ========== Footer Section ========== */
.footer-section{
	float: left;
	width:100%;
	position: relative;
	z-index: 1;
}
.footer-section .list-box img {
    width: 70px;
}
.footer-section .list-box a.title{
	font-size: 14px;
	line-height: 0;
}
.footer-section .copy-text{
	font-size: 12px;
	border-top: 1px solid #555;
}
.social-box a.icoRss:hover {
	background-color: #F56505;
}
.social-box a.fa-box:hover {
	background-color:#3B5998;
}
.social-box a.tw-box:hover {
	background-color:#33ccff;
}
.social-box a.go-box:hover {
	background-color:#BD3518;
}
.social-box a.ld-box:hover {
	background-color:#007bb7;
}
ul.social-box {
	list-style: none;
	display: inline;
	margin-left:0 !important;
	padding: 0;
}
ul.social-box li {
	display: inline;
	margin: 0 5px;
}
.social-box li a {
    background: #414344;
    border-radius: 50%;
    display: inline-block;
    font-size: 13px;
    height: 30px;
    margin: 0 auto;
    position: relative;
    text-align: center;
    width: 30px;
}

.social-box li i {
	margin:0;
	line-height:30px;
	text-align: center;
}

.social-box li a:hover i, .triggeredHover {
	-moz-transform: rotate(360deg);
	-webkit-transform: rotate(360deg);
	-ms--transform: rotate(360deg);
	transform: rotate(360deg);
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-ms-transition: all 0.2s;
	transition: all 0.2s;
}
.social-box i {
	color: #fff;
	-webkit-transition: all 0.8s;
	-moz-transition: all 0.8s;
	-o-transition: all 0.8s;
	-ms-transition: all 0.8s;
	transition: all 0.8s;
}

/* ========== Copy Content Styles ========== */
.copy-content-sec{
	float: left;
	width:100%;
	padding:5rem 0;
	position: relative;
	z-index: 1;
}
.copy-container{
	display: flex;
	align-items: center;
}
.copy-content{
	float: left;
	width:100%;
}
.copy-content li i{
	float: left;
	width:30px;
	margin-top:5px;
	color: #5CB85C;
}
.faq-box .card{
	border-color: #35CBDF;	
	margin-top: 10px;
}
.faq-box .card-header{
	background-color: #35CBDF;
	color: #fff;
}


/* ========== Price Table Styles ========== */
.price-section{
	float: left;
	width:100%;
	padding:5rem 0;
	position: relative;
	z-index: 1;
}
.price-section h2 {
    font-size: 2.5rem;
    font-weight: 700;
}
.price-section .price-block{

}
.price-section .currency{
	font-size: 25px;
    vertical-align: super;
}
.price-section .price-count{
	font-size: 60px;
	line-height: 60px;
}
.price-section .price-block small{
	display: block;
	font-size: 15px;
}

/* ========== Contact Section ========== */
.contact-section{
	float: left;
	width: 100%;
	position: relative;
	z-index: 1;
}
.contact-section #map {
    display: block;
    width: 100%;
    height: 100%;
}

.contact-section #map {
    background: #fff;
    width:100%;
    height: 100%;
}
.contact-section .form-control{
	border-radius: 0;
}
.contact-section #map{
	height: 350px;
}

/* ========== Copy Footer Styles ========== */
.copy-footer{
	float: left;
	width:100%;
	font-size: 14px;
	background: #111;
}
.copy-footer a{
	color: #fff;
}
.copy-footer a:hover{
	text-decoration: underline;
}


/* ========== Responsive Stylings ========== */
@media (max-width: 991px){
	.container{
		width: 100%;
	}
	.intro .intro-box{
		padding-left: 0;
		margin-bottom: 0;
	}
	.intro .intro-box span{
		margin-right: 10px;
	}
	.intro .intro-box .list-item{
		width: 85%;
	}
	.content-half ul li i{
		font-size: 20px;
	}
	.content-half ul li .list-content{
		width:77%;
	}
	.content-half ul li strong{
		line-height: 0;
	}
	.testimonial-section .single-testimonial .carousel-item{
		width: 100%;
		margin-left: 0;
		margin-right: 0;
	}
	.widget h2 {
    	font-size: 1.5rem;
	}
	.widget .counter{
		line-height: 0;
		font-size: 1.7rem;
	}
	.widget .fa-3x{
		font-size: 2rem;
	}
	.widget .stat-content h4{
		font-size: 1.2rem;
	}
}

@media (max-width: 767px){
	.container{
		width:100%;
	}
	.intro .intro-form-small input[type="text"], .intro .intro-form-small input[type="password"]{
		width: 36%;
	}
	.intro .carousel-caption{
		top:10%;
	}
	.widget.widget-counter .container{
		width: 100%;
	}
	.contact-section #map {
    	height: 400px
	}
    .intro .display-4{
        font-size:2rem;
    }
    .intro p{
        display: none;
    }
    .intro img{
        height: 100%;
    }
    .intro .btn-primary{
        margin-top: 20px;
    }
    .top-nav .navbar-toggler i {
    color: #fff;
    margin-top: 6px;
    }
    .top-nav.light-header .navbar-toggler i {
    color: #00BED7;
    }
    .top-nav  .navbar-collapse.show {
    background-color: #fff;
    text-align: center;
    padding: 12px 0;
    }
    .top-nav .navbar-collapse.show a{
    color: #000;
    }
}
.btn-theme{background-color:#35CBDF; color:#fff;}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="#"><strong>Grafreez</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Team</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Prices</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">FAQ's</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contact</a>
		      </li>
		    </ul>
		  </div>	
	</div>
</nav>

<!-- Intro Seven -->
<section class="intro carousel slide bg-overlay-light h-auto" id="carouselExampleCaptions">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" alt="First slide" src="https://grafreez.com/wp-content/temp_demos/suffi/img/intro-bg-01.jpg">
        <div class="carousel-caption ">
          	<h2 class="display-4 text-white mb-2 mt-4">In the business world, the rearview mirror is always clearer than the windshield.</h2>
			<p class="text-white mb-3 px-5 lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do enim ad minim veniam, </p>
			<a href="#" class="btn btn-primary btn-capsul px-4 py-2">Explore More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" alt="First slide" src=" <?php echo($rutaabsoluta)?>Enmascarar-grupo-1.jpg">
        <div class="carousel-caption ">
          	<h2 class="display-4 text-white mb-2 mt-4">Accept the challenges so that you can feel the exhilaration of victory.</h2>
			<p class="text-white mb-3 px-5 lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do enim ad minim veniam, </p>
			<a href="#" class="btn btn-primary btn-capsul px-4 py-2">Explore More</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</section>

	
      <script type="text/javascript">
	// Sticky Header
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".top-nav").addClass("light-header");
    } else {
        $(".top-nav").removeClass("light-header");
    }
});

// Year for copy content
$(function(){
var theYear = new Date().getFullYear();
$('#year').html(theYear);
});
	</script>
</body>
</html>
