<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ route('laravelapiexplorer.view') }}'><i class='nav-icon la la-cogs'></i> API</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('contact') }}'><i class='nav-icon la la-user'></i> Contacts</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('account') }}'><i class='nav-icon la la-building'></i> Accounts</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('property') }}'><i class='nav-icon la la-home'></i> Properties</a></li>
{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('tag') }}'><i class='nav-icon la la-question'></i> Tags</a></li> --}}
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-question'></i> Users</a></li>