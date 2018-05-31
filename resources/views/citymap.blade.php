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
        map.on('load', function () {
            // Add a layer showing the places.
            map.addLayer({
                "id": "places",
                "type": "symbol",
                "source": {
                    "type": "geojson",
                    "data": {
                        "type": "FeatureCollection",
                        "features": [{
                            "type": "Feature",
                            "properties": {
                                "description": "<strong>Make it Mount Pleasant</strong><p><a href=\"http://www.mtpleasantdc.com/makeitmtpleasant\" target=\"_blank\" title=\"Opens in a new window\">Make it Mount Pleasant</a> is a handmade and vintage market and afternoon of live entertainment and kids activities. 12:00-6:00 p.m.</p>",
                                "icon": "theatre"
                            },
                            "geometry": {
                                "type": "Point",
                                "coordinates": [31.297,51.493]
                            }
                        }, {
                            "type": "Feature",
                            "properties": {
                                "description": "<strong>Truckeroo</strong><p><a href=\"http://www.truckeroodc.com/www/\" target=\"_blank\">Truckeroo</a> brings dozens of food trucks, live music, and games to half and M Street SE (across from Navy Yard Metro Station) today from 11:00 a.m. to 11:00 p.m.</p>",
                                "icon": "music"
                            },
                            "geometry": {
                                "type": "Point",
                                "coordinates": [31.297,62.493]
                            }
                        }]
                    }
                },
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
                .setHTML('<h3>' + feature.properties.title + '</h3><p>' + feature.properties.description + '</p>')
                .setLngLat(feature.geometry.coordinates)
                .addTo(map);
        });
    </script>
