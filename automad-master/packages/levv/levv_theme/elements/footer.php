<footer id="footer" class="w-full">
        <div class="w-full flex">
            <div class="w-full md:w-1/3">
                <span class="bold">LEVV Consulting</span>
                <span><a href="mailto:">info@levvconsulting.nl</a></span>
                <span><a href="tel:">061234567890</a></span>
                <span><a href="/">Algemene voorwaarden</a></span>
                <span><a href="/">Privacy verklaring</a></span>
            </div>
            <div class="w-full md:w-1/3">
                <img>
                </img>
            </div>
            <div class="w-full md:w-1/3">
                <ul tabindex="0" class="">
                    <# @{ checkboxShowInNavbar } #>
                    <@ newPagelist { 
                        excludeHidden: false, 
                        match: '{ "checkboxShowInNavbar": "/[^0]+/" }' 
                    } @>
                    <@~ foreach in pagelist ~@>
                        <li>
                            <a href="@{ url }"><@ icon_title.php @></a>
                        </li>
                    <@~ end ~@>
                </ul>
            </div>
        </div>
        <div class="w-full flex">
            <span>&copy; 2023<?php $currentYear = date("Y");
                    if ($currentYear != 2023) {
                        echo "-".$currentYear;
                    }
                ?><strong>LEVV Consulting</strong>. Alle Rechten Voorbehouden</span>
        </div>    
    </footer>
        <@ if @{ :origUrl } @>
            <!-- <script src="/packages/@{theme}/js/homepage_slider.js" async></script>
            <script src="/packages/@{theme}/js/contact_form.js" async></script>
            <script src="/packages/@{theme}/js/supervisor_modal.js" async></script>    -->
        <@ else @>
            <script src="/packages/@{theme}/js/automatic_redirect.js" async></script>          
        <@ end @>
        <!-- <script>
            const links = document.querySelectorAll('[href*="://"]');
            Array.from(links).forEach((link) => {
                link.setAttribute('target', '_blank');
            });
        </script> -->
    </body>
</html>