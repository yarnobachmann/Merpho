
{{ Form::open(['class' => ' animated form', 'action' => 'Frontend\PagesController@getcontact']) }}
<div class="container">
  <div class="col-md-12">
    <div class="row">
      <div class="col-6 form-line">
        <div class="form-group">
          {{ Form::label('name', 'Naam:') }}
          {{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'vul hier je naam in!']) }}
        </div>
        <div class="form-group">
          {{ Form::label('email', 'Email:') }}
          {{ Form::email('email', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'vul hier je email adres in!']) }}
        </div>
        <div class="form-group">
          {{ Form::label('telephone', 'Telefoon nummer:') }}
          {{ Form::number('telephone', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'vul hier je telefoon nummer in!']) }}
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          {{ Form::label('textmessage', 'Bericht:') }}
          {{ Form::textarea('textmessage', null, ['class' => 'form-control ', 'required' => '', 'placeholder' => 'vul hier je berichtje in!']) }}
        </div>
        <div>
          {{ Form::submit('Verzend bericht', ['class' => 'btn btn-default submit ']) }}
        </div>
      </div>
    </div>
  </div>
</div>


{{ Form::close() }}
