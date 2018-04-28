@section('user_header')
<header class="c-navbar u-mb-medium">
  <button class="c-sidebar-toggle js-sidebar-toggle">
    <i class="feather icon-align-left"></i>
  </button>

  <h2 class="c-navbar__title">{{ $dataArray['uri'] }}</h2>

  

  <div class="c-dropdown dropdown u-mr-medium">
    <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
      <i class="c-notification__icon feather icon-bell"></i>
      </div>

    <ul class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle2">

      <span class="c-dropdown__menu-header">
        Notifications
      </span>

          <li class="c-dropdown__item dropdown-item">     
            @foreach(auth()->user()->unreadNotifications as $notification)      
              @include('layouts.notifications.'.snake_case(class_basename($notification->type)))<br />
            @endforeach          
          </li>    

    </ul>
  </div>

  <div class="c-dropdown dropdown">
    <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
      @if ($dataArray['user']->profile_image != '')
      <img class="c-avatar__img" src="{{ $dataArray['user']->profile_image }}" alt="{{ $dataArray['user']->first_name }}">
      @else
      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="{{ $dataArray['user']->first_name }}">
      @endif
    </div>

    <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
      <span class="c-dropdown__menu-header">
        {{$dataArray['user']->first_name}}
      </span>
      <a class="c-dropdown__item dropdown-item" href="/profile">Edit Profile</a>
      <!--<a class="c-dropdown__item dropdown-item" href="#">View Activity</a> -->
      <a class="c-dropdown__item dropdown-item" href="../logout">Logout</a>
    </div>
  </div>
</header>
@endsection

@section('business_header')
<header class="c-navbar u-mb-medium">
  <button class="c-sidebar-toggle js-sidebar-toggle">
    <i class="feather icon-align-left"></i>
  </button>

  <h2 class="c-navbar__title">{{ $dataArray['uri'] }}</h2>


    
  <div class="c-dropdown dropdown u-mr-medium">
    <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
      <i class="c-notification__icon feather icon-bell"></i>
    </div>

    <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle2">

      <span class="c-dropdown__menu-header">
        Notifications
      </span>
      <a class="c-dropdown__item dropdown-item" href="#">
        <div class="o-media">
          <div class="o-media__img u-mr-xsmall">
            <span class="c-icon c-icon--info c-icon--xsmall"><i class="feather icon-globe"></i></span>
          </div>

          <div class="o-media__body">
            <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
          </div>
        </div>
      </a>

      <a class="c-dropdown__item dropdown-item" href="#">
        <div class="o-media">
          <div class="o-media__img u-mr-xsmall">
            <span class="c-icon c-icon--danger c-icon--xsmall"><i class="feather icon-x"></i></span>
          </div>

          <div class="o-media__body">
            <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
          </div>
        </div>
      </a>

      <a class="c-dropdown__item dropdown-item" href="#">
        <div class="o-media">
          <div class="o-media__img u-mr-xsmall">
            <span class="c-icon c-icon--success c-icon--xsmall"><i class="feather icon-anchor"></i></span>
          </div>

          <div class="o-media__body">
            <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
          </div>
        </div>
      </a>

      <a class="c-dropdown__menu-footer">
        All Notifications
      </a>
    </div>
  </div>

  <div class="c-dropdown dropdown">
    <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
      @if ($dataArray['user']->profile_image != '')
      <img class="c-avatar__img" src="{{ $dataArray['user']->profile_image }}" alt="{{ $dataArray['user']->first_name }}">
      @else
      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="{{ $dataArray['user']->first_name }}">
      @endif
    </div>

    <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
      <a class="c-dropdown__item dropdown-item" href="/business/profile">Edit Profile</a>
      <!--<a class="c-dropdown__item dropdown-item" href="#">View Activity</a> -->
      <a class="c-dropdown__item dropdown-item" href="../logout">Logout</a>
    </div>
  </div>
</header>
@endsection