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
		<style type="text/css" data-type="vc_custom-css">.vc_column_container>.vc_column-inner{
    padding-left: 0;
    padding-right: 0;
}

.title_holder{
    position: relative;
}


.empty_space_image {
    background-size: cover;
    background-position: center;
}

.text-column {
    padding: 7%;
}

.text-column h3 {
    color: #1B3661;
    font-size: 20px;
    letter-spacing: 0;
    font-weight: 400;
}

.text-column .q_font_awsome_icon{
    background-color: #f29d0c;
    padding: 5px;
   margin-left: 95px;
}

.text-column .q_font_awsome_icon i{
    color: white;
}
.qbutton {
    background: transparent !important;
    border: 2px solid #1B3661 !important;
    border-bottom: 8px solid #1B3661 !important;
    border-radius: 0;
    z-index: 1;
    transition: all 0.3s ease-in;
    position: relative;
    color: #1B3661 !important;
    width: 90%;
}


.text-column .q_font_awsome_icon:hover{
    background: #1b3661;
}</style>





<body class="home page-template page-template-full_width page-template-full_width-php page page-id-2302 bridge-core-1.0.6  qode-title-hidden qode-child-theme-ver-16.7.1533618937 qode-theme-ver-18.2 qode-theme-bridge qode_header_in_grid wpb-js-composer js-comp-ver-6.10.0 vc_responsive" itemscope itemtype="http://schema.org/WebPage">




<div class="wrapper">
	<div class="wrapper_inner">

    
		<!-- Google Analytics start -->
				<!-- Google Analytics end -->

        <x-header/>
	
    







        







    <div class="content ">
        <div class="content_inner  ">
    			<div class="title_outer title_without_animation"    data-height="1000">
		<div class="title title_size_large  position_left  has_background" style="background-size:1920px auto;background-image:url('<?php echo URL::to('/public/wp-content/uploads/2018/08/cabeceraproductos.jpg') ?>');height:1000px;">
			<div class="image not_responsive"><img itemprop="image" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/cabeceraproductos.jpg') ?>" alt="&nbsp;" /> </div>
										<div class="title_holder"  style="padding-top:80px;height:920px;">
					<div class="container">
						<div class="container_inner clearfix">
								<div class="title_subtitle_holder" >
                                                                									<div class="title_subtitle_holder_inner">
																										<h1 ><span>Produits</span></h1>
																	
																														<h4 class="subtitle"   style='color:#ffffff';>Innovation en mouvement.</h4>
																									
																										</div>
								                                                            </div>
						</div>
					</div>
				</div>
								</div>
			</div>
			<div class="full_width">
	<div class="full_width_inner" >
										<section class="wpb-content-wrapper"><p><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><div id="minimenu"     class="vc_row wpb_row section vc_row-fluid  vc_custom_1540470990735" style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper" style="background-color: rgba(0, 45, 117, 0.5);">
			<ul>
<li><a href="<?php echo URL::to('/elevadores-lentos') ?>">ÉLÉVATEUR DOMESTIQUE</a></li>
<li><a href="<?php echo URL::to('/componentes-y-modernizaciones') ?>">COMPOSANTS ET MODERNISATIONS</a></li>
<li><a href="<?php echo URL::to('/cabinas') ?>">CABINES</a></li>
</ul>

		</div> 
	</div> </div></div></div></div></div>
	
	<span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_end">﻿</span>
	
	



