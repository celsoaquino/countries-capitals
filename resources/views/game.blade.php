<x-layout title="Quiz">
    <x-card title="Pergunta: {{ $currentQuestion + 1 }} / {{ $totalQuestions }}">
        <x-question :country="$country">
            @foreach($answers as $answer)
                <x-answer :capital="$answer"></x-answer>
            @endforeach
        </x-question>
    </x-card>
</x-layout>
