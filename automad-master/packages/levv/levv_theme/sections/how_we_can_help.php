<@ if @{ :origUrl } = '/homepage-sections/how-we-can-help' @>
    <section id="@{ :origUrl |
        replace(
            '/\\//',
            ''
        )}" class="">
        <h2 class="w-full text-5xl text-svj-primary font-thin capitalize md:col-span-12">
            @{ title }
        </h2>
        <div>
            @{ +how-we-can-help }
        </div>
    </section>
<@ end @>