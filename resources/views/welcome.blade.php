<x-layout>
    <div class="space-y-30">
        <section class="text-center space-y-8 py-10">
            <h1 class="font-bold text-4xl">Encontremos tu próximo trabajo!</h1>

            <form action="">
                <input type="text" name="search" id="search" placeholder="Desarrollador web, Diseñador, etc." autocomplete="off"
                    class="rounded-xl bg-white/10 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>

        <section>
            <x-section-heading>
                Ofertas destacadas
            </x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Categorías</x-section-heading>
            <div class="mt-6">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>
                Últimos publicados
            </x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
