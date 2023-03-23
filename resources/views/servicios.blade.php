<x-head/>
<style type="text/css" id="wp-custom-css">
			#elevadores{
	padding:0 100px;
	
}

.tp-kbimg{
    
    display:none;
}
    

@font-face {
	font-family: Raleway,sans-serif;
	font-display: auto;
}
 
body {
	background: white;
}

.menu-items .current {
	color: #f29d0c !important;
}

.active > a{
	color: #f29d0c !important;
}

p::selection, h1::selection, span::selection, a::selection, h2::selection {
    background: #f29d0c;
}

.drop_down .second{
	border-top: 1px solid white;
}

.drop_down .second .inner ul {
	width: 100vw !important;
	padding: 0;
}

.drop_down .second.right{
	right: auto;
	left: auto;
}

.drop_down .second .inner ul li {
	float: none;
	width: auto;
	display: inline-block;
	border-left: none;
}


nav.main_menu .inner ul li a:hover{
	color: #f29d0c !important;
}

nav.main_menu ul li a:hover{
	color: #f29d0c !important;
}


/*FOOTER*/
 
footer {
	font-family: "Open Sans", sans-serif;
}



footer .footer_top_holder h5 {
	padding-bottom: 15% ;
	font-weight: 300;
	position: relative;
}

footer .footer_top_holder h5:after {
	content: '';
	position: absolute;
	width: 50px;
	display: block;
	height: 5px;
	background-color: #bababa;
	bottom: -5px;
}

footer .column1 ul, footer .column2 ul, footer .column3 ul{
	list-style: square;
	
}

footer .footer_top_holder ul li a, footer .footer_top_holder ul li span, footer .footer_top_holder ul li i, footer .footer_top_holder p, footer .footer_top_holder li   {
	color: #bababa !important;
}

footer .footer_top_holder ul li a:active{
	color: #f29d0c !important;
}

footer .footer_top_holder ul li i{
	padding-right: 20px;
	font-size: 20px;
}

footer .column4 li {
	padding-bottom: 15px;
}

footer .ventas li {
	padding-bottom: 5px;
}

.footer_bottom_holder{
	opacity: 0.5;
    margin-top: -100px;
}

.footer_bottom_holder p{
	color: #ffffff!important;
}

/*TITLE*/

.breadcrumb {
	top: 300px;
	right: auto;
}

.breadcrumb a, .breadcrumb span, .breadcrumb .current {
	font-size: 15px;
}

.breadcrumb a:hover{
	color: #f29d0c !important;
}

/*COMERCIALES*/


#comerciales .text .desc{
    text-align: left;
	padding-left: 20px;
}

#comerciales .text .desc h5{
    font-size: 18px;
    color: #1b3661;
}

#comerciales .text .desc .puesto, .idiomas{
    color: #1b3661 !important;
    font-size: 16px;
}

#comerciales .text .desc .idiomas {
    padding-top: 15px;
}

#comerciales .text .desc .mail, .telef, #comerciales .text .desc .mail a{
    color: #1b3661!important;
    font-size: 16px;
}

#comerciales .text .desc .mail a:hover{
	color: #f29d0c !important;
}

#comerciales .vc_column-inner{
	transition: all 0.5s;
}

#comerciales .vc_column-inner:hover{
	transform: scale(1.1);
}

.portfolio_single p {
	font-size: 17px;
}

.text-column {
 height: 70px;
 padding-top:90px
}
/*MINIMENU*/

.title {
	z-index: 99 !important;
}

.full_width {
	background: white !important;
}

#minimenu {
	position: absolute;
    top: -56px;
    z-index: 102;
    width: 100vw;
}


#minimenu ul {
	list-style: none;
	text-align: center;
}

#minimenu ul li {
	display: inline-block;
	padding: 15px 30px;
}

#minimenu ul li a {
	color: white;
	text-decoration: none;	
	font-size: 14px;
	font-weight: 500;
	font-family: "Open Sans", sans-serif;
}

#minimenu ul li a:hover{
	color: #f29d0c;
}

#minimenu ul li a:active{
	color: #f29d0c !important;
}


#titulo p {
    font-size: 17px;
}

#menu-main-menu .second, #menu-main-menu-english .second{
	left:0 !important;
	top: 80px;
	position:fixed;
}

#menu-main-menu .second ul, #menu-main-menu-english .second ul{
	text-align: center;
}

#menu-main-menu .second, #menu-main-menu-frances .second{
	left:0 !important;
	top: 80px;
	position:fixed;
}

