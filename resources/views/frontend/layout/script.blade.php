<!-- jQuery MUST load first without defer -->
<script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>

<!-- All jQuery-dependent scripts with defer -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/js/wow.min.js') }}" defer></script>
<script src="{{ asset('assets/js/appear.js') }}" defer></script>
<script src="{{ asset('assets/js/gsap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/knob.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}" defer></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}" defer></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}" defer></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}" defer></script>
<script src="{{ asset('assets/js/jqueryui.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.marquee.min.js') }}" defer></script>
<script src="{{ asset('assets/js/lenis.min.js') }}" defer></script>
<script src="{{ asset('assets/js/split-type.min.js') }}" defer></script>
<script src="{{ asset('assets/js/CustomEase.min.js') }}" defer></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}" defer></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}" defer></script>
<script src="{{ asset('assets/js/script.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

<!-- Inline scripts - wrap in DOMContentLoaded to work with defer -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Optional: manual trigger example
        const btn = document.getElementById("cust_btn");
        if (btn) {
            btn.addEventListener("click", function() {
                const myModal = new bootstrap.Modal(document.getElementById("myModal"));
                myModal.toggle();
            });
        }

        // Auto-open modal after 30 seconds on page load
        setTimeout(() => {
            const modalEl = document.getElementById("myModal");

            // ✅ Check if modal is already open
            if (modalEl && !modalEl.classList.contains("show")) {
                const myModal = new bootstrap.Modal(modalEl);
                myModal.show();
            }
        }, 30000); // 30 seconds
    });
</script>
