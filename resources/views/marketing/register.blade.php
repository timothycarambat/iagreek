@extends('marketing.layout')

@section('main_content')

  @include('marketing.navbar')
  <?php $states = App\States::getStatesAll()?>

  <div style="top: 50%;left: 50%;transform: translate(-50%, -50%);" class="modal fade" id="processing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
              <h1 style="color:#000"><i style='vertical-align: middle;' class="fa fa-cog fa-spin fa-3x"></i> Rushing your account!</h1>
            </div>
        </div>
    </div>
</div>

  <article id="main">
    <header style="background-image:url('images/register.png');background-size:cover;">
      <h2>Register</h2>
    </header>
    <section class="wrapper style5">
      <div class="inner">



        @if ( !is_null( session('failure') ) )
          <div class="alert alert-danger text-center" style="font-weight:800">
              <div class="container">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                  </button>
                  <span>{{ session('failure') }} </span>
              </div>
          </div>
        @endif

          @if( !empty($errors->first() ) )
          <div class="alert alert-danger text-center" style="font-weight:800">
              <div class="container">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                  </button>
                  <span>{{ $errors->first() }} </span>
              </div>
          </div>
          @endif

          @if( App\SystemVar::trialDays() > 0)
            <div class="alert alert-info text-center" style="margin-top: 20px;font-weight:800">
              Start With {{App\SystemVar::trialDays()}} Days Free On Us !
            </div>
          @endif

        <h2>Sign Up</h2>

        {!! Form::open(['url' => 'register','data-card-submit']) !!}

        <div class="col-xs-6">
          <h6><u>Login Information</u></h6>
          {{Form::label('email', 'Email:',['style'=>'font-weight:800'])}}
          {{Form::text('email',null,['class' => 'form-control','placeholder'=>'alpha@betagamma.org','required' => 'required']) }}

          {{Form::label('password', 'Password:',['style'=>'font-weight:800'])}}
          {{Form::password('password',['class' => 'form-control','required' => 'required']) }}

          {{Form::label('password_confirmation', 'Confirm Password:',['style'=>'font-weight:800;margin:0px;'])}}
          <p class="small" style="margin: 0px;font-style: italic;color: #8e8e8e;">*must be at least 8 characters</p>
          {{Form::password('password_confirmation',['class' => 'form-control','required' => 'required']) }}

          <br><h6><u>Account Information</u></h6>
          {{Form::label('org_name', 'Organization Name:',['style'=>'font-weight:800'])}}
          {{Form::text('org_name',null,['class' => 'form-control','placeholder'=>'Sample Organization','required' => 'required']) }}

          {{Form::label('name', 'Contact Name:',['style'=>'font-weight:800'])}}
          {{Form::text('name',null,['class' => 'form-control','placeholder'=>'Sample Sam','required' => 'required']) }}

          {{Form::label('phone', 'Contact Number:',['style'=>'font-weight:800'])}}
          {{Form::text('phone',null,['class' => 'form-control','placeholder'=>'(555) 555-1234','required' => 'required']) }}

          {{Form::label('address', 'Street Address:',['style'=>'font-weight:800'])}}
          {{Form::text('address',null,['class' => 'form-control','placeholder'=>'123 Sample Lane','id'=>'street_address','required' => 'required']) }}

          {{Form::label('city', 'City:',['style'=>'font-weight:800'])}}
          {{Form::text('city',null,['class' => 'form-control','placeholder'=>'Los Angeles','id'=>'city','required' => 'required']) }}

          {{Form::label('state', 'Select a State:',['style'=>'font-weight:800'])}}
          {{Form::select('state', $states->pluck('name','code'),null, ['class' => 'form-control','placeholder'=>'Select a State','id'=>'state','required' => 'required']) }}

          {{Form::label('zip', 'Zip Code:',['style'=>'font-weight:800'])}}
          {{Form::text('zip',null,['class' => 'form-control','placeholder'=>'90210','id'=>'zip','required' => 'required']) }}

          {{Form::label('website', 'Website:',['style'=>'font-weight:800'])}}
          {{Form::text('website','',['class' => 'form-control','placeholder'=>'https://www.example.org']) }}

          {{Form::label('org_type', 'Organization Type:',['style'=>'font-weight:800'])}}
          {{Form::select('org_type',
            ['sorority' => 'Sorority',
             'fraternity' => 'Fraternity',
             'honors' => 'Honors Organization',
             'religious' => 'Religious Organization',
             'other' => 'Other'
             ],
            null, ['placeholder' => 'Select Org. Type','class' =>'form-control'])
          }}
        </div>

        <div class="col-xs-6">
          <h6><u>Billing Information</u></h6>
          {{Form::label('billing_name', 'Contact Name:',['style'=>'font-weight:800'])}}
          {{Form::text('billing_name',null,['class' => 'form-control','placeholder'=>'Sample Sam','required' => 'required']) }}

          {{Form::label('billing_phone', 'Contact Number:',['style'=>'font-weight:800'])}}
          {{Form::text('billing_phone',null,['class' => 'form-control','placeholder'=>'(555) 555-1234','required' => 'required']) }}

          {{Form::label('billing_address', 'Street Address:',['style'=>'font-weight:800'])}}
          {{Form::text('billing_address',null,['class' => 'form-control','placeholder'=>'123 Sample Lane','id'=>'billing_street_address','required' => 'required']) }}

          {{Form::label('billing_city', 'City:',['style'=>'font-weight:800'])}}
          {{Form::text('billing_city',null,['class' => 'form-control','placeholder'=>'Los Angeles','id'=>'billing_city','required' => 'required']) }}

          {{Form::label('billing_state', 'Select a State:',['style'=>'font-weight:800'])}}
          {{Form::select('billing_state', $states->pluck('name','code'),null, ['class' => 'form-control','id'=>'billing_state','required' => 'required']) }}

          {{Form::label('billing_zip', 'Zip Code:',['style'=>'font-weight:800'])}}
          {{Form::text('billing_zip',null,['class' => 'form-control','placeholder'=>'90210','id'=>'billing_zip','required' => 'required']) }}

          {{Form::label('org_size', 'Active Members In Organization (Estimate):',['style'=>'font-weight:800'])}}
          {{Form::number('org_size',null,['class' => 'form-control',
          'min'=>0,'id'=>'org_size',
          'required' => 'required',
          'onkeypress' => "return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
          ]) }}


          <div class="col-xs-12" style="padding:10px 0px 30px 0px">
            <div class="col-xs-4 small-plan">
              <h4 style="margin-bottom:0px;" class="text-center"> Small </h4>
              <p style="margin-bottom:0px;" class="text-center small"> < 50 active members </p>
              <h6 class="text-center">$10 / mth </h6>
            </div>
            <div class="col-xs-4 med-plan">
              <h4 style="margin-bottom:0px;" class="text-center"> Medium </h4>
              <p style="margin-bottom:0px;" class="text-center small"> 51-199 active members </p>
              <h6 class="text-center">$20 / mth </h6>
            </div>
            <div class="col-xs-4 lg-plan">
              <h4 style="margin-bottom:0px;" class="text-center"> Large </h4>
              <p style="margin-bottom:0px;" class="text-center small"> 200+ active members </p>
              <h6 class="text-center">$30 / mth </h6>
            </div>
          </div>

          <div class="form-check">
            <input name='trialOnly' type="checkbox" class="form-check-input" id='trialOnly'>
            <label class="form-check-label" for="trialOnly">Sign Up without Card*</label>
          </div>



          <div style="margin-top:10px" data-cc-block >
            {{ Form::label(null, 'Credit card number',['style'=>'font-weight:800','data-cc-label']) }}
                <div class="form-control" id='card-number'></div>
                <div id="card-errors" role="alert"></div>
            <p class="small">Note: We do not ever store credit card information or details. We utilize abstract,safe and PCI compliant card refrences using the <a href='https://stripe.com/'> Stripe API</a></p>

            {{Form::label('coupon', 'Coupon Code:',['style'=>'font-weight:800'])}}
            {{Form::text('coupon',null,['class' => 'form-control']) }}
            <br>

          </div>

          <div style="margin-top:10px; display:none" data-trial-block >
            <p style="margin-bottom:0px" class="small">*If Signing up without a card you and your Organization will have limited access to the application in the following ways.</p>
            <ul style="list-style: none">
              <li>- Up to 10 Additional Members Limit in your roster</li>
              <li>- Up to 3 Custom Documents</li>
              <li>- Up to 3 Campaigns (Active or Inactive)</li>
            </ul>
          </div>


        </div>


        <div class="row">
          <div class="pull-left">
            <a class=" btn button" style="margin:10px" href="/">Cancel</a>
            {{Form::submit('Register',['class'=>'button special','style'=>'margin-top:10px;margin-bottom:10px;'])}}
          </div>
        </div>
        {!! Form::close() !!}
    </section>
  </article>
@endsection

@section('page_script')
<script type="text/javascript">
  $('#header').removeClass('alt');
</script>
@endsection
