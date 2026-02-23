<!DOCTYPE html>
<html lang="id">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel - SMK Mudaba</title>
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/smk-2.png') }}">

    @include('admin.component.css')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('admin.component.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.component.navbar')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('admin.component.footer')
        </div>
    </div>

    @include('admin.component.script')
</body>

</html>
