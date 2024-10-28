<x-layout title="Resultado">
    <x-card title="Pergunta: {{ $currentQuestion + 1 }} / {{ $totalQuestions }}">
        <x-question :$country/>
        <p>Resposta correta: {{ $correct_answer }}</p>
        <p>A sua resposta: {{ $choice_answer }}</p>
        <div class="mt-6">
            <x-link href="{{ route('next') }}">Avançar</x-link>
        </div>
    </x-card>
</x-layout>
