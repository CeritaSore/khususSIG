<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leafletjs + laravel + filament</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 90vh;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center">laravel + filament + leafletjs</h2>
    <div id="map"></div>
    {{-- @foreach ($data as $item)
        <h2>{{ $item->nama }}</h2>
    @endforeach --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker([51.5, -0.09]).addTo(map);
        // Data dari Laravel (dikonversi menjadi JSON)
        const provinsi = @json($data);

        // Loop data untuk menambahkan marker ke peta
        provinsi.forEach(location => {
            L.marker([location.latitude, location.longitude])
                .addTo(map)
                .bindPopup(`<b>${location.nama}</b>`);
        });
    </script>
</body>

</html>
