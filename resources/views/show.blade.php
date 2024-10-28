<x-layout>
    <x-card title="Resultados Finais">
        <p>Total de Questões: {{ $total_questions }}</p>
        <p>Respostas Certas: {{ $correct_answers }}</p>
        <p>Respostas Erradas: {{ $wrong_answers }}</p>
        <p class="{{ $percentage < 50 ? 'text-red-600' : 'text-blue-600' }}">Score Final: {{ $percentage }}%</p>
        <div class="mt-6">
            <x-link href="{{ route('home') }}">Voltar ao Início</x-link>
        </div>
    </x-card>
</x-layout>
