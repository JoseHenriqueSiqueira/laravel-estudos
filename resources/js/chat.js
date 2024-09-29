import { io } from "socket.io-client";

const socket = io('http://localhost:3000/');
const chat_body = document.getElementById("chat_body");
const input_message = document.getElementById("input_message");

var socket_id;
var msg;

socket.on("connect", () => {
    socket_id = socket.id;
});

socket.on("mensagem", (data) => {
    if(data.socket_id == socket_id) {
        msg = `
            <div class="row">
                <div class="col-md-8 msg-in">
                    <input class="form-control input-msg" value="${data.message}" disabled>
                    <img src="https://cdn-icons-png.flaticon.com/128/4413/4413664.png" width="40" height="40">
                </div>
            </div>
        `
    } else {
        msg = `
            <div class="row">
                <div class="col-md-8 msg-out">
                    <img src="https://cdn-icons-png.flaticon.com/128/4413/4413664.png" width="40" height="40">
                    <input class="form-control input-msg" value="${data.message}" disabled>
                </div>
            </div>
        `
    }

    chat_body.innerHTML += msg
});

document.getElementById("send-message").addEventListener("click", function() {
    let message = input_message.value;
    if(message.trim() == "") return;
    input_message.value = "";
    socket.emit('mensagem', {message});
});