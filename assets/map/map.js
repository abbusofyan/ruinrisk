var map = null;
var permalink = null;
var markers = null;
var cross = null;
var lgpx = null;
var centerpos = null;
var mousepos = null;
var circlecount = 1;
var active = 0;
var button = null;

function draw_cross() {
	var size = new OpenLayers.Size(15,15);
	var offset = new OpenLayers.Pixel(-(size.w/2), -(size.h/2));
	var icon = new OpenLayers.Icon('/cross.png',size,offset);
	markers.removeMarker(cross);
	cross = new OpenLayers.Marker(map.getCenter(),icon);
	markers.addMarker(cross);

	var latlondiv = document.getElementById('latlon');
	centerpos = map.getCenter();
	centerpos.transform(map.getProjectionObject(), new OpenLayers.Projection("EPSG:4326"));
	var lon = centerpos.lon.toPrecision(8);
	var lat = centerpos.lat.toPrecision(8);
	latlondiv.firstChild.data = "Current map center is lon="+lon+", lat="+lat;
}

function mouse(e) {
	var pixel = this.events.getMousePosition(e);
	var mousepos = map.getLonLatFromPixel(pixel);
	mousepos.transform(map.getProjectionObject(), new OpenLayers.Projection("EPSG:4326"));
	var lat = mousepos.lat.toPrecision(8);
	var lon = mousepos.lon.toPrecision(8);
	var curposdiv = document.getElementById('curpos');
	curposdiv.firstChild.data = "Current mouse position is lon="+lon+", lat="+lat;

	var dist = OpenLayers.Util.distVincenty(centerpos, mousepos);
	dist = dist.toPrecision(6);
	var distdiv = document.getElementById('curdist');
	distdiv.firstChild.data = "Current distance is "+dist+" km";

	if(active == 1) {
		if(lgpx != null) {
			map.removeLayer(lgpx);
		}
		//lgpx = new OpenLayers.Layer.GML("circle", "circle.php?lon="+centerpos.lon+"&lat="+centerpos.lat+"&dist="+dist,  { format: OpenLayers.Format.GPX, style: {strokeColor: "#000000", strokeWidth: 1, strokeOpacity: 0.9}, projection: new OpenLayers.Projection("EPSG:4326") });
		lgpx = new OpenLayers.Layer.Vector("circle", { strategies: [new OpenLayers.Strategy.Fixed()], protocol: new OpenLayers.Protocol.HTTP({ url: "circle.php?lon="+centerpos.lon+"&lat="+centerpos.lat+"&dist="+dist, format: new OpenLayers.Format.GPX() }), style: {strokeColor: "#000000", strokeWidth: 1, strokeOpacity: 0.9}, projection: new OpenLayers.Projection("EPSG:4326") });
		map.addLayer(lgpx);
	}
}

function toggle() {
	if(active == 0) {
		active = 1;
		button.activate();
	} else {
		active = 0;
		button.deactivate();
		if(lgpx != null) {
			map.removeLayer(lgpx);
			lgpx = null;
		}
	}
}

function clicky(e) {
	//alert("da hat doch einer geklickt");
	if(active == 1) {
		var pixel = this.events.getMousePosition(e);
		var mousepos = map.getLonLatFromPixel(pixel);
		mousepos.transform(map.getProjectionObject(), new OpenLayers.Projection("EPSG:4326"));
		var dist = OpenLayers.Util.distVincenty(centerpos, mousepos);
		//var nextgpx = new OpenLayers.Layer.GML("circle_"+circlecount, "circle.php?lon="+centerpos.lon+"&lat="+centerpos.lat+"&dist="+dist,  { format: OpenLayers.Format.GPX, style: {strokeColor: "#000000", strokeWidth: 1, strokeOpacity: 0.9}, projection: new OpenLayers.Projection("EPSG:4326") });
		nextgpx = new OpenLayers.Layer.Vector("circle_"+circlecount, { strategies: [new OpenLayers.Strategy.Fixed()], protocol: new OpenLayers.Protocol.HTTP({ url: "circle.php?lon="+centerpos.lon+"&lat="+centerpos.lat+"&dist="+dist, format: new OpenLayers.Format.GPX() }), style: {strokeColor: "#000000", strokeWidth: 1, strokeOpacity: 0.9}, projection: new OpenLayers.Projection("EPSG:4326") });
		map.addLayer(nextgpx);
		circlecount++;
		active = 0;
		button.deactivate();
	}
}

function init_map(div_id, lon, lat, zoom) {
	map = new OpenLayers.Map(div_id, {
		controls: [
			new OpenLayers.Control.Navigation(),
			new OpenLayers.Control.PanZoomBar(),
			new OpenLayers.Control.ScaleLine(),
			new OpenLayers.Control.LayerSwitcher()
		],
		eventListeners: {
			"move": draw_cross,
		},
		maxResolution: 156543.0339,
		numZoomLevels: 20,
		units: 'm',
		projection: new OpenLayers.Projection("EPSG:900913"),
		displayProjection: new OpenLayers.Projection("EPSG:4326")
	});

	var layerMapnik = new OpenLayers.Layer.OSM.Mapnik("Mapnik");
	map.addLayer(layerMapnik);

	markers = new OpenLayers.Layer.Markers( "Markers" );
	map.addLayer(markers);

	//lgpx = new OpenLayers.Layer.GML("circle", "circle.php?lon="+lon+"&lat="+lat,  { format: OpenLayers.Format.GPX, style: {strokeColor: "#000000", strokeWidth: 1, strokeOpacity: 0.9}, projection: new OpenLayers.Projection("EPSG:4326") });
	lgpx = new OpenLayers.Layer.Vector("circle", { strategies: [new OpenLayers.Strategy.Fixed()], protocol: new OpenLayers.Protocol.HTTP({ url: "circle.php?lon="+lon+"&lat="+lat, format: new OpenLayers.Format.GPX() }), style: {strokeColor: "#000000", strokeWidth: 1, strokeOpacity: 0.9}, projection: new OpenLayers.Projection("EPSG:4326") });
	map.addLayer(lgpx);

	var panel = new OpenLayers.Control.Panel( {div: document.getElementById("panel")});
	button = new OpenLayers.Control.Button({ displayClass: "Button", trigger: toggle });
	panel.addControls([button]);
	map.addControl(panel);

	//map.setCenter(new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), map.getProjectionObject()), zoom);
	map.setCenter(new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), map.getProjectionObject()));
	map.zoomTo(zoom);
	map.addControl(permalink=new OpenLayers.Control.Permalink());

	return map;
}