#menu-main-menu .second ul, #menu-main-menu-frances .second ul{
	text-align: center;
}


/*CONTACTA CON NOSOTROS*/

.contacta p {
	font-size: 17px;
}


/*PROYECTOS*/

#iconos .section_inner{
    background: white;
}

#iconos .imagen img {
	cursor: zoom-in;
}

/*BLOG*/
.blog_single .post_text h2, .blog_holder .post_text h2 a{
	color: #1b3661 !important;
}

/*EQUIPO CTV*/ 

.equipo-ajuste .team-slider{
	width: 33% !important;
}

.q_icon_with_title.left_from_title.custom_icon_image.small .icon_text_holder .icon_holder {
	width: 64px !important;
}

.q_icon_with_title.small .icon_holder img{
	width: 64px !important;
}



/*RESPONSIVE*/

nav.mobile_menu ul li span.mobile_arrow i{
	color: white !important;
}

nav.mobile_menu ul li a {
	color: white !important;
}

@media (max-width: 1199.98px) { 
	.filter_number_of_items {
		display: none !important;
	}
	
		
}
 

@media (max-width: 991.98px) { 
	.responsive{
		display: none;
	}
	#iconos_certificados {
		display:none;
	}
	#proyectos .projects_holder article span.text_holder{
		background-color: rgba(255, 255, 255, 0.40) !important;
		opacity: 1 !important;
	}
	#iconconsultas .q_icon_with_title.center .icon_holder{
		width: initial !important;
		display: inline-block !important;
	}
	#iconconsultas .q_icon_with_title .icon_text_inner{
		padding: 0 !important;
	}
	.boss1 p {
		color: #818181 !important;
	}
	
}

/* slider componentes */

.ares .tp-bullet:hover, .selected {
	background: #1b3661 !important;
}


@media (max-width: 991.98px){
	#minimenu {
		width: 105vw;
	}
	#minimenu li {
		padding: 0 70px !important;
	}
}





@media (max-width: 767.98px) { 
	#comerciales {
    	max-height: initial;
	}
	#proyectos .filter_holder {
		padding-top: 10% !important;
	}
	.ver .vc_column-inner {
		margin-left: 0% !important;
	}
	.cabinasresponsive .iconos .full_section_inner {
		display:flex;
	}
	.titulo_certificado .full_section_inner {
		display: inline-flex;
	}
	.icono_contacto span{
		padding-right: 10px;
	}
	#minimenu li {
		padding: 0 40px !important;
	}
	
	
}

@media only screen and (max-width: 575.98px) {
	#noticias .latest_post_two_holder li {
		margin: 5px !important;
	}
	.subtitle{
		font-size: 18px !important;
	}
	.title.title_size_large	h4.subtitle span {
		font-size: 12px !important;
	}
	.four_columns .column1, .four_columns .column2, .four_columns .column3, .four_columns .column4 {
		padding: 0 10px;
	}
	#proyectos .filter_holder {
		padding-top: 0% !important;
	}
	.portfolio_single h2 {
		    display: grid;
	}
	#minimenu li {
		padding: 0 10px !important;
	}
	
}

@media only screen and (max-width: 575.98px) {
	#detalles h2 {
		font-size: 30px !important;
	}
	#iconos  h5 {
		font-size: 12px !important;
	}
	#menu-equipo-ctv, #slide h4   {
		padding-left: 10px;
	}
	#menu-equipo-ctv li {
		margin: 0 0 5px;
	}
	.team-slider .wp-tsasp-team-detail{
		padding: 12px 15px 0 15px
	}
	#slide .draggable{
		padding-bottom: 0 !important;
	}
}

/*proyectos*/

.portfolio_single .vc_column_container>.vc_column-inner{
    padding-left: 0;
    padding-right: 0;
}

.portfolio_single #iconos .q_icon_with_title .icon_text_holder .icon_title_holder .icon_title {
    text-align: left;
    padding-left: 20px;
}

.portfolio_single #iconos .q_icon_with_title .icon_title_holder .icon_holder {
    padding: 0;
}

.portfolio_single #iconos .section_inner{
    background: white;
}


/*quitamos el div de navegación del portfolio*/

.portfolio_single > div.container{
    display: none;
}


footer .column1 {
	width: 15% !important;
}


footer .column4 {
	width: 30% !important;
}

.title {
	background-size: cover !important;
}

.tp-bullet-title:lang(fr), 
.tp-bullet-title:lang(en){
	display: none;
}
 

.wpb_wrapper{
    
    text-align:center;
    
}

