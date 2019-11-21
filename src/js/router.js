/*jshint esversion: 6 */

const request = new XMLHttpRequest();
const path = window.location.pathname;
const routes = { //LES ROUTES : URL(camel) : VIEW SRC
    'home': 'src/view/home.html',
    '404': 'src/view/404.html',
    'centreDeFormation': 'src/view/ecole.html',
    'entreprise': 'src/view/entreprise.html',
    'projets': 'src/view/projets.html',
    'competences': 'src/view/competences.html',
    'veille': 'src/view/veille.html',
    'contact': 'src/view/contact.html'
};

const toCamel = (s) => { //FONCTION KEBAB > CAMEL
    return s.replace(/([-_][a-z])/ig, ($1) => {
        return $1.toUpperCase()
            .replace('-', '')
            .replace('_', '');
    });
};

const getPath = (routes) => { // RETOURNE LA SRC DE LA VUE DE LA PAGE
    var path = window.location.pathname;
    if (path === '/') {
        return routes.home;
    } else {
        var cleanPath = path.substr(1);
        var camelPath = toCamel(cleanPath);
        if (routes[camelPath] !== undefined){
            return routes[camelPath];
        } else{
            return routes['404'];
        }

    }
};


request.open("GET", getPath(routes), false);
request.send();
document.getElementById("page").innerHTML = request.response;