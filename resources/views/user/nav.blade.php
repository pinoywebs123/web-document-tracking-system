<header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

     
      <a href="index.html" class="logo">NORSU Bais Document Tracking System <span class="lite"></span></a>
     

      <div class="nav search-row" id="top_menu">
      
      </div>

      <div class="top-nav notification-row">
       
        <ul class="nav pull-right top-menu">

          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           
                            <span class="username">{{Auth::user()->getName()}}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              
              <li>
                <a href="{{route('user_logout')}}"><i class="icon_key_alt"></i> Log Out</a>
              </li>
             
            </ul>
          </li>
          
        </ul>
       
      </div>
    </header>