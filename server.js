let http = require('http')
let fs = require('fs')
let url = require('url')

let server = http.createServer()

server.on('request', (request, response) => {

    /*
    response.writeHead(200)
    let query = url.parse(request.url, true).query
    if (query.name ===  undefined) {
        response.writeHead('Bonjour anonyme')
    } else {
        response.writeHead('Bonjour ' + query.name)
    }
    response.end()
    */
    

    fs.readFile('style.css',(err,data) => {
        if (err) {
            response.writeHead(404)
            response.end("Ce fichier n'existe pas")
        } else {
            response.writeHead(200, {
                'Content-type': 'text/css; charset=utf-8'
            })
            response.end(data)
        }
    })

    fs.readFile('index.html',(err,data) => {
        if (err) {
            response.writeHead(404)
            response.end("Ce fichier n'existe pas")
        } else {
            response.writeHead(200, {
                'Content-type': 'text/html; charset=utf-8'
            })
            response.end(data)
        }
    })
    console.log('Il y a eu une requête')
})

server.listen(8070)