<x-layout title="Home">
    <x-card title="Número de Perguntas:">
        <x-forms.form action="{{ route('prepare') }}" method="POST">
            <x-forms.input name="total_questions" label=""/>
            <x-forms.button>Iniciar</x-forms.button>
        </x-forms.form>
    </x-card>
</x-layout>
