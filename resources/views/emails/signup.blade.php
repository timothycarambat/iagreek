@extends('beautymail::templates.minty')

@section('content')

	@include('beautymail::templates.minty.contentStart')
		<tr>
			<td class="title">
				Thanks for Signing Up!
			</td>
		</tr>
		<tr>
			<td width="100%" height="10"></td>
		</tr>
		<tr>
			<td class="paragraph">
  			 <h3>Big Thanks!</h3>
				 <p>We wanted to first say thanks for giving us a go. We intend on making document sigining and organization management easy from here on out.</p>
         <br>
         <p>This means that now instead of having to manually print and copy and send any signed documents is old news - using our service.</p>
				 <p>To get started setting up your organization <a href="{{$_ENV['ALT_URL']}}">Click this link</a>!</p>
         <br>
         <p>Now anytime you need any of your organization members to sign a document you can just request the signatures online!</p>
				 <br>
         <p>You can always refer to our <a href="{{$_ENV['APP_URL']}}/getting_started">Getting Started Documentation to get started</a>.</p>

				 <br>
				 <p>Best, <br> IAGREEK Support Team </p>

			</td>
		</tr>

	@include('beautymail::templates.minty.contentEnd')

@stop
