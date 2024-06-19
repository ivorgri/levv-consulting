<@ elements/header.php @>
<# 

Define the default main snippet to display the actual content. 
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full flex flex-col items-center">
	<div id="levv-question" class="w-full flex flex-col items-center fixed mt-32 bg-levv-klei-header-background">
		<h1 class="text-5xl"><span>Welke uitdaging wil je aangaan </span><span class="text-levv-wijnrood font-bold text-6xl">met Levv?</span></h1>
		<ul class="flex gap-6 m-4">
			<@ newPagelist {
				type: 'children',
				excludeHidden: false,
				context: "/homepage-sections",
			} @>
			<@ foreach in pagelist @>
				<li class="group text-3xl grid grid-cols-levv-homepage-section-filter grid-rows-levv-homepage-section-filter transition ease-in-out delay-125 hover:cursor-pointer hover:scale-105">
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center"></div>
					<button value="levv-section-@{ :i }" class="col-start-1 col-end-3 row-start-1 row-end-3 text-center font-passageway-light border-solid border-4 rounded-tl-xl rounded-br-xl uppercase p-3 transition ease-in-out delay-125 group-hover:border-levv-wijnrood" onclick="scrollToSection(this.value)">@{ title }</button>
				</li>
			<@ end @>
		</ul>
	</div>
	<div id="levv-empty-space"></div>
	<@ foreach in pagelist @>
		<div id="levv-section-@{ :i }" class="h-screen w-screen grid grid-cols-levv-homepage-section-content grid-rows-levv-homepage-section-content">
			<div class="col-start-1 col-span-1 row-start-2 row-end-3 border-solid border-b-4 border-levv-korenblauw"></div>
			<div class="col-start-2 col-span-2 row-start-2 row-end-3 border-solid border-r-4 border-b-4 rounded-br-xl  border-levv-korenblauw"></div>
			<div class="col-start-3 col-span-2 row-start-1 row-end-2 border-solid border-l-4 border-t-4 rounded-tl-xl  border-levv-korenblauw"></div>
			<!-- <div class="col-start-5 col-spen-1 row-start-1 row-end-4 w-1/3 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center"></div> -->
			<div class="col-start-5 col-span-1 row-start-1 row-end-2 border-solid border-t-4 p-6 border-levv-korenblauw">
				<h2 class="text-3xl">@{ title } <span class="text-levv-wijnrood font-bold">met Levv</span></h2>
				<p>@{ +cornerstone_description }</p>
			</div>
			<div class="col-start-6 col-span-2 row-start-1 row-end-2 border-solid border-t-4  border-levv-korenblauw"></div>
			<!-- <div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center"></div>
			<div class="col-start-1 col-end-3 row-start-1 row-end-3 border-solid border-4 rounded-tl-xl rounded-br-xl p-3 border-levv-korenblauw">
				<h2 class="text-2xl">@{ title } <span class="text-levv-wijnrood font-bold text-3xl">met Levv</span></h2>
				<p>@{ +cornerstone_description }</p>
			</div> -->
		</div>
	<@ end @>
	
	<script>
		const emptySpace = document.getElementById("levv-empty-space");
		const question = document.getElementById("levv-question");
		const questionSize = question.getBoundingClientRect().bottom
		emptySpace.setAttribute("style",`height:${questionSize}px`)

		function scrollToSection(sectionId) {
			const section = document.getElementById(sectionId);
			const sectionDistanceToTop = globalThis.scrollY + section.getBoundingClientRect().top - questionSize
			window.scroll({
				top: sectionDistanceToTop,
				left: 0,
				behavior: "smooth",
			});
		}
	</script>
</main>
<@ elements/footer.php @>