
const ua = detect.parse(navigator.userAgent);

$('body').append(`<p>${ua.device}<p>`);