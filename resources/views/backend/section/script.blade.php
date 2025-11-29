<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- plugins -->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>


<script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<script src="{{ asset('backend/assets/plugins/chartjs/js/chart.js') }}"></script>

<script src="{{ asset('backend/assets/js/index.js') }}"></script>




<!-- Password show & hide -->
<script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            let input = $('#show_hide_password input');
            let icon = $('#show_hide_password i');

            if (input.attr("type") === "text") {
                input.attr('type', 'password');
                icon.addClass("bx-hide").removeClass("bx-show");
            } else {
                input.attr('type', 'text');
                icon.removeClass("bx-hide").addClass("bx-show");
            }
        });
    });
</script>

<!-- app JS -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>
<script>
    new PerfectScrollbar(".app-container")
</script>

