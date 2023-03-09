<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Summernote</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <label for="exampleInputEmail1" class="form-label">
                        <h6>Deskripsi</h6>
                    </label>
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            {{--  <form method="POST" enctype="multipart/form-data">  --}}
                            <textarea name="deskripsi" id="mytextarea"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <script>
        $(document).ready(function() {
            $('#mytextarea').summernote();
        });
    </script>
</body>

</html>
