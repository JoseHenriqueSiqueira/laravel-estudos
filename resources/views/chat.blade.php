<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/chat.css', 'resources/js/chat.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="chat">
                    <!-- Título do Chat -->
                    <div class="row chat-title">
                        <div class="col-md-12 d-flex justify-content-center">
                            <h6>Chat</h6>
                        </div>
                    </div>
                    <div class="row chat-body">
                        <div class="col-md-12" id="chat_body">
                        </div>
                    </div>
                    <div class="chat-footer">
                        <input class="form-control" type="text" name="" id="input_message">
                        <a class="btn" id="send-message">
                            <img src="https://cdn-icons-png.flaticon.com/128/13888/13888752.png" width="36" height="36">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>