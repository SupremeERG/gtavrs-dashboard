
const device = detect.parse(navigator.userAgent).device;

if(device != null) {
    $('head').append('<link rel="stylesheet" href="css/mobile.css"</link>')
}
else {
    $('head').append('<link rel="stylesheet" href="css/stylesheet.css"</link>')
}