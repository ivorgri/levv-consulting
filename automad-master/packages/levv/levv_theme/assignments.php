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

	<template id="assignment-tag-filter-template">
		<ul class="flex row flex-wrap justify-center gap-2 md:gap-4 lg:gap-6 my-8">
			<li class="text-xl lg:text-3xl grid grid-cols-levv-assignment-filter-header grid-rows-levv-assignment-filter-header transition ease-in-out delay-125 hover:cursor-pointer hover:scale-105" v-for="assignmentTag in store.assignmentTags">
				<div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center">
				</div>
				<button :id="assignmentTag.id" type="radio" :value="assignmentTag.value" @click="updateAssignmentsList" class="col-start-1 col-end-3 row-start-1 row-end-3 text-center font-passageway-light border-solid border-4 rounded-tl-xl rounded-br-xl uppercase p-3" :class="assignmentTag.value === store.selectedAssignmentTag ? 'border-levv-wijnrood' : ''">{{ assignmentTag.label }}</button>
            </li>
		</ul>
	</template>

	<template id="assignment-filtered-list-template">
		<ul class="flex flex-col gap-6 w-full">
			<li v-for="assignment in store.selectedAssignments" class="grid grid-cols-levv-assignment-block grid-rows-levv-assignment-block max-w-fit">
				<div class="border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-korenblauw bg-levv-klei-background col-start-1 col-end-4 row-start-1 row-end-3 z-20 grid grid-cols-levv-assignment-header grid-rows-levv-assignment-header">
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center">
					</div>
					<h2 class="col-start-2 col-end-2 row-start-2 row-end-2 text-xl lg:text-3xl font-passageway-bold text-levv-wijnrood text-center mb-[10px]">{{ assignment.title }}</h2>
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 flex flex-col justify-end">
						<h3 class="text-base lg:text-xl font-passageway-bold text-center content-center bg-levv-klei-background relative -bottom-[15px] px-[7px] mx-[35px]">{{ assignment.function }}</h3>
					</div>
				</div>
				<div class="border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-turqouise bg-levv-klei-background col-start-2 col-end-6 row-start-2 row-end-5 grid grid-cols-levv-assignment-body grid-rows-levv-assignment-body z-10">
					<!-- <div class="col-start-2 col-end-3 row-start-2 row-end-3 text-base lg:text-lg" v-html="assignment.description"></div> -->
					<!-- <div class="col-start-2 col-end-3 row-start-3 row-end-4 flex flex-row flex-wrap justify-around my-6 gap-3">
						<img v-for="assignment_image in assignment.images" class="max-h-16 lg:max-h-36" 
							:src="'' + assignment_image.image_src"
							:alt="''+ assignment_image.image_alt"/>
					</div> -->
					<div class="col-start-2 col-end-3 row-start-2 row-end-3 text-base lg:text-lg flex flex-col">
						<!-- <div class="assignment-row"></div> -->
						<!-- <div class="assignment-row"></div> -->
						<div v-for="(row, index) in assignment.rows" class="assignment-row flex justify-center items-center flex-wrap">
							<div v-for="row_item in row" 
								class="assignment-row-element grow odd:order-2 even:order-1"
								:class="[row.length === 1 ? 'w-full' : (row_item.type === 'paragraph' ? 'w-full lg:min-w-2/3 lg:w-2/3 lg:max-w-2/3' : 'w-full lg:min-w-1/3 lg:w-1/3 lg:max-w-1/3'), row_item.type === 'image' ? 'flex items-center justify-center' : 'p-5']">
								<p v-if="row_item.type === 'paragraph'"	
									v-html="row_item.content"></p> 
								<img v-if="row_item.type === 'image'" 
									class="max-h-full max-w-full"
									:src="'' + row_item.content.image_src"
									:alt="''+ row_item.content.image_alt"/>
							</div>
						</div>
					</div>
				</div>
				<div class="border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-klei bg-levv-klei-background col-start-1 lg:col-start-5 col-end-7 row-start-4 row-end-6 p-[25px]">
					<div v-if="assignment.referral_1_text">
						<span class="text-2xl">"</span> 
						<p class="text-lg">{{ assignment.referral_1_text }}</p>
						<span class="text-2xl">"</span>
					</div>
					<div v-if="assignment.referral_1" class="flex flex-row-reverse items-center gap-2">
						<span class="text-xl">~</span> 
						<a v-if="assignment.referral_1_url" :href="'' + assignment.referral_1_url" target="_blank" class="hover:underline">{{ assignment.referral_1 }}</a>
						<span v-else>{{ assignment.referral_1 }}</span>
						<span class="text-xl">~</span>
					</div>
					<div v-if="assignment.referral_2_text">
						<span class="text-2xl">"</span>
						<p>{{ assignment.referral_2_text }}</p>
						<span class="text-2xl">"</span>
					</div>
					<div v-if="assignment.referral_2" class="flex flex-row-reverse items-center gap-2">
						<span class="text-xl">~</span> 
						<a v-if="assignment.referral_2_url" :href="'' + assignment.referral_2_url" target="_blank" class="hover:underline">{{ assignment.referral_2 }}</a>
						<span v-else>{{ assignment.referral_2 }}</span>
						<span class="text-xl">~</span>
					</div>
					<div v-if="assignment.referral_3_text">
						<span class="text-2xl">"</span>
						<p>{{ assignment.referral_3_text }}</p>
						<span class="text-2xl">"</span>
					</div>
					<div v-if="assignment.referral_3" class="flex flex-row-reverse items-center gap-2">
						<span class="text-xl">~</span> 
						<a v-if="assignment.referral_3_url" :href="'' + assignment.referral_3_url" target="_blank" class="hover:underline">{{ assignment.referral_3 }}</a>
						<span v-else>{{ assignment.referral_3 }}</span>
						<span class="text-xl">~</span>
					</div>
				</div>
			</li>
		</ul>
    </template>
