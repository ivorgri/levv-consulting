<@ elements/header.php @>
<# 

Define the default main snippet to display the actual content. 
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full flex flex-col items-center">
	<div id="levv-question" class="w-full flex flex-col items-center fixed mt-32 bg-levv-klei-header-background">
		<h1 class="text-5xl"><span>Welke uitdaging wil je aangaan </span><span class="text-levv-wijnrood font-bold text-6xl">met Levv?</span></h1>
		<ul class="flex">
			<li class="text-3xl">
				<button value="levv-section-1" onclick="scrollToSection(this.value)">Professionalisering</button>
			</li>
			<li class="text-3xl">
				<button value="levv-section-2" onclick="scrollToSection(this.value)">Groeien</button>
			</li>
			<li class="text-3xl">
				<button value="levv-section-3" onclick="scrollToSection(this.value)">Ontwikkelen</button>
			</li>
			<li class="text-3xl">
				<button value="levv-section-4" onclick="scrollToSection(this.value)">Interim</button>
			</li>
		</ul>
	</div>
	<div id="levv-empty-space"></div>
	<div id="levv-section-1" class="h-screen w-[70%]">
		<h2 class="text-2xl">Professionalisering <span class="text-levv-wijnrood font-bold text-3xl">met Levv</span></h2>
		<p>Professionalisering</h2>
	</div>
	<div id="levv-section-2" class="h-screen w-[70%]">
		<h2 class="text-2xl">Groeien <span class="text-levv-wijnrood font-bold text-3xl">met Levv</span></h2>
		<p>Groeien</h2>
	</div>
	<div id="levv-section-3" class="h-screen w-[70%]">
		<h2 class="text-2xl">Ontwikkelen <span class="text-levv-wijnrood font-bold text-3xl">met Levv</span></h2>
		<p>Ontwikkelen</h2>
	</div>
	<div id="levv-section-4" class="h-screen w-[70%]">
		<h2 class="text-2xl">Interim <span class="text-levv-wijnrood font-bold text-3xl">met Levv</span></h2>
		<p>Interim</h2>
	</div>
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