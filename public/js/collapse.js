// (function () { var triggers = document.querySelectorAll("[data-collapse-target]"); var collapses = document.querySelectorAll("[data-collapse]"); if (triggers && collapses) { Array.from(triggers).forEach(function (trigger) { return Array.from(collapses).forEach(function (collapse) { if (trigger.dataset.collapseTarget === collapse.dataset.collapse) { trigger.addEventListener("click", function () { if (collapse.style.height && collapse.style.height !== "0px") { collapse.style.height = 0; collapse.style.overflow = "hidden"; trigger.removeAttribute("open") } else { collapse.style.height = "".concat(collapse.children[0].clientHeight, "px"); collapse.style.overflow = "visible"; trigger.setAttribute("open", "") } }) } }) }) } })();


// Simpan fungsi efek collapse dalam variabel agar dapat digunakan ulang
var handleCollapse = function (trigger, collapse) {
    if (collapse.classList.contains('h-0')) {
        collapse.classList.remove('h-0');
        collapse.classList.add('h-auto', 'transition-height', 'ease-out');
        trigger.setAttribute("open", "");
    } else {
        collapse.classList.remove('h-auto', 'transition-height', 'ease-out');
        collapse.classList.add('h-0');
        trigger.removeAttribute("open");
    }
};

// Fungsi untuk menambahkan event listener pada elemen-elemen baru setelah AJAX
var addEventListenersToNewElements = function () {
    var triggers = document.querySelectorAll("[data-collapse-target]");
    var collapses = document.querySelectorAll("[data-collapse]");

    if (triggers && collapses) {
        Array.from(triggers).forEach(function (trigger) {
            Array.from(collapses).forEach(function (collapse) {
                if (trigger.dataset.collapseTarget === collapse.dataset.collapse) {
                    trigger.addEventListener("click", function () {
                        handleCollapse(trigger, collapse);
                    });
                }
            });
        });
    }
};

// Gunakan fungsi ini setelah menambahkan elemen-elemen baru setelah AJAX
addEventListenersToNewElements();

