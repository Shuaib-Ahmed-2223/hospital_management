<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center</title>

  @include('frontend.includes.style')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

 @include('frontend.includes.header')


@yield('content')
    

  
@include('frontend.includes.footer')

@include('frontend.includes.script')
  
</body>
</html>