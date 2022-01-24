<x-guest-layout>

    <x-slot name="title">
        ビアン掲示板TOP
    </x-slot>

    <x-slot name="header" class="bg-rainbow">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ビアン掲示板TOP
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border border-red-100 bg-red-100">
                    <!-- 初期-->
                    <div class="border-2 border-dashed border-white p-3">
                        <!-- white dash border -->
                        <div class="flex justify-end">
                            <!-- 新規投稿ボタン -->
                            <a href=""
                                class="block bg-white hover:bg-red-50 text-gray-500 font-semibold py-2 px-4 border border-red-100 rounded shadow">新規投稿する</a>
                        </div>
                        <!-- /新規投稿ボタン -->
                        <form action="">
                            @csrf
                            <h3 class="font-bold text-xl py-2 text-gray-800">絞り込み検索</h3>

                            <div class="border-2 border-red-300">
                                <!-- 都道府県選択 -->
                                <div class="p-1 flex items-center">
                                    <input type="checkbox" name="prefs" class="pref_all mr-1">
                                    <label for="" class="font-semibold text-gray-700"> 全て選択 / 解除</label>
                                </div>
                                <hr>
                                <div class="p-1">
                                    <label for="" class="font-semibold block"><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_hoto mb-1" value="1">北海道・東北地方</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_hoto_list" value="1">北海道</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_hoto_list" value="3">青森県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_hoto_list" value="3">岩手県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_hoto_list" value="3">宮城県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_hoto_list" value="3">秋田県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_hoto_list" value="3">山形県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_hoto_list" value="3">福島県</label>
                                </div>
                                <hr>
                                <div class="p-1">
                                    <label for="" class="font-semibold block mb-1"><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kan" value="1">関東地方</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kan_list" value="1">茨城県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kan_list" value="2">栃木県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kan_list" value="3">群馬県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kan_list" value="3">埼玉県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kan_list" value="3">千葉県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kan_list" value="3">東京都</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kan_list" value="3">神奈川県</label>
                                </div>
                                <hr>
                                <div class="p-1">
                                    <label for="" class="font-semibold block"><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu mb-1" value="1">中部地方</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="1">山梨県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="2">長野県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="3">新潟県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="3">富山県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="3">石川県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="3">福井県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="3">静岡県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="3">愛知県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chubu_list" value="3">岐阜県</label>
                                </div>
                                <hr>
                                <div class="p-1">
                                    <label for="" class="font-semibold block"><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kin mb-1" value="1">近畿地方</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kin_list" value="1">三重県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kin_list" value="2">滋賀県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kin_list" value="3">京都府</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kin_list" value="3">大阪府</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kin_list" value="3">兵庫県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kin_list" value="3">奈良県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kin_list" value="3">和歌山県</label>
                                </div>
                                <hr>
                                <div class="p-1">
                                    <label for="" class="font-semibold block"><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chugoku mb-1" value="1">中国地方</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chugoku_list" value="1">鳥取県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chugoku_list" value="2">島根県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chugoku_list" value="3">岡山県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chugoku_list" value="3">広島県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_chugoku_list" value="3">山口県</label>
                                </div>
                                <hr>
                                <div class="p-1">
                                    <label for="" class="font-semibold block"><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_shi mb-1" value="1">四国地方</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_shi_list" value="1">香川県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_shi_list" value="2">愛媛県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_shi_list" value="3">徳島県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_shi_list" value="3">高知県</label>
                                </div>
                                <hr>

                                <div class="p-1">
                                    <!-- pref_kyu -->
                                    <div class="flex items-center">
                                        <input type="checkbox" name="prefs" class="pref_all_list pref_kyu mr-1"
                                            value="1">
                                        <label for="" class="font-semibold text-gray-700">九州地方</label>
                                    </div>
                                    <div class="flex">
                                        <div class="flex items-center">
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list mr-1"
                                                value="1">
                                            <label for="" class="text-gray-600 mr-2">福岡県</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list mr-1"
                                                value="2">
                                            <label for="" class="text-gray-600 mr-2">佐賀県</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list mr-1"
                                                value="3">
                                            <label for="" class="text-gray-600 mr-2">長崎県</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list mr-1"
                                                value="4">
                                            <label for="" class="text-gray-600 mr-2">熊本県</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list mr-1"
                                                value="5">
                                            <label for="" class="text-gray-600 mr-2">大分県</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list mr-1"
                                                value="6">
                                            <label for="" class="text-gray-600 mr-2">宮崎県</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list mr-1"
                                                value="7">
                                            <label for="" class="text-gray-600 mr-2">鹿児島県</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list mr-1"
                                                value="8">
                                            <label for="" class="text-gray-600 mr-2">沖縄県</label>
                                        </div>
                                    </div>
                                </div><!-- /pref_kyu -->
                            </div><!-- /都道府県選択 -->
                    </div>


                    <div class="border p-3">
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

                    <div class="flex items-center justify-center py-3 border">
                        <!-- age -->
                        <div class="w-1/3 mx-auto" id="reset">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
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

                    <div class="border p-3">
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

                    <div class="flex justify-end">
                        <!-- /resetButton -->
                        <input type="reset"
                            class="bg-white hover:bg-gray-100 font-semibold py-2 px-4 border border-gray-400 rounded shadow my-3 text-gray-500"
                            value="リセット">
                    </div><!-- /resetButton -->
                    </form>

                    <div class="text-gray-600">
                        <!-- post -->
                        <div class="border-t flex justify-between items-center p-3">
                            <div class="flex items-center">
                                <div class="flex flex-col justify-center">
                                    <i class="far fa-smile fa-3x text-pink-300 text-center mb-1"></i>
                                    <p class="text-sm text-pink-400">15分前に投稿</p>
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
                                <div class="bg-orange-100 border border-orange-300 px-2 py-1 mr-3 rounded my-1">
                                    <p>友達募集</p>
                                </div>
                                <div class="bg-pink-100 border border-pink-300 px-2 py-1 mr-3 rounded">
                                    <p>恋人募集</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-t flex justify-between items-center p-3">
                            <div class="flex">
                                <i class="far fa-smile fa-3x text-gray-600"></i>
                                <div class="ml-3">
                                    <p>タイトル2</p>
                                    <p>ニックネーム2</p>
                                </div>
                            </div>
                            <div>
                                <p>都道府県</p>
                            </div>
                            <div>
                                <p>友達募集</p>
                                <p>恋人募集</p>
                            </div>
                        </div>
                    </div><!-- /post -->
                    <div class="border-y p-3 text-gray-700">
                        <p class="text-center">もっと見る</p>
                    </div>
                </div><!-- white dash border -->
            </div><!-- /初期-->
        </div>
    </div>

    <x-slot name="script">
        <script src="{{ mix('js/pref.js') }}"></script>
        <script src="{{ mix('js/searchReset.js') }}"></script>
    </x-slot>
</x-guest-layout>
