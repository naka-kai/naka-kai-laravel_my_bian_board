<x-guest-layout>

    <x-slot name="title">
        ビアン掲示板TOP
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ビアン掲示板TOP
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"><!-- 初期-->

                    <div class="flex justify-end"><!-- 新規投稿ボタン -->
                        <a href="" class="block bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">新規投稿する</a>
                    </div><!-- /新規投稿ボタン -->

                    <form action="">
                        <div>
                            <h3 class="font-bold text-xl py-2">絞り込み検索</h3>
                            <!-- 都道府県選択 -->
                            @csrf
                            <div class="border p-3">
                                <div>
                                    <label for="" class="p-1 align-middle"><input type="checkbox" name="prefs"
                                            class="pref_all"> 全て選択 / 解除</label>
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
                                    <label for="" class="font-semibold block"><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu mb-1" value="1">九州地方</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu_list" value="1">福岡県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu_list" value="2">佐賀県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu_list" value="3">長崎県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu_list" value="3">熊本県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu_list" value="3">大分県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu_list" value="3">宮崎県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu_list" value="3">鹿児島県</label>
                                    <label for=""><input type="checkbox" name="prefs"
                                            class="pref_all_list pref_kyu_list" value="3">沖縄県</label>
                                </div>
                            </div>

                        </div><!-- /都道府県選択 -->

                        <div class="border p-3">
                            <!-- セク選択 -->
                            <ul class="flex space-x-10 justify-center mt-2">
                                <li class="flex items-center">
                                    <input type="checkbox" name="" value="1" id="sex1"><label for="sex1"
                                        class="ml-1">フェム</label>
                                </li>
                                <li class="flex items-center">
                                    <input type="checkbox" name="" id="sex2" value="2"><label for="sex2"
                                        class="ml-1">中性</label>
                                </li>
                                <li class="flex items-center">
                                    <input type="checkbox" name="" id="sex3" value="3"><label for="sex3"
                                        class="ml-1">ボイ</label>
                                </li>
                            </ul>
                            <ul class="flex space-x-10 justify-center mt-2">
                                <li class="flex items-center">
                                    <input type="checkbox" name="" id="sex4" value="4"><label for="sex4"
                                        class="ml-1">タチ</label>
                                </li>
                                <li class="flex items-center">
                                    <input type="checkbox" name="" id="sex5" value="5"><label for="sex5"
                                        class="ml-1">リバ</label>
                                </li>
                                <li class="flex items-center">
                                    <input type="checkbox" name="" id="sex6" value="6"><label for="sex6"
                                        class="ml-1">フェム</label>
                                </li>
                            </ul>
                        </div><!-- /セク選択 -->
                        <div class="flex justify-center py-3 border items-center">
                            <!-- 年齢選択 -->
                            <select name="" id="" id="reset">
                                <option value="">全年代</option>
                                <option value="">18歳未満</option>
                                <option value="">20代</option>
                                <option value="">30代</option>
                                <option value="">40代</option>
                                <option value="">50歳以上</option>
                            </select>
                        </div><!-- /年齢選択 -->
                        <div class="border p-3">
                            <!-- 募集項目選択 -->
                            <ul class="flex space-x-10 justify-center mt-2">
                                <li class="flex items-center" id="reset">
                                    <input type="checkbox" name="wanted" id="wanted1" value="1"><label for="wanted1"
                                        class="ml-1">友達募集</label>
                                </li>
                                <li class="flex items-center">
                                    <input type="checkbox" name="wanted" id="wanted2" value="2"><label for="wanted2"
                                        class="ml-1">恋人募集</label>
                                </li>
                                <li class="flex items-center">
                                    <input type="checkbox" name="wanted" id="wanted3" value="3"><label for="wanted3"
                                        class="ml-1">遠距離可</label>
                                </li>
                            </ul>
                        </div><!-- /募集項目選択 -->

                        <div class="flex justify-end"><!-- /リセットボタン -->
                            <input type="reset" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow my-3" value="リセット">
                        </div><!-- /リセットボタン -->
                    </form>

                    <div><!-- post -->
                        <div class="border-t flex justify-between items-center p-3">
                            <div class="flex">
                                <i class="far fa-smile fa-3x"></i>
                                <div class="ml-3">
                                    <p>タイトル1</p>
                                    <p>ニックネーム1</p>
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
                        <div class="border-t flex justify-between items-center p-3">
                            <div class="flex">
                                <i class="far fa-smile fa-3x"></i>
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
                        <div class="border-y p-3">
                            <p class="text-center">もっと見る</p>
                        </div>
                    <div><!-- もっと見る -->

                    </div><!-- /もっと見る -->

                </div><!-- /初期-->
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script src="{{ mix('js/pref.js') }}"></script>
        <script src="{{ mix('js/searchReset.js') }}"></script>
    </x-slot>
</x-guest-layout>
