const PORT = 80;
const express = require("express");
const path = require("path");
const app = express();

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
})
app.get('*', (req, res) => {
    res.status(404).send("Page not found");
});

app.listen(PORT, () => {
    console.log("Listening on port", PORT)
});
