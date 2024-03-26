<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!-- <picture class="h-full w-8/12 md:col-start-1 md:col-end-5 md:row-start-2 md:row-end-4 md:mt-10"> -->
<div class="bg-white opacity-60 h-full w-full row-start-1 col-start-1"></div>
<picture class="h-full row-start-1 col-start-1">
    <@ filelist { glob: @{ images | def ('*.jpg, *.jpeg, *.png') }, order: desc } @>
    <@ if @{ :filelistCount } @>
        <@ foreach in filelist @>
            <source 
                srcset="@{ :file }"
                media="(min-width: @{ :width }px)"
                type="image/jpeg"
            />
        <@ end @>
    <@ end @>
    <@ filelist { glob: @{ images | def ('*.jpg, *.jpeg, *.png') }, order: desc } @>
    <@ if @{ :filelistCount } @>
        <@ foreach in filelist @>
            <img 
                class="h-full"           
                src="@{ :file }"
                alt="@{ :caption }"
                width="@{ :width }"
                height="@{ :height }"
            />
        <@ end @>
    <@ end @>
</picture>