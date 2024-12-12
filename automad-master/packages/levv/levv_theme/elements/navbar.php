<@ newPagelist { 
    type: 'children', 
    context: '/' ,
    excludeHidden: true
} @>
<nav id="levv-nav-bar" class="levv-nav-bar-closed fixed top-0 right-0 z-40 text-levv-korenblauw p-2 md:p-6">
    <ul tabindex="0" class="levv-menu-opened hidden col-start-1 col-span-3 row-start-2 row-span-1 flex-row gap-1 md:gap-2 lg:gap-4 justify-self-center self-center flex-wrap content-around justify-center">
        <@ newPagelist { 
            excludeHidden: true
        } @>
        <@~ foreach in pagelist ~@>
            <!-- <li class="group text-lg md:text-3xl lg:text-5xl lowercase font-semibold grid grid-cols-levv-menu-item grid-rows-levv-menu-item transition ease-in-out hover:cursor-pointer hover:scale-105 focus:cursor-pointer focus:scale-105">
                <div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center">
                </div>
                <a href="@{ url }" class="h-fit col-start-1 col-end-3 row-start-1 row-end-3 text-center font-passageway-light border-solid border-levv-klei border-4 rounded-tl-2xl rounded-br-2xl uppercase p-3 group-hover:border-levv-korenblauw group-focus:border-levv-korenblauw group-hover:text-levv-wijnrood group-focus:text-levv-wijnrood">@{ title }</a> -->
            <li class="group text-base md:text-3xl lg:text-5xl lowercase font-semibold h-fit transition ease-in-out hover:cursor-pointer hover:scale-105 focus:cursor-pointer focus:scale-105">
                <a href="@{ url }" class="font-passageway-light uppercase flex">
                    <@ set { :element_border_width: "stroke-[10] md:stroke-[20]" } @>
                    <@ set { :element_title: @{ title} } @>
                    <@ set { :element_content_padding: 'p-0 md:p-2' } @>
                    <@ set { :element_border_color: 'levv-klei'} @>
                    <@ set { :element_border_color_hover: 'levv-korenblauw'} @>
                    <@ set { :element_text_color: 'levv-korenblauw'} @>
                    <@ set { :element_text_color_hover: 'levv-wijnrood'} @>
                    <@ /levv_border_element.php @>
                </a>
            </li>
        <@~ end ~@>
    </ul>
    <div class="levv-menu-opened hidden col-start-1 col-span-3 row-start-3 row-span-1 justify-self-center w-full flex-col items-center">
        <a href="/" class="h-full w-1/4" aria-label="Navigeer naar de home pagina">
            <picture class="h-full w-3/4">
                <img class="w-full h-full object-contain"
                    sizes="(max-width: 6300px) 40vw, 2520px"
                    srcset="
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_180.png 180w,
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_624.png 624w,
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_938.png 938w,
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_1246.png 1246w,
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_1475.png 1475w,
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_1748.png 1748w,
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_1934.png 1934w,
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_2145.png 2145w,
                    /packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_2520.png 2520w"
                    src="/packages/@{theme}/img/5923-Levv-Consulting-Linde-Logo-RGB-transparant_igfyvi_c_scale-w_2520.png"
                    alt="">
            </picture>
        </a>
    </div>
</nav>