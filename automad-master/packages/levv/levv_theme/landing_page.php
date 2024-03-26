<@ elements/header.php @>
<# 

Define the default main snippet to display the actual content. 
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full flex flex-col items-center p-36">
	<div class="flex flex-wrap flex-col md:flex-row w-full max-w-[1050px] items-center gap-7 md:max-w-[1000px] justify-center">
		<@ newPagelist { 
			type: 'children', 
			excludeHidden: true,
			context: '/'
		} @>
		<@ foreach in pagelist @>
			<@ elements/homepage_card.php @>
		<@ end @>
	</div>
	<div class="flex flex-wrap flex-col w-full items-center gap-5">
		<h2 class="text-5xl p-6 text-center font-passageway-bold">Onze samenwerkingen</h2>
		<@ newPagelist { 
			type: 'children', 
			excludeHidden: true,
			context: '/samenwerkingen'
		} @>
		<@ foreach in pagelist @>
			<@ elements/homepage_collaboration.php @>
		<@ end @>
	</div>
</main>
<@ elements/footer.php @>