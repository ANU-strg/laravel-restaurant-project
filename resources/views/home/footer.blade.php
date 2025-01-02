<!-- CONTACT Section  -->
<div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
    <div class="row">
        <div class="col-md-6 px-0">
            <main>

                <div id="map" style="width: 100%; height: 100%; min-height: 400px; border: 1px solid #ccc;"></div>
            </main>
        </div>
        <div class="col-md-6 px-5 has-height-lg middle-items">
            <h3>FIND US</h3>
            <p></p>
            <div class="text-muted">
                <p><span class="ti-location-pin pr-3"></span> Buah Batu</p>
                <p><span class="ti-support pr-3"></span> 08134567890</p>
                <p><span class="ti-email pr-3"></span>restoran_nusantara@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<!-- page footer  -->

<div class="bg-dark text-light text-center border-top wow fadeIn">
    <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script></a></p>
</div>
<!-- end of page footer -->

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- wow.js -->
<script src="assets/vendors/wow/wow.js"></script>

<!-- google maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

<script>
    function initMap() {
        // Lokasi awal
        const location = { lat: -6.9727693221519536,  lng: 107.63501049128323 };

        // Membuat peta
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: location,
        });

        // Menambahkan marker
        new google.maps.Marker({
            position: location,
            map: map,
        });
    }

    // Panggil fungsi setelah peta dimuat
    window.onload = initMap;
    </script>

<!-- FoodHut js -->
<script src="assets/js/foodhut.js"></script>