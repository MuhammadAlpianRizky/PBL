<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home1') }}">Menu Awal</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home1') }}">AC</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item ">
                <a href="{{ route('home1') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>User</span></a>
            
            </li>
            <li class="nav-item">
                <a href="{{ route('subject.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Subject</span></a>
            
            </li>
            <li class="nav-item">
                <a href="{{ route('schedule.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Schedule</span></a>
            
                </li>
                    <li class="nav-item">
                <a href="{{ route('order.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Pesan</span></a>
            
            </li>
        </ul>   
        
    </aside>
</div>