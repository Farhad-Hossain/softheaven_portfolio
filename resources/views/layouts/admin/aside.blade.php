<aside class="app-sidebar">
    
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
      <div>
        <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
        {{--
        <p class="app-sidebar__user-designation">Software Developer</p>
        --}}
      </div>
    </div>

    <ul class="app-menu">
      <li>
        <a class="app-menu__item" href="{{route('home')}}"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span></a>
      </li>

      <!-- START ... Permisions & Group   -->
      <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon bi bi-laptop"></i>
            <span class="app-menu__label">User & Permissions</span>
            <i class="treeview-indicator bi bi-chevron-right"></i>
        </a>

        <ul class="treeview-menu">
          <li>
            <a class="treeview-item" href="{{route('admin.auth.auth_groups')}}">
                 <span class="submenu"> User Groups</span>
            </a>
          </li>

          <li>
            <a class="treeview-item" href="{{route('admin.auth.users')}}">
                 <span class="submenu"> Users</span>
            </a>
          </li>
        </ul>

      </li>
      <!-- END ... Permisions & Group   -->

      <li>
        <a class="app-menu__item" href="{{route('admin.contacts')}}">
            <span class="app-menu__label">Contacts</span>
        </a>
      </li>

      <li>
        <a class="app-menu__item" href="{{route('admin.team_members')}}">
            <span class="app-menu__label">Team Members</span>
        </a>
      </li>

      <li>
        <a class="app-menu__item" href="{{route('admin.general_setting')}}">
            <span class="app-menu__label">General Setting</span>
        </a>
      </li>

      <li>
        <a class="app-menu__item" href="{{route('admin.clients_list_company')}}">
            <span class="app-menu__label">Manage Clients Company</span>
        </a>
      </li>

      <li>
        <a class="app-menu__item" href="">
            <span class="app-menu__label">Manage Testimonial</span>
        </a>
      </li>

    </ul>
  </aside>