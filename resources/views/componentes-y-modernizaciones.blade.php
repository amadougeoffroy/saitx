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


footer .footer_top_holder {
	background: url(<?php echo URL::to('/public/wp-content/uploads/2018/08/footer.jpg') ?>);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	padding-bottom: 3%;
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
		<style type="text/css" data-type="vc_custom-css">#titleespeciales h2 {
    color: white;
}




#piezas p {
    font-size: 18px;
}
#piezas2 p {
    font-size: 18px;
}
#piezas3 p {
    font-size: 18px;
}
#piezas4 p {
    font-size: 18px;
}

#piezas5 p {
    font-size: 18px;
}

#piezas6 p {
    font-size: 18px;
}

.ver .vc_column-inner {
    margin-left: 40%;
}

.ver .vc_column-inner, .tresd .vc_column-inner {
    display: inline-block;
}

.ver .vc_column-inner .wpb_wrapper, .tresd .vc_column-inner .wpb_wrapper  {
    display: inherit;
    background: #F29D0C;
    border-radius: 100%;
    padding: 6px 7px 2px;
}

.ver .vc_column-inner > .wpb_wrapper {
 background: transparent;
}

.tresd .vc_column-inner > .wpb_wrapper {
 background:  transparent;
}


.ver .vc_column-inner .wpb_content_element .wpb_wrapper {
 background: #F29D0C;
}

.tresd .vc_column-inner .wpb_content_element .wpb_wrapper {
 background: #1B3661;
}

.ver .vc_column-inner .wpb_content_element .wpb_wrapper:hover{
  background:#1B3661;  
}

.tresd .vc_column-inner .wpb_content_element .wpb_wrapper:hover{
  background:#F29D0C;  
}

.qbutton{
    background: transparent !important;
    border: 2px solid #1B3661 !important;
    border-bottom: 8px solid #1B3661 !important;
    border-radius: 0;
    z-index: 1;
    transition: all 0.3s ease-in;
    position: relative;
    color: #1B3661 !important;
}

.qbutton:hover {
  color: white !important ;
  background-color: transparent !important;
  border-color:#1B3661 !important;
}

.qbutton:before {
  content: "";
  position: absolute;
  background:#1B3661;
  bottom: 0;
  left: 0;
  right: 0;
  top: 100%;
  z-index: -1;
  transition: top 0.3s ease-in;
}

.qbutton:hover:before {
  top: 0;
}
.vc_custom_1535104357296 {
    background-image: url(http://www.ctvlifts.com/wp-content/uploads/2018/08/bancada.jpg?id=812) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;

}
.zonetext {
    padding: 15% !important;
	
}
.vc_custom_1535104501702 {
    background-image: url(http://www.ctvlifts.com/wp-content/uploads/2018/08/cabina_cristal.jpg?id=819) !important;
}
.vc_custom_1535104451070 {
    background-image: url(http://www.ctvlifts.com/wp-content/uploads/2018/08/chasis_rodadera_1polea.jpg?id=817) !important;
}

.vc_custom_1535104537047 {
    background-image: url(http://www.ctvlifts.com/wp-content/uploads/2018/08/chasis_helicóptero.jpg?id=821) !important;
}


#comerciales1{
    background: transparent !important;
    border: 2px solid #f29d0c !important;
    border-bottom: 8px solid #f29d0c !important;
    border-radius: 0;
    z-index: 1;
    transition: all 0.3s ease-in;
    position: relative;
    color: #f29d0c !important;
}

#comerciales1:hover {
  color: white !important ;
  background-color: transparent !important;
  border-color:#f29d0c !important;
}

#comerciales1:before {
  content: "";
  position: absolute;
  background:#f29d0c;
  bottom: 0;
  left: 0;
  right: 0;
  top: 100%;
  z-index: -1;
  transition: top 0.3s ease-in;
}

#comerciales1:hover:before {
  top: 0;
}


#comerciales .vc_column_container>.vc_column-inner {
    padding-left: 0;
    padding-right: 0;
}

#titulo a{
    background: transparent !important;
    border: 2px solid #F29A32 !important;
    border-bottom: 8px solid #F29A32 !important;
    border-radius: 0;
    z-index: 1;
    transition: all 0.3s ease-in;
    position: relative;
    color: #F29A32 !important;
}

