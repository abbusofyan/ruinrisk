<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet-src.js"></script>
<script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
<script>

// setTimeout(() => {
//     notification('notification-welcome', 5000);
// }, 2000);
//
const DEFAULT_LAT_LNG = [-6.92, 106.2159];
let SHOW_MASYARAKAT_RENTAN_MARKER = false;
let SHOW_AREA_RENDAMAN = false;
let INIT_MASYARAKAT_RENTAN_MARKER = 0;
let map = L.map('mapid').setView(DEFAULT_LAT_LNG, 16);
let marker = new Array();
var control;
var kmz;

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


function areaRendaman() {
  if (!SHOW_AREA_RENDAMAN) {
    showAreaRendaman()
    SHOW_AREA_RENDAMAN = true;
  } else {
    clearAreaRendaman()
    SHOW_AREA_RENDAMAN = false;
  }
}

function showAreaRendaman() {
  var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
      maxZoom: 17,
      opacity: 0.90
  });
  OpenTopoMap.addTo(map);

  kmz = L.kmzLayer().addTo(map);
  control = L.control.layers(null, null, {
      collapsed: false
  }).addTo(map);
  kmz.on('load', function(e) {
      control.addOverlay(e.layer, e.name);
  });

  kmz.load('assets/kmz/peta_rendaman.kmz');
}

function clearAreaRendaman() {
  map.removeLayer(kmz);
}

function getCoordinatesMasyarakatRentan() {
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open( "GET", '<?= base_url("api/getCoordinates") ?>', false ); // false for synchronous request
  xmlHttp.send( null );
  return JSON.parse(xmlHttp.responseText);
}

function masyarakatRentan() {
  if (!SHOW_MASYARAKAT_RENTAN_MARKER) {
    showMasyarakatRentanMarker();
    SHOW_MASYARAKAT_RENTAN_MARKER = true;
  } else {
    clearMayarakatRentanMarker();
    SHOW_MASYARAKAT_RENTAN_MARKER = false;
  }
}

function showMasyarakatRentanMarker() {
  if (INIT_MASYARAKAT_RENTAN_MARKER == 0) {
    // loop coordinates from db
    var coordinates = getCoordinatesMasyarakatRentan();
    coordinates.forEach(function(item, index) {
      var latLng = item.gps.split(',').map((i) => Number(i));
      var LamMarker = new L.marker(latLng).addTo(map).bindPopup(item.nama_kk).openPopup();
      marker.push(LamMarker);
      map.addLayer(LamMarker);
    })
    INIT_MASYARAKAT_RENTAN_MARKER = 1;
  } else {
    // loop coordinates from var marker
    marker.forEach(function(item, index) {
      map.addLayer(item);
    })
  }

}

function clearMayarakatRentanMarker() {
  for(i=0;i<marker.length;i++) {
    map.removeLayer(marker[i]);
  }
}

</script>
