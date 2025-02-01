<x-template title="ete" css="app.css">
    <div class="flex h-full">
        <div class="flex flex-col">
            <section class="flex flex-col flex-1 items-center justify-between bg-black px-6 py-[5%]">
                <P class="text-pink-400 text-5xl">●</P>
                <nav class="text-white">
                    <ul class="flex flex-col gap-6">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </section>
        </div>

        <section class="flex-1 flex justify-center overflow-y-auto">
            <article class="flex flex-wrap justify-center items-center gap-8 overflow-y-hidden">
                @foreach($testArray as $value)
                    <img src="{{asset("storage/img/".$value['img'])}}" class="w-[30%] h-[35dvh] object-cover">
                @endforeach
            </article>
        </section>
    </div>
</x-template>
