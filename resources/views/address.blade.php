<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 Google Places Autocomplete Address - Tutsmake.com</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laravel 11 Google Places Autocomplete Address Example - Tutsmake.com</h5>
                        <div class="form-group">
                            <label for="autocomplete" class="form-label">Enter your address</label>
                            <input id="autocomplete" class="form-control" type="text" placeholder="Enter your address">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Maps API Script -->
    
      <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>


   <script>
       google.maps.event.addDomListener(window, 'load', initialize);
       function initialize() {
           var input = document.getElementById('autocomplete');
           var autocomplete = new google.maps.places.Autocomplete(input);
           autocomplete.addListener('place_changed', function() {
               var place = autocomplete.getPlace();
           });
       }
    </script>

    
</body>
</html>