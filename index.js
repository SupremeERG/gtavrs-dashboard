const PORT = 80;
const express = require("express");
const path = require("path");
const https = require("https");
const fs = require("fs");
const app = express();
const nodemailer = require("nodemailer");

// set middleware
app.use(express.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, '/public')));
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, '/views'));


app.get('/', (req, res) => {
    res.render("home")
})

app.get('/contact', (req, res) => {
    res.render("contact")
})

app.post('/contact', (req, res) => {
    console.log(req.body);
    res.send("ok")
    nodemailer.createTransport({
        host: 'mail.name.com',
        port: 443,
        secure: true, // true for 465, false for other ports
        auth: {
          user: 'support@cheapgta.com', // your domain email address
          pass: 'Support0407*' // your password
        }
      }).sendMail({
          from: "support@cheapgta.com",
          to: "support@cheapgta.com",
          subject: "Contact form",
          html: "test line"
      });
})
app.get('*', (req, res) => {
    res.status(404).send("Page not found");
});

// listen
app.listen(PORT, function () {
  console.log('listening on port', PORT)
})
