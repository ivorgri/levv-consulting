<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<a href="@{url}" class="w-homepage-card md:max-w-homepage-card-md aspect-square">
    <div class="grid grid-rows-levv-homepage-card grid-cols-1 bg-levv-wijnrood-homepage-card text-levv-klei font-semibold
        transition ease-in-out delay-150 hover:scale-105 h-full w-full">
        <@ homepage_card_image.php @>
        <h2 class="p-5 text-3xl text-levv-korenblauw row-start-1 col-start-1 font-passageway-bold z-10">@{ title }</h2>
        <div class="p-5 row-start-2 col-start-1 z-10">
            @{ text_short_description }
        </div>
        <button class="px-5 py-2 row-start-3 col-start-1 text-start z-10 text-xl font-bold">
            @{ text_action_button } >
        </button>
    </div>
</a>