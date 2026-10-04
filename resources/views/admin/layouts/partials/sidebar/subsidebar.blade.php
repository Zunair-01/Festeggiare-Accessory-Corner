<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-inner" data-simplebar>
        <ul class="nk-menu nk-menu-md">
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Dashboards</h6>
            </li><!-- .nk-menu-heading -->
            <li class="nk-menu-item">
                <a href="{{route('admin-dashboard')}}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                    <span class="nk-menu-text">Dashboard</span>
                </a>
            </li><!-- .nk-menu-item -->
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Admin</h6>
            </li><!-- .nk-menu-heading -->
            <li class="nk-menu-item">
                <a href="{{ route('admin.add') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                    <span class="nk-menu-text">Add Admin</span>
                </a>
            </li><!-- .nk-menu-item -->
            <li class="nk-menu-item">
                <a href="{{ route('admin.index') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                    <span class="nk-menu-text">View All Admins</span>
                </a>
            </li><!-- .nk-menu-item -->
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Product Management</h6>
            </li><!-- .nk-menu-heading -->
            <li class="nk-menu-item">
                <a href="{{ route('product.add') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                    <span class="nk-menu-text">Add Product</span>
                </a>
            </li><!-- .nk-menu-item -->
            <li class="nk-menu-item">
                <a href="{{ route('product.index') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                    <span class="nk-menu-text">View Product</span>
                </a>
            </li><!-- .nk-menu-item -->
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Categories</h6>
            </li><!-- .nk-menu-heading -->
            <li class="nk-menu-item">
                <a href="{{ route('category.add') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                    <span class="nk-menu-text">Add Category</span>
                </a>
            </li><!-- .nk-menu-item -->
            <li class="nk-menu-item">
                <a href="{{ route('category.index') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                    <span class="nk-menu-text">View Category</span>
                </a>
            </li><!-- .nk-menu-item -->
        </ul><!-- .nk-menu -->
    </div>
</div>
