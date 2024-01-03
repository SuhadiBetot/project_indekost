<style>
    [data-sidebarbg="color_2"] {
        --sidebar-bg: #ffffff;
    }
    .dlabnav-scroll .nav-text {
        color: #000000; /* Set the default text color to black */
    }

    [data-sidebarbg="color_2"][data-theme-version="dark"] .dlabnav .metismenu > li.mm-active > a,
    [data-sidebarbg="color_2"] .dlabnav .metismenu > li.mm-active > a {
        background: #7E6D2E !important;
        color: #fff !important;
    }

    /* Add this CSS rule to change the active text color to white */
    .dlabnav-scroll .metismenu > li.active > a .nav-text {
        color: #fff !important;
    }
    /* Add this CSS rule to change the active SVG path color to white */
    [data-sidebar-style="full"][data-layout="vertical"] .dlabnav .metismenu > li.mm-active > a svg path {
        fill: #fff !important;
    }
    [data-sidebar-style="full"][data-layout="vertical"] .dlabnav .metismenu > li.mm-active > a span {
        fill: #fff !important;
        color: #fff !important; /* Add this line to change the text color to white */
    }
</style>


<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ url('/admin-dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #000000;" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M17.45 15.18L22 7.31V21H2V3h2v12.54L9.5 6L16 9.78l4.24-7.33l1.73 1l-5.23 9.05l-6.51-3.75L4.31 19h2.26l4.39-7.56z"/></svg>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url ('/admin-approval') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #000000;" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M22.5 10h-6.75c-.62 0-1.15.38-1.38.91l-2.26 5.29c-.07.17-.11.36-.11.55V18a1 1 0 0 0 1 1h5.18l-.68 3.18v.24c0 .31.13.58.33.8l.79.78l4.94-4.94c.27-.27.44-.65.44-1.06v-6.5a1.5 1.5 0 0 0-1.5-1.5M12 6a1 1 0 0 0-1-1H5.82l.68-3.18v-.23c0-.31-.13-.59-.33-.8L5.38 0L.44 4.94C.17 5.21 0 5.59 0 6v6.5A1.5 1.5 0 0 0 1.5 14h6.75c.62 0 1.15-.38 1.38-.91l2.26-5.29c.07-.17.11-.36.11-.55z"/></svg>
                    <span class="nav-text">Persetujuan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin-kelolaowner') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #000000;" width="32" height="32" viewBox="0 0 24 24"><circle cx="10" cy="8" r="4" fill="currentColor"/><path fill="currentColor" d="M10.67 13.02c-.22-.01-.44-.02-.67-.02c-2.42 0-4.68.67-6.61 1.82c-.88.52-1.39 1.5-1.39 2.53V20h9.26a6.963 6.963 0 0 1-.59-6.98M20.75 16c0-.22-.03-.42-.06-.63l1.14-1.01l-1-1.73l-1.45.49c-.32-.27-.68-.48-1.08-.63L18 11h-2l-.3 1.49c-.4.15-.76.36-1.08.63l-1.45-.49l-1 1.73l1.14 1.01c-.03.21-.06.41-.06.63s.03.42.06.63l-1.14 1.01l1 1.73l1.45-.49c.32.27.68.48 1.08.63L16 21h2l.3-1.49c.4-.15.76-.36 1.08-.63l1.45.49l1-1.73l-1.14-1.01c.03-.21.06-.41.06-.63M17 18c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2"/></svg> {{-- <svg xmlns="http://www.w3.org/2000/svg" style="color: #000000;" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M5 15.5L7.5 20h-5zM9 19h12v-2H9zM5 9.5L7.5 14h-5zM9 13h12v-2H9zM5 3.5L7.5 8h-5zM9 7h12V5H9z"/></svg> --}}
                    <span class="nav-text">Kelola Owner</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/transaksi-admin') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #000000;" width="32" height="32" viewBox="0 0 24 24"><path d="M12 3l10 9h-3v8H5v-8H2l10-9M9.22 8.93c-.47.47-.72 1.1-.72 1.82c0 1.68 2.04 2.32 3.26 2.71c1.5.47 1.71.75 1.74.79c0 .75-1.35.75-1.5.75c-.63 0-.97-.12-1.14-.22c-.19-.11-.36-.28-.36-.78h-2c0 1.43.74 2.16 1.35 2.5c.33.2.72.34 1.15.42V18h2v-1.09c1.53-.3 2.5-1.29 2.5-2.66c0-1.58-1.62-2.22-3.14-2.7c-1.56-.49-1.83-.78-1.86-.8c0-.25.07-.34.14-.41c.21-.21.72-.34 1.36-.34c.68 0 1.5.13 1.5.75h2c0-1.41-.94-2.38-2.5-2.66V7h-2v1.08c-.74.13-1.35.42-1.78.85z" fill="currentColor"/></svg>
                    <span class="nav-text">Transaksi</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        // Get the current URL path
        var path = window.location.pathname;

        // Iterate through each anchor tag in the navigation menu
        $('.dlabnav-scroll a').each(function () {
            var href = $(this).attr('href');

            // Check if the current path matches the href attribute of the anchor tag
            if (path === href) {
                // Add the 'active' class to the parent li and change the text color to white
                $(this).closest('li').addClass('active').find('.nav-text').css('color', '#fff');
            }
        });
    });
</script>
