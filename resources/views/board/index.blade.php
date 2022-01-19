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
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex justify-end">
                        <a href="" class="block p-3 border border-gray-400">新規投稿する</a>
                    </div>
                    <div>
                        <form action="">
                            @csrf
                            <label for=""><input type="checkbox" name="prefs" class="pref_all">全て選択 / 解除</label>
                            <hr>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_hoto" value="1">北海道・東北地方</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_hoto_list" value="1">北海道</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_hoto_list" value="3">青森県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_hoto_list" value="3">岩手県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_hoto_list" value="3">宮城県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_hoto_list" value="3">秋田県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_hoto_list" value="3">山形県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_hoto_list" value="3">福島県</label>
                            <hr>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kan" value="1">関東地方</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kan_list" value="1">茨城県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kan_list" value="2">栃木県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kan_list" value="3">群馬県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kan_list" value="3">埼玉県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kan_list" value="3">千葉県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kan_list" value="3">東京都</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kan_list" value="3">神奈川県</label>
                            <hr>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu" value="1">中部地方</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="1">山梨県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="2">長野県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="3">新潟県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="3">富山県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="3">石川県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="3">福井県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="3">静岡県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="3">愛知県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chubu_list" value="3">岐阜県</label>
                            <hr>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kin" value="1">近畿地方</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kin_list" value="1">三重県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kin_list" value="2">滋賀県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kin_list" value="3">京都府</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kin_list" value="3">大阪府</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kin_list" value="3">兵庫県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kin_list" value="3">奈良県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kin_list" value="3">和歌山県</label>
                            <hr>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chugoku" value="1">中国地方</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chugoku_list" value="1">鳥取県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chugoku_list" value="2">島根県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chugoku_list" value="3">岡山県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chugoku_list" value="3">広島県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_chugoku_list" value="3">山口県</label>
                            <hr>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_shi" value="1">四国地方</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_shi_list" value="1">香川県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_shi_list" value="2">愛媛県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_shi_list" value="3">徳島県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_shi_list" value="3">高知県</label>
                            <hr>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu" value="1">九州地方</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list" value="1">福岡県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list" value="2">佐賀県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list" value="3">長崎県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list" value="3">熊本県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list" value="3">大分県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list" value="3">宮崎県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list" value="3">鹿児島県</label>
                            <label for=""><input type="checkbox" name="prefs" class="pref_all_list pref_kyu_list" value="3">沖縄県</label>
                            <hr>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script src="{{ mix('js/pref.js') }}"></script>
    </x-slot>
</x-guest-layout>
