<@ elements/header.php @>
<# 

Define the default main snippet to display the actual content. 
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full  h-screen overflow-y-auto">
	<@ filelist { 
		glob: @{ files | def ('*.png, *.jpg, *.jpeg') },
		sort: 'asc'
	} @>
	<@ foreach in filelist { width: :width } @>
		<img 
			src="@{ :file }" 
			alt="@{ :caption }"
			class="h-screen md:h-auto md:w-screen object-cover fixed -z-10"/>
	<@ end @>
	<section class="levv-intro flex flex-col items-center mt-[118px] mb-10">
		<div class="w-full md:w-3/4 text-lg bg-levv-klei-header-background px-5 py-3 flex flex-col gap-3">
			@{ +main }
		</div>
	</section>
	<section class="levv-question bg-levv-klei-header-background w-screen flex flex-col justify-center mb-10">
		<h1 class="w-100 text-lg md:text-2xl lg:text-4xl p-2 lg:p-0 flex items-center justify-end md:pr-10 lg:pr-20 sticky top-[98px] h-24 gap gap-1 md:gap-3">
			<span>Welke uitdaging wil je aangaan </span>
			<span class="text-levv-wijnrood font-bold w-32 lg:w-60">met Levv?</span>
		</h1>
		<span class="levv-empty-test-section h-[500px]">Empty</span>
	</section>
	<section class="levv-question bg-levv-klei-header-background w-screen flex flex-col justify-center mb-10">
		<h2 class="w-100 text-lg md:text-2xl lg:text-4xl p-2 lg:p-0 flex items-center justify-end md:pr-10 lg:pr-20 sticky top-[98px] h-24 gap-1 md:gap-3">
			<span>Professionalisering </span>
			<span class="text-levv-wijnrood font-bold w-32 lg:w-60">met Levv!</span>
		</h2>
		<span class="levv-empty-test-section h-[500px]">Empty</span>
	</section>
	<section class="levv-question bg-levv-klei-header-background w-screen flex flex-col justify-center mb-10">
		<h2 class="w-100 text-lg md:text-2xl lg:text-4xl p-2 lg:p-0 flex items-center justify-end md:pr-10 lg:pr-20 sticky top-[98px] h-24 gap-1 md:gap-3">
			<span>Groeien </span>
			<span class="text-levv-wijnrood font-bold w-32 lg:w-60">met Levv!</span>
		</h2>
		<span class="levv-empty-test-section h-[500px]">Empty</span>
	</section>
	<section class="levv-question bg-levv-klei-header-background w-screen flex flex-col justify-center mb-10">
		<h2 class="w-100 text-lg md:text-2xl lg:text-4xl p-2 lg:p-0 flex items-center justify-end md:pr-10 lg:pr-20 sticky top-[98px] h-24 gap-1 md:gap-3">
			<span>Ontwikkelen </span>
			<span class="text-levv-wijnrood font-bold w-32 lg:w-60">met Levv!</span>
		</h2>
		<span class="levv-empty-test-section h-[500px]">Empty</span>
	</section>
	<!-- <div id="levv-question" class="w-full flex flex-col items-center fixed mt-levv-header bg-levv-klei-header-background">
		<div class="levv-intro">@{ +main }</div>

		
		<ul class="flex flex-wrap gap-2 lg:gap-6 m-4 justify-center">
			<@ newPagelist {
				type: 'children',
				excludeHidden: false,
				context: "/homepage-sections",
			} @>
			<@ foreach in pagelist @>
				<li class="group text-sm lg:text-3xl grid grid-cols-levv-homepage-section-filter grid-rows-levv-homepage-section-filter transition ease-in-out delay-125 hover:cursor-pointer hover:scale-105 focus:scale-105">
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center"></div>
					<button value="levv-section-@{ :i }" class="col-start-1 col-end-3 row-start-1 row-end-3 text-center font-passageway-light border-solid border-4 rounded-tl-2xl rounded-br-2xl uppercase p-3 transition ease-in-out delay-125 group-hover:border-levv-wijnrood" onclick="scrollToSection(this.value)">@{ title }</button>
				</li>
			<@ end @>
		</ul>
	</div>
	<div id="levv-empty-space"></div>
	<@ foreach in pagelist @>
		<section id="levv-section-@{ :i }" class="h-screen w-screen grid grid-cols-levv-homepage-section-content grid-rows-levv-homepage-section-content">
			<div class="col-start-1 col-span-1 row-start-2 row-end-3 border-solid border-b-4 border-levv-korenblauw"></div>
			<div class="col-start-2 col-span-2 row-start-2 row-end-3 border-solid border-r-4 border-b-4 rounded-br-2xl  border-levv-korenblauw"></div>
			<div class="col-start-3 col-span-2 row-start-1 row-end-2 border-solid border-l-4 border-t-4 rounded-tl-2xl  border-levv-korenblauw"></div>
			<div class="col-start-5 col-span-3 md:col-start-5 md:col-span-1 row-start-1 row-end-2 border-solid border-t-4 p-6 border-levv-korenblauw">
				<h2 class="text-xl lg:text-3xl">@{ title } <span class="text-levv-wijnrood font-bold">met Levv</span></h2>
				<div class="text-base lg:text-xl">@{ +cornerstone_description }</div>
			</div>
			<div class="col-start-6 col-span-2 row-start-1 row-end-2 border-solid border-t-4  border-levv-korenblauw"></div>
		</section>
	<@ end @>
	
	<script>
		const emptySpace = document.getElementById("levv-empty-space");
		const question = document.getElementById("levv-question");
		let questionSize = question.getBoundingClientRect().bottom

		function resizeEmptySpace() {
			questionSize = question.getBoundingClientRect().bottom
			emptySpace.setAttribute("style",`height:${questionSize}px`)
		}
		
		resizeEmptySpace();
		addEventListener("resize", (event) => resizeEmptySpace());

		function scrollToSection(sectionId) {
			const section = document.getElementById(sectionId);
			const sectionDistanceToTop = globalThis.scrollY + section.getBoundingClientRect().top - questionSize
			window.scroll({
				top: sectionDistanceToTop,
				left: 0,
				behavior: "smooth",
			});
		}
	</script> -->
	<@ elements/footer.php @>
</main>
</body>
</html>
