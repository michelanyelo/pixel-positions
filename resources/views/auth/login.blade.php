<x-layout>
    <x-page-heading>Iniciar sesión</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Contraseña" name="password" type="password" />

        <x-forms.button>Acceder</x-forms.button>
    </x-forms.form>
</x-layout>
