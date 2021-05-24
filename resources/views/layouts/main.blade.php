<!DOCTYPE html>
<html lang="ru-RU">
<x-head></x-head>
<body class="indexPage">
<x-header></x-header>
<main>
@yield('content')
</main>
<x-footer></x-footer>
<div class="zoom-anim-dialog mfp-hide" id="policy-dialog"></div>
<div class="zoom-anim-dialog mfp-hide" id="callback">
    <x-form.callback-form></x-form.callback-form>
</div>
<script src="{{asset('/js/app.min.js')}}" defer></script>
</body>
