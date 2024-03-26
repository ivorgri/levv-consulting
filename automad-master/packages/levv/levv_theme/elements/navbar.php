<@ newPagelist { 
    type: 'children', 
    context: '/' 
} @>
<nav class="grow flex flex-row justify-end">
    <!-- MOBILE MENU -->
    <div class="navbar-start">
        <div id="mobile-menu-open" class="fixed bottom-5 right-5 bg-white md:hidden rounded-full p-3">
            <svg class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path>
            </svg>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-levv-klei bg-opacity-75 w-screen h-screen fixed top-0 right-0">
            <div class="fixed top-0 right-0 w-fit px-4 py-3 bg-white h-full">
                <div class="flex flex-col">		
                    <ul tabindex="0" class="flex flex-col gap-6 items-end">
                        <@ newPagelist { 
                            excludeHidden: true
                        } @>
                        <@~ foreach in pagelist ~@>
                            <li class="lowercase font-semibold">
                                <a href="@{ url }">@{ title }</a>
                            </li>
                        <@~ end ~@>
                    </ul>
                    <div id="mobile-menu-close" class="fixed bottom-5 right-5 p-3">
                        <svg class="" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path>
                        </svg>
                    </div>		
                </div>
            </div>
        </div>
	</div>
    
    <!-- DESKTOP MENU -->
    <ul tabindex="0" class="flex-row gap-6 hidden md:flex">
        <@ newPagelist { 
            excludeHidden: true
        } @>
        <@~ foreach in pagelist ~@>
            <li class="lowercase font-semibold">
                <a href="@{ url }">@{ title }</a>
            </li>
        <@~ end ~@>
    </ul>
</nav>