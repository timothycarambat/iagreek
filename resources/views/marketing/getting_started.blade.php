<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IAGREEK :: Getting Started</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/">
                        IAGREEK
                    </a>
                </li>
                <li><a href="#dashboard" class="more scrolly">Dashboard</a></li>
                <li><a href="#profile" class="more scrolly">Your Profile</a></li>
                <li><a href="#members" class="more scrolly">Your Members</a></li>
                <li><a href="#documents" class="more scrolly">Your Documents</a></li>
                <li><a href="#campaigns" class="more scrolly">Your Campaigns</a></li>
                <li><a href="#archives" class="more scrolly">Your Archives</a></li>
                <li><a href="#signers" class="more scrolly">Signing Documents</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

          <section id="dashboard" class="container-fluid">
            <h1>Your Dashboard</h1>

            <p>
              The Dashboard is your little own command center. From here you can get a quick overview of your entire organization. Your Dashboard may looking like the above picture.
              You can click the top cards to quickly view your Organization members, documents, or campaigns.</p>
              <br/>
              <div class="col-xs-12 text-center">
                <img src="gifs/dash.png" style="width:60%;height:60%" />
              </div>

              <p>If you have any <b>active</b> campaigns then you can quickly view their progress or visit them.</p>

          </section>

          <section id="profile" class="container-fluid">
            <h1>Your Profile</h1>
            <p>
              <a href="{{$_ENV['ALT_URL']}}">Here is where you can log in.</a> <br>
              If Singing In for the first time. You are going to want to visit your profile configurations first.
              On this page you can review your basic profile settings, your accounts billing information, and your current subscription status.
            </p>
              <div class="col-xs-12 text-center">
                <img src="gifs/profile.gif" style="width:60%;height:60%"/>
              </div>
              <br>
              <p>Additionally, there are settings for email notifications as well as setting your user image and your Document Letterhead.
              If you update any information on this page, be sure that you submit the edits or they will not be saved.
            </p>
          </section>

          <section id="members" class="container-fluid">
            <h1>Your Members</h1>
            <p>
              Keeping track of who's who is important, but even more so who are your <b>active</b> Members. Remember, you are only billed by <b>active</b> members.
              So we allow you to keep legacy records of other members after they have retired from your organization.
              <br><br>
              We allow the ability for you to bulk upload/edit members in your organization via an Excel template - since our surveys say that's how most are keeping records anyway!
              With a bit of Excel wizardy, you can upload your entire organization's roster. Or you can do it one-by-one; your choice!
              <br><br>
              <b>Don't Forget!</b> If you (the organization admin for IAGREEK) want to sign documents -  youre gonna have to add yourself as a member too!
            </p>
              <div class="col-xs-12 text-center">
                <img src="gifs/members.gif" style="width:60%;height:60%"/>
              </div>
              <br>
              <p>Additionally, You can modify attributes for individual members if wanted, dynamically add or remove tags, and even remove members entirely.
              </p>
          </section>

          <section id="documents" class="container-fluid">
            <h1>Your Documents</h1>
            <p>
              Think of Documents more like templates - where you will have a generic document that is used for lets say... waivers on a social. You could type your own verbiage OR just copy paste what you already
              have. You can even input placeholders that will automatically fill out the signers name in the text or the date they are signing.
              <br><br>
              Using a text editor that is much like any you've used before you can be on your way to making mailouts.
            </p>
              <div class="col-xs-12 text-center">
                <img src="gifs/documents.gif" style="width:60%;height:60%"/>
              </div>
              <br>
              <p>You can now attach these documents to a campaign so that your members can begin signing them.
              </p>
          </section>

          <section id="campaigns" class="container-fluid">
            <h1>Your Campaigns</h1>
            <p>
              Campaigns - as we call them - are simply put a mass mail of signature requests. You first name the campaign, attach and document, and then specify the members who are the primary signers of the document.
              This could be by tag, position, or even by select members. If there is classification overlap fear not! - we take care of that so we dont blow up all your members inboxes!
              <br><br>
              If you want to have approvals after the primary signer - you can specify up to <b>3</b> additional signatures after the primary signer.
              <br><br>
              After Creating a Campaign you can then view its progress as it runs, seeing if all signers have signed, or if there is an approval that needs approving. This data at a glance will also now appear on your dashboard!
            </p>
              <div class="col-xs-12 text-center">
                <img src="gifs/campaigns.gif" style="width:60%;height:60%"/>
              </div>
              <br>
              <p>From the Overview of a Campaign, you can download the completed documents as they come in, should you ever need them. You can also click the "Send Reminder Emails" button to give a nice nudge to those whose mind may have slipped and forgot to sign!
              </p>
              <br>
              <div class="col-xs-12 text-center">
                <img src="gifs/campaign_review.gif" style="width:60%;height:60%"/>
              </div>
              <p><b>Note:</b> Clicking the "trash" icon doesnt wipe your campaign off the face of the earth, it just moves it to your <a href="#archives">Archives</a>, but it does end the campaign and pending requests are halted.</p>
          </section>

          <section id="archives" class="container-fluid">
            <h1>Your Archives</h1>
            <p>Think of the Archives as more or less a static campaign. You can still review the campaign when it stopped running as well as download the files that were generated from signatures.</p>
            <p><b>NOTE</b> Keep in mind! Deleteing a Campaign here will erase all records and documents generated by that campaign. After you do that those files are GONE.</p>
          </section>

          <section id="signers" class="container-fluid">
            <h1>Signing and Approving Documents</h1>
            <p>
              <a href="{{$_ENV['SIGN_URL']}}"> Go Here to Sign Into the Document Signer Application.</a>
            </p>
            <p>
              Whether its signing a document as the primary signer or approving a documents that was already signed - the process is one in the same.
              <br><br>
              Once logged in you will be present documents that you need to sign (as the primary signer) or that need approval.
            </p>
              <br>
                <div class="col-xs-12 text-center">
                  <img src="gifs/signedreqs.PNG" style="width:60%;height:60%"/>
                </div>
            <p>
              All you need to do it click the "Sign Document" Button and review the content.
              If you're okay with everything, just click away and carry on with your life - you just signed a document!
            </p>
              <div class="col-xs-12 text-center">
                <img src="gifs/signer.gif" style="width:60%;height:60%"/>
              </div>
          </section>


        </div>

    </div>
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src='{{asset("js/app.js")}}'></script>

</body>

</html>
