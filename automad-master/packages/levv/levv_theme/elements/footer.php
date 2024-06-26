        <footer id="footer" class="w-full">
            <div class="w-full flex flex-col gap-8 bg-levv-wijnrood text-white py-6 items-center">
                <div class="w-full md:w-1/3 flex flex-col items-center gap-6">
                    <div class="flex flex-col items-center gap-2">
                        <span class="font-quicksand-bold">@{ sitename }</span>
                        <span class="underline"><a href="mailto:@{ levvMailAddress} ">@{ levvMailAddress}</a></span>
                        <span><a href="tel:@{levvPhoneNumber}">@{ levvPhoneNumber }</a></span>
                    </div>
                    <!-- <div class="flex flex-col items-center gap-2">
                        <span><a href="/">Algemene voorwaarden</a></span>
                        <span><a href="/">Privacy verklaring</a></span>
                    </div> -->
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
        <@ end @>
        <!-- <script>
            const links = document.querySelectorAll('[href*="://"]');
            Array.from(links).forEach((link) => {
                link.setAttribute('target', '_blank');
            });
        </script> -->
    </body>
</html>