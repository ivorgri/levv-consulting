<!DOCTYPE html>
<html lang="nl" style="scroll-behavior: smooth;" class="m-0 p-0 w-screen max-w-full overflow-x-hidden overflow-y-scroll">
	<head>
		<title>@{ sitename } - @{ title }</title>
		<@ Standard/MetaTags {
			description: @{ textTeaser | stripTags },
			ogTitle: @{ sitename | stripTags } @{ title | stripTags },
			ogDescription: @{ textTeaser | stripTags },
			ogImage: @{ ogImage }
		} @>
		<@ if @{ levvDevelopment } @>
			<meta name='robots' content='noindex,follow' />
		<@ end @>
		<!-- <link rel="stylesheet" href="/packages/@{ theme }/fonts/font-awesome.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css"> -->
		<!-- <link rel="stylesheet" href="/packages/@{ theme }/fonts/elegant-fonts.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css"> -->
		<link rel="stylesheet" href="/packages/@{ theme }/dist/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css">
		<!-- <link rel="preload" href="https://fonts.googleapis.com/css?family=Quicksand" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
		<!-- <link rel="apple-touch-icon" sizes="180x180" href="/shared/apple-touch-icon.png"> -->
		<!-- <link rel="icon" type="image/png" sizes="32x32" href="/shared/favicon-32x32.png"> -->
		<!-- <link rel="icon" type="image/png" sizes="16x16" href="/shared/favicon-16x16.png"> -->
		<!-- <link rel="manifest" href="/shared/site.webmanifest"> -->
		<!-- <link rel="mask-icon" href="/shared/safari-pinned-tab.svg" color="#5bbad5"> -->
		<!-- <meta name="msapplication-TileColor" content="#da532c"> -->
		<meta name="theme-color" content="#ffffff">
	</head>
	<body class="bg-levv-klei-background flex flex-wrap flex-col items-center m-0 p-0 w-full overflow-x-hidden font-quicksand-light">
		<header id="levv-header" class="w-full flex items-center justify-between h-[98px] md:p-2 fixed bg-levv-klei-header-background text-levv-wijnrood z-50">
			<!-- grid grid-rows-1 grid-cols-3 -->
			<!-- <div class="group text-xs md:text-base lg:text-lg lowercase pl-0 md:pl-5 font-semibold grid grid-cols-levv-header-contact grid-rows-levv-header-contact w-fit transition ease-in-out hover:cursor-pointer hover:scale-105 focus:cursor-pointer focus:scale-105 content-center">
                <div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative h-[10px] -top-[5px] justify-self-center bg-levv-klei-background">
                </div> -->
			<div class="group text-xs md:text-base lg:text-lg lowercase pl-0 md:pl-5 font-passageway-light font-semibold w-fit transition ease-in-out hover:cursor-pointer hover:scale-105 focus:cursor-pointer focus:scale-105 content-center">
				<@ newPagelist { 
					type: 'children', 
					context: '/',
					filter: 'contact'
				} @>
				<@ foreach in pagelist @>
                	<!-- <a href="@{ url }" class="h-fit text-xs md:text-base lg:text-lg col-start-2 col-end-3 row-start-2 row-end-3 text-center text-levv-wijnrood font-passageway-light border-solid border-levv-klei border-2 md:border-4 rounded-tl-2xl rounded-br-2xl uppercase p-1 md:p-2 group-hover:border-levv-korenblauw group-focus:border-levv-korenblauw">Start samenwerking</a> -->
					<a href="@{ url }">
						<@ set { :element_contains_js: false } @>
						<@ set { :element_border_with: 10 } @>
						<@ set { :element_title: 'Start samenwerking'} @>
						<@ set { :element_content_padding: 'Start samenwerking'} @>
						<@ set { :element_border_color: 'levv-klei'} @>
						<@ set { :element_border_color_hover: 'levv-korenblauw'} @>
						<@ /levv_border_element.php @>
					</a>
				<@ end @>
			</div>
			<div class="h-full flex flex-row justify-center items-center">
				<a href="/" class="h-full" aria-label="Navigeer naar de home pagina">
					<picture class="h-full object-cover">
						<img class="h-full object-cover"
							sizes="(max-width: 6300px) 40vw, 2520px"
							srcset="
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_180.png 180w,
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_624.png 624w,
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_938.png 938w,
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_1246.png 1246w,
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_1475.png 1475w,
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_1748.png 1748w,
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_1934.png 1934w,
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_2145.png 2145w,
							/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_2520.png 2520w"
							src="/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_2520.png"
							alt="">
					</picture>
				</a>
			</div>
			<button id="levv-toggle-menu" class="group col-start-3 col-span-1 row-start-1 row-span-1 w-fit h-fit z-50" aria-label="Open/sluit menu">
				<svg width="50" height="50" viewBox="0 0 100 100" class="stroke-levv-wijnrood group-hover:stroke-levv-korenblauw ">
					<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
					<path class="line line2" d="M 20,50 H 80" />
					<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
				</svg>
			</button>
			<@ /navbar.php @>
		</header>
