<x-layout>
    <div class="space-y-12">
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
        </section>
    </div>
</x-layout>
