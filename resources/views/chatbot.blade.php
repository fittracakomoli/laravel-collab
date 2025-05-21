<!DOCTYPE html>
<html>
<head>
    <title>Chatbot dengan Llama</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            width: full;
            height: 100vh;
        }

        .container {
            margin: auto;
            text-align: center;
            padding: 20px;
            width: 100%;
        }

        #chat-form {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
        }

        .textarea {
            width: 100%;
            max-width: 700px;
            vertical-align: middle;
            padding: 15px 25px;
            border-radius: 40px;
            border: 1px solid #ccc;
            font-size: 16px;
            resize: none;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }

        .answer {
            background-color: #fafafa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }   
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/') }}">Kembali</a>

        <h1>Apa yang bisa saya bantu? Llama Chatbot.</h1>

        <div class="search-box">
            <form id="chat-form" method="POST" action="/ask-llama">
                @csrf
                <input type="text" name="prompt" class="textarea" rows="5" cols="60" placeholder="Tulis pertanyaanmu..." value="{{ old('prompt', session('prompt')) }}">
                <button class="btn" type="submit">Kirim</button>
            </form>
    
            @if(session('response'))
                <div class="answer">
                    <p>{{ session('response') }}</p>
                    {{-- <textarea id="markdown" style="display:none;">{{ session('response') }}</textarea>
                    <div id="preview"></div> --}}
                </div>
            @endif
        </div>
    </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
    const markdown = document.getElementById('markdown').value;
    document.getElementById('preview').innerHTML = marked.parse(markdown);
</script>

</html>
