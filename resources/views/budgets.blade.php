<x-layout>
    @foreach ($budgets as $budget)
        <div>{{ $budget->name }}<div>
    @endforeach
</x-layout>