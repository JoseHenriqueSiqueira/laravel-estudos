const express = require('express');
const http = require('http');
const { Server } = require('socket.io');
const cors = require('cors'); // Adiciona o pacote CORS

const app = express();
const PORT = 3000;
const server = http.createServer(app);

const io = new Server(server, {
  cors: {
    origin: "*",
    methods: ["GET", "POST"]
  }
});

app.use(cors());

app.get("/notificacao", (req, res) => {
  io.emit('notificacao', { message: 'Olá!' });
  res.send("Notificação enviada ao cliente", 200);
});

io.on('connection', (socket) => {
  console.log('A user connected');

  socket.on('disconnect', () => {
    console.log('A user disconnected');
  });
});

server.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}/`);
});
