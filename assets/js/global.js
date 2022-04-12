
const unreload = (event) => {
    event = event || window.event;
    event.preventDefault();
    window.history.pushState({}, "", event.target.href);
    handleLocation(event.target.href);
};

const handleLocation = async (root) => {
    const route = root + '?routing=true' || routes[404];
    const html = await fetch(route).then((data) => data.text());
    document.getElementById("reload-content").innerHTML = html;
};

window.onpopstate = handleLocation;
window.route = route;

handleLocation();
