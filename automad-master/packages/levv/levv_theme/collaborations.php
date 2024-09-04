<@ elements/header.php @>
<#

Define the default main snippet to display the actual content.
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full flex flex-col items-center px-4 md:px-24 lg:px-36 pb-6 mt-levv-header">
	<h1 class="text-3xl lg:text-5xl p-6 text-center font-passageway-bold">@{ title }</h1>
	<div class="text-base lg:text-lg">@{ +main }</div>
	<div class="w-full columns-1 lg:columns-2 gap-x-8 mt-12">
		<@ newPagelist {
			type: 'children',
			excludeHidden: false,
			context: @{ urlShowPagesBelow },
		} @>
		<@ foreach in pagelist @>
			<div class="masonry-card w-full break-inside-avoid-column mt-8 first:mt-0 grid grid-cols-levv-collaboration-block grid-rows-levv-collaboration-block">
				<div class="border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-korenblauw bg-levv-klei-background col-start-1 col-end-4 row-start-1 row-end-3 z-20 grid grid-cols-levv-collaboration-header grid-rows-levv-collaboration-header w-fit">
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center">
					</div>
					<h2 class="col-start-2 col-end-2 row-start-2 row-end-2 text-xl lg:text-3xl font-passageway-bold text-levv-wijnrood text-center mb-[10px]">@{ title }</h2>
				</div>
				<div class="border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-turqouise bg-levv-klei-background col-start-2 col-end-6 row-start-2 row-end-5 grid grid-cols-levv-collaboration-body grid-rows-levv-collaboration-body z-10 ml-2 md:ml-6">
					<div class="flex flex-col col-start-2 col-end-3 row-start-2 row-end-3">
						@{ +description }
					</div>
					
				</div>
			</div>
		<@ end @>
	</div>
</main>
<@ elements/footer.php @>