const { createServer } = require('http');
const { parse } = require('url');
const { exec } = require('child_process');
const path = require('path');

const server = createServer((req, res) => {
  const { pathname, query } = parse(req.url, true);
  
  // Menjalankan skrip PHP jika path adalah "/index.php" dan terdapat parameter "id"
  if (pathname === '/index.php' && query.id) {
    const id = query.id;
    const phpScriptPath = path.join(__dirname, 'index.php');
    
    // Menjalankan skrip PHP menggunakan PHP-CGI
    exec(`php-cgi -f ${phpScriptPath} id=${id}`, (error, stdout, stderr) => {
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
      res.writeHead(200, { 'Content-Type': 'text/html' });
      res.write(stdout);
      res.end();
    });
  } else {
    // Menangani path yang tidak dikenal
    res.writeHead(404, { 'Content-Type': 'text/plain' });
    res.write('Not Found');
    res.end();
  }
});

const PORT = process.env.PORT || 3000;
server.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
