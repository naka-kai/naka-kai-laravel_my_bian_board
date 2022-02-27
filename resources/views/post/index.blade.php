<x-guest-layout>
    <x-slot name="title">
        ビアン掲示板TOP
    </x-slot>

    <x-slot name="head">
        <link rel="stylesheet" href="{{ mix('css/board-index.css') }}">
        <link rel="stylesheet" href="{{ mix('css/pref.css') }}">
        <script src="{{ mix('js/searchReset.js') }}"></script>
    </x-slot>

    <x-slot name="header" class="bg-rainbow">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ビアン掲示板TOP
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200 bg-white">
                    <!-- 初期 -->

                    {{-- <form action=""> --}}
                    <div class="border-2 border-dashed border-sky-200 p-3">
                        <!-- white dash border -->

                        <div class="flex justify-end mb-5">
                            <!-- 新規投稿ボタン -->
                            <a href="{{ route('post.create') }}"
                                class="block bg-white hover:bg-sky-50 text-gray-500 font-semibold py-2 px-4 border border-sky-100 rounded shadow">新規投稿する</a>
                        </div>
                        <!-- /新規投稿ボタン -->

                        <form action="{{ route('search') }}" method="get">
                            <div class="border-t-4 border-b-2 border-sky-100">
                                <!-- 都道府県選択 -->

                                <div class="p-1 flex items-center">
                                    <!-- 全て選択 / 解除 -->
                                    <input type="checkbox" class="pref_all mr-1" id="pref_all" name="pref_all" value="pref_all">
                                    <label for="pref_all" class="font-semibold text-gray-700">
                                        全て選択 / 解除</label>
                                </div>
                                <!-- 全て選択 / 解除 -->

                                <hr class="border-sky-100 mx-1">
                                <!-- hr border -->

                                @php
                                    $area_value = 1;
                                @endphp
                                @foreach ($link_area_prefectures as $key => $area_pefectures)
                                    <div class="p-1">
                                        <!-- 地方 -->
                                        <div class="acd-area flex items-center">
                                            <!-- <input type="checkbox" name="areas[]" class="pref_all_list mb-1 mr-1 pref_hokk" id="areas" value="1">となる -->
                                            <input type="checkbox" name="areas[]"
                                                class="pref_all_list mb-1 mr-1 pref_{{ $area_classes[$key] }}"
                                                value="{{ $key }}">
                                            <!-- <label for="areas" class="font-semibold text-gray-700">北海道(東北地方)</label>となる -->
                                            <label for="pref_{{ $area_classes[$key] }}" id="pref_{{ $area_classes[$key] }}"
                                                class="font-semibold text-gray-700">{{ $key }}</label><i
                                                class="fas fa-chevron-down text-gray-700 ml-2"></i>
                                        </div>
                                        <div class="acd-prefs flex">
                                            <div class="py-2 pl-1 flex sm:flex-wrap">
                                                @foreach ($area_pefectures as $prefecture_key => $prefecture_val)
                                                    <div class="flex items-center">
                                                        <!-- 都道府県 -->
                                                        <!-- <input type="checkbox" name="prefs" class="pref_all_list mr-1 pref_hokk_list" id="pref_1" value="1">になる -->
                                                        <input type="checkbox" name="prefs[]"
                                                            class="pref_all_list mr-1 pref_{{ $area_classes[$key] }}_list"
                                                            id="pref_{{ $prefecture_key }}"
                                                            value="{{ $prefecture_val }}">
                                                        <!-- <label for="1(prefecture->idのこと)" class="text-gray-600 mr-2">北海道(青森県)</label> -->
                                                        <label for="pref_{{ $prefecture_key }}"
                                                            class="text-gray-600 mr-4">{{ $prefecture_val }}</label>
                                                    </div>
                                                    <!-- /都道府県 -->
                                                    @php
                                                        $area_value++;
                                                    @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /地方 -->
                                @endforeach

                            </div>
                            <!-- /都道府県選択 -->

                            <div class="border-y-2 border-t-0 border-sky-100 p-3">
                                <!-- sex -->
                                <div class="flex space-x-10 justify-center items-center">
                                    @foreach ($get_sexes as $sexKey => $sex)
                                        <label class="block text-gray-500 font-bold">
                                            <input class="mr-2 leading-tight" type="checkbox" name="sexes[]"
                                                value="{{ $sex->sex }}">
                                            <span class="text-sm">
                                                {{ $sex->sex }}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div><!-- /sex -->

                            <div class="border-y-2 border-t-0 border-sky-100 p-3">
                                <!-- age -->
                                <div class="flex space-x-10 justify-center items-center">
                                    @foreach ($get_ages as $ageKey => $age)
                                        <label class="block text-gray-500 font-bold">
                                            <input class="mr-2 leading-tight" type="checkbox" name="ages[]"
                                                value="{{ $age->age }}">
                                            <span class="text-sm">
                                                {{ $age->age }}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div><!-- /age -->

                            <div class="border-y-4 border-t-0 border-sky-100 p-3">
                                <!-- wanted -->
                                <div class="flex space-x-10 justify-center items-center" id="reset">
                                    @foreach ($get_wanteds as $wanted)
                                        <label class="block text-gray-500 font-bold">
                                            <input class="mr-2 leading-tight" type="checkbox" name="wanteds[]"
                                                value="{{ $wanted->wanted }}">
                                            <span class="text-sm">
                                                {{ $wanted->wanted }}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div><!-- /wanted -->

                            <div class="flex justify-end">
                                <div class="flex mt-3 mb-5">
                                    <!-- /searchButton -->
                                    <input type="submit"
                                        class="block bg-white hover:bg-sky-50 text-gray-500 font-semibold py-2 px-4 border border-sky-100 rounded shadow mr-5"
                                        value="検索">
                                </div><!-- /searchButton -->

                                <div class="flex mt-3 mb-5">
                                    <!-- /resetButton -->
                                    <input type="reset"
                                        class="block bg-white hover:bg-sky-50 text-gray-500 font-semibold py-2 px-4 border border-sky-100 rounded shadow"
                                        value="リセット" id="reset_btn">
                                </div><!-- /resetButton -->
                            </div>
                        </form>

                        <div class="text-gray-600">
                            <!-- posts -->

                            @foreach ($get_posts as $post)
                                <a href="{{ route('post.show_message', ['id' => $post->id]) }}"
                                    class="post">
                                    <!-- post -->
                                    <div class="border-t border-sky-100 flex justify-between items-center p-3">
                                        <div class="flex items-center">
                                            <div class="flex flex-col justify-center">
                                                <i class="far fa-smile fa-3x text-gray-400 text-center mb-1"></i>
                                                <p class="text-sm">{{ $post->created_at->diffForHumans() }}に投稿</p>
                                            </div>
                                            <div class="ml-3">
                                                <p>{{ $post->title }}</p>
                                                <p>{{ $post->name }}</p>
                                            </div>
                                        </div>
                                        {{-- {{ dd($post) }} --}}
                                        <div class="ml-auto mr-10">
                                            <p>{{ $post->prefecture->prefecture }}</p>
                                        </div>
                                        <div>
                                            <!-- 募集項目 -->
                                            @foreach ($post->wanteds as $wanted)
                                                <div
                                                    class="border @if ($wanted->id == 1)
                                                        bg-orange-100 border-orange-300
                                                        @elseif ($wanted->id == 2)
                                                        bg-pink-100 border-pink-300
                                                        @elseif ($wanted->id == 3)
                                                        bg-blue-100 border-blue-300
                                                        @endif px-2 py-1 mr-3 rounded my-1">
                                                    <p>{{ $wanted->wanted }}</p>
                                                </div>
                                            @endforeach
                                        </div><!-- /募集項目 -->

                                    </div>
                                </a>
                                <!-- /post -->
                            @endforeach

                        </div><!-- /posts -->

                        <div class="border-y-2 border-sky-100 p-3 text-gray-700 cursor-pointer more">
                            <!-- more -->
                            <p class="text-center">もっと見る</p>
                        </div>
                        <!-- /more -->

                    </div>
                    <!-- /white dash border -->
                    {{-- </form> --}}

                </div>
                <!-- /初期 -->
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ mix('js/pref.js') }}"></script>
        <script src="{{ mix('js/morePosts.js') }}"></script>
    </x-slot>
</x-guest-layout>
