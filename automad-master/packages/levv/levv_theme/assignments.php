<@ elements/header.php @>
<# 

Define the default main snippet to display the actual content. 
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full flex flex-col items-center p-36">
	<h1>@{ title }</h1>
	<div>@{ +main }</div>
	<@ newPagelist { 
		type: 'children', 
		excludeHidden: true,
		context: @{ urlShowPagesBelow },
	} @>
	<@ foreach in pagelist @>
		<@ elements/assignment_card.php @>
	<@ end @>
</main>
<@ elements/footer.php @>