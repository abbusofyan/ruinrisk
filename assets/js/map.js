
let SHOW_MASYARAKAT_RENTAN_MARKER = false;
let INIT_MASYARAKAT_RENTAN_MARKER = 0;
let marker = new Array();
var control;
var kmz;
var filter_on = [];
let map = L.map('mapid', { zoomControl: false }).setView(DEFAULT_LAT_LNG, 16);

L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3'],
    position: 'topright',
}).addTo(map);

L.control.zoom({ position: 'topright' }).addTo(map);

L.easyButton( 'bx bx-filter bx-lg', function(){
    $('#modalFilter').modal('show');
}).setPosition('topright').addTo(map);

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
        $(this).css('background-color', 'yellow');
    } else {
        var file = getFile(filter)
        var OpenTopoMap = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
            maxZoom: 20,
        });
        OpenTopoMap.addTo(map);

        window['kmz_' + filter] = L.kmzLayer().addTo(map);
        window['kmz_' + filter].load(base_url+'assets/kmz/' + file);
        filter_on.push(filter)
        $(this).css('background-color', '#F9BFBF');
    }
}

$(".filter").click(function() {
    var val = $(this).attr('data-val');
    var el = $(this);
    if (val == 'masyarakat rentan') {
        masyarakatRentan()
    } else {
        filter(val)
    }
    setActive(el, val)
    $('#modalFilter').modal('hide');
})

function setActive(el, filter) {
    if (filter_on.includes(filter)) {
        el.addClass('filter-active');
    } else {
        el.removeClass('filter-active');
    }
    }

    function clearFilter(filter) {
    map.removeLayer(filter);
}

function getCoordinatesMasyarakatRentan() {
    var xmlHttp = new XMLHttpRequest();
    var baseUrl = $('#base_url').val();
    xmlHttp.open( "GET", baseUrl+'/api/API/getCoordinates', false ); // false for synchronous request
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
        filter_on.push('masyarakat rentan')
        INIT_MASYARAKAT_RENTAN_MARKER = 1;
    } else {
        // loop coordinates from var marker
        marker.forEach(function(item, index) {
        map.addLayer(item);
        })
    }
}

function clearMayarakatRentanMarker() {
    filter_on = filter_on.filter(item => item !== 'masyarakat rentan')
    for(i=0;i<marker.length;i++) {
        map.removeLayer(marker[i]);
    }
}
