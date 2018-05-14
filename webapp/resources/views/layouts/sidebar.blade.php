@section('user_sidebar')
<div class="o-page__sidebar js-page-sidebar">
  <aside class="c-sidebar">
    <div class="c-sidebar__brand">
      <a href="/"><img src="../img/logo.png" width="300" alt="TrueFeedback"></a>
    </div>

 <!-- Scrollable -->
 <div class="c-sidebar__body">
    <span class="c-sidebar__title"></span>
    <ul class="c-sidebar__list">
      <li>
        <a class="c-sidebar__link" href="/home">
          <i class="c-sidebar__icon feather icon-home"></i>Home
        </a>
      </li>
      <li>
        <a class="c-sidebar__link" href="/surveys">
          <i class="c-sidebar__icon feather icon-bar-chart"></i>Surveys
        </a>
      </li>
      <li>
        <a class="c-sidebar__link" href="/user_rewards">
          <i class="c-sidebar__icon feather icon-award"></i>Rewards
        </a>
      </li>
      <li>
        <a class="c-sidebar__link" href="/wallet">
          <i class="c-sidebar__icon feather icon-briefcase"></i>My Wallet
        </a>
      </li>


        </div>


        <a class="c-sidebar__footer" href="../logout">
            Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
        </a>
    </aside>
</div>
@endsection

@section('business_sidebar')
<div class="o-page__sidebar js-page-sidebar">
    <aside class="c-sidebar">
      <div class="c-sidebar__brand">
          <a href="/"><img src="../img/logo.png" width="300" alt="TrueFeedback"></a>
      </div>
            <!-- Scrollable -->
            <div class="c-sidebar__body">
                <span class="c-sidebar__title"></span>
                <ul class="c-sidebar__list">
                  <li>

                    <a class="c-sidebar__link" href="/business/home">
                        <i class="c-sidebar__icon feather icon-home"></i>Home
                    </a>
                </li>
                <li>
                    <a class="c-sidebar__link" href="/business/survey_composer">
                        <i class="c-sidebar__icon feather icon-activity"></i>Create Survey
                    </a>
                </li>
                <li>
                    <a class="c-sidebar__link" href="/business/mycontract">
                        <i class="c-sidebar__icon feather icon-box"></i>My Surveys
                    </a>
                </li>
                <li>
                    <a class="c-sidebar__link" href="/business/deployed_contracts">
                        <i class="c-sidebar__icon feather icon-copy"></i>Deployed Surveys
                    </a>
                </li>
                <li>
                    <a class="c-sidebar__link" href="/business/wallet">
                        <i class="c-sidebar__icon feather icon-briefcase"></i>My Wallet
                    </a>
                </li>

        </div>


        <a class="c-sidebar__footer" href="../logout">
            Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
        </a>
    </aside>
</div>
@endsection

@section('admin_sidebar')
<div class="o-page__sidebar js-page-sidebar">
    <aside class="c-sidebar">
      <div class="c-sidebar__brand">
          <a href="/"><img src="../img/logo.png" width="300" alt="TrueFeedback"></a>
      </div>
            <!-- Scrollable -->
            <div class="c-sidebar__body">
                <span class="c-sidebar__title"></span>
                <ul class="c-sidebar__list">
                  <li>

                    <a class="c-sidebar__link" href="/admin/home">
                        <i class="c-sidebar__icon feather icon-home"></i>Home
                    </a>
                </li>
                <li>
                    <a class="c-sidebar__link" href="/admin/user_reports">
                        <i class="c-sidebar__icon feather icon-activity"></i>User Reports
                    </a>
                </li>
                <li>
                    <a class="c-sidebar__link" href="/admin/survey_reports">
                        <i class="c-sidebar__icon feather icon-align-justify"></i>Survey Reports
                    </a>
                </li>
                <li>
                    <a class="c-sidebar__link" href="/admin/activities">
                        <i class="c-sidebar__icon feather icon-bar-chart-2"></i>Activities
                    </a>
                </li>
                

        </div>


        <a class="c-sidebar__footer" href="../logout">
            Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
        </a>
    </aside>
</div>
@endsection