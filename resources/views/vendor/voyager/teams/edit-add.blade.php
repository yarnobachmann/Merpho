@extends('voyager::master')

@section('page_title', __('voyager.generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('css')
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }
        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }
        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }
        .mce-content-body {
            color: #555;
            font-size: 14px;
        }
        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }
        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }
        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        Wijzig de team gegevens
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form" action="@if(isset($dataTypeContent->id)){{ route('voyager.teams.update', $dataTypeContent->id) }}@else{{ route('voyager.teams.store') }}@endif" method="POST" enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <!-- ### posts ### -->
                    <div class="panel  panel-bordered">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-heading">
                            <h3 class="panel-title">
                              team
                                <span class="panel-desc"> vul hier de gegevens in</span>
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <label for="naam">Naam:</label>
                            <input type="text" class="form-control" id="naam" name="naam" placeholder="yarno bachmann" value="@if(isset($dataTypeContent->naam)){{ $dataTypeContent->naam }}@endif">
                          </div>
                          <div class="form-group">
                            <label for="beroep">Beroep:</label>
                            <input type="text" class="form-control" id="beroep" name="beroep" placeholder="Programmeur" value="@if(isset($dataTypeContent->beroep)){{ $dataTypeContent->beroep }}@endif">
                          </div>
                          <div class="form-group">
                            <label for="text">Tekst over jezelf:</label>
                            <textarea class="form-control" required="" minlength="2" maxlength="514" rows="8" id="text" name="text" placeholder="section 1 text" style="resize: vertical;">@if(isset($dataTypeContent->text)){{ $dataTypeContent->text }}@endif</textarea>
                          </div>

                           </div>
                      </div>
                  </div>
                    <div class="col-md-4">
                      <div class="panel  panel-bordered">
                      <div class="panel-heading">
                          <h3 class="panel-title">
                            Afbeelding
                              <span class="panel-desc"> vul hier de afbeelding in</span>
                          </h3>
                          <div class="panel-actions">
                              <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                          </div>
                          </div>
                          <div class="panel-body">
                            @if(isset($dataTypeContent->image))
                                <img id="image_side" src="{{ filter_var($dataTypeContent->image, FILTER_VALIDATE_URL) ? $dataTypeContent->image : Voyager::image( $dataTypeContent->image ) }}" style="max-width: 100%; max-height:500px;" />
                            @endif
                            <div class="form-group">
                              <label for="image" style="font-weight:bold;">Afbeelding:</label>
                              <input type="file" class="form-control" id="side_image" name="image" value="@if(isset($dataTypeContent->image)){{ $dataTypeContent->image }}@endif">
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-8">
                  <div class="panel  panel-bordered">
                  <div class="panel-heading">
                      <h3 class="panel-title">
                        Links
                          <span class="panel-desc"> vul hier de links in</span>
                      </h3>
                      <div class="panel-actions">
                          <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                      </div>
                    </div>
                      <div class="panel-body">
                        <div class="form-group">
                          <label for="linkedin_link">Linkedin (optioneel):</label>
                          <input type="text" class="form-control" id="linkedin_link" name="linkedin_link" placeholder="linkedin.." value="@if(isset($dataTypeContent->linkedin_link)){{ $dataTypeContent->linkedin_link }}@endif">
                        </div>
                        <div class="form-group">
                          <label for="facebook_link">Facebook (optioneel):</label>
                          <input type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="facebook.." value="@if(isset($dataTypeContent->facebook_link)){{ $dataTypeContent->facebook_link }}@endif">
                        </div>
                        <div class="form-group">
                          <label for="instagram_link">Instagram (optioneel):</label>
                          <input type="text" class="form-control" id="instagram_link" name="instagram_link" placeholder="instagram.." value="@if(isset($dataTypeContent->instagram_link)){{ $dataTypeContent->instagram_link }}@endif">
                        </div>
                        <div class="form-group">
                          <label for="portfolio_link">Portfolio (optioneel):</label>
                          <input type="text" class="form-control" id="portfolio_link" name="portfolio_link" placeholder="portfolio.." value="@if(isset($dataTypeContent->portfolio_link)){{ $dataTypeContent->portfolio_link }}@endif">
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="row">

                    </div>
                  </div>

                  <div class="col-4 panel-footer">
                      <button type="submit" class="btn btn-primary save">Sla wijzingen op</button>
                  </div>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            {{ csrf_field() }}
            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
        </form>
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('#slug').slugify();
        @if ($isModelTranslatable)
            $('.side-body').multilingual({"editing": true});
        @endif
        $('.save').attr("style", "pointer-events: none;");
        if (document.getElementById('image_side')){
          $('.save').attr("style", "pointer-events: auto;");
        } else{
          $('.save').attr("style", "pointer-events: none;");
        }

        $('#side_image').bind('change', function() {

          //this.files[0].size gets the size of your file.


          if (this.files[0].size >= 2039670) {
            alert("Je afbeelding is groter dan 2039670 bytes namelijk:" + this.files[0].size +" kies a.u.b een andere afbeelding");
          }else{
            $('.save').attr("style", "pointer-events: auto;");
          }

        });

        $('#right_image').bind('change', function() {

          //this.files[0].size gets the size of your file.


          if (this.files[0].size >= 2039670) {
            alert("Je afbeelding is groter dan 2039670 bytes namelijk:" + this.files[0].size +" kies a.u.b een andere afbeelding");
          }else{

          }

        });

        });

    </script>
@stop
