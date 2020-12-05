<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <livewire:styles />
    <livewire:scripts />
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <!-- flash message -->
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <!-- end flash message -->

                <!-- component -->
                {{ $slot }}
                <!-- end component -->

            </div>
        </div>
    </div>
    <!-- javascript -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>