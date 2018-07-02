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
                <li>
                    <a href="#dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="#signin" class="more scrolly">Your Profile</a>
                </li>
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

              <p>If you have any <b style="color:#000">active</b> campaigns then you can quickly view their progress or visit them.</p>

          </section>

          <section id="signin" class="container-fluid">
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
