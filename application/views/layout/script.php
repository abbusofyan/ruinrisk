<!-- <script src="assets_mobile/js/bootstrap.min.js"></script> -->
<script src="https://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="<?= base_url('assets_mobile/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets_mobile/js/popper.min.js') ?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
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
</script>