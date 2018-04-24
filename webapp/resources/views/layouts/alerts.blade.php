<div class="row">
  <div class="col-12">
      <!-- System Error Handling -->
      @if ($errors->any())
      @php
      $alertMessage = '';
      @endphp
      @foreach ($errors->all() as $error)
      @php
      $alertMessage .= $error.",";
      @endphp
      @endforeach
      @php
      $alertMessage = rtrim($alertMessage,",");
      @endphp
      @include('layouts.alert-messages',['alertMessage'=>$alertMessage])
      @yield('alert_system_error')
      @endif
      <!-- System Error Handling -->
      <!-- Success Message Handling -->
      @if (session('success'))
      @include('layouts.alert-messages',['alertMessage'=>session('success')])
      @yield('alert_success')
      @endif
      <!-- Success Message Handling -->
      <!-- Error Message Handling -->
      @if (session('error'))
      @include('layouts.alert-messages',['alertMessage'=>session('error')])
      @yield('alert_error')
      @endif
      <!-- Error Message Handling -->
  </div>
</div>
