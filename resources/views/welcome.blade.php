<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Discount Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
<h1 class="text-center my-5">Discount Calculator</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card card-default">
                <div class="card-header">Calculate Discount</div>
                <div class="card-body">
                    <form action="/store-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="cart_total">Cart Total</label>
                            <input type="text" class="form-control" name="cart_total">
                        </div>
                        <div class="form-group">
                            <label for="gift_card_ids">Gift Cards</label>
                            <select name="gift_card_ids" class="form-control">
                            <option value="">Select Gift Card</option>

                            </select>
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-success">Calculate Discount</button>
                        </div>

                    </form>
                </div>
           </div>
        </div>
    </div>
</body>

</html>