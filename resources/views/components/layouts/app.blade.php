<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>messages chat with tabs - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('animate.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    {{ $slot  }}
    @livewire('home.create-trip')
</div>
<script src="{{ asset('/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('/bootstrap.min.js') }}"></script>
<script src="{{ asset('/alert.js')  }}"></script>
<script>
    $(document).ready(function (){

    })

</script>
</body>
</html>
