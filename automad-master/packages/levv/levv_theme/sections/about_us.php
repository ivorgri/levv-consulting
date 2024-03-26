<@ if @{ :origUrl } = '/homepage-sections/about-us' @>
    <section id="@{ :origUrl |
        replace(
            '/\\//',
            ''
        )}" class="grid grid-rows-levv-about-us grid-cols-1">
        <div class="h-[300px] bg-lime-400 row-start-1 row-span-2 col-start-1">
            HIER KOMT NOG EEN AFBEELDING VAN JOU
        </div>
        <div class="row-start-2 row-span-2 col-start-1 min-w-3/4 w-fit-content max-w-[90%] bg-gradient-to-r from-levv-dieppaars-about-us to-70% to-levv-korenblauw-about-us">
            <div class="h-[7rem] flex flex-row items-center p-3">
                <h2 class="text-3xl text-white">
                    @{ text-about-us-slogan }
                </h2>
            </div>
        </div>
        <div class="flex flex-col items-center row-start-3 row-span-2 col-start-1 py-10">
            <div class="grid w-full py-10">
                <div class="flex flex-col w-full items-center col-start-1 row-start-1 h-fit">
                    <h2 class="text-4xl z-10 bg-levv-klei-background w-fit text-center px-10">
                        @{ title }
                    </h2>
                </div>
                <svg class="stroke-levv-dieppaars stroke-3 col-start-1 row-start-1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4000 160">
                    <path d="M0,5 L3000,5 A50,50 0 0 1 3050,50 V100 A50,50 0 0 0 3100 155 L4000 155" fill="none" />
                </svg>
            </div>
            <div>
                @{ +about-us }
            </div>
            <div>
                @{ text-about-us-closing-statement }
            </div>
        </div>
    </section>
<@ end @>