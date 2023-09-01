{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}

@if(backpack_user()->can('dashboard-access') || backpack_user()->isAdmin())
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@endif


@if(backpack_user()->hasAnyPermission(
        [
            'users-access',
            'roles-access',
            'permissions-access',
        ]
    )  
    || 
    backpack_user()->isAdmin())

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon la la-store-alt"></i>         
        <span>Authetifications</span>    
    </a>
    <ul class="nav-dropdown-items">

        @if(backpack_user()->can('users-access') || backpack_user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link" href="{{ backpack_url('user') }}">
                    <i class="nav-icon la la-user"></i> 
                    Users
                </a>
            </li>
        @endif
        @if(backpack_user()->can('roles-access') || backpack_user()->isAdmin())
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('role') }}">
                <i class="nav-icon la la-group"></i> 
                Roles
            </a>
        </li>
        @endif
        @if(backpack_user()->can('permissions-access') || backpack_user()->isAdmin())
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('permission') }}">
                <i class="nav-icon la la-key"></i> 
                Permissions
            </a>
        </li>
        @endif
    </ul>
</li>

@endif

@if(backpack_user()->hasAnyPermission(
        [
            'page-readme'
        ]
    ) || backpack_user()->isAdmin())

    <li class="nav-title mt-0">
        <span>Pages</span>
    </li>

    @if(backpack_user()->can('page-readme') || backpack_user()->isAdmin())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('readme') }}">
                <i class="nav-icon la la-file-o"></i> 
                Read Me
            </a>
        </li>
    @endif

@endif
