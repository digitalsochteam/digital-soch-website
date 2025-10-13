<script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/knob.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jqueryui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('assets/js/lenis.min.js') }}"></script>
<script src="{{ asset('assets/js/split-type.min.js') }}"></script>
<script src="{{ asset('assets/js/CustomEase.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    // Optional: manual trigger example
    const btn = document.getElementById("cust_btn");
    if (btn) {
        btn.addEventListener("click", function() {
            const myModal = new bootstrap.Modal(document.getElementById("myModal"));
            myModal.toggle();
        });
    }

    // Auto-open modal after 10 seconds on page load
    window.addEventListener("load", function() {
        setTimeout(() => {
            const modalEl = document.getElementById("myModal");

            // ✅ Check if modal is already open
            if (!modalEl.classList.contains("show")) {
                const myModal = new bootstrap.Modal(modalEl);
                myModal.show();
            }
        }, 30000); // 10 seconds = 10000 ms
    });
</script>
