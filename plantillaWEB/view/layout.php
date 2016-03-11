<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta name="if:Show portrait" content="1"/> 
	<meta name="if:Show title" content="1"/>
	<meta name="if:Show search" content="0"/>
	<meta name="if:Show date" content="0"/>
	<meta name="if:Show tags" content="0"/>
	<meta name="if:Show notes count" content="0"/>
	
	
        <meta name="description" content="{MetaDescription}" />
    
	<title>GRUPO OUTFIT</title>
	
	<link rel="shortcut icon" href="{Favicon}">
    <link rel="alternate" type="application/rss+xml" href="{RSS}">
    
    <!--[if lt IE 9]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style type="text/css">
		/* --------------------------------------------------------------------------
	$BODY-ELEMENTS
/--------------------------------------------------------------------------*/
body 
{
	margin:0;
	padding:20px 0;
	background-color:#eeeeee;
		font-family:Arial;
	font-size:13px;
	color:#333333;
	
		text-shadow:#ffffff 0 1px 1px;
		
	line-height:auto;
	
	}

a
{
	text-decoration:none;
	color:#2c89e7;
}
	a:hover 
	{
		text-decoration:underline;
		color:#2c89e7;
	}

blockquote 
{
	font-style:italic;
	border-left:5px solid #cccccc;
	margin-left:0;
	width:100%;
	background:#f7f7f7;
}

blockquote p 
{
	margin:0;
	padding:10px;
	padding-left:40px;
	font-family:Georgia;
	font-size:15px;
	color:#555555;
}

blockquote + cite 
{
	margin-top:-10px;
	display:block;
	text-align:right;
	font-style:normal;
	font-size:12px;
	color:#888;
}
blockquote + cite:before 
{
	content: '\2014\0020';
}

/* --------------------------------------------------------------------------
	$LAYOUT
/--------------------------------------------------------------------------*/
.wrapper 
{
	width:90%;
	margin:0 auto;
}

.sidebar, 
.content 
{
	float:left;
	/* Float both divs left */
}

.content 
{
	width:73%;
	/* 70% of the wrapper */
}
	.content > .inner 
	{
		padding-bottom:20px;
		margin-left:30px;
		/* Spacing between sidebar and content */
	}

.sidebar 
{
	width:27%;
	/* Take 30% of wrapper width */
	word-wrap:break-word;
	/* Don't want overlap into content */
}		
	.sidebar.right 
	{
		float:right;
		/* If we're positioning the sidebar on the right, float right and... */
	}
	.sidebar.right + .content > .inner
	{
		margin-left:0;
		margin-right:30px;
		/* ...and flip the margins */
	}
	

.sidebar.top, 
.sidebar.top + .content
{
	width:100%;
}
.sidebar.top 
{
	margin-bottom:30px;
}
.sidebar.top + .content > .inner 
{
	margin-left:0;
}


/* --------------------------------------------------------------------------
	$SIDEBAR
/--------------------------------------------------------------------------*/
.sidebar 
{
	text-align:left;
			
		
	font-family:Arial;
}
	.sidebar .inner 
	{
		padding-top:20px;
		padding-bottom:20px;
		padding-left:0px;
		padding-right:0px;
		
						border-radius:5px;
			}
	.sidebar header 
	{
		margin-bottom:20px;
		/* Give some bottom spacing from the sidebar header */
	}
	
	.sidebar .portrait 
	{
		width:106px;
		/* Set portrait image container width */
		box-shadow:0 0 10px 2px rgba(60, 60, 60, 0.1);
		/* Give thin border and drop-shadow */
		margin-top:0;
		margin-bottom:20px;
				/* Align center and give vertical spacing */
	}
		.portrait img 
		{
			border:5px solid #e0e0e0;
			/* Give thick white border */
			width:96px;
			height:96px;
			/* Set width */
			display:block;
			/* Clear inline whitepace */
		}
	
	.sidebar header h1 
	{
		/* Blog title */
		margin:0 0 10px;
		font-size:30px;
	}
		.sidebar header h1 a
		{
			color:#152c85;
			/* Title link colour */
			text-decoration:none;
			/* Remove underline (on hover) */
		}
			
	.sidebar header .menu-links a
	{
		color:#2c89e7!important;
		padding:0 2px;
	}
	
	.sidebar header .menu-links a:after
	{
		content:' / ';
	}
	.sidebar header .menu-links a:last-child:after
	{
		content:'';
	}
	
	.sidebar footer 
	{
		margin-top:20px;
		/* Give some vertical spacing */
	}

