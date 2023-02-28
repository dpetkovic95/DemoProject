{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('book') }}"><i class="nav-icon la la-question"></i> Books</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('author') }}"><i class="nav-icon la la-question"></i> Authors</a></li>