</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(<?php echo URL::to('/public/wp-content/uploads/2018/08/imagen-2-carga-1.jpg') ?>);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/icons-productos_Mesa-de-trabajo-1.png') ?>" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">ELEVATEURS DOMESTIQUES</h3><p style='color: #969696'>CTV vous offre des systèmes complets ou partiels pour rénover votre ascenseur. Vous pouvez choisir vous-même les matériels que vous souhaitez pour votre équipement. Les ascenseurs CTV s'adaptent parfaitement aux gaines standards mais aussi aux spéciales.</p></div></div></div><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-2x pull-left " style="margin-left:250px"><a  itemprop="url" href="<?php echo URL::to('/elevadores-lentos') ?>" target="_self"><i class="qode_icon_font_awesome fa fa-plus qode_icon_element" style="" ></i></a></span></div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner vc_custom_1535703110081"><div class="wpb_wrapper"><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/icons-productos-02.png') ?>" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">PASSAGERS</h3><p style='color: #969696'>CTV vous offre des systèmes complets ou partiels pour rénover votre ascenseur. Vous pouvez choisir vous-même les matériels que vous souhaitez pour votre équipement. Les ascenseurs CTV s'adaptent parfaitement aux gaines standards mais aussi aux spéciales.</p></div></div></div><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-2x pull-left " style=" "><a  itemprop="url" href="fr/carga/index.html" target="_self"><i class="qode_icon_font_awesome fa fa-plus qode_icon_element" style="" ></i></a></span></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(<?php echo URL::to('/public/wp-content/uploads/2018/08/imagen-2-carga-1.jpg') ?>);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/icons-productos-03.png') ?>" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">COMPOSANTS ET MODERNISATIONS</h3><p style='color: #969696'>Nous recherchons le matériel dont vous avez besoin et préparons l'étude de compatibilité correspondante en tenant compte de la qualité et du prix. Nous concevons et fabriquons les composants spéciaux nécessaires à votre projet. Nous créons des environnements sophistiqués, fonctionnels et personnalisés.</p></div></div></div><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-2x  " style=" "><a  itemprop="url" href="<?php echo URL::to('/componentes-y-modernizaciones') ?>" target="_self"><i class="qode_icon_font_awesome fa fa-plus qode_icon_element" style="" ></i></a></span></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(<?php echo URL::to('/public/wp-content/uploads/2018/08/imagen-3-componentes-1.jpg') ?>);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner vc_custom_1535703465817"><div class="wpb_wrapper"><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/icons-productos-03.png') ?>" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">COMPOSANTS ET MODERNISATIONS</h3><p style='color: #969696'>Nous recherchons le matériel dont vous avez besoin et préparons l'étude de compatibilité correspondante en tenant compte de la qualité et du prix. Nous concevons et fabriquons les composants spéciaux nécessaires à votre projet. Nous créons des environnements sophistiqués, fonctionnels et personnalisés.</p></div></div></div><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-2x  " style=" "><a  itemprop="url" href="fr/componentes-y-modernizaciones/index.html" target="_self"><i class="qode_icon_font_awesome fa fa-plus qode_icon_element" style="" ></i></a></span></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(<?php echo URL::to('/public/wp-content/uploads/2018/08/imagen-3-componentes-1.jpg') ?>);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(<?php echo URL::to('/public/wp-content/uploads/2018/08/imagen-4-cabinas-1.jpg') ?>);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/icons-productos-04.png') ?>" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">CABINES</h3><p style='color: #969696'>Inspirez-vous de notre gamme de cabines, une variété d'ambiances sophistiquées unissant l'esthétique, la fonctionnalité et le prix avantageux. Toutes nos cabines peuvent être personnalisées au choix. Essayez de créer votre propre cabine! Nous sommes là pour vous conseiller si vous le souhaitez.</p></div></div></div><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-2x  " style=" "><a  itemprop="url" href="<?php echo URL::to('/cabinas') ?>" target="_self"><i class="qode_icon_font_awesome fa fa-plus qode_icon_element" style="" ></i></a></span></div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner vc_custom_1535703625096"><div class="wpb_wrapper"><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/icons-productos-04.png') ?>" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">CABINES</h3><p style='color: #969696'>Inspirez-vous de notre gamme de cabines, une variété d'ambiances sophistiquées unissant l'esthétique, la fonctionnalité et le prix avantageux. Toutes nos cabines peuvent être personnalisées au choix. Essayez de créer votre propre cabine! Nous sommes là pour vous conseiller si vous le souhaitez.</p></div></div></div><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-2x  " style=" "><a  itemprop="url" href="fr/cabinas/index.html" target="_self"><i class="qode_icon_font_awesome fa fa-plus qode_icon_element" style="" ></i></a></span></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(<?php echo URL::to('/public/wp-content/uploads/2018/08/imagen-4-cabinas-1.jpg') ?>);background-repeat:no-repeat;" ></span>
		</span></div>



</div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="text-column wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner vc_custom_1535703568120"><div class="wpb_wrapper"><div class='q_icon_with_title medium custom_icon_image '><div class="icon_holder " style=" "><img itemprop="image" style="" src="<?php echo URL::to('/public/wp-content/uploads/2018/08/icons-productos-05.png') ?>" alt=""></div><div class="icon_text_holder" style=""><div class="icon_text_inner" style=""><h3 class="icon_title" style="">ESCALIERS</h3><p style='color: #969696'>Escaliers conçus pour tous les lieux, aussi bien intérieurs qu'extérieurs; stations de métro, immeubles, terminaux, hôtels, centres commerciaux, etc. Nous fournissons un système de sécurité en créant une atmosphère élégante.</p></div></div></div><span data-type="normal"  class="qode_icon_shortcode  q_font_awsome_icon fa-2x  " style=" "><a  itemprop="url" href="fr/escaleras/index.html" target="_self"><i class="qode_icon_font_awesome fa fa-plus qode_icon_element" style="" ></i></a></span></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 450px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image" style="background-image:url(<?php echo URL::to('/public/wp-content/uploads/2018/08/imagen-5-escaleras-1.jpg') ?>);background-repeat:no-repeat;" ></span>
		</span></div>

</div></div></div></div></div></div></div></div></div></div><div      class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 50px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image"  ></span>
		</span></div>


	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2 style="text-align: center; color:#1B3661; ">VOUS AVEZ BESOIN DE PLUS D&rsquo;INFORMATIONS ?</h2>

		</div> 
	</div> <div      class="vc_row wpb_row section vc_row-fluid vc_inner " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 50px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image"  ></span>
		</span></div>

<a  itemprop="url" href="<?php echo URL::to('/contacto') ?>" target="_self" data-hover-border-color=#1b3661 data-hover-color=#1b3661 class="qbutton  large center default" style="color: #ffffff; border-color: #f29d0c; margin: 3px 10px 3px 10px; border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px; background-color: #f29d0c;">CONTACTEZ-NOUS</a>	<div class="vc_empty_space"  style="height: 32px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image"  ></span>
		</span></div>

</div></div></div><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div></div></div></div></div></div></div>
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