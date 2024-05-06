// Инициализация карты
var map = L.map('map').setView([55.751244, 37.618423], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
}).addTo(map);


var markers = []; // Массив для хранения маркеров

// Обработчик щелчка на карте
map.on('click', function(e) {
  // Создаем маркер с выбранным пользователем цветом
  var marker = L.marker(e.latlng, { draggable: true, color: document.getElementById('color').value }).addTo(map);
  markers.push(marker); // Добавляем маркер в массив

  // Отображаем форму при клике на маркер
  document.getElementById('popup-form').style.display = 'block';

  // Обработчик события перемещения маркера
  marker.on('dragend', function(e) {
    document.getElementById('popup-form').style.display = 'block';
  });

  // Обработчик удаления маркера при щелчке на нем
  marker.on('click', function() {
    map.removeLayer(marker);
    var index = markers.indexOf(marker);
    if (index !== -1) {
      markers.splice(index, 1); // Удаляем маркер из массива
    }
  });
});

// Обработчик отправки формы
document.getElementById('comment-form').addEventListener('submit', function(e) {
  e.preventDefault(); // Предотвращаем стандартное поведение отправки формы

  var username = document.getElementById('username').value;
  var comment = document.getElementById('comment').value;
  var color = document.getElementById('color').value;

  // Получаем последний добавленный маркер
  var marker = markers[markers.length - 1];

  // Создаем и добавляем комментарий к маркеру
  var popupContent = "<b>" + username + "</b><br>" + comment + "<br><br><button onclick=\"deleteMarker(" + markers.length + ")\">Удалить метку</button>";
  marker.bindPopup(popupContent).openPopup();

  // Сохраняем координаты маркера, цвет метки и комментарий в localStorage
  var markerData = {
    lat: marker.getLatLng().lat,
    lng: marker.getLatLng().lng,
    color: color,
    username: username,
    comment: comment
  };
  localStorage.setItem('markerData-' + (markers.length - 1), JSON.stringify(markerData));

  // Скрываем форму
  document.getElementById('popup-form').style.display = 'none';

  // Очищаем поля формы
  document.getElementById('username').value = '';
  document.getElementById('comment').value = '';
});

// Функция для удаления маркера
function deleteMarker(index) {
  var marker = markers[index];
  map.removeLayer(marker);
  markers.splice(index, 1);
  localStorage.removeItem('markerData-' + index);
}

document.getElementById('clear-markers').addEventListener('click', function() {
  markers.forEach(function(marker) {
    map.removeLayer(marker);
  });
  markers = [];
  localStorage.clear(); // Очищаем localStorage
});

// При загрузке страницы проверяем наличие данных о маркерах в localStorage и восстанавливаем их
for (var i = 0; i < localStorage.length; i++) {
  var key = localStorage.key(i);
  if (key.startsWith('markerData-')) {
    var savedMarkerData = JSON.parse(localStorage.getItem(key));
    var marker = L.marker([savedMarkerData.lat, savedMarkerData.lng], { draggable: true, color: savedMarkerData.color }).addTo(map);
    var popupContent = "<b>" + savedMarkerData.username + "</b><br>" + savedMarkerData.comment + "<br><br><button onclick=\"deleteMarker(" + i + ")\">Удалить метку</button>";
    marker.bindPopup(popupContent).openPopup();

    // Обработчик события перемещения маркера
    marker.on('dragend', function(e) {
      document.getElementById('popup-form').style.display = 'block';
    });

    markers.push(marker);
  }
}
