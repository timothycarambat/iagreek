@extends('marketing.layout')

@section('main_content')

    @include('marketing.navbar')
    <!-- Banner -->
      <section id="banner" style="background-image: url('/images/messy_desk.jpg'); background-size:cover">
        <div class="inner">
          <h2><img src='/images/logo.png' style="height:80px;" /></h2>
          <p>The Number #1 Greek Document Managment Software.<br />
          <br/>
          Now, let's clean up that desk and make life easy.</p>
          <ul class="actions">
            <li><a href="#" class="button special">Get Started</a></li>
          </ul>
        </div>
        <a href="#one" class="more scrolly">Learn More</a>
      </section>

    <!-- One -->
      <section id="one" class="wrapper style1 special">
        <div class="inner">
          <header class="major">
            <h2>Quick Question - <br />
            Are you sure <i><u>everyone</u></i> signed that waiver?</h2>
            <p>Never second guess yourself again on documents that need signing.<br />
            With IAGREEK, you'll have that information at your fingertips. <br/>
            Validated, Organized, and Cloud-Based.
          </p>
          </header>
          <ul class="icons major">
            <li><span class="icon fa-check major style1"><span class="label">Verified</span></span></li>
            <li><span class="icon fa-sitemap major style2"><span class="label">Organized</span></span></li>
            <li><span class="icon fa-cloud major style3"><span class="label">Cloud-Based</span></span></li>
          </ul>
        </div>
      </section>

    <!-- Two -->
      <section id="two" class="wrapper alt style2">
        <section class="spotlight">
          <div class="image"><img src="images/members.PNG" alt="" /></div><div class="content">
            <h2>Track Your Entire Organization</h2>
            <p>Track Members by the position, status, or customizable tags. Update Organization by Excel upload or one-by-one!</p>
          </div>
        </section>
        <section class="spotlight">
          <div class="image"><img src="images/document.PNG" alt="" /></div><div class="content">
            <h2>Make Custom Documents</h2>
            <p>Custom Type or Copy + Paste Text to create a customizable document.</p>
          </div>
        </section>
        <section class="spotlight">
          <div class="image"><img src="images/campaign.PNG" alt="" /></div><div class="content">
            <h2>Track Signatures</h2>
            <p>Check Signature Requests over time and send reminders when needed.</p>
          </div>
        </section>
      </section>

    <!-- Three -->
      <section id="three" class="wrapper style3 special">
        <div class="inner">
          <header class="major">
            <h2>The Process</h2>
            <p>Whether its 10 signatures or 1,000 signatures -  the process is all the same.</p>
          </header>
          <ul class="features">
            <li class="icon fa-user-plus">
              <h3>Add Members to your Organization</h3>
              <p>Download and reupload our roster template to bulk add & update members. Or add members one by one. Any new active members will recieve account registration emails so they can sign documents.</p>
            </li>
            <li class="icon fa-file-text-o">
              <h3>Create A Document</h3>
              <p>Using a text editor layout your familar with, you can create a custom document. Use placeholder values in the text body to prefill the main signer's name.</p>
            </li>
            <li class="icon fa-tasks">
              <h3>Create A Campaign</h3>
              <p>Start a Campaign by naming it, setting a deadline, and attaching a document that will be the template which members will sign.</p>
            </li>
            <li class="icon fa-user">
              <h3>Select Who needs to Sign</h3>
              <p>Select who needs to sign the document by position, tag, by member or all three! We will sort it out for you!</p>
            </li>
            <li class="icon fa-users">
              <h3>Need Additional Signatures?</h3>
              <p>No Problem! We already have that handled! Select up to three <i>approval signatures</i> that need to sign off after the primary signer.</p>
            </li>
            <li class="icon fa-paper-plane-o">
              <h3>Launch Campaign</h3>
              <p>You're Done! Launch the campaign and you have all the metrics you need at your fingertips! Send reminders to nudge those who still havent signed as a friendly reminder.</p>
            </li>
          </ul>
        </div>
      </section>

    <!-- CTA -->
      <section id="cta" class="wrapper style4" style="background-image: url('images/clean_office_desk.png')">
        <div class="inner">
          <header>
            <h2>Sounds Great?</h2>
            <p>Get Started Today with a {{App\SystemVar::trialDays()}} day FREE Trial.</p>
          </header>
          <ul class="actions vertical">
            <li><a href="/register" class="button fit special">Register</a></li>
            <li><a href="/getting_started" class="button fit">Guide</a></li>
          </ul>
        </div>
      </section>
@endsection