</main>
<@ elements/footer.php @>

<script>
	<@ newPagelist {
		type: 'children',
		excludeHidden: false,
		context: @{ urlShowPagesBelow },
	} @>

	const assignmentTags = [
		{
			id: 'all',
			label: 'overzicht',
			value: 'all',
			cost: '95,00',
			cost_remark: ''
		},
		{
			id: 'professionaliseren',
			label: 'professionaliseren',
			value: 'professionaliseren',
			cost: '95,00',
			cost_remark: ''
		},
		{
			id: 'groeien',
			label: 'groeien',
			value: 'groeien',
			cost: '95,00',
			cost_remark: ''
		},
		{
			id: 'ontwikkelen',
			label: 'ontwikkelen',
			value: 'ontwikkelen',
			cost: '95,00',
			cost_remark: ''
		},
		{
			id: 'interim',
			label: 'interim',
			value: 'interim',
			cost: '95,00',
			cost_remark: 'Uurtarief in overleg (afhankelijk van de soort opdracht)'
		}
	]
	const assignments = [
	<@ foreach in pagelist @>
		{
			'title':'@{ title }',
			'tags':'@{ tags }',
			'url':'@{ url }',
			'organization':'@{ text-organization }',
			'function':'@{ text-function }',
			'description':`@{ +description }`,
			'referral_1':'@{ text-referral-person-1 }',
			'referral_1_text':'@{ text-referral-text-1 }',
			'referral_1_url':'@{ url-referral-text-1 }',
			'referral_2':'@{ text-referral-person-2 }',
			'referral_2_text':'@{ text-referral-text-2 }',
			'referral_2_url':'@{ url-referral-text-2 }',
			'referral_3':'@{ text-referral-person-3 }',
			'referral_3_text':'@{ text-referral-text-3 }',
			'referral_3_url':'@{ url-referral-text-3 }',
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
	console.log(assignments);
	assignments.forEach((assignment) => {
		const description = assignment.description;
		const split_regex = /<\/p><p/gi
		let assignment_paragraphs = description.replaceAll(split_regex,'</p>||SPLIT||<p');
		assignment_paragraphs = assignment_paragraphs.split("||SPLIT||")
		const paragraph_regex = /<p class=\"am-block\">(.*)<\/p>/gi
		
		for (let i = 0; i < assignment_paragraphs.length; i++) {
			assignment_paragraphs[i] = assignment_paragraphs[i].replaceAll(paragraph_regex,"$1")
		}
		const largest_array = assignment_paragraphs.length > assignment.images.length ? assignment_paragraphs.length : assignment.images.length;
		let rows = [];
		const assignment_images = assignment.images;
		for (let index = 0; index < largest_array; index++) {
			console.log(`Row ${index}`)
			let assignment_image;
			let assignment_paragraph;
			let row = [];
			if(typeof assignment_images[index] !== 'undefined') {
				assignment_image = assignment_images[index]
			}
			if(typeof assignment_paragraphs[index] !== 'undefined') {
				assignment_paragraph = assignment_paragraphs[index]
			}

			if (assignment_image !== undefined && assignment_paragraph === undefined) {
				row[0] = {
					type: "image",
					content: assignment_image
				}
				rows.push(row);
				continue;
			}

			if (assignment_image === undefined && assignment_paragraph !== undefined) {
				row[0] = {
					type: "paragraph",
					content: assignment_paragraph
				}
				rows.push(row);
				continue;
			}

			const is_even_row = index % 2;
			if (is_even_row === 0) {
				row[0] = {
					type: "image",
					content: assignment_image
				}
				row[1] = {
					type: "paragraph",
					content: assignment_paragraph
				}
			} else {
				row[0] = {
					type: "paragraph",
					content: assignment_paragraph
				}
				row[1] = {
					type: "image",
					content: assignment_image
				}
			}
			rows.push(row)
		}
		assignment.rows = rows;
	})

	let selectedAssignments = assignments;
</script>
<script src="/packages/@{theme}/js/assignment_list.js" type="module"></script>