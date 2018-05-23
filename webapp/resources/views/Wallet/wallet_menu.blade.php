@extends('layouts.template') @section('title', 'Login') @section('body_content')
<div class="o-page o-page--center">
  <!-- System Error Handling -->
  @if ($errors->any()) @include('layouts.alert-messages',['alertMessage'=>'Something went wrong. We are unable to process your request at the moment. Please try again later.']) @yield('alert_system_error') @endif
  <!-- System Error Handling -->
  <!-- Success Message Handling -->
  @if (session('success')) @include('layouts.alert-messages',['alertMessage'=>session('success')]) @yield('alert_success') @endif
  <!-- Success Message Handling -->
  <!-- Error Message Handling -->
  @if (session('error')) @include('layouts.alert-messages',['alertMessage'=>session('error')]) @yield('alert_error') @endif
  <!-- Error Message Handling -->
  <!-- Failed Login Message Handling -->
  @if (session('failed_login')) @include('layouts.alert-messages',['alertMessage'=>session('failed_login')]) @yield('alert_info') @endif
  <!-- Failed Login Message Handling -->
  <br />

  <div class="o-page__card" id="wallet-warning">
    <div class="c-card c-card--center">

      <h2 class="u-mb-medium">Wallet Setup</h2>
      <span style="color:red">IMPORTANT INSTRUCTIONS</span><br />
      <span style="color:grey">Please take your time to read and understand the following instructions</span>
      <br /><br />
      <div class="c-field">
        <p style="color:black">
          <i class="feather icon-disc"> We cannot recover your funds or freeze your account if you visit a phishing site or lose your private key.</i>
        </p>
      </div>
      <br />
      <div class="c-field">
        <p style="color:black">
          <i class="feather icon-disc"> TrueFeedback wallet is not a bank. Do not consider the wallet as a bank account. TrueFeedback is only an interface.
          When you create an account on TrueFeedback you are generating a cryptographic set of numbers: your private key and your public key (address).</i>
        </p>
      </div>
      <br />
      <div class="c-field">
        <p style="color:black">
          <i class="feather icon-disc"> You are simply using our interface to interact directly with the blockchain.</i>
        </p>
      </div>
      <br />
      <div class="c-field">
        <p style="color:black">
          <i class="feather icon-disc"> If you send your <strong>public key (address)</strong> to someone, they can send you ETH or tokens.</i>
        </p>
      </div>
      <br />
      <div class="c-field">
        <p style="color:black">
          <i class="feather icon-disc"> If you send your <strong>private key</strong> to someone, they now have full control of your account.</i>
        </p>
      </div>
      <br />
      <div class="c-field">
        <p style="color:black">
          <i class="feather icon-disc"> Be diligent to keep your private key and password safe. Your private key is sometimes called your mnemonic phrase, keystore file, UTC file, JSON file, wallet file.</i>
        </p>
      </div>
      <br />
      <div class="c-field">
        <p style="color:red">
          <i class="feather icon-disc"> If you lose your private key or password, no one can recover it.</i>
        </p>
      </div>
      <br /><br />
      <div class="c-field">
        <center>
          <input type="button" class="c-btn c-btn--warning" id="toggle-btn" value="I Understand">
        </center>
      </div>

    </div>
  </div>

  <div class="o-page__card" id="wallet-menu" style="display:none">
    <div class="c-card c-card--center">

      <h2 class="u-mb-medium">Wallet Setup</h2>
      <span style="color:grey">Please link you wallet to use the TrueFeedback Platform. You can choose to create a new wallet or import any of your existing wallet.</span>
      <br /><br />
      <div class="c-field">
        <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/wallet_import">Import Wallet</a>
      </div>
      <br />
      <div class="c-field">
        <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/wallet_create">Create Wallet</a>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $("#toggle-btn").click(function() {
      $("#wallet-menu").toggle();
      $("#wallet-warning").toggle();
    });
  });
</script>
@endsection
