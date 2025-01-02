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
    <h2 style="text-align: center">gempa bumi</h2>
    <div id="map"></div>
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
        // const gempa = "https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json";
        // console.log(gempa);
        const datapeta = {!! file_get_contents('https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json') !!}
        const infogempa = datapeta.Infogempa.gempa
        infogempa.forEach(infogempas => {
            let koordinat = infogempas.Coordinates.split(",")
            let lat = koordinat[0]
            let lon = koordinat[1]
            let market = L.marker([lat, lon]).addTo(map)
            market.bindPopup(`
            <b>Waktu:</b> ${infogempas.Tanggal} ${infogempas.Jam}
            <b>Lokasi:</b> ${infogempas.Wilayah}<br>
            <b>Kedalaman:</b> ${infogempas.Kedalaman}<br>
            <b>Magnitudo:</b> ${infogempas.Magnitude}<br>
            `)
        });
        console.log(datapeta);
        
        // fetch('https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json')
        //     .then(response => response.json())
        //     .then(data => {
        //         const earthquakes = data.Infogempa.gempa;

        //         // Loop melalui data gempa
        //         earthquakes.forEach(gempa => {
        //             // Ambil data latitude dan longitude
        //             const latitude = parseFloat(gempa.Lintang.replace(' LS', '').replace(' LU', '')) * (gempa
        //                 .Lintang.includes('LS') ? -1 : 1);
        //             const longitude = parseFloat(gempa.Bujur.replace(' BT', '').replace(' BB', '')) * (gempa
        //                 .Bujur.includes('BB') ? -1 : 1);

        //             // Tambahkan marker ke peta
        //             L.marker([latitude, longitude])
        //                 .addTo(map)
        //                 .bindPopup(`
    //                     <b>Lokasi:</b> ${gempa.Wilayah}<br>
    //                     <b>Magnitudo:</b> ${gempa.Magnitude}<br>
    //                     <b>Kedalaman:</b> ${gempa.Kedalaman}<br>
    //                     <b>Waktu:</b> ${gempa.Tanggal} ${gempa.Jam}
    //                 `);
        //         });
        //     })
        // Loop data untuk menambahkan marker ke peta
        // provinsi.forEach(location => {
        //     L.marker([location.latitude, location.longitude])
        //         .addTo(map)
        //         .bindPopup(`<b>${location.nama}</b>`);
        // });
    </script>
</body>

</html>
