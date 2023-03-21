<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<title>Konversi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        $('form').submit(function(event) {
          event.preventDefault(); // Prevent the form from submitting normally
          
          // Send the form data to the server using AJAX
          $.ajax({
            url: 'convert.php',
            type: 'POST',
            data: $('form').serialize(),
            success: function(response) {
              $('#result').html(response);
            }
          });
        });
      });
    </script>
</head>

<body>
    <div class="container p-5 h-100 vertical-center">
        <div class="row align-items-center h-100">
            <div class="col-3"></div>
            <div class="col-6" id="card-form">
                <h1 class="text-center">Konversi Nilai</h1>
                <form method="POST">
                    <div class="mb-3">
                        <label for="nilaiAngka" class="form-label">Nilai Angka</label>
                        <input type="number" class="form-control" id="nilaiAngka" name="nilaiAngka" aria-describedby="nilaiAngka">
                    </div>
                    <input type="submit" name="submit" value="Convert" class="btn btn-primary w-100 py-2">
                </form>
                <div id="result" class="text-center"></div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>