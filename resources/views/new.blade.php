<x-layout>
    <div class="budget">
        @foreach ($categories as $category)
            <div class="budget-item">
                <span> {{ $category->name }}</span>
                <input type="text">
            </div>
        @endforeach
    </div>
    <div class="budget">
        <button class="submit-button">ADD</button>
    </div>
</x-layout>