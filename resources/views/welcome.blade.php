<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">URL Shortener</h1>
    <form action="{{ route('shorten') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="url" class="form-label">Enter a URL to shorten</label>
            <input type="url" class="form-control" id="url" name="url" placeholder="https://example.com" required>
        </div>
        <button type="submit" class="btn btn-primary">Shorten</button>
    </form>

    @if(session('shortened'))
        <div class="alert alert-success mt-4">
            Shortened URL: <a href="{{ session('shortened') }}" target="_blank">{{ session('shortened') }}</a>
        </div>
    @endif
</div>
</body>
</html>
