<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome to Laravel!</h1>
    <p>Welcome again from views</p>

    <div class="navigasi">
        <a href="{{ url('/chatbot') }}">Chatbot</a>
        <a href="{{ url('/products') }}">Products</a>
        <a href="{{ url('/react') }}">React</a>
    </div>
</body>
</html>
