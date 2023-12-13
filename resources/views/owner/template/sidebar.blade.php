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
            <li><a class="has-arrow " href="/admin-dashboard" aria-expanded="false">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow " href="/admin-approval" aria-expanded="false">
                <i class="material-symbols-outlined">school</i>
                <span class="nav-text">Approval Kost</span>
            </a>
            </li>
            <li><a class="has-arrow " href="/data-kos" aria-expanded="false">
                <i class="material-symbols-outlined">person</i>
                <span class="nav-text">Kelola Owner</span>
            </a>
            </li>
            <li><a class="has-arrow " href="/data-kos" aria-expanded="false">
                <i class="material-symbols-outlined">person</i>
                <span class="nav-text">Transaksi</span>
            </a>
            </li>
                </ul>
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

