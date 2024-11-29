        <footer id="footer" class="w-full bg-levv-klei-header-background">
            <div class="w-full flex flex-col gap-8 bg-levv-wijnrood text-white py-6 items-center">
                <div class="w-full md:w-1/3 flex flex-col md:flex-row items-center gap-6 justify-between">
                    <div class="flex flex-col items-center gap-2">
                        <span class="font-quicksand-bold">@{ sitename }</span>
                        <span class="underline"><a href="mailto:@{ levvMailAddress } ">@{ levvMailAddress }</a></span>
                        <span><a href="tel:@{ levvPhoneNumber }">@{ levvPhoneNumber }</a></span>
                    </div>
                    <div class="flex flex-col items-start gap-2">
                        <@ if @{ levvLinkedInUrl } @>
                            <span>
                                <a href="@{ levvLinkedInUrl }" target="_blank" class="flex items-center">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>    
                                    <span class="ml-2">
                                        @{ levvLinkedInUrlText }
                                    </span>
                                    
                                </a>
                            </span>
                        <@ end @>
                        <@ if @{ levvLindeLinkedInUrl } @>
                            <span>
                                <a href="@{ levvLindeLinkedInUrl }" target="_blank" class="flex items-center">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    <span class="ml-2">
                                        @{ levvLindeLinkedInUrlText }
                                    </span>
                                </a>
                            </span>
                        <@ end @>
                    </div>
                </div>
            </div>
            <div class="w-full flex text-levv-dieppaars justify-center py-4">
                <span>&copy; <strong>@{ sitename }</strong> 2023<?php $currentYear = date("Y");
                        if ($currentYear != 2023) {
                            echo "-".$currentYear;
                        }
                    ?> | Alle rechten voorbehouden</span>
            </div>    
        </footer>
        <script src="/packages/@{theme}/js/menu.js" async></script>
        <@ if @{ :origUrl } @>
            <script src="/packages/@{theme}/js/contact_form.js" async></script>
        <@ else @>
            <script src="/packages/@{theme}/js/automatic_redirect.js" async></script>
            <script src="/packages/@{theme}/js/menu.js" async></script>
            <script src="/packages/@{theme}/js/contact_form.js" async></script>
        <@ end @>
        <!-- <script>
            const links = document.querySelectorAll('[href*="://"]');
            Array.from(links).forEach((link) => {
                link.setAttribute('target', '_blank');
            });
        </script> -->
<@ if @{ :origUrl } != '/' @>
    </body>
</html>
<@ end @>
