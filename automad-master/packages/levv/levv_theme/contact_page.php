<@ elements/header.php @>

<main class="w-full flex flex-col gap-4 items-center px-8 py-36 md:p-36 lg:w-3/4">
	<h1 class="text-5xl p-6 text-center font-passageway-bold">@{ title }</h1>
    <div class="text-lg">@{ +main }</div>
    <div class="text-lg flex flex-col">
        <div class="flex flex-row gap-2">
            <span>Direct mailen kan naar:</span><a class="text-levv-korenblauw underline" href="mailto:@{ levvMailAddress }">@{ levvMailAddress }</a>
        </div>
        <div class="flex flex-row gap-2">
            <span>Mocht je liever bellen:</span><a class="text-levv-korenblauw underline" href="tel:@{ levvPhoneNumber }">@{ levvPhoneNumber }</a>
        </div>
    </div>
    <form method="POST" id="contact-form" class="text-xl flex flex-wrap gap-5">
        <fieldset class="flex flex-wrap items-center justify-left gap-5">
            <input type="text" name="name" id="name" class="border border-black/10 p-2 grow bg-white" placeholder="@{ placeholder_name }" required>
            <input type="email" name="email" id="email" class="border border-black/10 p-2 grow-[3] bg-white" placeholder="@{ placeholder_email }" required>
            <textarea name="message" id="message" rows="8" cols="20" class="border border-black/10 p-2 w-full bg-white" placeholder="@{ placeholder_message }" required></textarea>
        </fieldset>
        <fieldset>
            <label class="honnieone honnie" for="name-first"></label>
            <input class="honnieone honnie" autocomplete="off" type="text" id="name-first" name="name-first" placeholder="Your name here" novalidate>
            <label class="honnieone honnie" for="e-mail"></label>
            <input class="honnieone honnie" autocomplete="off" type="email" id="e-mail" name="e-mail" placeholder="Your e-mail here" novalidate>
            <label class="honnietwo honnie" for="name-last"></label>
            <input class="honnietwo honnie" autocomplete="off" type="text" id="name-last" name="name-last" value="John Doe" novalidate>
            <label class="honnietwo honnie" for="retype-email"></label>
            <input class="honnietwo honnie" autocomplete="off" type="text" id="retype-email" name="retype-email" value="prevent_supervisievoorjou.nl" novalidate>
        </fieldset>	
        <fieldset class="flex flex-row items-center">
            <!-- <button id="submit" type="submit" value="Send" disabled class="bg-levv-dieppaars text-white rounded-3xl py-2 px-5 uppercase hover:bg-levv-korenblauw flex items-center">Verstuur</button> -->
            <div class="group text-lg lowercase pl-5 font-semibold grid grid-cols-levv-header-contact grid-rows-levv-header-contact w-fit transition ease-in-out hover:cursor-pointer hover:scale-105 focus:cursor-pointer focus:scale-105 content-center">
                <div class="col-start-1 col-end-4 row-start-1 row-end-4 w-1/2 relative h-[10px] -top-[5px] justify-self-center bg-levv-klei-background">
                </div>
                <button id="submit" type="submit" value="Send" disabled class="h-fit col-start-2 col-end-3 row-start-2 row-end-3 text-center text-levv-wijnrood font-passageway-light border-solid border-transparent border-4 rounded-tl-xl rounded-br-xl uppercase p-2 group-hover:border-levv-klei group-focus:border-levv-klei group-hover:cursor-pointer group-focus:cursor-pointer">Verstuur verzoek</a>
			</div>
        </fieldset>
    </form>
</main>
<@ elements/footer.php @>
