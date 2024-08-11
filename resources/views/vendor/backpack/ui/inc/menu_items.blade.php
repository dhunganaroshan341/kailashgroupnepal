{{-- Dashboard --}}
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}
    </a>
</li>

{{-- Articles --}}
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('article') }}">
        <i class="la la-file-text nav-icon"></i> Articles
    </a>
</li>

{{-- Galleries & Images --}}
<x-backpack::menu-dropdown title="Galleries & Images" icon="la la-images">
    <x-backpack::menu-dropdown-item title="Galleries" icon="la la-images" :link="backpack_url('gallery')" />
    <x-backpack::menu-dropdown-item title="Gallery Images" icon="la la-photo" :link="backpack_url('gallery-image')" />
</x-backpack::menu-dropdown>

{{-- Pages & Sections --}}
<x-backpack::menu-dropdown title="Page & Sections" icon="la la-file">
    <x-backpack::menu-dropdown-item title="Pages" icon="la la-file" :link="backpack_url('pages')" />
    <x-backpack::menu-dropdown-item title="Page Sections" icon="la la-cogs" :link="backpack_url('section')" />
</x-backpack::menu-dropdown>

{{-- Manage Users --}}
<x-backpack::menu-dropdown title="Manage Users" icon="la la-users">
    <x-backpack::menu-dropdown-item title="User Access" icon="la la-user" :link="backpack_url('users')" />
    <x-backpack::menu-dropdown-item title="Team Members" icon="la la-users" :link="backpack_url('team-member')" />
</x-backpack::menu-dropdown>

{{-- Brands --}}
<x-backpack::menu-dropdown title="Brands" icon="la la-tags">
    <x-backpack::menu-dropdown-item title="Brand List" icon="la la-tags" :link="backpack_url('brand')" />
    <x-backpack::menu-dropdown-item title="Brand Images" icon="la la-images" :link="backpack_url('brand-image')" />
</x-backpack::menu-dropdown>

{{-- Home Control --}}
<x-backpack::menu-dropdown title="Home Control" icon="la la-home">
    <x-backpack::menu-dropdown-item title="Banner Slider" icon="la la-sliders-h" :link="backpack_url('banner-slider')" />
    <x-backpack::menu-dropdown-item title="Our Commitments" icon="la la-handshake" :link="backpack_url('our-commitments')" />
    <x-backpack::menu-dropdown-item title="Milestones ribbon" icon="la la-medal" :link="backpack_url('mile-stone')" />
    <x-backpack::menu-dropdown-item title="About" icon="la la-info-circle" :link="backpack_url('home-about')" />
    <x-backpack::menu-dropdown-item title="Brand Journeys" icon="la la-route" :link="backpack_url('brand-journey')" />
    <x-backpack::menu-dropdown-item title="News Notice" icon="la la-bullhorn" :link="backpack_url('news-notice-section')" />
    <x-backpack::menu-dropdown-item title="Testimonial" icon="la la-comments" :link="backpack_url('testimonial-section')" />
    <x-backpack::menu-dropdown-item title="Contact" icon="la la-question" :link="backpack_url('contact-section-home')" />
    <x-backpack::menu-dropdown-item title="Logo" icon="la la-cog" :link="backpack_url('logo')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-item title="Image folders" icon="la la-folder" :link="backpack_url('image-folder')" />
<x-backpack::menu-item title="Images" icon="la la-image" :link="backpack_url('image')" />