#titulo a:hover {
  color: white !important ;
  background-color: transparent !important;
  border-color: #F29A32 !important;
}


#titulo a:before {
  content: "";
  position: absolute;
  background: #F29A32;
  bottom: 0;
  left: 0;
  right: 0;
  top: 100%;
  z-index: -1;
  transition: top 0.3s ease-in;
}

#titulo a:hover:before {
  top: 0;
}

@media (min-width: 768px){
    .vc_col-sm-1 {
        width: 12.333333%;
    }
}

@media (min-width: 480px){
    .vc_col-sm-1 {
        width: 12.333333%;
    }
    
}

@media (max-width: 480px){
    #titulo h2{
        font-size: 30px;
        padding-top: 15px;
    }
}

.vc_custom_1541158171846 {
    padding-top: 9.5% !important;
    padding-bottom: 9.5% !important;
    background: #ffffff url(http://www.ctvlifts.com/wp-content/uploads/2018/10/cables.jpg?id=2344) !important;
}

</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1540804140861{background-color: rgba(27,54,97,0.5) !important;*background-color: rgb(27,54,97) !important;}.vc_custom_1657878703209{padding-top: 20vh !important;padding-bottom: 20vh !important;}.vc_custom_1547725589807{background-color: #ffffff !important;}.vc_custom_1669631712632{margin-right: 10% !important;margin-bottom: -9px !important;margin-left: 10% !important;background-color: #ffffff !important;}.vc_custom_1537340727837{padding-top: 3% !important;padding-bottom: 3% !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><meta name="generator" content="WordPress Download Manager 3.2.67" />
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
		<div class="title title_size_large  position_left  has_background" style="background-size:1920px auto;background-image:url('<?php echo URL::to('/public/wp-content/uploads/2018/08/modernizaciones-y-componentes-cabecera.jpg') ?>');height:1000px;">
			<div class="image not_responsive"><img itemprop="image" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/modernizaciones-y-componentes-cabecera.jpg') ?>" alt="&nbsp;" /> </div>
										<div class="title_holder"  style="padding-top:80px;height:920px;">
					<div class="container">
						<div class="container_inner clearfix">
								<div class="title_subtitle_holder" >
                                                                									<div class="title_subtitle_holder_inner">
																										<h1  style="color:#ffffff" ><span>Composants et Modernisations</span></h1>
																	
																														<h4 class="subtitle"   style='color:#ffffff';>Nous mettons à profit l'espace.</h4>
																																						
																										</div>
								                                                            </div>
						</div>
					</div>
				</div>
								</div>
			</div>
			<div class="full_width">
	<div class="full_width_inner" >
										<section class="wpb-content-wrapper"><div id="minimenu"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1540804096686" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper" style="background-color: rgba(0, 45, 117, 0.5);">
			<ul>
			<li><a href="<?php echo URL::to('/elevadores-lentos') ?>">ÉLÉVATEUR DOMESTIQUE</a></li>
<li><a href="<?php echo URL::to('/componentes-y-modernizaciones') ?>">COMPOSANTS ET MODERNISATIONS</a></li>
<li><a href="<?php echo URL::to('/cabinas') ?>">CABINES</a></li>
</ul>

		</div> 
	</div> </div></div></div></div></div><div id="titulo"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1535543603962 grid_section" style=' text-align:center;'><div class=" section_inner clearfix"><div class='section_inner_margin clearfix'><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper" >
			<h2 style="text-align: center; color: #1b3661;">COMPOSANTS ET MODERNISATIONS</h2>

		</div> 
	</div> 
	<div class="wpb_text_column wpb_content_element  vc_custom_1557384361687">
		<div class="wpb_wrapper">
			<p style="text-align: center;">Nous recherchons le matériel dont vous avez besoin et préparons l&rsquo;étude de compatibilité correspondante en tenant compte de la qualité et du prix.</p>
<p style="text-align: center;">Nous concevons et fabriquons les composants spéciaux nécessaires à votre projet.</p>
<p style="text-align: center;">Nous créons des environnements sophistiqués, fonctionnels et personnalisés.</p>

		</div> 
	</div> 	<div class="vc_empty_space"  style="height: 32px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image"  ></span>
		</span></div>

<a  itemprop="url" href="<?php echo URL::to('/cabinas') ?>" target="_self" data-hover-color=#1b3661 class="qbutton  medium center default botoncabinas" style="color: #ffffff; border-color: #ffffff; border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px; background-color: #f29d0c;">VOIR LES CABINES</a></div></div></div></div></div></div><div id="titleespeciales"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1540794750146" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2 style="text-align: center; color: white;">QUELQUES COMPOSANTS SPÉCIAUX CTV</h2>

		</div> 
	</div> </div></div></div></div></div>
	




	<div id="piezas"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1535459968564" style=' text-align:left;'>
		<div class=" full_section_inner clearfix">

			<div class="wpb_column vc_column_container vc_col-sm-6">
				<div class="vc_column-inner vc_custom_1533885882835 zonetext">
					<div class="wpb_wrapper" >
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								<h3>CHÂSSIS</h3>

							</div> 
						</div> 
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								<p>Châssis monté sur guide type sac à dos 2:1 pour les hors courses réduits et les systèmes de petites charges.</p>

							</div> 
						</div> 
					</div>
				</div>
			</div>

			<div class="wpb_column vc_column_container vc_col-sm-6" id="iconos">
				<div class="vc_column-inner">
					<div class="wpb_wrapper">
						<div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535104357296" style=' padding-top:290px; padding-bottom:10px; text-align:left;'>
							<div class=" full_section_inner clearfix">
								<div class="ver wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<p>
														<a href="<?php echo URL::to('/public/wp-content/uploads/2018/08/bancada_completa.jpg') ?>" target="_blank" rel="noopener noreferrer">
															<img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/loupe.png') ?>" alt="" width="30" height="30" />
														</a>
													</p>
												</div> 
											</div> 
										</div>
									</div>
								</div>
								<div class="tresd wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<p><a href="https://edrawings.solidworks.com/main.v2.html?v=19&URL=https://www.3dcontentcentral.com/SWDownloads1/bec86b32-ce8f-46ea-a6ac-9c0eb65235c5/User%20Library-CTV_Bancada.EPRT" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/3d.icon_Mesa-de-trabajo-1.png') ?>" alt="" width="30" height="30" /></a></p>

												</div> 
											</div> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
							




	
	<div id="piezas2"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1535459977763" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535104451070" style=' padding-top:290px; padding-bottom:10px; text-align:left;'><div class=" full_section_inner clearfix"><div class="ver wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="<?php echo URL::to('/public/wp-content/uploads/2018/08/chasis_rodadera_1polea_completo.jpg') ?>" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/loupe.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div><div class="tresd wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="https://edrawings.solidworks.com/main.v2.html?v=19&URL=https://www.3dcontentcentral.com/SWDownloads1/a158dc32-c4f3-4ea2-87c6-19eebc885644/User%20Library-CTV_ChasisRod.EPRT" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/3d.icon_Mesa-de-trabajo-1.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div></div></div></div></div></div>
	<div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs">
		<div class="vc_column-inner vc_custom_1535712270666 zonetext">
			<div class="wpb_wrapper" >
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h3>CHÂSSIS COULISSEAU <span style="color: #1b3661; font-size: 16px;">(1 POULIE)</span></h3>

		</div> 
	</div> 
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p>Vitesse supérieure à 2 m/s. Traction centrée.</p>

		</div> 
	</div> </div></div></div></div></div>
	
	





	
	<div id="piezas3"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1535712349581" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner vc_custom_1535712129221"><div class="wpb_wrapper" style=" padding-top:20% !important; padding-bottom:20% !important ">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h3>CHÂSSIS COULISSEAU <span style="color: #1b3661; font-size: 16px;">(1 POULIE)</span></h3>

		</div> 
	</div> 
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p>Vitesse supérieure à 2 m/s. Traction centrée.</p>

		</div> 
	</div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper"><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535104451070" style=' padding-top:290px; padding-bottom:10px; text-align:left;'><div class=" full_section_inner clearfix"><div class="ver wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="<?php echo URL::to('/public/wp-content/uploads/2018/08/chasis_rodadera_1polea_completo.jpg') ?>" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/loupe.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div><div class="tresd wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="https://edrawings.solidworks.com/main.v2.html?v=19&URL=https://www.3dcontentcentral.com/SWDownloads1/a158dc32-c4f3-4ea2-87c6-19eebc885644/User%20Library-CTV_ChasisRod.EPRT" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/3d.icon_Mesa-de-trabajo-1.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div></div></div></div></div></div></div></div>
	
	
	


	
	<div id="piezas4"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1535459985754 " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner vc_custom_1533885882835 zonetext"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h3>CABINE EN VERRE</h3>

		</div> 
	</div> 
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p>Étude de résistance du verre.</p>

		</div> 
	</div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="iconos"     class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535104501702" style=' padding-top:290px; padding-bottom:10px; text-align:left;'><div class=" full_section_inner clearfix"><div class="ver wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="<?php echo URL::to('/public/wp-content/uploads/2018/08/cabina_cristal_completa.jpg') ?>" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/loupe.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div><div class="tresd wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="https://edrawings.solidworks.com/main.v2.html?v=19&URL=https://www.3dcontentcentral.com/SWDownloads1/d24cbe01-9386-4d11-b529-a7782df24117/User%20Library-CTV_CabinaCristal.EPRT" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/3d.icon_Mesa-de-trabajo-1.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div></div></div></div></div></div></div></div>
	
	
	
	
	
	<div id="piezas5"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1535459995810" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535104537047" style=' padding-top:290px; padding-bottom:10px; text-align:left;'><div class=" full_section_inner clearfix"><div class="ver wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="<?php echo URL::to('/public/wp-content/uploads/2018/12/chasis_helic%c3%b3ptero_completo.jpg') ?>" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/loupe.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div><div class="tresd wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="https://edrawings.solidworks.com/main.v2.html?v=19&URL=https://www.3dcontentcentral.com/SWDownloads1/3f920b98-d6f6-4380-b7a5-8ce17eee217d/User%20Library-CTV_ChasisHe.EPRT" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/3d.icon_Mesa-de-trabajo-1.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner vc_custom_1535712411676 zonetext"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h3>CHASSIS POUR GUIDAGE DIAGONAL</h3>

		</div> 
	</div> 
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p>Double accès 180º.</p>

		</div> 
	</div> </div></div></div></div></div>
	
	
	
	<div id="piezas6"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1535712398951" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner vc_custom_1535712425463"><div class="wpb_wrapper" style=" padding-top:20% !important; padding-bottom:20% !important ">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h3>CHASSIS POUR GUIDAGE DIAGONAL</h3>

		</div> 
	</div> 
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p>Double accès 180º.</p>

		</div> 
	</div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper"><div      class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1535104537047" style=' padding-top:290px; padding-bottom:10px; text-align:left;'><div class=" full_section_inner clearfix"><div class="ver wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="<?php echo URL::to('/public/wp-content/uploads/2018/12/chasis_helic%c3%b3ptero_completo.jpg') ?>" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/loupe.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div><div class="tresd wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><a href="../chasishelicoptero3d/index.html" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-775" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/3d.icon_Mesa-de-trabajo-1.png') ?>" alt="" width="30" height="30" /></a></p>

		</div> 
	</div> </div></div></div></div></div></div></div></div></div></div>
	
	
	
	
	<div id="tituloproveedores"     class="vc_row wpb_row section vc_row-fluid  contacta vc_custom_1541158171846" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element  vc_custom_1557384808406">
		<div class="wpb_wrapper">
			<h2 style="text-align: center;"><span style="color: #ffffff;">Nous travaillons avec les composants d&rsquo;ascenseurs et les pièces détachées des plus grands fabricants européens</span></h2>

		</div> 
	</div> </div></div></div></div></div>
	
	<div      class="vc_row wpb_row section vc_row-fluid  contacta vc_custom_1538990451725" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="wpb_revslider_element wpb_content_element"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

			</div></div></div></div></div></div>
			
			
			
<div      class="vc_row wpb_row section vc_row-fluid  contacta vc_custom_1661784384588 grid_section" style=' text-align:left;'><div class=" section_inner clearfix"><div class='section_inner_margin clearfix'><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1537340727837"><div class="wpb_wrapper">
	
<x-teams/>



<div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><a id="comerciales1" itemprop="url" href="<?php echo URL::to('/contacto') ?>" target="_self"  class="qbutton  medium default wpml-ls-link" style="">CONTACT</a>	<div class="vc_empty_space"  style="height: 32px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image"  ></span>
		</span></div>

</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div></div></div></div></div></div></div>
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