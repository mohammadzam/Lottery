var cities = L.layerGroup();
L.marker([36.209738, 37.146185]).bindPopup("This is Mannat Themes, CO.").addTo(cities);
var mbAttr = 'Website - <a href="https://mannatthemes.com/" target="_blank">Mannatthemes</a> ';
mbUrl = "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw";
var grayscale = L.tileLayer(mbUrl, {
        id: "mapbox/light-v9",
        tileSize: 512,
        zoomOffset: -1,
        attribution: mbAttr
    }),
    streets = L.tileLayer(mbUrl, {
        id: "mapbox/streets-v11",
        tileSize: 512,
        zoomOffset: -1,
        attribution: mbAttr
    }),
    map = L.map("user_map", {
        center: [36.209738, 37.146185],
        zoom: 5,
        layers: [grayscale, cities]
    }),
    baseLayers = {
        Grayscale: grayscale,
        Streets: streets
    },
    overlays = {
        Cities: cities
    };
L.control.layers(baseLayers, overlays).addTo(map), new Lightpick({
    field: document.getElementById("light_datepick"),
    inline: !0
});
