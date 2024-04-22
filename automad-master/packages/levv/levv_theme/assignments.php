<@ elements/header.php @>
<#

Define the default main snippet to display the actual content.
The snippet can be overriden before including the actual template in order to extend a template.

#>
<main class="w-full flex flex-col items-center p-36">
	<h1 class="text-5xl p-6 text-center font-passageway-bold">@{ title }</h1>
	<div>@{ +main }</div>

	<div id="assignment-tag-filter" v-scope="AssignmentTagFilter()" class="flex"></div>
	<div id="assignment-filtered-list" v-scope="AssignmentFilteredList()" class="flex w-full"></div>

	<template id="assignment-tag-filter-template">
		<ul class="flex row gap-6 my-8">
			<li class="text-3xl grid grid-cols-levv-assignment-header grid-rows-levv-assignment-header transition ease-in-out delay-125 hover:cursor-pointer hover:scale-105" v-for="assignmentTag in store.assignmentTags">
				<div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center">
				</div>
				<button :id="assignmentTag.id" type="radio" :value="assignmentTag.value" @click="updateAssignmentsList" class="col-start-1 col-end-3 row-start-1 row-end-3 text-center font-passageway-light border-solid border-4 rounded-tl-xl rounded-br-xl uppercase p-3" :class="assignmentTag.value === store.selectedAssignmentTag ? 'border-levv-wijnrood' : ''">{{ assignmentTag.label }}</button>
            </li>
		</ul>
		<script>
			
		</script>
	</template>

	<template id="assignment-filtered-list-template">
		<ul class="flex flex-col gap-6 w-full">
			<li v-for="assignment in store.selectedAssignments" class="grid grid-cols-levv-assignment-block grid-rows-levv-assignment-block max-w-fit">
				<div class="border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-korenblauw bg-levv-klei-background col-start-1 col-end-4 row-start-1 row-end-3 z-20 grid grid-cols-levv-assignment-header grid-rows-levv-assignment-header">
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center">
					</div>
					<h2 class="col-start-2 col-end-2 row-start-2 row-end-2 text-3xl font-passageway-bold text-levv-wijnrood text-center">{{ assignment.title }}</h2>
					<div class="col-start-1 col-end-4 row-start-1 row-end-4 flex flex-col justify-end">
						<h3 class="text-xl font-passageway-bold text-center content-center bg-levv-klei-background relative -bottom-[15px] px-[7px] mx-[35px]">{{ assignment.function }}</h3>
					</div>
				</div>
				<div class="border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-turqouise bg-levv-klei-background col-start-2 col-end-6 row-start-2 row-end-5 grid grid-cols-levv-assignment-body grid-rows-levv-assignment-body z-10">
					<div class="col-start-2 col-end-3 row-start-2 row-end-3 text-lg" v-html="assignment.description"></div>
					<div class="col-start-2 col-end-3 row-start-3 row-end-4 flex flex-row justify-around mt-6 h-60">
						<img src="https://picsum.photos/200/300"/>
						<img src="https://picsum.photos/400/200"/>
					</div>
				</div>
				<div class="border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-klei bg-levv-klei-background col-start-5 col-end-7 row-start-4 row-end-6 p-[25px]">
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
				<!-- <div class="levv-assignment-header-border border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-korenblauw col-start-1 col-end-7 row-start-2 row-end-5 bg-levv-klei-background z-10">
				</div>
				<div class="levv-assignment-header-empty col-start-3 col-end-5 row-start-1 row-end-3 bg-levv-klei-background z-10">
				</div>
				<h2 class="levv-assignment-header-title text-3xl font-passageway-bold col-start-2 col-end-6 row-start-3 row-end-4 text-levv-wijnrood text-center bg-levv-klei-background z-10">{{ assignment.title }}</h2>
				<h3 class="levv-assignment-header-function text-xl font-passageway-bold col-start-2 col-end-6 row-start-4 row-end-6 bg-levv-klei-background text-center content-center px-3 z-10">{{ assignment.function }}</h3>
				<div class="levv-assignment-body-border border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-turqouise col-start-3 col-end-9 row-start-4 row-end-8">
				</div>
				<div class="levv-assignment-body-content ml-[25px] col-start-3 col-end-8 row-start-6 row-end-7 h-fit min-h-fit" v-html="assignment.description"></div>
				<div class="levv-assignment-body-border border-solid border-4 rounded-tl-xl rounded-br-xl border-levv-klei col-start-1 col-end-7 row-start-4 row-end-10">
				</div> -->
				<!-- <div v-if="assignment.tags.includes(store.selectedAssignmentTag) || store.selectedAssignmentTag === 'all'" class="flex flex-row gap-4">
					<div class="grow p-5 bg-levv-wijnrood-homepage-card text-levv-klei w-assignment-card md:max-w-assignment-card-md md:min-w-assignment-card-md flex flex-col gap-3">
						<h2 class="text-3xl font-passageway-bold">{{ assignment.title }}</h2>
						<span class="text-xl">
							{{ assignment.organization }}
						</span>
						<span class="text-xl">
							{{ assignment.function }}
						</span>
					</div>
					<div class="grow p-5" v-html="assignment.description"></div>
					<div class="grow min-w-36 w-1/4">Right</div>
				</div>
				<div class="grow flex flex-col text-levv-klei bg-levv-turqouise p-5">
					<div v-if="assignment.referral_1_text">
						<span class="text-2xl">"</span> 
						<p>{{ assignment.referral_1_text }}</p>
						<span class="text-2xl">"</span>
					</div>
					<div class="flex flex-row items-center gap-2 justify-end">
						<span class="text-xl">~</span> 
						<span>{{ assignment.referral_1 }}</span>
						<span class="text-xl">~</span>
					</div>
					<div v-if="assignment.referral_2_text">
						<span class="text-2xl">"</span>
						<p>{{ assignment.referral_2_text }}</p>
						<span class="text-2xl">"</span>
					</div>
					<div v-if="assignment.referral_2" class="flex flex-row items-center gap-2 justify-end">
						<span class="text-xl">~</span> 
						<span>{{ assignment.referral_2 }}</span>
						<span class="text-xl">~</span>
					</div>
					<div v-if="assignment.referral_3_text">
						<span class="text-2xl">"</span>
						<p>{{ assignment.referral_3_text }}</p>
						<span class="text-2xl">"</span>
					</div>
					<div v-if="assignment.referral_3" class="flex flex-row items-center gap-2 justify-end">
						<span class="text-xl">~</span> 
						<span>{{ assignment.referral_3 }}</span>
						<span class="text-xl">~</span>
					</div>
				</div> -->
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
			id: 'interim',
			label: 'interim',
			value: 'interim',
			cost: '95,00',
			cost_remark: 'Uurtarief in overleg (afhankelijk van de soort opdracht)'
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
	]
	const assignments = [
	<@ foreach in pagelist @>
		{
			'title':'@{ title }',
			'tags':'@{ tags }',
			'url':'@{ url }',
			'organization':'@{ text-organization }',
			'function':'@{ text-function }',
			'description':'@{ +description }',
			'referral_1':'@{ text-referral-person-1 }',
			'referral_1_text':'@{ text-referral-text-1 }',
			'referral_1_url':'@{ url-referral-text-1 }',
			'referral_2':'@{ text-referral-person-2 }',
			'referral_2_text':'@{ text-referral-text-2 }',
			'referral_2_url':'@{ url-referral-text-2 }',
			'referral_3':'@{ text-referral-person-3 }',
			'referral_3_text':'@{ text-referral-text-3 }',
			'referral_3_url':'@{ url-referral-text-3 }'
		},
	<@ end @>
	]

	let selectedAssignments = assignments;
</script>
<script src="/packages/@{theme}/js/assignment_list.js" type="module"></script>