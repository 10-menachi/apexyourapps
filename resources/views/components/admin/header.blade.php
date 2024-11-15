<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Apex | Admin Panel E-commerce </title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('admin-assets/assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('admin-assets/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('admin-assets/assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <style>
        .toast-container {
            position: fixed;
            top: 20px;
            /* Adjust as needed */
            right: 20px;
            /* Adjust as needed */
            z-index: 1050;
            /* Ensure it's above other elements */
        }
    </style>


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/kaiadmin.min.css ') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/demo.css') }}" />
</head>

<body>
    <div class="wrapper">
