<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Game</div>
                <a class="nav-link" href="{{ route('lessons.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Lessons
                </a>
                <a class="nav-link" href="{{ route('exercises.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-gamepad"></i></div>
                    Quiz
                </a>
                <div class="sb-sidenav-menu-heading">User</div>
                <a class="nav-link" href="{{ route('users.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    User Account
                </a>
                <a class="nav-link" href="{{ route('leaderboards.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-angle-double-up"></i></div>
                    Leaderboard
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>