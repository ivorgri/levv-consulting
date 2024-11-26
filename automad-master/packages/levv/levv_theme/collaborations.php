<@ elements/header.php @>
<#

Define the default main snippet to display the actual content.
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full flex flex-col items-center px-4 md:px-24 lg:px-36 pb-6 mt-levv-header">
	<h1 class="text-3xl lg:text-5xl p-6 text-center font-passageway-bold">@{ title }</h1>
	<div class="text-base lg:text-lg mb-4">@{ +main }</div>
	
	<div id="collaboration-slider" v-scope="CollaborationSlider()" class="flex flex-col w-screen"></div>
	
	<template id="collaboration-slider-template">
		<div class="flex flex-row flex-wrap gap-2 justify-center">
			<button v-for="(collaboration,index) in store.collaborations"
				:value="index"
				@click="updateSelectedIndex"
				class="rounded-tl-2xl rounded-br-2xl text-white p-3 mx-1"
				:class="index === store.selectedIndex ? 'bg-levv-wijnrood border-levv-wijnrood' : 'bg-levv-korenblauw border-levv-korenblauw'">
				{{ collaboration.title }}
			</button>
		</div>
		<div class="flex flex-row mt-3">
			<div class="w-4 md:w-24 md:min-w-24 lg:w-36 lg:min-w-36 flex flex-col pt-36">
				<!-- <button class="border-solid border-2 rounded-br-2xl rounded-tl-2xl border-levv-wijnrood group-hover:border-levv-korenblauw group-focus:border-levv-korenblauw" @click="previousCollaboration">Previous</button> -->
			</div>
			<div class="masonry-card w-full break-inside-avoid-column mt-8 first:mt-0 grid grid-cols-levv-collaboration-block grid-rows-levv-collaboration-block">
				<div class="border-solid border-4 rounded-tl-2xl rounded-br-2xl border-levv-korenblauw bg-levv-klei-background col-start-1 col-end-4 row-start-1 row-end-3 z-20 grid grid-cols-levv-collaboration-header grid-rows-levv-collaboration-header w-fit">
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center">
					</div>
					<h2 class="col-start-2 col-end-2 row-start-2 row-end-2 text-xl lg:text-3xl font-passageway-bold text-levv-wijnrood text-center mb-[10px]">{{ store.selectedCollaboration.title }}</h2>
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 flex flex-col justify-end">
						<h3 class="text-base lg:text-xl font-passageway-bold text-center content-center bg-levv-klei-background relative self-center w-fit -bottom-[15px] px-[10px] mx-[35px]">{{ store.selectedCollaboration.function }}</h3>
					</div>
				</div>
				<div class="border-solid border-4 rounded-tl-2xl rounded-br-2xl border-levv-turqouise bg-levv-klei-background col-start-2 col-end-7 row-start-2 row-end-5 grid grid-cols-levv-collaboration-body grid-rows-levv-collaboration-body z-10 ml-2 md:ml-6">
					<div class="flex flex-col col-start-2 col-end-3 row-start-2 row-end-3" v-html="store.selectedCollaboration.description">
					</div>
				</div>
				<div v-if="store.selectedCollaboration.images.length !== 0" 
					class="flex flex-col items-center border-solid border-4 rounded-tl-xl rounded-br-2xl border-levv-klei bg-levv-klei-background col-start-1 lg:col-start-5 col-end-8 row-start-4 row-end-6 p-[25px]">
					<img v-for="collaboration_image in store.selectedCollaboration.images" class="max-h-full max-w-full rounded-tl-3xl rounded-br-3xl"
						:src="'' + collaboration_image.image_src"
						:alt="'' + collaboration_image.image_alt"
						:width="collaboration_image.image_width/2"
						:height="collaboration_image.image_height/2"/>
				</div>
			</div>
			<div class="w-4 md:w-24 md:min-w-24 lg:w-36 lg:min-w-36 flex flex-col pt-36">
				<!-- <button class="border-solid border-2 rounded-br-2xl rounded-tl-2xl border-levv-wijnrood group-hover:border-levv-korenblauw group-focus:border-levv-korenblauw" @click="nextCollaboration">Next</button> -->
			</div>
		</div>
	</template>
</main>
<@ elements/footer.php @>

<script>
	<@ newPagelist {
		type: 'children',
		excludeHidden: false,
		context: @{ urlShowPagesBelow },
	} @>

	
	const collaborations = [
	<@ foreach in pagelist @>
		{
			'title':'@{ title }',
			'function': '@{ text-function }',
			'tags':'@{ tags }',
			'url':'@{ url }',
			'description':`@{ +description }`,
			'images': [
				<@ filelist { 
					glob: @{ files | def ('*.png, *.jpg, *.svg') },
					sort: 'asc'
				} @>
				<@ foreach in filelist { width: :width } @>
					{
						'image_src':'@{ :file }',
						'image_alt':'@{ :caption }',
						'image_height':'@{ :height }',
						'image_width':'@{ :width }',
					},
				<@ end @>
			]
		},
	<@ end @>
	]
	console.log(collaborations)
</script>
<script src="/packages/@{theme}/js/collaboration_slider.js" type="module"></script>