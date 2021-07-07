<x-layout>
    <div class="input">
        @foreach ($categories as $category)
            <div class="input-item">
                <span> {{ $category->name }}</span>
                <input type="text">
            </div>
        @endforeach
    </div>
    <div class="input">
        <button type="submit" class="submit-button">ADD</button>
    </div>
</x-layout>