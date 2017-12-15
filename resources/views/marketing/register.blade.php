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

        {{Form::label('org_name', 'Organization Name:',['style'=>'font-weight:800'])}}
        {{Form::text('org_name',null,['class' => 'form-control','style'=>'width:50%;','placeholder'=>'Sample Organization','required' => 'required']) }}

        {{Form::label('phone', 'Contact Number:',['style'=>'font-weight:800'])}}
        {{Form::text('phone',null,['class' => 'form-control','style'=>'width:50%;','placeholder'=>'(555) 555-1234','required' => 'required']) }}

        {{Form::label('address', 'Street Address:',['style'=>'font-weight:800'])}}
        {{Form::text('address',null,['class' => 'form-control','style'=>'width:50%;','placeholder'=>'123 Sample Lane','id'=>'street_address','required' => 'required']) }}

        {{Form::label('city', 'City:',['style'=>'font-weight:800'])}}
        {{Form::text('city',null,['class' => 'form-control','style'=>'width:50%;','placeholder'=>'Los Angeles','id'=>'city','required' => 'required']) }}

        {{Form::label('state', 'Select a State:',['style'=>'font-weight:800'])}}
        {{Form::select('state', $states->pluck('name','code'),null, ['class' => 'form-control','style'=>'width:50%;','id'=>'state','required' => 'required']) }}

        {{Form::label('zip', 'Zip Code:',['style'=>'font-weight:800'])}}
        {{Form::text('zip',null,['class' => 'form-control','style'=>'width:50%;','placeholder'=>'90210','id'=>'zip','required' => 'required']) }}

        {{Form::label('website', 'Website:',['style'=>'font-weight:800'])}}
        {{Form::text('website','',['class' => 'form-control','style'=>'width:50%;','placeholder'=>'https://www.example.org']) }}

        {{Form::label('org_type', 'Organization Type:',['style'=>'font-weight:800'])}}
        {{Form::select('org_type',
          ['sorority' => 'Sorority',
           'fraternity' => 'Fraternity',
           'honors' => 'Honors Organization',
           'religious' => 'Religious Organization',
           'other' => 'Other'
           ],
          null, ['placeholder' => 'Select Org. Type','class' =>'form-control','style'=>'width:50%;'])
        }}
         <hr>
        <h6>Billing Information:</h6>


        <a class=" btn button" href="/home">Cancel</a>
        {{Form::submit('Register',['class'=>'button special','style'=>'margin-top:10px;margin-bottom:10px;'])}}
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
