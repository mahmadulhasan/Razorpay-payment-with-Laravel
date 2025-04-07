<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Include Tailwind CSS -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="../../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<style>
    a{
        text-decoration: none;
    }
    p5{
        margin: 0;
        padding: 50px !important;
    }
</style>


</head>
<body>
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center p-3 mb-4 rounded" style="background: linear-gradient(to right, #feebeb, #fed4d4, #fef9c3);">
        <a href="/product"><h1 class="h4 mb-0 fw-bold">Products</h1></a>
        <a href="/cart" class="btn btn-primary d-flex align-items-center gap-2">
            <i class="fas fa-shopping-cart"></i> Cart
        </a>
    </div>

    @yield('content')
</body>
</html>