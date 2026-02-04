<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Form</title>
    </head>
    <body>
        <h1>Simple Form</h1>

        @if (session('status'))
            <p>{{ session('status') }}</p>
        @endif

        <form method="POST" action="{{ route('submissions.store') }}">
            @csrf
            <div>
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" required>
                @error('last_name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="mobile">Mobile</label>
                <input id="mobile" name="mobile" type="text" value="{{ old('mobile') }}" required>
                @error('mobile')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="city">City</label>
                <input id="city" name="city" type="text" value="{{ old('city') }}" required>
                @error('city')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="country">Country</label>
                <input id="country" name="country" type="text" value="{{ old('country', 'India') }}" required>
                @error('country')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="state">State</label>
                <input id="state" name="state" type="text" value="{{ old('state') }}" required>
                @error('state')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Submit</button>
        </form>
    </body>
</html>