/* --------------------------------------------------------------------------
	$POSTS
/--------------------------------------------------------------------------*/

ol.posts 
{
	margin:0;
	padding:0;
	list-style:none;
	/* Remove list stylings from posts */
}

	ol.posts.masonry .post 
	{
		float:left;
	}
		ol.posts.masonry .post .post-container 
		{
			margin:0 20px;
		}
		
		ol.posts.masonry.one-col .post 
		{	
			width:100%;
		}
		
		ol.posts.masonry.two-col .post 
		{	
			width:49%;
		}
		
		ol.posts.masonry.three-col .post 
		{	
			width:33%;
		}
		
		ol.posts.masonry.four-col .post 
		{	
			width:24%;
		}
		
		ol.posts.masonry.five-col .post 
		{	
			width:19%;
		}

.post 
{
	margin-bottom:30px;
	/* Give each post listing some vertical space */
}

.post-body 
{
	padding:20px;
	/* Give some padding to the post content */
		/* Background of posts */
		border-radius:5px;
		
	
		
	text-shadow:none;
	color:inherit;
	/* Text styles */
	
	position:relative;
}

.post .title 
{
	margin:-20px;
	margin-bottom:10px;
	/* Title sticks to the top of the post-body */
		border-radius:5px 5px 0 0;
		/* Keep the top and right corners rounded */
	background:#2c89e7;
	/* Title background */
	border-bottom:1px solid #2c89e7;
	/* Give subtle bottom-shadow line */
	color:#ffffff;
	text-shadow:rgba(0, 0, 0, 0.3) 0 1px 1px;
	font-size:20px;
	font-weight:normal;
	/* Text styles */
}
	.post .title > a 
	{
		color:inherit;
		/* inherit colour */
		text-decoration:none;
		/* No underline */
		display:block;
		padding:10px 20px;
		height:100%;
		/* Full width */
	}
	
.post-meta 
{
	margin-top:10px;
	/* Seperate from post-body */
	padding:0 10px;
	/* Give some horizontal spacing from edges */
	text-align:right;
	font-size:12px;
	font-family:Arial;
	/* Text styles */
	
	}	
	.post-meta .tags, 
	.tags li
	{
		margin:0;
		padding:0;
		list-style:none;
		text-align:left;
		display:inline;
		/* Remove list styling and display inline */
	}
		.tags a 
		{
			color:#2c89e7!important;
		}
		.tags li:after 
		{
			content:', ';
		}
		.tags li:last-child:after 
		{
			content:'';
		}
		
/* --------------------------------------------------------------------------
	$PHOTO POSTS
/--------------------------------------------------------------------------*/
.post.photo .post-body 
{
	padding:0;
	/* Remove padding */
	position:relative;
	/* Set position to relative so we can absolute position the caption */
	overflow:hidden;
}
.post.photo .post-body img
{
	display:block;
	width:100%;
	/* Full width, block image */
		border-radius:5px;
	}
