<x-layout>
    <x-page-heading>Nuevo trabajo</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Titulo" name="title" placeholder="Desarrollador web, Diseñador, etc."/>
        <x-forms.input label="Salario" name="salary" placeholder="$76.000.000 CLP"/>
        <x-forms.input label="Ubicación" name="location" placeholder="Santiago, Chile"/>

        <x-forms.select label="Horario" name="schedule">
            <option value="part-time">Part Time</option>
            <option value="full-time">Full Time</option>
            <option value="freelance">Freelance</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>
        <x-forms.checkbox label="Destacado (precio extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (separar por comas)" name="tags" placeholder="frontend, backend, educación"/>

        <x-forms.button>Publicar</x-forms.button>
    </x-forms.form>
</x-layout>
