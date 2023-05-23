<div class="sidebar" data-color="blue">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
     -->
    <div class="logo">
      <a href="/home" class="simple-text logo-mini">
        PA
      </a>
      <a href="/home" class="simple-text logo-normal">
        PRINTOPIA ADMIN
      </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        @if($_SERVER['REQUEST_URI'] == '/dash' || $_SERVER['REQUEST_URI'] == '/')
        <li class="active">
        @else
        <li>
        @endif
          <a href="/dash">
            <i class="now-ui-icons business_chart-bar-32"></i>
            <p>Dashboard</p>
          </a>
        </li>
        @if($_SERVER['REQUEST_URI'] == '/stock')
        <li class="active">
        @else
        <li>
        @endif
          <a href="/stock">
            <i class="now-ui-icons design_app"></i>
            <p>Stocks</p>
          </a>
        </li>
        @if($_SERVER['REQUEST_URI'] == '/clients')
        <li class="active">
        @else
        <li>
        @endif
        <a href="/clients">
            <i class="now-ui-icons users_single-02"></i>
            <p>Clients</p>
          </a>
        </li>
        @if($_SERVER['REQUEST_URI'] == '/reclammation')
        <li class="active">
        @else
        <li>
        @endif
          <a href="/reclammation">
            <i class="now-ui-icons ui-1_email-85"></i>
            <p>Réclammations</p>
          </a>
        </li>
        @if($_SERVER['REQUEST_URI'] == '/users')
        <li class="active">
        @else
        <li>
        @endif
          <a href="/users">
            <i class="now-ui-icons users_circle-08"></i>
            <p>Users</p>
          </a>
        </li>
        @if($_SERVER['REQUEST_URI'] == '/produits')
        <li class="active">
        @else
        <li>
        @endif
          <a href="/produits">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Produits</p>
          </a>
        </li>
        <li >
          <a href="/webupdate">
            <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
            <p>Web site Update</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
