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
<h1 class="text-center my-5">Discount Calculator</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card card-default">
                <div class="card-header">Calculate Discount</div>
                <div class="card-body">
                    <form action="/payment_calculation" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="cart_total">Cart Total</label>
                            <input type="text" class="form-control" name="cart_total">
                        </div>
                        <div class="form-group">
                            <label for="gift_card_ids">Gift Cards</label>
                            <select name="gift_card_ids[]" class="form-control" multiple>
                                @foreach($gifts as $gift)
                                <option value="{{ $gift->type_id }}">
                                    {{ $gift->name }}
                                </option>
                                @endforeach
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
<script>
    $('select').selectpicker();
</script>
</html>