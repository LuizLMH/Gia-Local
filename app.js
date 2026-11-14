
// window.addEventListener('DOMContentLoaded', function () {
//     let redesSociaisLink = document.querySelector('.redes-sociais');
//     console.log(redesSociaisLink);

//     console.log("Hello World");
// });

let colors = [
    'yellow-500',
    'gray-600',
    'zinc-900',
    'zinc-500',
    'red-600',
    'sky-600',
]


function get_random(list) {
    return list[Math.floor((Math.random() * list.length))];
}

window.onload = function () {
    let redesSociaisLink = document.querySelectorAll('.redes-sociais');

    redesSociaisLink.forEach(function (element, index) {

        let color = get_random(colors)

        element.classList.remove('bg-cyan-300');
        element.classList.add('bg-' + color);
    });

    console.log("Hello World");
}

function loadDoc(query) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("ler").innerHTML = this.response;
        console.log(this.response);
    }
    xhttp.open("GET", query);
    xhttp.send();
}

