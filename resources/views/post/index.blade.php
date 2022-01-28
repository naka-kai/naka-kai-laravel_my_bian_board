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
                                $prefNum = 0;
                                // dd($linkAreaPrefectures);
                            @endphp
                            {{-- {{ dd($linkAreaPrefectures) }} --}}
                            @foreach ($linkAreaPrefectures as $areaPefecturesKey => $areaPefecturesVal)
                                {{-- {{ dd($areaPefecturesVal[0][1]) }} --}}
                                <div class="p-1" x-data="accordion({{ $acdNum }})">
                                    <!-- 北海道・東北地方 -->
                                    <div class="flex items-center">
                                        {{-- {{ dd($prefNum) }} --}}
                                        <input type="checkbox" name="prefs"
                                            class="pref_all_list mb-1 mr-1
                                    @if ($areaPefecturesVal[0][1] == 1)
                                    pref_hokk
                                    @elseif ($areaPefecturesVal[2][1] >= 2 || $areaPefecturesVal[2][1] <= 7)
                                    pref_toho
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 8 || $areaPefecturesVal[$prefNum][1] <= 14)
                                    pref_kan
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 15 || $areaPefecturesVal[$prefNum][1] <= 23)
                                    pref_chubu
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 24 || $areaPefecturesVal[$prefNum][1] <= 30)
                                    pref_kin
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 31 || $areaPefecturesVal[$prefNum][1] <= 35)
                                    pref_chug
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 36 || $areaPefecturesVal[$prefNum][1] <= 39)
                                    pref_sik
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 40 || $areaPefecturesVal[$prefNum][1] <= 47)
                                    pref_kyu
                                    @endif"
                                            id="@if ($areaPefecturesVal[0][1] == 1)
                                    hokk
                                    @elseif ($areaPefecturesVal[2][1] >= 2 || $areaPefecturesVal[2][1] <= 7)
                                    toho
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 8 || $areaPefecturesVal[$prefNum][1] <= 14)
                                    kan
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 15 || $areaPefecturesVal[$prefNum][1] <= 23)
                                    chubu
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 24 || $areaPefecturesVal[$prefNum][1] <= 30)
                                    kin
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 31 || $areaPefecturesVal[$prefNum][1] <= 35)
                                    chug
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 36 || $areaPefecturesVal[$prefNum][1] <= 39)
                                    sik
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 40 || $areaPefecturesVal[$prefNum][1] <= 47)
                                    kyu
                                    @endif" value="1">
                                        <label for="@if ($areaPefecturesVal[0][1] == 1)
                                    hokk
                                    @elseif ($areaPefecturesVal[2][1] >= 2 || $areaPefecturesVal[2][1] <= 7)
                                    toho
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 8 || $areaPefecturesVal[$prefNum][1] <= 14)
                                    kan
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 15 || $areaPefecturesVal[$prefNum][1] <= 23)
                                    chubu
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 24 || $areaPefecturesVal[$prefNum][1] <= 30)
                                    kin
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 31 || $areaPefecturesVal[$prefNum][1] <= 35)
                                    chug
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 36 || $areaPefecturesVal[$prefNum][1] <= 39)
                                    sik
                                    @elseif ($areaPefecturesVal[$prefNum][1] >= 40 || $areaPefecturesVal[$prefNum][1] <= 47)
                                    kyu
                                    @endif" class="font-semibold text-gray-700"
                                            class="font-semibold text-gray-700"
                                            x-on:click="handleClick()">{{ $areaPefecturesKey }}</label><i
                                            class="fas fa-chevron-down text-gray-700 ml-2"></i>
                                    </div>
                                    <div class="flex overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                        :style="handleToggle()">
                                        <div class="py-3 pl-1 flex sm:flex-wrap h-auto">
                                            @foreach ($areaPefecturesVal as $prefectureKey => $prefectureVal)
                                                <div class="flex items-center mb-2">
                                                    <!-- 北海道 -->
                                                    <input type="checkbox" name="prefs"
                                                        class="pref_all_list mr-1
                                                @if ($prefectureVal[1] == 1)
                                                pref_hokk_list
                                                @elseif ($prefectureVal[1] >= 2 && $prefectureVal[1] <= 7)
                                                pref_toho_list
                                                @elseif ($prefectureVal[1] >= 8 && $prefectureVal[1] <= 14)
                                                pref_kan_list
                                                @elseif ($prefectureVal[1] >= 15 && $prefectureVal[1] <= 23)
                                                pref_chubu_list
                                                @elseif ($prefectureVal[1] >= 24 && $prefectureVal[1] <= 30)
                                                pref_kin_list
                                                @elseif ($prefectureVal[1] >= 31 && $prefectureVal[1] <= 35)
                                                pref_chug_list
                                                @elseif ($prefectureVal[1] >= 36 && $prefectureVal[1] <= 39)
                                                pref_sik_list
                                                @elseif ($prefectureVal[1] >= 40 && $prefectureVal[1] <= 47)
                                                pref_kyu_list
                                                @endif"
                                                    id="{{ $prefectureVal[1] }}" value="1">
                                                    <label for="{{ $prefectureVal[1] }}"
                                                        class="text-gray-600 mr-2">{{ $prefectureVal[0] }}</label>
                                                </div>
                                                <!-- /北海道 -->
                                                @php
                                                    $acdNum++;
                                                @endphp
                                            @endforeach
                                            {{-- <div class="flex items-center">
                                            <!-- 青森県 -->
                                            <input type="checkbox" name="prefs"
                                                class="pref_all_list pref_hoto_list mr-1" value="1">
                                            <label for="" class="text-gray-600 mr-2">青森県</label>
                                        </div>
                                        <!-- /青森県 -->
                                        <div class="flex items-center">
                                            <!-- 岩手県 -->
                                            <input type="checkbox" name="prefs"
                                                class="pref_all_list pref_hoto_list mr-1" value="1">
                                            <label for="" class="text-gray-600 mr-2">岩手県</label>
                                        </div>
                                        <!-- /岩手県 -->
                                        <div class="flex items-center">
                                            <!-- 宮城県 -->
                                            <input type="checkbox" name="prefs"
                                                class="pref_all_list pref_hoto_list mr-1" value="1">
                                            <label for="" class="text-gray-600 mr-2">宮城県</label>
                                        </div>
                                        <!-- /宮城県 -->
                                        <div class="flex items-center">
                                            <!-- 秋田県 -->
                                            <input type="checkbox" name="prefs"
                                                class="pref_all_list pref_hoto_list mr-1" value="1">
                                            <label for="" class="text-gray-600 mr-2">秋田県</label>
                                        </div>
                                        <!-- /秋田県 -->
                                        <div class="flex items-center">
                                            <!-- 山形県 -->
                                            <input type="checkbox" name="prefs"
                                                class="pref_all_list pref_hoto_list mr-1" value="1">
                                            <label for="" class="text-gray-600 mr-2">山形県</label>
                                        </div>
                                        <!-- /山形県 -->
                                        <div class="flex items-center">
                                            <!-- 福島県 -->
                                            <input type="checkbox" name="prefs"
                                                class="pref_all_list pref_hoto_list mr-1" value="1">
                                            <label for="" class="text-gray-600 mr-2">福島県</label>
                                        </div>
                                        <!-- /福島県 --> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- /北海道・東北地方 -->
                                @php
                                    $prefNum++;
                                @endphp
                            @endforeach

                            <hr class="border-sky-100 mx-1">
                            <!-- hr border -->

                            {{-- <div class="p-1" x-data="accordion(2)">
                                <!-- 関東地方 -->
                                <div class="flex items-center">
                                    <input type="checkbox" name="prefs" class="pref_all_list pref_kan mb-1 mr-1"
                                        value="1">
                                    <label for="" class="font-semibold text-gray-700"
                                        class="font-semibold text-gray-700" x-on:click="handleClick()">関東地方</label><i
                                        class="fas fa-chevron-down text-gray-700 ml-2"></i>
                                </div>
                                <div class="flex overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                    :style="handleToggle()">
                                    <div class="py-3 pl-1 flex">
                                        <div class="flex items-center">
                                            <!-- 茨城県 -->
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kan_list mr-1"
                                                value="1">
                                            <label for="" class="text-gray-600 mr-2">茨城県</label>
                                        </div>
                                        <!-- /茨城県 -->
                                        <div class="flex items-center">
                                            <!-- 栃木県 -->
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kan_list mr-1"
                                                value="1">
                                            <label for="" class="text-gray-600 mr-2">栃木県</label>
                                        </div>
                                        <!-- /栃木県 -->
                                        <div class="flex items-center">
                                            <!-- 群馬県 -->
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kan_list mr-1"
                                                value="1">
                                            <label for="" class="text-gray-600 mr-2">群馬県</label>
                                        </div>
                                        <!-- /群馬県 -->
                                        <div class="flex items-center">
                                            <!-- 埼玉県 -->
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kan_list mr-1"
                                                value="1">
                                            <label for="" class="text-gray-600 mr-2">埼玉県</label>
                                        </div>
                                        <!-- /埼玉県 -->
                                        <div class="flex items-center">
                                            <!-- 千葉県 -->
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kan_list mr-1"
                                                value="1">
                                            <label for="" class="text-gray-600 mr-2">千葉県</label>
                                        </div>
                                        <!-- /千葉県 -->
                                        <div class="flex items-center">
                                            <!-- 東京都 -->
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kan_list mr-1"
                                                value="1">
                                            <label for="" class="text-gray-600 mr-2">東京都</label>
                                        </div>
                                        <!-- /東京都 -->
                                        <div class="flex items-center">
                                            <!-- 神奈川県 -->
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kan_list mr-1"
                                                value="1">
                                            <label for="" class="text-gray-600 mr-2">神奈川県</label>
                                        </div>
                                        <!-- /神奈川県 -->
                                    </div>
                                </div>
                            </div>
                            <!-- /関東地方 --> --}}

                        </div>
                        <!-- /都道府県選択 -->

                        <div class="border-y-2 border-t-0 border-sky-100 p-3">
                            <!-- sex -->
                            <div class="flex space-x-10 justify-center items-center">
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        フェム
                                    </span>
                                </label>
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        中性
                                    </span>
                                </label>
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        ボイ
                                    </span>
                                </label>
                            </div>
                            <div class="flex space-x-10 justify-center items-center">
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        タチ
                                    </span>
                                </label>
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        リバ
                                    </span>
                                </label>
                                <label class="block text-gray-500 font-bold">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                        ネコ
                                    </span>
                                </label>
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
