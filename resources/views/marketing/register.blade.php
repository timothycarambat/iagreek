@extends('marketing.layout')

@section('main_content')

  @include('marketing.navbar')
  <?php $states = App\States::getStatesAll()?>
  <article id="main">
    <header>
      <h2>Register</h2>
    </header>
    <section class="wrapper style5">
      <div class="inner">
        <h2>Sign Up</h2>

        {!! Form::open(['url' => '/register']) !!}

        <div class="col-xs-6">
          <h6><u>Account Information</u></h6>
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
          {{Form::select('state', $states->pluck('name','code'),null, ['class' => 'form-control','id'=>'state','required' => 'required']) }}

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
          {{Form::text('billing_address',null,['class' => 'form-control','placeholder'=>'123 Sample Lane','id'=>'street_address','required' => 'required']) }}

          {{Form::label('billing_city', 'City:',['style'=>'font-weight:800'])}}
          {{Form::text('billing_city',null,['class' => 'form-control','placeholder'=>'Los Angeles','id'=>'city','required' => 'required']) }}

          {{Form::label('billing_state', 'Select a State:',['style'=>'font-weight:800'])}}
          {{Form::select('billing_state', $states->pluck('name','code'),null, ['class' => 'form-control','id'=>'state','required' => 'required']) }}

          {{Form::label('billing_zip', 'Zip Code:',['style'=>'font-weight:800'])}}
          {{Form::text('billing_zip',null,['class' => 'form-control','placeholder'=>'90210','id'=>'zip','required' => 'required']) }}

          {{ Form::label(null, 'Credit card number',['style'=>'font-weight:800','data-cc-label']) }}
              <div class="form-control" id='card-number'></div>
          <div id="card-errors" role="alert"></div>

        </div>


        <div class="row">
          <div class="pull-left">
            <a class=" btn button" style="margin:10px" href="/home">Cancel</a>
            {{Form::submit('Register',['class'=>'button special','style'=>'margin-top:10px;margin-bottom:10px;'])}}
          </div>
        </div>
        {!! Form::close() !!}

      </div>
    </section>
  </article>
@endsection

@section('page_script')
<script type="text/javascript">
  $('#header').removeClass('alt');
</script>
@endsection
