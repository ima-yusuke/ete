<!DOCTYPE html>
<html lang="ja" class="h-full">
<x-head :title="$title">
    @if(isset($description))
        <meta name="description" content="{{ $description }}"/>
    @endif
    @vite(['resources/css/'.$css])
</x-head>
<body class="h-full flex flex-col">
    <main class="h-full">
        {{ $slot }}
    </main>
</body>
</html>
