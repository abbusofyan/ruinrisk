<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>

<script>
const DEFAULT_LAT_LNG = [-6.92, 106.2159];
let SHOW_MASYARAKAT_RENTAN_MARKER = false;
let INIT_MASYARAKAT_RENTAN_MARKER = 0;
let map = L.map('mapid').setView(DEFAULT_LAT_LNG, 16);
let marker = new Array();
var control;
var kmz;
var filter_on = [];

L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);

function getFile(filter) {
  switch (filter) {
    case 'semua jalur':
      return 'Semua Jalur.kmz';
      break;

    case 'jalur mobil':
      return 'Jalur Mobil.kmz';
      break;

    case 'jalur motor':
      return 'Jalur Motor.kmz';
      break;

    case 'area rendaman':
      return 'Pemodelan ITB.kmz';
      break;

    case 'jalan setapak':
      return 'Jalan Setapak.kmz';
      break;

    case 'sekolah':
      return 'Sekolah.kmz';
      break;
    default:
  }
}

function filter(filter) {
  if (filter_on.includes(filter)) {
    map.removeLayer(window['kmz_' + filter]);
    filter_on = filter_on.filter(item => item !== filter)
  } else {
    var file = getFile(filter)
    var OpenTopoMap = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
    });
    OpenTopoMap.addTo(map);

    window['kmz_' + filter] = L.kmzLayer().addTo(map);
    window['kmz_' + filter].load('assets/kmz/' + file);
    filter_on.push(filter)
  }
}

$(".filter").click(function() {
  var val = $(this).attr('data-val');
  if (val == 'masyarakat rentan') {
    masyarakatRentan()
  } else {
    filter(val)
  }
  $('#modalFilter').modal('hide');
})

function clearFilter(filter) {
  map.removeLayer(filter);
}

function getCoordinatesMasyarakatRentan() {
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open( "GET", '<?= base_url("api/API/getCoordinates") ?>', false ); // false for synchronous request
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