#boton-centrado{
    background: transparent !important;
    border: 2px solid #F29A32 !important;
    border-bottom: 8px solid #F29A32 !important;
    border-radius: 0;
    z-index: 1;
    transition: all 0.3s ease-in;
    position: relative;
    color: #F29A32 !important;
}

#boton-centrado:hover{
  color: white !important ;
  background-color: #F29A32 !important;
  border-color:#F29A32 !important;
}

#boton-centrado:before {
    content: "";
    position: absolute;
    background: #F29A32;
    bottom: 0;
    left: 0;
    right: 0;

    z-index: -1;
    transition: top 0.3s ease-in;
}

#custom_html-9 h5{
	
	padding-bottom:35px;
	
}

#comerciales{
    margin-left:10%;
    margin-right:10%;
    
}

		</style>
		<style type="text/css" data-type="vc_custom-css">.vc_column_container>.vc_column-inner{
    padding-left: 0;
    padding-right: 0;
}

.vc_row{
    margin-right: 0;
    margin-left: 0;
}


#minimenu h3 {
    color: white;
    font-weight: 300;
    font-size: 14px;
    padding: 5px;
}


.empty_space_image {
    background-size: cover;
    background-position: center;
}

.text-column {
    padding: 6%;
}

.text-column h3 {
    color: #1B3661;
    font-size: 18px;
    letter-spacing: 0;
}

.text-column p{
    font-size: 16px;
}

/*padding extraño*/

.vc_col-has-fill>.vc_column-inner, .vc_row-has-fill+.vc_row-full-width+.vc_row>.vc_column_container>.vc_column-inner, .vc_row-has-fill+.vc_row>.vc_column_container>.vc_column-inner, .vc_row-has-fill>.vc_column_container>.vc_column-inner{
    padding-top: 0;
}

.q_icon_with_title .icon_text_inner {
    padding: 0;
}

/*botones*/

.qbutton{
    background: transparent !important;
    border: 2px solid #F29D0C !important;
    border-bottom: 8px solid #F29D0C !important;
    border-radius: 0;
    z-index: 1;
    transition: all 0.3s ease-in;
    position: relative;
    margin-top: 20px;
    color: #F29D0C !important;
}

.qbutton:hover {
    color: #ffffff !important;
  background-color: transparent !important;
  border-color: #F29D0C !important;
}


.qbutton:before {
  content: "";
  position: absolute;
  background: #F29D0C;
  bottom: 0;
  left: 0;
  right: 0;
  top: 100%;
  z-index: -1;
  transition: top 0.3s ease-in;
}

