@extends('layouts.app')
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />

<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.45.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.45.0/mapbox-gl.css' rel='stylesheet' />
<style>
    body { margin:0; padding:0; }
    #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
    }

</style>

    <div id='map' ></div>
    {{--$('#map-div').show();--}}
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.1.1/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.1.1/mapbox-gl-geocoder.css' type='text/css' />
<style>
    #geocoder-container > div {
        min-width:50%;
        margin-left:25%;
    }
</style>

    <script>

        mapboxgl.accessToken = 'pk.eyJ1Ijoib2xpYWxhIiwiYSI6ImNqZWpvenB2ZzNianEyeG83emVpOTVzNDMifQ.-SWlUE7o_M9d2g57tTK1DA';
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
            center: [-74.50, 40], // starting position [lng, lat]
            zoom: 9 // starting zoom
        });
        mapboxgl.accessToken = 'pk.eyJ1Ijoib2xpYWxhIiwiYSI6ImNqZWpvenB2ZzNianEyeG83emVpOTVzNDMifQ.-SWlUE7o_M9d2g57tTK1DA';
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/oliala/cjgneoz46000a2rnqtguyma9l', // stylesheet location
            center: [31.297,51.493], // starting position [lng, lat]
            zoom: 14 // starting zoom
        });
        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            country: 'ua'
        });

        map.addControl(geocoder);

        // After the map style has loaded on the page, add a source layer and default
        // styling for a single point.
        map.on('load', function() {
            map.addSource('single-point', {
                "type": "geojson",
                "data": {
                    "type": "FeatureCollection",
                    "features": []
                }
            });

            map.addLayer({
                "id": "point",
                "source": "single-point",
                "type": "circle",
                "paint": {
                    "circle-radius": 10,
                    "circle-color": "#007cbf"
                }
            });

            // Listen for the `geocoder.input` event that is triggered when a user
            // makes a selection and add a symbol that matches the result.
            geocoder.on('result', function(ev) {
                map.getSource('single-point').setData(ev.result.geometry);
            });
        });

        map.on('load', function () {
            // Add a layer showing the places.
            map.addLayer({
//
                "layout": {
                    "icon-image": "{icon}-15",
                    "icon-allow-overlap": true
                }
            });

            // When a click event occurs on a feature in the places layer, open a popup at the
            // location of the feature, with description HTML from its properties.
            map.on('click', 'places', function (e) {
                var coordinates = e.features[0].geometry.coordinates.slice();
                var description = e.features[0].properties.description;

                // Ensure that if the map is zoomed out such that multiple
                // copies of the feature are visible, the popup appears
                // over the copy being pointed to.
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }

                new mapboxgl.Popup()
                    .setLngLat(coordinates)
                    .setHTML(description)
                    .addTo(map);
            });

            // Change the cursor to a pointer when the mouse is over the places layer.
            map.on('mouseenter', 'places', function () {
                map.getCanvas().style.cursor = 'pointer';
            });

            // Change it back to a pointer when it leaves.
            map.on('mouseleave', 'places', function () {
                map.getCanvas().style.cursor = '';
            });
        });

        // Add zoom and rotation controls to the map.
        map.addControl(new mapboxgl.NavigationControl());

        map.on('click', function(e) {
            var features = map.queryRenderedFeatures(e.point, {
                layers: ['chernihiv'] // replace this with the name of the layer
            });

            if (!features.length) {
                return;
            }

            var feature = features[0];

            var popup = new mapboxgl.Popup({ offset: [0, -15] })
                .setLngLat(feature.geometry.coordinates)
                .setHTML('<h3>' + feature.properties.place_name + '</h3>')
                .setLngLat(feature.geometry.coordinates)
                .addTo(map);
        });
    </script>
