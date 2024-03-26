<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<a href="@{url}" class="w-homepage-card md:max-w-homepage-card-md aspect-square">
    <div class="grid grid-rows-levv-homepage-card grid-cols-1 bg-levv-wijnrood-homepage-card text-levv-klei font-semibold
        transition ease-in-out delay-150 hover:scale-105 h-full w-full">
        <h2 class="p-5 text-3xl text-levv-korenblauw row-start-1 col-start-1 font-passageway-bold z-10">@{ title }</h2>
        <div class="p-5 row-start-2 col-start-1 z-10">
            @{ organization }
        </div>
        <div class="p-5 row-start-3 col-start-1 z-10">
            @{ +description }
        </div>
        <div class="p-5 row-start-4 col-start-1 z-10">
            @{ text-referral-person-1 }    
        </div>
        <div class="p-5 row-start-5 col-start-1 z-10">
            @{ text-referral-text-1 }
        </div>
        <div class="p-5 row-start-6 col-start-1 z-10">
            @{ url-referral-text-1 }
        </div>
        <div class="p-5 row-start-7 col-start-1 z-10">
            @{ text-referral-person-2 }    
        </div>
        <div class="p-5 row-start-8 col-start-1 z-10">
            @{ text-referral-text-2 }
        </div>
        <div class="p-5 row-start-9 col-start-1 z-10">
            @{ url-referral-text-2 }
        </div>
    </div>
</a>