.post.photo .post-body .caption 
{
	position:absolute;
	bottom:0;
	/* Place caption at bottom, over image */
		border-radius:0 0 5px 5px;
	/* Rounded with post */
		background:transparent url(http://themesltd.com/tumblr-generator/themes/default/img/fff-0.7.png);
	/* Semi-transparent background */
	width:100%;
	/* And full width */
	
	display:none;
}
	.post.photo .post-body .caption > span 
	{
		display:inline-block;
		padding:20px;
		/* Give some padding to the caption */
		font-size:16px;
		/* Increase the font size */
		text-shadow:#fff 0 1px 1px;
	}
	



/* Media permalinks */

.media-permalink 
{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:transparent url(http://themesltd.com/tumblr-generator/themes/default/img/000-0.7.png);
	color:#fff;
	text-align:center;
	
		border-radius:5px;
		
	
	opacity:0;
	-webkit-transition:opacity 0.5s;
}

	.media-permalink a 
	{
		color:#fff;
	}

	.photo img:hover + .media-permalink, 
	.media-permalink:hover
	{
		opacity:1!important;
	}
	
	.media-permalink span 
	{
		display:block;
		position:absolute;
		top:50%;
		left:0;
		width:100%;
		text-align:center;
		margin-top:-10px;
		height:20px;
	}
	
.media-permalink.style5, 
.media-permalink.style6 
{
	background:none;
}	
.media-permalink.style5 span, 
.media-permalink.style6 span 
{
	display:block;
	position:absolute;
	bottom:0;
	left:0;
	width:96%;
	padding:5px 2%;
	text-align:center;
	margin:0;
	top:auto;
	height:20px;
	background:transparent url(http://themesltd.com/tumblr-generator/themes/default/img/000-0.7.png);
	text-align:right;
	
		border-radius:0 0 5px 5px;
	}

.media-permalink.style6 span 
{
	text-align:left;
}
	
	

	
	
@media only screen and (max-width: 400px) 
{
	.post.photo > .post-body > .caption > span 
	{
		padding:10px;
		font-size:12px;
		/* Decrease font-size/padding for Mobile */
	}
}

/* --------------------------------------------------------------------------
	$PHOTOSET POSTS
/--------------------------------------------------------------------------*/
.post.photoset .post-body 
{
	padding:0;
	/* Remove padding */
	position:relative;
	/* Set position to relative so we can absolute position the caption */
}

.post.photoset .post-body img
{
	display:block;
	width:100%;
	/* Full width, block image */
}

.photoset .photos 
{
	margin:0;
	padding:0;
	list-style:none;
}

.photos li 
{
	margin-top:1px;
}

.photoset .photos li:first-child 
{
	margin-top:0;
}
.photoset .photos li:first-child img 
{
		border-top-left-radius:5px;
	border-top-right-radius:5px;
	}
.photoset .photos li:last-child img 
{
		border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
	}


.post.photoset .post-body > .caption 
{
	position:absolute;
	bottom:0;
	/* Place caption at bottom, over image */
		border-radius:0 0 5px 5px;
		/* Rounded with post */
	background:transparent url(http://themesltd.com/tumblr-generator/themes/default/img/fff-0.7.png);
	/* Semi-transparent background */
	width:100%;
	/* And full width */
}
	.post.photoset .post-body > .caption > span 
	{
		display:inline-block;
		padding:20px;
		/* Give some padding to the caption */
		font-size:16px;
		/* Increase the font size */
		text-shadow:#fff 0 1px 1px;
	}

	
/* --------------------------------------------------------------------------
	$QUOTE POSTS
/--------------------------------------------------------------------------*/
.post.quote blockquote p
{
	padding:20px 0;
	text-align:center;
	/* Center align */
	font-size:26px;
	/* Increase the font size */
}

@media only screen and (max-width: 400px) 
{
	.post.quote blockquote p
	{
		font-size:16px;
		/* Decrease font size for Mobile */
	}
}
/* --------------------------------------------------------------------------
	$LINK POSTS
/--------------------------------------------------------------------------*/
.post.link .post-body 
{
	padding-bottom:0;
}
/*
.post.link .title  
{
	background:#eeb10e;
	border-bottom-color:#d69c01;
}
*/

.post.link.no-desc .title 
{
	margin-bottom:0;
	border-radius:5px;
	/* Remove bottom margin and make all-rounded for links with no desc */
}
/* --------------------------------------------------------------------------
	$CHAT POSTS
/--------------------------------------------------------------------------*/
.post.chat .post-body
{
	padding-bottom:15px;
}

ul.conversation 
{
	margin:15px -10px 0;
	padding:0;
	list-style:none;
	border-left:5px solid #c14f1d;
}
	ul.conversation li 
	{
		padding:10px 20px;
		background:#eee;
	}
		ul.conversation li.line_even 
		{
			background:#f7f7f7;
		}
		
/* --------------------------------------------------------------------------
	$VIDEO POSTS
/--------------------------------------------------------------------------*/
.post.video .post-body 
{
	padding:0;
	/* Remove padding */
	position:relative;
	/* Set position to relative so we can absolute position the caption */
}

.post.video iframe 
{
	width:100%;
	height:400px;
	display:block;
}

/* --------------------------------------------------------------------------
	$PAGINIATION
/--------------------------------------------------------------------------*/
ol.pagination 
{
	margin:10px 0;
	padding:0 0 10px 0;
	list-style:none;
	text-align:center;
	overflow:hidden;
	text-shadow:none;
}
ol.pagination li 
{
	display:inline-block;
	margin:0 2px 0 0;
		border-radius:10px;
				border:1px solid #d2d2d2;
		padding:5px 10px;
	color:#888888;
}
ol.pagination li a 
{
	text-decoration:none;
}

.pagination.older-newer .previous 
{
	float:left;
}
.pagination.older-newer .next 
{
	float:right;
}

/* --------------------------------------------------------------------------
	$MISC
/--------------------------------------------------------------------------*/
.subtle 
{
	color:inherit!important;
	/* Subltle links have no colour change */
}

.meta
{
	color:#bbbbbb;
	/* Meta text is subtle on the background */
}
	.meta a 
	{
		color:inherit;
	}
		
.pull-right 
{
	float:right;
	/* Helper class to float right */
}

.underlined 
{
	text-decoration:underline;
}

.button 
{
	border:0;
	border-radius:5px;
	padding:5px 10px;
	cursor:pointer;
	background:#2c89e7;
	color:#fff;
	/*** Replace with something much better? */
}





/* --------------------------------------------------------------------------
	$MEDIA-QUERIES
/--------------------------------------------------------------------------*/
@media only screen and (max-width: 600px) 
{
	.wrapper 
	{
		width:auto;
	}
	.sidebar,
	.sidebar.right 
	{
		float:none;
		width:100%;
		padding-top:0px;
	}
	.content 
	{
		width:100%;
		float:none;
	}
	.content > .inner 
	{
		padding-left:10px;
		padding-right:10px;
		margin-left:0!important;
		margin-right:0!important;
	}
	
	.sidebar header .portrait 
	{
		display:none!important;
	}
		.sidebar header .portrait img 
		{
			border:none;
			width:100%!important;
		}
	
	.pagination 
	{
		font-size:18px;
	}
	.pagination .numbers 
	{
		display:none;
	}


}

#infscr-loading 
{
	display:none!important;
}

.hidden 
{
	display:none!important;
}

.clearfix 
{
	clear:both;
}




/* New Post veil stuff */


.post-veil 
{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:transparent url(http://themesltd.com/tumblr-generator/themes/default/img/000-0.7.png);
		border-radius:5px;
		-webkit-transition:opacity 0.5s;
	opacity:0;
}
	.post-veil.transparent 
	{
		background:none;
	}
	
	.post-veil.visible 
	{
		opacity:1;
	}
	
	.post-veil:hover 
	{
		opacity:1;
	}

/* Media Icons */



.media-icons 
{
	position:absolute;
	margin:0;
	padding:0;
	top:5px;
	left:5px;
	width:102px;
	height:30px;
	list-style:none;
	overflow:hidden;
}
	.photo img:hover + .media-icons, 
	.media-icons:hover
	{
		display:block;
		opacity:1!important;
	}
	
	.video iframe:hover + .media-icons, 
	.media-icons:hover
	{
		display:block;
		opacity:1!important;
	}

		
	.media-icons li 
	{
		float:left;
		background:transparent url(http://themesltd.com/tumblr-generator/themes/default/img/000-0.7.png);
		//background:red;
		padding:3px;
		border-radius:3px;
		margin:0 3px;
		width:22px;
		height:22px;
	}
	
	.media-icons a 
	{
		color:#fff;
		text-align:center;
		display:inline-block;
		width:100%;
		height:100%;
		text-decoration:none;
	}
	.media-icons a.icon 
	{
		background:transparent url(http://static.tumblr.com/tpqedpr/Zbmm9zw4y/master.png) no-repeat;
		text-indent:-500px;
		overflow:hidden;
		-webkit-transition:background-position 0.5s;
	}
	
		.media-icons a.like 
		{
			background-position: -3px -5px;
		}
		.media-icons a.like:hover 
		{
			background-position: -31px -5px;
		}
		
		.media-icons a.reblog 
		{
			background-position: -3px -62px;
		}
		.media-icons a.reblog:hover 
		{
			background-position: -33px -62px;
		}
		
		.media-icons a.notes 
		{
			font-size:12px;
			padding-top:3px;
			margin-left:-1px;
		}
		
		
/* Style 2 */
.media-icons.style2 
{
	top:5px;
	left:auto;
	right:5px;
}

/* Style 3 */
.media-icons.style3 
{
	top:50%;
	left:50%;
	margin:-15px 0 0 -51px;
}

.media-icons.style3 li 
{
	border-radius:50%;
}



		
		{CustomCSS}
	</style>

	<script>
    $(document).ready(function() {
    
        $('#ask_form').parent().parent().children('.post-veil').remove();
        // remove the veil from ask form post
    });
    </script>
</head>
<body>



	<!-- .wrapper -->
	<div class="wrapper">
		<!-- .sidebar -->
		<aside class="sidebar left">
			<!-- .inner -->
			<div class="inner">
				<!-- header -->
				<header>
				
					<h3><FONT FACE=arial SIZE=3 COLOR=Black face="ARIAL">BIENVENIDOS</FONT></h3>
					<!-- .portrait -->
					<div class="portrait">
						<a href="/">
							<img alt="https://pbs.twimg.com/profile_images/691545719489064960/DN5RvrQ4.jpg" src="https://pbs.twimg.com/profile_images/691545719489064960/DN5RvrQ4.jpg">
						</a>
					</div>
					<!--/ .portrait -->
					<div class="clearfix"></div>
					
					
					
					<h1>
						<a href="/">GRUPO OUTFIT</a>
					</h1>
					
					
					
					<h3><FONT FACE=ARIAL SIZE=3 COLOR=Black face="ARIAL"></FONT><p>Proyecto de reconocimiento facial.</p>
					
					
					
								<select name="menu-links" onchange="javascript:parent.location=this.options[this.selectedIndex].value;">
								<option id="Inicio"><a value="/">Inicio</a></option>
								{block:AskEnabled}<option id="Contacto" value="/contactar">Regístrate</option>{block:AskEnabled}
								<option id="Comentarios" value="/comentarios">Usuarios</option>
								{block:HasPages}
								{block:Pages}
									<option id="About" value="/about">Más sobre nosotros</option>
								{/block:Pages}
								{/block:HasPages}
								</select>				</header>
				<!--/ header -->
				
				<br><a href="https://twitter.com/yourownoutfits"><img width="32px" src="https://image.freepik.com/iconos-gratis/twitter-circulo_318-10749.jpg" ></a></br>
				<br><a href="https://es-es.facebook.com/people/Mi-Outfit/100011160996557"><img width="32px" src="http://i57.tinypic.com/1072mab.png" ></a></br>
				<br><a href="https://semillerodeempresas.blogspot.com.es/Outfit"><img width="32px" src="http://www.ivandelrio.org/kensha/includes/blogger-logo-png-7318.png" ></a></br>
				
				
				
				<!-- Insert any sidebar stuff here -->
			
				<footer>
					<small class="meta">
						<a href="http://themesltd.com/tumblr-generator" class="underlined">Tumblr Theme Generator</a>
					</small>
				</footer>
			</div>
			<!--/ .inner -->
		</aside>
		<!--/ .sidebar -->
		
		<!-- .content -->
		<div class="content">
			<!-- .inner -->
			<div class="inner">
				<!-- .posts -->
				<ol class="posts masonry one-col">
				
					<!-- .post.text -->
					<li class="post text masonry-item">
						<!-- .post-container -->
						<div class="post-container">
							<!-- .post-body --><br><br>
							<h2 class="title">
									{% block tabActivo %} {% endblock %}
								</h2>
							{% block cuerpo %} {% endblock %}
							<div class="post-body">
							
																								<div class="post-veil  transparent">
								
																		
																			<div class="media-permalink style4">
											<span><a href="{ReblogURL}"></a>   </span>
										</div>
																	</div>
															
							
								<!-- .title -->
								<!--/ .title -->
								
							</div>
							<!--/ .post-body -->
													</div>
						<!--/ .post-container -->
					</li>
					<!--/ .post.text -->
					
					<!-- .post.text -->
					<li class="post text masonry-item">
						<!-- .post-container -->
						<div class="post-container">
							<!-- .post-body -->
							<div class="post-body">
							
																								<div class="post-veil  transparent">
								
																		
																			<div class="media-permalink style4">
											<span><a href="{ReblogURL}"></a></span>
										</div>
																	</div>
								
								<!-- .title -->
								<h2 class="title">
									<a href="{Permalink}">¿Sabéis para qué sirve el reconocimiento facial?</a>
								</h2>
								<!--/ .title -->

								La función del reconocimiento facial en nuestro proyecto es la de ahorrar tiempo a la hora de pasar lista y rellenar el formulario de los alumnos a través de varias fotos que han aportado anteriormente en la matrícula.
							</div>
							<!--/ .post-body -->
													</div>
						<!--/ .post-container -->
					</li>
					<!--/ .post.text -->

					<!-- .post.photo -->
					<li class="post photo masonry-item">
						<!-- .post-container -->
						<div class="post-container">
						<!-- .post-body -->
						<div class="post-body">
						
																					<div class="post-veil visible transparent">
							
																<!-- .media-icons -->
								<ul class="media-icons style1">
									<li>
										<a href="javascript:likelink('{PostID}','{Permalink}','');" class="icon like">like</a>
									</li>
									<li>
										<a href="#" class="icon reblog"></a>
									</li>
									<li>
										<a href="#" class="notes"></a>
									</li>
								</ul>
								<!--/ .media-icons -->
																
															</div>
													
						
							<img src="{PhotoURL-500}" alt="">
														
							
						</div>
						<!--/ .post-body -->
						</div>
						<!--/ .post-container -->
					</li>
					<!--/ .post.photo -->
					
					<!-- .post.photoset -->
					<li class="post photoset masonry-item">
						<!-- .post-container -->
						<div class="post-container">
							<!-- .post-body -->
							<div class="post-body">
							
																								<div class="post-veil visible transparent">
								
																		
																		
																	</div>
								

								<ul class="photos">
								
								<li><img src="{PhotoURL-500}" alt=""></a>
								
								</ul>
								<!-- .caption -->
								<div class="caption">
									<span>Síguenos en nuestras redes sociales para más información.</span>
								</div>
								<!--/ .caption -->
							</div>
							<!--/ .post-body -->
													</div>
						<!--/ .post-container -->
					</li>
					<!--/ .post.photoset -->
					
					<!-- .post.quote -->
					<li class="post quote masonry-item">
						<!-- .post-container -->
						<div class="post-container">
							<!-- .post-body -->
							<div class="post-body">
							
																								<div class="post-veil  transparent">
								
																		
																			<div class="media-permalink style4">
											<span><a href="{ReblogURL}"></a>   </span>
										</div>
																	</div>
																
								
								<blockquote>
									<p>
										"La vida es eso que pasa mientras estás en Segundo de Bachillerato..."
									</p>
								</blockquote>
							
								<cite>Platón</cite>
								
							</div>
							<!--/ .post-body -->
													</div>
						<!--/ .post-container -->
					</li>
					<!--/ .post.quote -->
					
					<!-- .post.link -->
					<li class="post link masonry-item">
						<!-- .post-container -->
						<div class="post-container">
						
													</div>
						<!--/ .post-container -->
					</li>
					<!--/ .post.link -->
					
					<!-- .post.chat -->
					<li class="post chat masonry-item">
						<!-- .post-container -->
						<div class="post-container">
							<!-- .post-body -->
							<div class="post-body">
							
																								<div class="post-veil  transparent">
								
																		
																			<div class="media-permalink style4">
											<span><a href="{ReblogURL}"></a>  </span>
										</div>
																	</div>
																
								
								
													</div>
						<!--/ .post-container -->
					</li>
					<!--/ .post.chat -->
					
					<!-- .post.video -->
					<li class="post video masonry-item">
						<!-- .post-container -->
						<div class="post-container">
							<!-- .post-body -->
							<div class="post-body">
							
																								<div class="post-veil visible transparent">
								
																		
																	</div>
										
																
															</div>
							<!--/ .post-body -->
													</div>
						<!--/ .post-container -->
					</li>
					<!--/ .post.video -->
					
					<!-- .post.audio -->
					<li class="post audio masonry-item">
						<!-- .post-container -->
						<div class="post-container">
						<!-- .post-body -->
						<div class="post-body">
						
																					<div class="post-veil  transparent">
							
																
																	<div class="media-permalink style4">
										<span><a href="{ReblogURL}"></a>  </span>
									</div>
															</div>
								
												<!--/ .post-container -->
						</div>
					</li>
					<!--/ .post.audio -->
					
				</ol>
				<!--/ ol.posts -->
				
				<div class="clearfix"></div>
				
				<br><br>
				
								
			
				
							<!-- .pagination -->			
							<ol class="pagination hidden">
								{block:PreviousPage}
								<li class="previous"><a href="{PreviousPage}">← Previous</a></li>
								{/block:PreviousPage}
						
								{block:JumpPagination length="5"}
					                
					                {block:CurrentPage}
					                    <li class="numbers current">{PageNumber}</li>
					                {/block:CurrentPage}
					
					                {block:JumpPage}
					                    <li class="numbers"><a href="{URL}">{PageNumber}</a></li>
					                {/block:JumpPage}
					            {/block:JumpPagination}
								
								{block:NextPage}
								<li class="next"><a href="{NextPage}">Next →</a></li>
								{/block:NextPage}
							</ol>
							<!--/ .pagination -->				
			
			</div>
			<!--/ .inner -->
		</div>
		<!--/ .content -->
	</div>
	<!--/ .wrapper -->
	
	<iframe id="likeiframe" style="width: 0px; height: 0px;"></iframe>
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="http://static.tumblr.com/uiqhh9x/UYAm6i0bc/like.js"></script>
  	<script src="https://raw.github.com/paulirish/infinite-scroll/master/jquery.infinitescroll.js"></script>

  		
	<script type="text/javascript">

	$(window).load(function () {
	
	    
	    // endless scrolling	    var $container = $('.masonry');    
	    $container.imagesLoaded(function(){
	    
	    
	      $container.masonry({
	        itemSelector: '.masonry-item'
	      });
	    });
	    
	    $container.infinitescroll({
	      navSelector  : '.pagination',    // selector for the paged navigation 
	      nextSelector : '.next a',  // selector for the NEXT link (to page 2)
	      itemSelector : '.masonry-item',     // selector for all items you'll retrieve
	      bufferPx: 0,
	      debug		 	: true,
	      loading: {
	          finishedMsg: 'No more posts to load.',
	          img: '',
	          msgText: 'Loading'
	        }
	      },
	      // trigger Masonry as a callback
	      function( newElements ) {
	        // hide new items while they are loading
	        var $newElems = $( newElements ).css({ opacity: 0 });
	        // ensure that images load before adding to masonry layout
	        $newElems.imagesLoaded(function(){
	          // show elems now they're ready
	          $newElems.animate({ opacity: 1 });
	          $container.masonry( 'appended', $newElems, true ); 
	        });
	      }
	    );
	    
	    // End of endless scrolling
	});
	
	<script type="text/javascript"src="http://www.themesltd.com/tumblr/cursors/mouse-cursors/cursors.js?cat=mouse-cursors&theme=eyes_emoji&path=emoji-cursors"></script>
	
	</script>
	</body>
</html>
