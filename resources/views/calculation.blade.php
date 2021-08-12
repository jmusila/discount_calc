<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Discount Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>

<body>
<h1 class="text-center my-5">Discount Results</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card card-default">
                <h4 class="text-center">Yaay! Discount applied! 😂</h4>
                <p class="text-center">Payable amount : {{$calculation['1']->payable_amount}}</p>
                <p class="text-center">Gift Discount : {{$calculation['1']->gift_discount}}</p>
           </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <form action="/redirect_back" method="POST">
        @csrf
            <button type="submit" class="btn btn-success">Back To Calculator</button>
        </form>
    </div>
</body>
<script>
    $('select').selectpicker();
</script>
</html>