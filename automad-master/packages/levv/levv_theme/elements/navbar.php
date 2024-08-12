<@ newPagelist { 
    type: 'children', 
    context: '/' ,
    excludeHidden: true
} @>
<nav id="levv-nav-bar" class="levv-nav-bar-closed grid fixed top-0 right-0 z-50 bg-levv-klei-background text-levv-korenblauw p-2 md:p-6">
    <button id="levv-toggle-menu" class="group col-start-3 col-span-1 row-start-1 row-span-1 w-fit h-fit" aria-label="Open/sluit menu">
        <svg width="50" height="50" viewBox="0 0 100 100" class="stroke-levv-klei group-hover:stroke-levv-wijnrood ">
            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
    </button>
    <ul tabindex="0" class="levv-menu-opened hidden col-start-1 col-span-3 row-start-2 row-span-1 flex-row gap-2 md:gap-4 lg:gap-6 justify-self-center self-center flex-wrap">
        <@ newPagelist { 
            excludeHidden: true
        } @>
        <@~ foreach in pagelist ~@>
            <li class="group text-lg md:text-3xl lg:text-5xl lowercase font-semibold grid grid-cols-levv-menu-item grid-rows-levv-menu-item transition ease-in-out hover:cursor-pointer hover:scale-105 focus:cursor-pointer focus:scale-105">
                <div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative bg-levv-klei-background h-[10px] -top-[5px] justify-self-center">
                </div>
                <a href="@{ url }" class="h-fit col-start-1 col-end-3 row-start-1 row-end-3 text-center font-passageway-light border-solid border-levv-klei border-4 rounded-tl-xl rounded-br-xl uppercase p-3 group-hover:border-levv-korenblauw group-focus:border-levv-korenblauw group-hover:text-levv-wijnrood group-focus:text-levv-wijnrood">@{ title }</a>
            </li>
        <@~ end ~@>
    </ul>
    <div class="levv-menu-opened hidden col-start-1 col-span-3 row-start-3 row-span-1 justify-self-center">
        <a href="/" class="h-full" aria-label="Navigeer naar de home pagina">
            <picture class="h-full object-cover">
                <img class="h-full object-cover"
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