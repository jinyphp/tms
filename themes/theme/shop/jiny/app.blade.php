<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JinyShop</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @stack('css')

    <script src="//unpkg.com/alpinejs" defer></script>

    @livewireStyles
</head>
<body class="home-page home-01 ">

    {{$slot}}

    @livewireScripts

    @stack('scripts')
</body>
</html>
