<x-template title="ete" css="app.css">
    <div class="flex h-full">
        <!-- 左側のナビゲーション -->
        <div class="flex flex-col py-10 bg-black">
            <section class="flex flex-col flex-1 items-center justify-between px-6">
                <p class="text-pink-400 text-5xl">●</p>
                <nav class="text-white">
                    <ul class="flex flex-col gap-6">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </section>
        </div>

        <!-- 右側のコンテンツ（スクロール可能） -->
        <section class="flex flex-col overflow-y-auto py-8">
            <article class="flex flex-wrap justify-center items-center gap-8">
                @foreach($testArray as $value)
                    <img src="{{asset("storage/img/".$value['img'])}}" class="w-[30%] h-[35dvh] object-cover">
                @endforeach
            </article>
        </section>
    </div>
</x-template>
