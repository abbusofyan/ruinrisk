<!-- <script src="assets_mobile/js/bootstrap.min.js"></script> -->
<script src="https://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="<?= base_url('assets_mobile/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets_mobile/js/popper.min.js') ?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js/map.js') ?>"></script>

<script>
    const base_url = $('#base_url').val();
    
    const tabs= document.querySelectorAll(".tab");
        tabs.forEach((clickedTab)=>{
            clickedTab.addEventListener('click',()=>{
                tabs.forEach((tab=>{
                    tab.classList.remove("active");
                }))
                clickedTab.classList.add("active");
                const clickedTabBGColor=getComputedStyle
                (clickedTab).getPropertyValue(
                    "color"
                );
            });
        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
</script>

