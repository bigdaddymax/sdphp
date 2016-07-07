$(function(){
            
    var manualuploader = new qq.FineUploader({
        element: $('#manual-fine-uploader')[0],
        request: {
            endpoint: 'upload'
        },
        autoUpload: false,
        text: {
            uploadButton: '<i class="icon-plus icon-white"></i> Select Files'
        },
        debug: true,
        multiple: false,
        template: $('#qq-template')[0],
        callbacks: {
            onComplete: function(id, name, responseJSON, xhr){
                if (responseJSON.success) {
                }
            }
        }
    });

    $('#upload-form-btn').on(
        'click',
        function() {
            manualuploader.clearStoredFiles();   
            $('#doc-upload').modal({
                show: true
            });
        }
        );
            
    $('#types').multiselect();
    $('#funds').multiselect();
    $('#clients').multiselect();
            
 
    $('#send-form-btn').on('click', function(){
        var f = manualuploader.getUploads();
        if (f.length > 0) {
            $('#original_file_name').val(f[0]['name']);
            $('#file_type').val(f[0]['name'].split('.').pop());
            $.post('documents/create', $('#doc-form').serialize())
            .done(function(){
                manualuploader.uploadStoredFiles();
                $('#doc-upload').modal('hide');
            })
            .fail(function(data){
                var errors = JSON.parse(data.responseText);
                $('.form-group').each(function(index, elem){
                    $(elem).find('.form-control').each(function(idx, control){
                        var id = $(control).attr('id');
                        if (errors[id] == null) {
                            $('#'+id+'-help').empty();
                            $(elem).removeClass('has-error').addClass('has-success');
                        }
                    });
                });
                $.each(errors, function(key, val){
                    $('#'+key).parents('.form-group').addClass('has-error');
                    $('#'+key+'-help').html(val);
                });
            });
        } else {
            alert('No file selected');
        }
        
    });
            
});
