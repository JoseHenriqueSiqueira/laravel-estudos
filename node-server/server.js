const express = require('express');
const http = require('http');
const { Server } = require('socket.io');

const app = express();
const PORT = 3000;
const server = http.createServer(app);

const io = new Server(server, {
  cors: {
    origin: "*",
  }
});

io.on('connection', (socket) => {

  socket.on('mensagem', (data) => {
    io.emit('mensagem', {message: data.message, socket_id: socket.id})
  });

  socket.on('disconnect', () => {
    console.log('A user disconnected');
  });

});

server.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}/`);
});