.qbutton:hover:before {
  top: 0;
}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1538997335053{padding-top: 14px !important;padding-bottom: 14px !important;background-color: rgba(0,45,117,0.5) !important;*background-color: rgb(0,45,117) !important;}.vc_custom_1534855984217{background-color: #ffffff !important;}.vc_custom_1535958003070{padding-right: 3% !important;padding-left: 3% !important;}.vc_custom_1535958325453{padding-right: 3% !important;padding-left: 3% !important;}.vc_custom_1535958433134{padding-right: 3% !important;padding-left: 3% !important;}.vc_custom_1535959104508{padding-right: 3% !important;padding-left: 3% !important;}.vc_custom_1535958872956{padding-right: 3% !important;padding-left: 3% !important;}.vc_custom_1535959001029{padding-right: 3% !important;padding-left: 3% !important;}.vc_custom_1535959021756{padding-right: 3% !important;padding-left: 3% !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><meta name="generator" content="WordPress Download Manager 3.2.67" />
                <link href="https://fonts.googleapis.com/css?family=Rubik"
              rel="stylesheet">
        <style>
            .w3eden .fetfont,
            .w3eden .btn,
            .w3eden .btn.wpdm-front h3.title,
            .w3eden .wpdm-social-lock-box .IN-widget a span:last-child,
            .w3eden #xfilelist .panel-heading,
            .w3eden .wpdm-frontend-tabs a,
            .w3eden .alert:before,
            .w3eden .panel .panel-heading,
            .w3eden .discount-msg,
            .w3eden .panel.dashboard-panel h3,
            .w3eden #wpdm-dashboard-sidebar .list-group-item,
            .w3eden #package-description .wp-switch-editor,
            .w3eden .w3eden.author-dashbboard .nav.nav-tabs li a,
            .w3eden .wpdm_cart thead th,
            .w3eden #csp .list-group-item,
            .w3eden .modal-title {
                font-family: Rubik, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                text-transform: uppercase;
                font-weight: 700;
            }
            .w3eden #csp .list-group-item {
                text-transform: unset;
            }


        </style>
            <style>
        /* WPDM Link Template Styles */        </style>
                <style>

            :root {
                --color-primary: #4a8eff;
                --color-primary-rgb: 74, 142, 255;
                --color-primary-hover: #5998ff;
                --color-primary-active: #3281ff;
                --color-secondary: #6c757d;
                --color-secondary-rgb: 108, 117, 125;
                --color-secondary-hover: #6c757d;
                --color-secondary-active: #6c757d;
                --color-success: #018e11;
                --color-success-rgb: 1, 142, 17;
                --color-success-hover: #0aad01;
                --color-success-active: #0c8c01;
                --color-info: #2CA8FF;
                --color-info-rgb: 44, 168, 255;
                --color-info-hover: #2CA8FF;
                --color-info-active: #2CA8FF;
                --color-warning: #FFB236;
                --color-warning-rgb: 255, 178, 54;
                --color-warning-hover: #FFB236;
                --color-warning-active: #FFB236;
                --color-danger: #ff5062;
                --color-danger-rgb: 255, 80, 98;
                --color-danger-hover: #ff5062;
                --color-danger-active: #ff5062;
                --color-green: #30b570;
                --color-blue: #0073ff;
                --color-purple: #8557D3;
                --color-red: #ff5062;
                --color-muted: rgba(69, 89, 122, 0.6);
                --wpdm-font: "Rubik", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            .wpdm-download-link.btn.btn-primary {
                border-radius: 4px;
            }


        </style>
<body class="home page-template page-template-full_width page-template-full_width-php page page-id-2302 bridge-core-1.0.6  qode-title-hidden qode-child-theme-ver-16.7.1533618937 qode-theme-ver-18.2 qode-theme-bridge qode_header_in_grid wpb-js-composer js-comp-ver-6.10.0 vc_responsive" itemscope itemtype="http://schema.org/WebPage">




<div class="wrapper">
	<div class="wrapper_inner">

    
		<!-- Google Analytics start -->
				<!-- Google Analytics end -->

        <x-header/>
	
    







        







    
		<div class="content ">
        <div class="content_inner  ">
    			<div class="title_outer title_without_animation"    data-height="1000">
		<div class="title title_size_large  position_left  has_background" style="background-size:1920px auto;background-image:url(public/wp-content/uploads/2018/12/servicios-cabecera-opacidad.jpg);height:1000px;">
			<div class="image not_responsive"><img itemprop="image" src="public/wp-content/uploads/2018/12/servicios-cabecera-opacidad.jpg" alt="&nbsp;" /> </div>
										<div class="title_holder"  style="padding-top:80px;height:920px;">
					<div class="container">
						<div class="container_inner clearfix">
								<div class="title_subtitle_holder" >
                                                                									<div class="title_subtitle_holder_inner">
																										<h1 ><span>Services</span></h1>
																	
																														<h4 class="subtitle"   style='color:#ffffff';>Votre satisfaction est la nôtre.</h4>
																																						
																										</div>
								                                                            </div>
						</div>
					</div>
				</div>
								</div>
			</div>
			<div class="full_width">
	<div class="full_width_inner" >
										<section class="wpb-content-wrapper"><div      class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="minimenu"     class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1538997335053" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h3 style="text-align: center;">DÉCOUVREZ TOUS NOS SERVICES</h3>

		</div> 
	</div> </div></div></div></div></div></div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1534855984217"><div class="wpb_wrapper"><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title small custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/icon-1-gestion-integral.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/01.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">GESTION INTÉGRALE</h3><p style='color: #969696'>CTV est synonyme de service. Nous prenons tout en charge pour faciliter et accélérer le processus d'achat de votre équipement.</p></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	
		<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-1-gestion-integral.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535958003070" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title tiny custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/icon-1-gestion-integral.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title small custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/01.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">GESTION INTÉGRALE</h3><p style='color: #969696'>CTV est synonyme de service. Nous prenons tout en charge pour faciliter et accélérer le processus d'achat de votre équipement.</p></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 300px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-1-gestion-integral.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-2-idioma.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title small custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/icon-2-idioma.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/2.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">DANS VOTRE LANGUE</h3><p style='color: #969696'>CTV se compose d'une équipe de professionnels de différentes nationalités pour vous aider dans votre langue.</p></div></div></div></div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535958325453" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title tiny custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/icon-2-idioma.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title small custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/2.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">DANS VOTRE LANGUE</h3><p style='color: #969696'>CTV se compose d'une équipe de professionnels de différentes nationalités pour vous aider dans votre langue.</p></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 300px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-2-idioma.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title small custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/icon-3-posventa.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/3.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">SERVICE APRÈS-VENTE</h3><p style='color: #969696'>Il est essentiel de préserver l'engagement client. Nous avons pour mission de minimiser les défauts en prêtant un service après-vente personnalisé, rapide et efficace.</p></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-3-posventa.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535958433134" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title tiny custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/icon-3-posventa.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title small custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/3.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">SERVICE APRÈS-VENTE</h3><p style='color: #969696'>Il est essentiel de préserver l'engagement client. Nous avons pour mission de minimiser les défauts en prêtant un service après-vente personnalisé, rapide et efficace.</p></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 300px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-3-posventa.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-4-asesoramiento.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title small custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/icon-4-asesoramiento.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/4.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">CONSEIL TECHNIQUE</h3><p style='color: #969696'>Nous sommes l'appui technique de nos clients. Nous vous offrons un conseil continu à tous les niveaux en recherchant les solutions techniques et esthétiques les mieux adaptées.</p></div></div></div></div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535959104508" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title tiny custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/icon-4-asesoramiento.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title small custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/4.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">CONSEIL TECHNIQUE</h3><p style='color: #969696'>Nous sommes l'appui technique de nos clients. Nous vous offrons un conseil continu à tous les niveaux en recherchant les solutions techniques et esthétiques les mieux adaptées.</p></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space  vc_custom_1535959021756"  style="height: 300px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-4-asesoramiento.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title small custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/09/diseno-fabricacion_Mesa-de-trabajo-1.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/5.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">CONCEPTION ET FABRICATION</h3><p style='color: #969696'>Nous voulons connaître vos besoins particuliers pour y répondre.</p></div></div></div>	<div class="vc_empty_space"  style="height: 29px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image"  ></span>
		</span></div>

<a  itemprop="url" href="<?php echo URL::to('/componentes-y-modernizaciones') ?>" target="_self" data-hover-color=#ffffff class="qbutton  small center default boton" style="color: #ffffff; border-color: #f29d0c; margin: 0 0 0 2%; border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px; background-color: #f29d0c;">VOIR PLUS</a></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-5-diseno-fabricacion.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535958872956" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title tiny custom_icon_image left_from_title '><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><div class="icon_title_holder"><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/09/diseno-fabricacion_Mesa-de-trabajo-1.png" alt=""></div><h5 class="icon_title" style=""></h5></div><p style=''></p></div></div></div><div class='q_icon_with_title small custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/5.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">CONCEPTION ET FABRICATION</h3><p style='color: #969696'>Nous voulons connaître vos besoins particuliers pour y répondre.</p></div></div></div><a  itemprop="url" href="fr/componentes-y-modernizaciones/index.html" target="_blank" data-hover-color=#1b3661 class="qbutton  small center default boton" style="color: #ffffff; border-color: #f29d0c; margin: 0 0 0 2%; border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px; background-color: #f29d0c;">VOIR PLUS</a></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 300px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-5-diseno-fabricacion.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-6-busqueda.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-4x  " style=" "><i class="qode_icon_font_awesome fa fa-search qode_icon_element" style="color: #f29d0c;" ></i></span><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/6.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">RECHERCHE DE MATÉRIEL</h3><p style='color: #969696'>Nous pouvons vous fournir tout le matériel dont vous avez besoin. Nous répondons à vos demandes en termes de qualité, compatibilité et prix.</p></div></div></div></div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535959001029" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper"><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-2x  " style=" "><i class="qode_icon_font_awesome fa fa-search qode_icon_element" style="color: #f29d0c;" ></i></span><div class='q_icon_with_title small custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="public/wp-content/uploads/2018/08/6.png" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">RECHERCHE DE MATÉRIEL	</h3><p style='color: #969696'>Nous pouvons vous fournir tout le matériel dont vous avez besoin. Nous répondons à vos demandes en termes de qualité, compatibilité et prix.</p></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 300px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(public/wp-content/uploads/2018/08/img-6-busqueda.jpg);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div></div></div></div></div></div>
<p></p></section>										 
												</div>
	</div>
						<div class="container">
			<div class="container_inner clearfix">
			<div class="content_bottom" >
					</div>
							</div>
				</div>
					
	</div>
</div>





















<x-footer/>
		
</div>
</div>
           

<x-modal/>
    

<x-metafooter/>