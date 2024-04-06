// Инициализация карты
var map = L.map('map').setView([55.751244, 37.618423], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);

var point1 = L.marker([55.751244, 37.618423]).addTo(map);
var point2 = L.marker([55.751684, 37.618423]).addTo(map);
var point3 = L.marker([55.795544, 37.7566]).addTo(map);
var point4 = L.marker([55.753944, 37.7579]).addTo(map);
var point5 = L.marker([55.753577, 39.7539]).addTo(map);
var point6 = L.marker([55.752544, 37.7588]).addTo(map);




var blueIcon = L.icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
});
var redIcon = L.icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
});


// Функция для расчета расстояния между точками
function calculateDistance(latlng1, latlng2) {
    var distance = latlng1.distanceTo(latlng2); // Расстояние в метрах
    return distance.toFixed(2);
  }


function setIcon(){
  
}


  // Обработчик события при клике на маркеры
  function onMarkerClick(e) {
    var distance = calculateDistance(e.target.getLatLng(), (e.target === point1) ? point2.getLatLng() : point1.getLatLng());
    alert("Расстояние от вашей точки: " + distance + " метров");

    if (distance > 100) {
      point2.setIcon(redIcon);
      point3.setIcon(redIcon);
      point4.setIcon(redIcon);
      point5.setIcon(redIcon);
      point6.setIcon(redIcon);
    } else {
      point2.setIcon(blueIcon);
      point3.setIcon(redIcon);
      point4.setIcon(redIcon);
      point5.setIcon(redIcon);
      point6.setIcon(redIcon);
    }
  }


  
  // Привязываем обработчик события к маркерам
  // point1.on('click', onMarkerClick);
  point2.on('click', onMarkerClick);
  point3.on('click', onMarkerClick);
  point4.on('click', onMarkerClick);
  point5.on('click', onMarkerClick);
  point6.on('click', onMarkerClick);
