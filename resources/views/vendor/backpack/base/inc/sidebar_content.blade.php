{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
    <i class="nav-icon la la-store-alt"></i>         <span>Authetifications</span>    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('user') }}">
                <i class="nav-icon la la-user"></i> 
                Users
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('role') }}">
                <i class="nav-icon la la-group"></i> 
                Roles
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('permission') }}">
                <i class="nav-icon la la-key"></i> 
                Permissions
            </a>
        </li>
    </ul>
</li>

<li class="nav-title mt-0">
    <span>Pages</span>
</li>


<li class="nav-item">
    <a class="nav-link" href="{{ route('readme') }}">
        <i class="nav-icon la la-file-o"></i> 
        Read Me
    </a>
</li>



