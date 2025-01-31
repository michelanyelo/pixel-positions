<x-layout>
    <x-page-heading>Registro</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Nombre" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Contraseña" name="password" type="password" />
        <x-forms.input label="Confirma tu contraseña" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Empresa" name="employer" />
        <x-forms.input label="Logo de la empresa" name="logo" type="file" accept=".png,.jpg,.jpeg,.webp" />

        <x-forms.button>Crear cuenta</x-forms.button>
    </x-forms.form>
</x-layout>
