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
		<header id="levv-header" class="w-full grid grid-rows-1 grid-cols-3 h-[98px] md:p-2 fixed bg-levv-klei-header-background text-levv-wijnrood z-50">
			<div class="group text-xs md:text-base lg:text-lg lowercase pl-5 font-semibold grid grid-cols-levv-header-contact grid-rows-levv-header-contact w-fit transition ease-in-out hover:cursor-pointer hover:scale-105 focus:cursor-pointer focus:scale-105 content-center">
                <div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative h-[10px] -top-[5px] justify-self-center bg-levv-klei-background">
                </div>
				<@ newPagelist { 
					type: 'children', 
					context: '/',
					filter: 'contact'
				} @>
				<@ foreach in pagelist @>
                	<a href="@{ url }" class="h-fit text-xs md:text-base lg:text-lg col-start-2 col-end-3 row-start-2 row-end-3 text-center text-levv-wijnrood font-passageway-light border-solid border-transparent border-2 md:border-4 rounded-tl-xl rounded-br-xl uppercase p-1 md:p-2 group-hover:border-levv-klei group-focus:border-levv-klei">Start samenwerking</a>
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
			<@ /navbar.php @>
		</header>
