{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('article') }}">
        <i class="la la-file-text nav-icon"></i> Articles
    </a>
</li>


<x-backpack::menu-dropdown title="Galleries & Images" icon="la nav-icon ">
    <x-backpack::menu-dropdown-item title="Galleries" icon="la la-images nav-icon" :link="backpack_url('gallery')" />
    <x-backpack::menu-dropdown-item title="Gallery Images" icon="la  nav-icon la-cogs la-photo" :link="backpack_url('gallery-image')" />

</x-backpack::menu-dropdown>

{{-- <li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('media') }}">
        <i class="la la-media nav-icon"></i> Media
    </a>
</li> --}}

{{-- <li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('page') }}">
        <i class="la la-file nav-icon"></i> Pages
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('section') }}">
        <i class="la la-cogs nav-icon"></i> Sections
    </a>
</li> --}}

<x-backpack::menu-dropdown title="Page & Sections" icon="la la-file ">
    <x-backpack::menu-dropdown-item title="Pages" icon="la la-file" :link="backpack_url('pages')" />
    <x-backpack::menu-dropdown-item title="Page Sections" icon="la-cogs nav-icons" :link="backpack_url('section')" />

</x-backpack::menu-dropdown>
{{-- user access and team members management of the kailash group --}}
<x-backpack::menu-dropdown title="Manage Users" icon="la la-users">
    <x-backpack::menu-dropdown-item title="User Access" icon="la la-user" :link="backpack_url('')" />
    <x-backpack::menu-dropdown-item title="Team Members" icon="la la-group" :link="backpack_url('team-member')" />

</x-backpack::menu-dropdown>

{{-- Brands Dropdown --}}
{{-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="brandsDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="la la-tags nav-icon"></i> Brands
    </a>
    <div class="dropdown-menu" aria-labelledby="brandsDropdown">
        <a class="dropdown-item" href="{{ backpack_url('brand') }}">
            <i class="la la-tags nav-icon"></i> Brands
        </a>
        <a class="dropdown-item" href="{{ backpack_url('brand-image') }}">
            <i class="la la-image nav-icon"></i> Brand Images
        </a>
    </div>
</li> --}}
<x-backpack::menu-dropdown title="Brands" icon="la la-page">
    <x-backpack::menu-dropdown-item title="Brand-list" icon="la la-brand" :link="backpack_url('brand')" />
    <x-backpack::menu-dropdown-item title="Brand Images" icon="la la-image" :link="backpack_url('brand-image')" />

</x-backpack::menu-dropdown>

{{-- Home Controller Dropdown --}}

<x-backpack::menu-dropdown title="Home Control" icon="la la-home">
    <x-backpack::menu-dropdown-item title="Banner Slider" icon="la la-banner" :link="backpack_url('banner-slider')" />
    <x-backpack::menu-dropdown-item title="Our Commitments" icon="la la-handshake" :link="backpack_url('our-commitments')" />
    <x-backpack::menu-dropdown-item title="Honors" icon="la la-honour" :link="backpack_url('Honors')" />
</x-backpack::menu-dropdown>
