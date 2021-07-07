<x-layout>
    <main class="input">
        <h4>Register</h4>
        <form method="POST" action="/register" >
        @csrf
            <div class="input-item">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="input-item">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" required>
                @error('username')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="input-item">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
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
                <button type="submit" class="submit-button">Submit</button>
            </div>
        </form>
    </main>
</x-layout>