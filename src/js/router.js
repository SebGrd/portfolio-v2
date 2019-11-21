/*jshint esversion: 6 */

const path = window.location.pathname;
const routes = {
    '/': 'src/view/home.html',
    '/centre-formation': 'src/view/ecole.html',
    '/entreprise': 'src/view/entreprise.html',
    '/projets': 'src/view/projets.html',
    '/competences': 'src/view/competences.html',
    '/veille': 'src/view/veille.html',
    '/contact': 'src/view/contact.html'
}

function getPath(path, routes){
    if(routes.path.length > 0){
        
    }
}
const request = new XMLHttpRequest();
request.open("GET", "src/view/home.html", false);
request.send();
console.log(request);
document.getElementById("page").innerHTML = request.response;