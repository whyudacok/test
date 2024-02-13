const { createServer } = require('http');
const { parse } = require('url');
const { exec } = require('child_process');

const server = createServer((req, res) => {
  const { pathname, query } = parse(req.url, true);
  
  // Memeriksa apakah URL adalah "/index.php" dan memiliki parameter "id"
  if (pathname === '/index.php' && query.id) {
    const id = query.id;
    // Menjalankan skrip PHP dengan parameter yang diberikan
    exec(`php index.php?id=${id}`, (error, stdout, stderr) => {
      if (error) {
        res.writeHead(500, { 'Content-Type': 'text/plain' });
        res.write(`Error: ${error.message}`);
        res.end();
        return;
      }
      if (stderr) {
        res.writeHead(500, { 'Content-Type': 'text/plain' });
        res.write(`Error: ${stderr}`);
        res.end();
        return;
      }
      // Menulis keluaran dari skrip PHP sebagai respons
      res.writeHead(200, { 'Content-Type': 'text/html' });
      res.write(stdout);
      res.end();
    });
  } else {
    res.writeHead(404, { 'Content-Type': 'text/plain' });
    res.write('Not Found');
    res.end();
  }
});

const PORT = process.env.PORT || 3000;
server.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
