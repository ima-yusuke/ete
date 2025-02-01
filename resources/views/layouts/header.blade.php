<section class="bg-[#DFE4EA] md:py-2">
    <div class="w-full">
        <div class="flex justify-between h-16 mx-8">
            <div class="shrink-0 flex items-center">
                <a href="/dashboard" class="font-bold text-2xl">
                    管理画面
                </a>
            </div>

            <div class="flex flex-col justify-center items-end gap-1">
                <p class="text-[#5E5D5C]">ete</p>
                <p class="font-bold">{{ Auth::user()->name }}</p>
            </div>
        </div>
    </div>
</section>
