<@ elements/header.php @>
<#

Define the default main snippet to display the actual content.
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full flex flex-col items-center px-8 lg:px-36 pb-6 mt-levv-header">
	<h1 class="text-3xl lg:text-5xl p-6 text-center font-passageway-bold">@{ title }</h1>
	<div class="text-base lg:text-lg">@{ +main }</div>

	<div id="assignment-tag-filter" v-scope="AssignmentTagFilter()" class="flex"></div>
	<div id="assignment-filtered-list" v-scope="AssignmentFilteredList()" class="flex w-full"></div>

	
</main>
<@ elements/footer.php @>