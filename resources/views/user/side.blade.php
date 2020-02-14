<aside>
      <div id="sidebar" class="nav-collapse ">
      
        <ul class="sidebar-menu">
          <li class="@if(Request::segment(2) == 'home') active @endif">
            <a class="" href="{{route('user_home')}}">
                  <i class="icon_house_alt"></i>
                  <span>Home</span>
            </a>
          </li>
          <li class="@if(Request::segment(2) == 'new') active @endif">
            <a class="" href="{{route('user_new')}}">
                  <i class="icon_pencil"></i>
                  <span>Submit New</span>
            </a>
          </li>
          <li class="@if(Request::segment(2) == 'pending') active @endif">
            <a class="" href="{{route('user_pending')}}">
                  <i class="icon_folder-add"></i>
                  <span>Pending</span>
            </a>
          </li>
          <li class="@if(Request::segment(2) == 'incoming') active @endif">
            <a class="" href="{{route('user_incoming')}}">
                  <i class="icon_mail"></i>
                  <span>Incoming</span>
            </a>
          </li>
          
          <li class="@if(Request::segment(2) == 'forwarded') active @endif">
            <a class="" href="{{route('user_forwarded')}}">
                  <i class="icon_archive"></i>
                  <span>Forwarded</span>
            </a>
          </li>
          
          
        </ul>
        
      </div>
    </aside>