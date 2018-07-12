@extends('marketing.layout')

@section('main_content')

  @include('marketing.navbar')
  <article id="main">
    <header style="background-image: url('/images/messy_desk.jpg')">
      <h2>What is IAGREEK?</h2>
    </header>
    <section class="wrapper style5">
      <div class="inner">

        <h3>What exactly am I signing up for?</h3>
        <p>
          Remember when you had your last Social or Event and had to somehow organize the signing of a really simple piece of paper for every member in your Organization?
          <br>
          <b>We Do.</b>
          <br>
          We know that keeping heads and tails of an organization can be difficult - especially when it comes to keeping track of who's signed what and not having the results
          be a pile of papers where you best answer for if everyone signed the waiver was <i>Maybe</i>.
          <br><br>
          With IAGREEK all you need is a single admin account. Then <a href="/register">Register Your Organization</a>, import your organization roster, make a document, and launch a campaign!
          <br><br>
          The rest of the work - getting the signatures, viewing the documents, keeping track of it all over time. We put those metrics right at your fingertips! The signed document PDF's are always available for you to download and view - anytime.
        </p>

        <p> Get started with a {{App\SystemVar::trialDays()}} day trial (if you dont like it dont worry! You can still get all your signed or submitted documents sent to you!)</p>
        <div align='center'>

          <p style="font-style:italic">Pricing is arranged by <b>Active</b> Organization size and you will automatically be alerted if you need to switch plans!</p>
        <div class="row" style="text-align: center;">
              <div class="col-md-3 col-sm-6" style='float: none;display: inline-block;text-align: left;'>
                  <div class="pricingTable">
                      <div class="pricingTable-header">
                          <span class="price-value">10<span class="currency">$</span></span>
                          <h3 class="title">Small</h3>
                      </div>
                      <ul class="pricing-content">
                          <li>{{App\SystemVar::where('name','org_small')->pluck('value')[0]}} Active Members</li>
                          <li>Unlimited Documents</li>
                          <li>Unlimited Campaigns</li>
                          <li>Reminder Emails</li>
                          <li>Basic Technical Support</li>
                      </ul>
                      <a href="#" class="pricingTable-signup">Sign Up</a>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6" style='float: none;display: inline-block;text-align: left;'>
                  <div class="pricingTable green">
                      <div class="pricingTable-header">
                          <span class="price-value">20<span class="currency">$</span></span>
                          <h3 class="title">Medium</h3>
                      </div>
                      <ul class="pricing-content">
                        <li>{{App\SystemVar::where('name','org_med')->pluck('value')[0]}} Active Members</li>
                        <li>Unlimited Documents</li>
                        <li>Unlimited Campaigns</li>
                        <li>Reminder Emails</li>
                        <li>Adv. Technical Support</li>
                      </ul>
                      <a href="#" class="pricingTable-signup">Sign Up</a>
                  </div>
              </div>

              <div class="col-md-3 col-sm-6" style='float: none;display: inline-block;text-align: left;'>
                  <div class="pricingTable orange">
                      <div class="pricingTable-header">
                          <span class="price-value">30<span class="currency">$</span></span>
                          <h3 class="title">Large</h3>
                      </div>
                      <ul class="pricing-content">
                        <li>{{App\SystemVar::where('name','org_large')->pluck('value')[0]}} Actives</li>
                        <li>Unlimited Documents</li>
                        <li>Unlimited Campaigns</li>
                        <li>Reminder Emails</li>
                        <li>Tier 1 Technical Support</li>
                      </ul>
                      <a href="#" class="pricingTable-signup">Sign Up</a>
                  </div>
              </div>
          </div>

        </div>

      </div>
    </section>
  </article>

  <section id="cta" class="wrapper style4">
    <div class="inner">
      <header>
        <h2>See what we mean?</h2>
        <p>Get started today by siging up and making some documents.</p>
      </header>
      <ul class="actions vertical">
        <li><a href="/register" class="button fit special">Sign me Up!</a></li>
      </ul>
    </div>
  </section>
@endsection

@section('page_script')
<script type="text/javascript">
  $('#header').removeClass('alt');
</script>
@endsection
