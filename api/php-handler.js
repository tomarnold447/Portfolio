const { createServer } = require('http');
const { parse } = require('url');
const { exec } = require('child_process');

createServer((req, res) => {
    const { query } = parse(req.url, true);
    
}).listen();