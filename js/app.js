const map = L.map('map').setView([8.3214, 80.3993], 12);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const coords = [
    [8.350337129569246, 80.39636869673004],
    [8.35130897804682, 80.51627017712966],
    [8.355588835663388, 80.39646436789471],
    [8.35153960806359, 80.40375491022414],
    [8.334776686597353, 80.39022281022407],
    [8.345033511784331, 80.39731419857695]
];
const rent = ['Ruwanwelisaya', 'mihintale temple', 'thuparama dagoba', 'Jetavanaramaya', 'Isurumuniya', 'sri maha bodiya'];
const areas = ['Ruwanwelisaya', 'mihintale temple', 'thuparama dagoba', 'Jetavanaramaya', 'Isurumuniya', 'sri maha bodiya'];
const images = [
    'assets/images_places/img1.jpg',
    'assets/images_places/img2.jpeg',
    'assets/images_places/img3.jpeg',
    'assets/images_places/img4.jpg',
    'assets/images_places/img5.jpg',
    'assets/images_places/img6.jpg'
];

// Remove the "L" variable assignment
// let L = coords.length;

var apart1 = document.querySelector('#apart1');
var apart2 = document.querySelector('#apart2');
var apart3 = document.querySelector('#apart3');
var apart4 = document.querySelector('#apart4');
var apart5 = document.querySelector('#apart5');
var apart6 = document.querySelector('#apart6');

aparts = [apart1, apart2, apart3, apart4, apart5, apart6];

for (let i = 0; i < coords.length; i++) {
    // Popups
    const pop = L.popup({
        closeOnClick: true
    }).setContent('<h4>Area: ' + areas[i] + '<br>'+ '</h4><img src="' + images[i] + '" style="height: 100px">');
    
    // Markers
    const marker = L.marker(coords[i]).addTo(map).bindPopup(pop);
    
    // Tooltips
    const tooltip = L.tooltip({
        permanent: true
    }).setContent(rent[i]);

    marker.bindTooltip(tooltip);

    aparts[i].addEventListener("mouseover", () => {
        map.flyTo(coords[i], 16);
    });
}
