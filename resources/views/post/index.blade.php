<x-guest-layout>
    <x-slot name="title">
        ビアン掲示板TOP
    </x-slot>

    <x-slot name="head">
        <link rel="stylesheet" href="{{ mix('css/board-index.css') }}">
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

                    <div class="border-2 border-dashed border-sky-200 p-3">
                        <!-- white dash border -->

                        <div class="flex justify-end mb-5">
                            <!-- 新規投稿ボタン -->
                            <a href="{{ route('post.create') }}"
                                class="block bg-white hover:bg-sky-50 text-gray-500 font-semibold py-2 px-4 border border-sky-100 rounded shadow">新規投稿する</a>
                        </div>
                        <!-- /新規投稿ボタン -->

                        <div class="border-t-4 border-b-2 border-sky-100">
                            <!-- 都道府県選択 -->

                            <div class="p-1 flex items-center">
                                <!-- 全て選択 / 解除 -->
                                <input type="checkbox" name="prefs" class="pref_all mr-1" id="pref_all">
                                <label for="pref_all" class="font-semibold text-gray-700"> 全て選択 / 解除</label>
                            </div>
                            <!-- 全て選択 / 解除 -->

                            <hr class="border-sky-100 mx-1">
                            <!-- hr border -->

                            @php
                                $acdNum = 1;
                                $areaNum = 1;
                                $prefNum = 0;
                            @endphp
                            @foreach ($linkAreaPrefectures as $key => $areaPefectures)
                                {{-- {{ dd($areaClasses['北海道']) }} --}}
                                <div class="p-1" x-data="accordion({{ $acdNum }})">
                                    <!-- 地方 -->
                                    <div class="flex items-center">
                                        <!-- <input type="checkbox" name="prefs" class="pref_all_list mb-1 mr-1 pref_hokk" id="prefs_hokk" value="1">となる -->
                                        <input type="checkbox" name="prefs"
                                            class="pref_all_list mb-1 mr-1 pref_{{ $areaClasses[$key] }}"
                                            id="prefs_{{ $areaClasses[$key] }}" value="1">
                                        <!-- <label for="prefs_hokk" class="font-semibold text-gray-700">北海道(東北地方)</label>となる -->
                                        <label for="prefs_{{ $areaClasses[$key] }}"
                                            class="font-semibold text-gray-700"
                                            x-on:click="handleClick()">{{ $key }}</label><i
                                            class="fas fa-chevron-down text-gray-700 ml-2"></i>
                                    </div>
                                    <div class="flex overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                        :style="handleToggle()">
                                        <div class="py-3 pl-1 flex sm:flex-wrap h-auto">
                                            @foreach ($areaPefectures as $prefectureKey => $prefectureVal)
                                                <div class="flex items-center mb-2">
                                                    <!-- 都道府県 -->
                                                    <!-- <input type="checkbox" name="prefs" class="pref_all_list mr-1 pref_hokk_list" id="1(prefecture->idのこと)" value="1">になる -->
                                                    <input type="checkbox" name="prefs"
                                                        class="pref_all_list mr-1 pref_{{ $areaClasses[$key] }}_list"
                                                        id="pref_{{ $prefectureVal[1] }}" value="1">
                                                    <!-- <label for="1(prefecture->idのこと)" class="text-gray-600 mr-2">北海道(青森県)</label> -->
                                                    <label for="pref_{{ $prefectureVal[1] }}"
                                                        class="text-gray-600 mr-2">{{ $prefectureVal[0] }}</label>
                                                </div>
                                                <!-- /都道府県 -->
                                                @php
                                                    $acdNum++;
                                                @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- /地方 -->
                                @php
                                    $prefNum++;
                                @endphp
                            @endforeach

                            {{-- <hr class="border-sky-100 mx-1"> --}}
                            <!-- hr border -->

                        </div>
                        <!-- /都道府県選択 -->

                        <div class="border-y-2 border-t-0 border-sky-100 p-3">
                            <!-- sex -->
                            <div class="flex space-x-10 justify-center items-center">
                                @foreach ($getSexes as $i => $sex)
                                    <label class="block text-gray-500 font-bold">
                                        <input class="mr-2 leading-tight" type="checkbox">
                                        <span class="text-sm">
                                            {{ $sex->sex }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div><!-- /sex -->

                        <div class="flex items-center justify-center py-3 border-y-2 border-t-0 border-sky-100">
                            <!-- age -->
                            <div class="w-1/3 mx-auto" id="reset">
                                <select
                                    class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state">
                                    <option>全年代</option>
                                    <option>10代(18歳以上)</option>
                                    <option>20代</option>
                                    <option>30代</option>
                                    <option>40代</option>
                                    <option>50歳以上</option>
                                </select>
                            </div>
                        </div><!-- /age -->

                        <div class="border-y-4 border-t-0 border-sky-100 p-3">
                            <!-- wanted -->
                            <div class="flex space-x-10 justify-center items-center" id="reset">
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        友達募集
                                    </span>
                                </label>
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        恋人募集
                                    </span>
                                </label>
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        遠距離可
                                    </span>
                                </label>
                            </div>
                        </div><!-- /wanted -->

                        <div class="flex justify-end mt-3 mb-5">
                            <!-- /resetButton -->
                            <input type="reset"
                                class="block bg-white hover:bg-sky-50 text-gray-500 font-semibold py-2 px-4 border border-sky-100 rounded shadow"
                                value="リセット">
                        </div><!-- /resetButton -->

                        <div class="text-gray-600">
                            <!-- posts -->

                            @foreach ($getPosts as $post)
                                <a href="" class="post">
                                    <!-- post -->
                                    <div class="border-t border-sky-100 flex justify-between items-center p-3">
                                        <div class="flex items-center">
                                            <div class="flex flex-col justify-center">
                                                <i class="far fa-smile fa-3x text-gray-400 text-center mb-1"></i>
                                                <p class="text-sm">15分前に投稿</p>
                                            </div>
                                            <div class="ml-3">
                                                <p>{{ $post->title }}</p>
                                                <p>{{ $post->name }}</p>
                                            </div>
                                        </div>
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
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('accordion', {
                    tab: 0
                });

                Alpine.data('accordion', (idx) => ({
                    init() {
                        this.idx = idx;
                    },
                    idx: -1,
                    handleClick() {
                        this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                    },
                    handleToggle() {
                        return this.$store.accordion.tab === this.idx ?
                            `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                    }
                }));
            })
        </script>
    </x-slot>
</x-guest-layout>
