<style>
    [data-sidebarbg="color_2"] {
        --sidebar-bg: #7E6D2E;
    }
</style>
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ url('/dashboard-owner') }}">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url ('/approval-owner') }}">
                    <i class="material-symbols-outlined">school</i>
                    <span class="nav-text">Persetujuan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/data_kos') }}">
                    <i class="material-symbols-outlined">person</i>
                    <span class="nav-text">Kos Saya</span>
                </a>
            </li>
        </ul>
    </div>
</div>
