<x-layout>
    <main class="input">
        <h4>Log In</h4>
        <form method="POST" action="/login" >
            @csrf
            <div class="input-item">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" required>
                @error('username')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="input-item">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="input">
                <button type="submit" class="submit-button">Log in</button>
            </div>
        </form>
    </main>
</x-layout>