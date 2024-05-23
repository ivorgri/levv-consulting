<!DOCTYPE html>
<html lang="nl" style="scroll-behavior: smooth;" class="m-0 p-0 w-screen max-w-full overflow-x-hidden overflow-y-scroll">
	<head>
		<title>@{ sitename }</title>
		<@ Standard/MetaTags {
			description: @{ textTeaser | stripTags },
			ogTitle: @{ sitename | stripTags },
			ogDescription: @{ textTeaser | stripTags },
			ogImage: @{ ogImage }
		} @>
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
		<header class="w-full grid grid-rows-1 grid-cols-3 h-[98px] p-2 fixed bg-levv-klei-header-background text-levv-wijnrood z-50">
			<!-- <h1>@{ sitename }</h1> -->
			<!-- <div class="h-full flex flex-row items-center pl-5 font-passageway-bold">
				<a href="/contact-met-mij">Start samenwerking</a>
			</div> -->
			<div class="group text-lg lowercase pl-5 font-semibold grid grid-cols-levv-header-contact grid-rows-levv-header-contact w-fit transition ease-in-out hover:cursor-pointer hover:scale-105 focus:cursor-pointer focus:scale-105 content-center">
                <div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative h-[10px] -top-[5px] justify-self-center bg-levv-klei-background">
                </div>
                <a href="/contact-met-mij" class="h-fit col-start-2 col-end-3 row-start-2 row-end-3 text-center text-levv-wijnrood font-passageway-light border-solid border-transparent border-4 rounded-tl-xl rounded-br-xl uppercase p-2 group-hover:border-levv-klei group-focus:border-levv-klei">Start samenwerking</a>
			</div>
			<div class="h-full flex flex-row justify-center items-center">
				<a href="/" class="h-full">
					<img src="/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant.png" class="h-full object-cover"/>
				</a>
			</div>
			<@ /navbar.php @>
		</header>
		<!-- <header class="w-full h-mobile-header md:h-header flex-col items-center fixed top-0 bg-white shadow-3xl z-20 md:flex
		sm:flex sm:py-5
		md:py-3">
			<div class="flex justify-center w-full h-full text-gray-700 
				md:grid md:grid-rows-2 md:grid-cols-4 md:auto-cols-auto md:w-11/12
				xl:w-10/12 xl:grid-cols-3">
				<div class="z-20 flex flex-row items-center 
					md:col-span-2 md:row-span-1 md:h-full
					xl:col-span-1 xl:row-span-2">
					<a href="/">
						<h1 class="text-5xl font-logo text-black">Supervisie voor Jou</h1>
					</a>
				</div>
				<div class="col-span-2 flex-row justify-end items-start uppercase hidden 
					md:flex">
					<span class="border-b border-transparent hover:text-svj-primary hover:border-svj-primary transition duration-200 ease-in-out">
						<i class="icon_mail mr-1"></i>
						<a href="mailto:info@supervisievoorjou.nl">info@supervisievoorjou.nl</a>
					</span>
				</div>
				
			</div>
		</header> -->
