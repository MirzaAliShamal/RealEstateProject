<ul class="navigation-menu">
    <li>
        <a href="{{ route('dashboard') }}">
            <i data-feather="monitor" class="align-self-center icon-sm icon-dual-hori-nav"></i>
            <span>Dashboard</span>
        </a>
    </li>


    @if (auth()->user()->role == 'admin')
        <li>
            <a href="{{ route('user.list') }}">
                <i data-feather="user" class="align-self-center icon-sm icon-dual-hori-nav"></i>
                <span>Staff</span>
            </a>
        </li>
    @endif

    <li>
        <a href="{{ route('record-history.list') }}">
            <i data-feather="user" class="align-self-center icon-sm icon-dual-hori-nav"></i>
            <span>Record History</span>
        </a>
    </li>




</ul><!-- End navigation menu -->
