require("./bootstrap");
const turbolinks = require("turbolinks");
turbolinks.start();
document.addEventListener("turbolinks:load", function (event) {
    window.livewire.restart();
});
