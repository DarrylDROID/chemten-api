<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link" href="dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Game</div>
                <a class="nav-link" href="{{ route('lessons.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Lessons
                </a>
                <a class="nav-link" href="{{ route('exercises.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Quiz
                </a>
                <div class="sb-sidenav-menu-heading">User</div>
                <a class="nav-link" href="{{ route('users.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    User Account
                </a>
                <a class="nav-link" href="leaderboard.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Leaderboard
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>