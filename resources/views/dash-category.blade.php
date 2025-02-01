<x-app-layout>
    <div class="w-full h-full flex flex-col justify-center items-center gap-10">
        {{--新規登録--}}
        <section class="flex flex-col items-center justify-center gap-4 shadow-xl rounded-lg bg-white py-8 w-[50%]">
            <h2 class="font-bold text-xl">新規カテゴリー追加</h2>

            ,<form action="{{route('add.category')}}" method="post" class="flex flex-col items-center gap-4 w-[50%]">
                @csrf
                <input class="rounded-lg w-full" type="text" name="name" placeholder="カテゴリー名">
                <button type="submit" class="shadow-xl w-[4rem] bg-blue-500 text-white rounded-lg px-4 py-2">登録</button>
            </form>
        </section>

        {{--カテゴリー一覧--}}
        <section class="flex flex-col items-center justify-center gap-4 shadow-xl rounded-lg bg-white py-8 w-[50%]">
            <h2 class="font-bold text-xl">カテゴリー一覧</h2>
            @if($categories->isEmpty())
                <p>カテゴリーが登録されていません</p>
            @else
                <ul class="w-[50%]">
                    @foreach($categories as $category)
                        <li class="flex justify-between items-center border-b border-solid border-gray-200 py-2">
                            <p>{{$category->name}}</p>
                            {{--                        <form action="{{route('delete.category', $category->id)}}" method="post">--}}
                            {{--                            @csrf--}}
                            {{--                            <button type="submit" class="bg-red-500 text-white rounded-lg px-4 py-2">削除</button>--}}
                            {{--                        </form>--}}
                        </li>
                    @endforeach
                </ul>
            @endif

    </div>
</x-app-layout>
