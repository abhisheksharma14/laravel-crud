<!DOCTYPE html>
<html>
    <head>
        <title>Upload | Polar</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{asset('css/common.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/upload.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Generic page styles -->
        <link rel="stylesheet" href="{{asset('uploader/css/style.css')}}">
        <!-- blueimp Gallery styles -->
        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <link rel="stylesheet" href="{{asset('uploader/css/jquery.fileupload.css')}}">
        <link rel="stylesheet" href="{{asset('uploader/css/jquery.fileupload-ui.css')}}">
        <!-- CSS adjustments for browsers with JavaScript disabled -->
        <noscript><link rel="stylesheet" href="{{asset('uploader/css/jquery.fileupload-noscript.css')}}"></noscript>
        <noscript><link rel="stylesheet" href="{{asset('uploader/css/jquery.fileupload-ui-noscript.css')}}"></noscript>
    </head>
    <body>
        <div class="header">
            <div class="brand"><a href="/">Polar</a></div>
            <div class="menu">
                <ul class="horizontal">
                    <li class="active"><a href="#">Upload</a></li>
                    <li><a href="/search">Search</a></li>
                </ul>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content">
                <form id="fileupload" action="/upload" method="POST" enctype="multipart/form-data">
                    <!-- Redirect browsers with JavaScript disabled to the origin page -->
                    <noscript><input type="hidden" name="redirect" value="/upload"></noscript>
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class="row fileupload-buttonbar">
                        <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files...</span>
                                <input type="file" name="files[]" multiple>
                            </span>
                            <button type="submit" class="btn btn-primary start">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start upload</span>
                            </button>
                            <button type="reset" class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel upload</span>
                            </button>
                            <!-- <button type="button" class="btn btn-danger delete">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>Delete</span>
                            </button>
                            <input type="checkbox" class="toggle"> -->
                            <!-- The global file processing state -->
                            <span class="fileupload-process"></span>
                        </div>
                        <!-- The global progress state -->
                        <div class="col-lg-5 fileupload-progress fade">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                            </div>
                            <!-- The extended global progress state -->
                            <div class="progress-extended">&nbsp;</div>
                        </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                </form>
                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
            </div>
        </div>
        <!-- The template to display files available for upload -->
        <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td>
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                </td>
                <td>
                    {% if (!i && !o.options.autoUpload) { %}
                        <button class="btn btn-primary start" disabled>
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
        <script src="{{asset('uploader/js/vendor/jquery.ui.widget.js')}}"></script>
        <!-- The Templates plugin is included to render the upload/download listings -->
        <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
        <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
        <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
        <!-- The Canvas to Blob plugin is included for image resizing functionality -->
        <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
        <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- blueimp Gallery script -->
        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
        <script src="{{asset('uploader/js/jquery.iframe-transport.js')}}"></script>
        <!-- The basic File Upload plugin -->
        <script src="{{asset('uploader/js/jquery.fileupload.js')}}"></script>
        <!-- The File Upload processing plugin -->
        <script src="{{asset('uploader/js/jquery.fileupload-process.js')}}"></script>
        <!-- The File Upload image preview & resize plugin -->
        <script src="{{asset('uploader/js/jquery.fileupload-image.js')}}"></script>
        <!-- The File Upload audio preview plugin -->
        <script src="{{asset('uploader/js/jquery.fileupload-audio.js')}}"></script>
        <!-- The File Upload video preview plugin -->
        <script src="{{asset('uploader/js/jquery.fileupload-video.js')}}"></script>
        <!-- The File Upload validation plugin -->
        <script src="{{asset('uploader/js/jquery.fileupload-validate.js')}}"></script>
        <!-- The File Upload user interface plugin -->
        <script src="{{asset('uploader/js/jquery.fileupload-ui.js')}}"></script>
        <!-- The main application script -->
        <script src="{{asset('uploader/js/main.js')}}"></script>
        <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
        <!--[if (gte IE 8)&(lt IE 10)]>
        <script src="js/cors/jquery.xdr-transport.js"></script>
    </body>
</html>