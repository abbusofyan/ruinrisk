<?php $this->load->view('layout/start.php'); ?>

<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"/>

<div id="head" class="head">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="logo d-flex align-items-center">
                <a class="navbar-brand" href="<?=base_url('/')?>">
                    <i class='bx bx-arrow-back bx-md' style='color:#ffffff'  ></i>
                </a>
				<h4 class="text-white mt-2">Lapor Potensi</h4>
            </div>
        </div>
    </div>
</div>

<div class="container p-3 mb-5">
    <div class="form">
        <form action="<?= base_url('potensi/store'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Judul Laporan</label>
                <input type="text" class="form-control" name="title" placeholder="contoh : potensi longsor / potensi banjir / dll">
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="form-label fw-bold">Foto </label>
                <input type="file" class="filepond" id="images" name="image" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
            </div>
            <input type="hidden" id="filename" name="images">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Deskripsi</label>
                <textarea type="text" class="form-control rounded-5 form-control-lg" name="description" placeholder="Deskripsi Kejadian" id="exampleInputPassword1"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleDataList" class="form-label fw-bold">Titik Lokasi</label>
                <div id="mapid"></div>	
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class='bx bx-current-location'></i></span>
                    <input type="text" class="form-control rounded-5 form-control-lg" placeholder="Posisi" aria-label="Posisi" aria-describedby="basic-addon1">
                </div>
            </div>
            <input type="hidden" name="lat" id="lat">
            <input type="hidden" name="lng" id="lng">
            <div class="d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
</div>

<?php $this->load->view('layout/end.php') ?>

<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>

<script>
    const DEFAULT_LAT_LNG = [-6.92, 106.2159];
    var marker;
    let map = L.map('mapid').setView(DEFAULT_LAT_LNG, 16);

    L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);

    map.on('click', function(e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = new L.marker([e.latlng.lat, e.latlng.lng]).addTo(map)
        map.addLayer(marker);
        $('#lat').val(e.latlng.lat);
        $('#lng').val(e.latlng.lng);
    });

    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.create(
        document.querySelector('#images')
    );
    FilePond.setOptions({
        server: {
            process: {
                url: "<?= base_url('Potensi/uploadImage') ?>",
                method: 'POST',
                onload: (response) => {
                    var filenames = $('#filename').val();
                    if (filenames == '') {
                        $('#filename').val(response);
                    } else {
                        $('#filename').val(filenames + ',' + response);
                    }
                },
                onerror: (response) => response.data
            },
            fetch: null,
            revert: null,
        },
      });
</script>
