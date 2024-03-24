// Инициализация карты
var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);

// Добавление меток пользователей
for (var i = 0; i < users.length; i++) {
    var user = users[i];
    L.marker(user.latlng).addTo(map).bindPopup(user.name);
}