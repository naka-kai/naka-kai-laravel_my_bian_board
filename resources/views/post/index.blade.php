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
                                <input type="checkbox" name="prefs" class="pref_all mr-1">
                                <label for="" class="font-semibold text-gray-700"> 全て選択 / 解除</label>
                            </div>
                            <!-- 全て選択 / 解除 -->

                            <hr class="border-sky-100 mx-1">
                            <!-- hr border -->

                            <div class="p-1" x-data="accordion(1)">
                                <!-- 北海道・東北地方 -->
                                <div class="flex items-center">
                                    <input type="checkbox" name="prefs" class="pref_all_list pref_hoto mb-1 mr-1"
                                        id="toho" value="1">
                                    <label for="toho" class="font-semibold text-gray-700"
                                        class="font-semibold text-gray-700"
                                        x-on:click="handleClick()">北海道・東北地方</label><i
                                        class="fas fa-chevron-down text-gray-700 ml-2"></i>
                                </div>
                                <div class="flex overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                    :style="handleToggle()">
                                    <div class="py-3 pl-1 flex">
                                        <div class="flex items-center">
                                            <!-- 北海道 -->
                                            <input type="checkbox" name="prefs"
                                                class="pref_all_list pref_hoto_list mr-1" value="1">
                                            <label for="" class="text-gray-600 mr-2">北海道</label>
                                        </div>
                                        <!-- /北海道 -->
                                        <div class="flex items-center">
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
                                        <!-- /福島県 -->
                                    </div>
                                </div>
                            </div>
                            <!-- /北海道・東北地方 -->

                            <hr class="border-sky-100 mx-1">
                            <!-- hr border -->

                            <div class="p-1" x-data="accordion(2)">
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
                            <!-- /関東地方 -->

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
                            <a href="">
                                <!-- post -->
                                <div class="border-t border-sky-100 flex justify-between items-center p-3 post">
                                    <div class="flex items-center">
                                        <div class="flex flex-col justify-center">
                                            <i class="far fa-smile fa-3x text-gray-400 text-center mb-1"></i>
                                            <p class="text-sm">15分前に投稿</p>
                                        </div>
                                        <div class="ml-3">
                                            <p>タイトル1</p>
                                            <p>ニックネーム1</p>
                                        </div>
                                    </div>
                                    <div class="ml-auto mr-10">
                                        <p>都道府県</p>
                                    </div>
                                    <div>
                                        <div
                                            class="bg-orange-100 border border-orange-300 px-2 py-1 mr-3 rounded my-1">
                                            <p>友達募集</p>
                                        </div>
                                        <div class="bg-pink-100 border border-pink-300 px-2 py-1 mr-3 rounded">
                                            <p>恋人募集</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- /post -->

                            <div class="border-t border-sky-100 flex justify-between items-center p-3 post">
                                <!-- post -->
                                <div class="flex items-center">
                                    <div class="flex flex-col justify-center">
                                        <i class="far fa-smile fa-3x text-gray-400 text-center mb-1"></i>
                                        <p class="text-sm">15分前に投稿</p>
                                    </div>
                                    <div class="ml-3">
                                        <p>タイトル2</p>
                                        <p>ニックネーム2</p>
                                    </div>
                                </div>
                                <div class="ml-auto mr-10">
                                    <p>都道府県</p>
                                </div>
                                <div>
                                    <div class="bg-pink-100 border border-pink-300 px-2 py-1 mr-3 rounded">
                                        <p>恋人募集</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /post -->

                            <div class="border-t border-sky-100 flex justify-between items-center p-3 post">
                                <!-- post -->
                                <div class="flex items-center">
                                    <div class="flex flex-col justify-center">
                                        <i class="far fa-smile fa-3x text-gray-400 text-center mb-1"></i>
                                        <p class="text-sm">15分前に投稿</p>
                                    </div>
                                    <div class="ml-3">
                                        <p>タイトル3</p>
                                        <p>ニックネーム3</p>
                                    </div>
                                </div>
                                <div class="ml-auto mr-10">
                                    <p>都道府県</p>
                                </div>
                                <div>
                                    <div class="bg-orange-100 border border-orange-300 px-2 py-1 mr-3 rounded my-1">
                                        <p>友達募集</p>
                                    </div>
                                    <div class="bg-pink-100 border border-pink-300 px-2 py-1 mr-3 rounded">
                                        <p>恋人募集</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /post -->

                            <div class="border-t border-sky-100 flex justify-between items-center p-3 post is-hidden">
                                <!-- post -->
                                <div class="flex items-center">
                                    <div class="flex flex-col justify-center">
                                        <i class="far fa-smile fa-3x text-gray-400 text-center mb-1"></i>
                                        <p class="text-sm">15分前に投稿</p>
                                    </div>
                                    <div class="ml-3">
                                        <p>タイトル4</p>
                                        <p>ニックネーム4</p>
                                    </div>
                                </div>
                                <div class="ml-auto mr-10">
                                    <p>都道府県</p>
                                </div>
                                <div>
                                    <div class="bg-orange-100 border border-orange-300 px-2 py-1 mr-3 rounded my-1">
                                        <p>友達募集</p>
                                    </div>
                                    <div class="bg-pink-100 border border-pink-300 px-2 py-1 mr-3 rounded">
                                        <p>恋人募集</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /post -->

                            <div class="border-t border-sky-100 flex justify-between items-center p-3 post is-hidden">
                                <!-- post -->
                                <div class="flex items-center">
                                    <div class="flex flex-col justify-center">
                                        <i class="far fa-smile fa-3x text-gray-400 text-center mb-1"></i>
                                        <p class="text-sm">15分前に投稿</p>
                                    </div>
                                    <div class="ml-3">
                                        <p>タイトル5</p>
                                        <p>ニックネーム5</p>
                                    </div>
                                </div>
                                <div class="ml-auto mr-10">
                                    <p>都道府県</p>
                                </div>
                                <div>
                                    <div class="bg-orange-100 border border-orange-300 px-2 py-1 mr-3 rounded my-1">
                                        <p>友達募集</p>
                                    </div>
                                    <div class="bg-pink-100 border border-pink-300 px-2 py-1 mr-3 rounded">
                                        <p>恋人募集</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /post -->

                            <div class="border-t border-sky-100 flex justify-between items-center p-3 post is-hidden">
                                <!-- post -->
                                <div class="flex items-center">
                                    <div class="flex flex-col justify-center">
                                        <i class="far fa-smile fa-3x text-gray-400 text-center mb-1"></i>
                                        <p class="text-sm">15分前に投稿</p>
                                    </div>
                                    <div class="ml-3">
                                        <p>タイトル6</p>
                                        <p>ニックネーム6</p>
                                    </div>
                                </div>
                                <div class="ml-auto mr-10">
                                    <p>都道府県</p>
                                </div>
                                <div>
                                    <div class="bg-orange-100 border border-orange-300 px-2 py-1 mr-3 rounded my-1">
                                        <p>友達募集</p>
                                    </div>
                                    <div class="bg-pink-100 border border-pink-300 px-2 py-1 mr-3 rounded">
                                        <p>恋人募集</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /post -->

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
