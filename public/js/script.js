const map = L.map('map') 

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

async function DisplayUserOnMap() {
    let userLocation = await findUser() ;
    let latitude = userLocation.lat ;
    let longitude = userLocation.long ;

    map.setView([latitude,longitude], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);
    L.marker([latitude, longitude]).addTo(map)
    .openPopup();
    return userLocation ;
}

async function locateCloserWorkers() {
    let work = document.getElementById('work').value ;
    let evaluation = document.getElementById('evaluation').value ?? 0 ;

    
    if (userLocation) {
        
        fetch('http://127.0.0.1:8000/api/workers/'+work+'/'+evaluation)
        .then(response => response.json())
        .then(data =>{
            data.Worker.forEach(element => {
                console.log(element);
                    var workerIcon = L.icon({
                        iconUrl: '../Ressources/worker.png',
                        iconSize:     [20, 20], 
                        shadowSize:   [50, 64], 
                        popupAnchor:  [0, 0] 
                        });
                        let marker = L.marker([element.latitude, element.longitude], {icon: workerIcon});
                        marker.addTo(map)
                        marker.on('click', function () {
                            window.location.href = 'http://127.0.0.1:8000/worker/profile/'+element.id ;
                        })
                });
             return ;
            })
    }
}

async function getWorkerCoords() {
    let userLocation = await findUser() ;
    let latitudeInput = document.getElementsByName('latitude')[0];
    let longitudeInput = document.getElementsByName('longitude')[0];
    latitudeInput.value = userLocation.lat ;
    longitudeInput.value = userLocation.long ;
    document.getElementById('getCoordsButton').style.display='none';
}

var userLocation = DisplayUserOnMap() ;


