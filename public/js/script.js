async function findUser() {
const getCoords = async () => {
        const pos = await new Promise((resolve, reject) => {
            navigator.geolocation.getCurrentPosition(resolve, reject);
        });
    
        return {
            long: pos.coords.longitude,
            lat: pos.coords.latitude,
        };
    };

    const coords = await getCoords();
    return coords;
}
let Mymap = document.getElementById('mymap') ;
console.log(Mymap);

async function locateCloserWorkers() {
    let work = document.getElementById('work').value ;
    let evaluation = document.getElementById('evaluation').value ;
    let userLocation = await findUser() ;
    let latitude = userLocation.lat ;
    let longitude = userLocation.long ;
    console.log(userLocation);
    
    if (userLocation) {
        fetch('http://127.0.0.1:8000/api/workers/'+latitude+'/'+longitude+'/'+work+'/'+evaluation)
        .then(response => response.json())
        .then(data => console.log(data))
        const map = L.map('map').setView([32.24778627307575,-8.521564491920195], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);

    L.marker([latitude, longitude]).addTo(map)
    .openPopup();
    }
}
locateCloserWorkers() ;




