<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document upload</title>
    </head>
    <body class="container">
        <div style="padding-top: 50px; display: block; margin-left: auto; margin-right: auto;">
            <button type="button" class="btn btn-primary center-block" id="upload-form-btn" >Add document</button>
        </div>
        <div class="col-sm-8 col-sm-offset-2">

            @foreach ($documents as $document)
            <!-- GET OUR BASIC DOCUMENT INFORMATION -->
            <h2>{{ $document->name }} <small>{{ $document->file_name }}: {{ $document->file_type }}</small></h2>
            
            <!-- SHOW OFF THE TYPES -->
            <h4>Types</h4>
            @foreach ($document->types as $type) 
            <p>{{ $type->name }}</p>
            @endforeach

            <!-- SHOW OFF THE CLIENTS -->
            <h4>Clients</h4>
            @foreach ($document->clients as $client) 
            <p>{{ $client->file_name }}</p>
            @endforeach

            <!-- SHOW OFF THE FUNDS -->
            <h4>Funds</h4>
            @foreach ($document->funds as $fund) 
            <p>{{ $fund->legal_name }}</p>
            @endforeach

            @endforeach

        </div>
        <div class="modal fade" id="doc-upload"  role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Document Upload</h4>
                    </div>
                    <div class="modal-body">
                        <form id="doc-form" enctype="multipart/form-data" class="form-horizontal">
                            <div id="manual-fine-uploader"  style="padding:20px;"></div>
                            <input type="hidden" name="original_file_name" id="original_file_name">
                            <input type="hidden" name="file_type" id="file_type">
                            <div class="form-group">
                                <label for="types" class="col-sm-2 control-label">
                                    Document type: 
                                </label>
                                <div class="col-sm-10">
                                    <select id="types" class="form-control" name="types[]" multiple="multiple">
                                        @foreach ($types as $type) 
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                    <span id="types-help" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="document_date">
                                    Document Date:
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" name="document_date" id="document_date">
                                    <span id="document_date-help" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="date_received">
                                    Document Received:
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" data-provide="datepicker"  data-date-format="yyyy-mm-dd" name="date_received" id="date_received">
                                    <span id="date_received-help" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="funds">
                                    Funds: 
                                </label>
                                <div class="col-sm-10">
                                    <select id="funds" name="funds[]" multiple="multiple" class="form-control">
                                        @foreach ($funds as $fund) 
                                        <option value="{{$fund->portfolio_id}}">{{$fund->legal_name}}</option>
                                        @endforeach
                                    </select>
                                    <span id="funds-help" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="clients">
                                    Clients: 
                                </label>
                                <div class="col-sm-10">
                                    <select id="clients" name="clients" multiple="multiple" class="form-control">
                                        @foreach ($clients as $client) 
                                        <option value="{{$client->organization_id}}">{{$client->file_name}}</option>
                                        @endforeach
                                    </select>
                                    <span id="clients-help" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"for="name">
                                    Document Name:
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name">
                                    <span id="name-help" class="help-block"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="send-form-btn" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>    </div>
    </body>
    <script type="text/template" id="qq-template">
        <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Upload a file</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <div class="qq-progress-bar-container-selector">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <span class="qq-upload-file-selector qq-upload-file"></span>
                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                    <span class="qq-upload-size-selector qq-upload-size"></span>
                    <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                    <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-multiselect.css')}}">
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{URL::asset('js/bootstrap-multiselect.js')}}"></script>
    <script src="{{URL::asset('js/datepicker.js')}}"></script>
    <link href="{{URL::asset('css/fine-uploader-new.css')}}" rel="stylesheet">
    <script src="{{URL::asset('js/fine-uploader.js')}}"></script>
    <script src="{{URL::asset('js/documents/index.js')}}"></script>

</html>
