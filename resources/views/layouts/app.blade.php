<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mymembers</title>

    {{-- CSS --}}
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    
    {{-- HEADER --}}
    <div id="site-header">
        @include('partials.header')
    </div>

    {{-- MAIN --}}
    <main id="site-main">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <div id="site-footer">
        @include('partials.footer')
    </div>

    {{-- JS --}}
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        Stripe.setPublishableKey("{{ env('STRIPE_KEY') }}");
    </script>
    <script src="js/all.js"></script>
</body>
</html>