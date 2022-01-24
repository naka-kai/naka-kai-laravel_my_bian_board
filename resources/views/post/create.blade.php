<x-guest-layout>
    <x-slot name="title">
        新規投稿
    </x-slot>

    <x-slot name="head">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            新規投稿
        </h2>
        <a href="" class="underline text-blue-500">TOPに戻る</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- 初期 -->
                    <p class="text-center">注意事項</p>
                    <p class="mb-8 text-center">※18歳未満の方の利用は禁止です。18歳になってから利用してください。</p>

                    <form class="w-full">
                        <div class="w-2/3 mx-auto mb-6">
                            <!-- title -->
                            <div class="">
                                <label class="block text-gray-700 font-bold mb-2 pr-4"
                                    for="inline-full-name">
                                    タイトル
                                </label>
                            </div>
                            <div class="">
                                <input
                                    class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="inline-full-name" type="text" value="">
                            </div>
                        </div><!-- /title -->

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- name -->
                            <div class="">
                                <label class="block text-gray-700 font-bold mb-2 pr-4"
                                    for="inline-full-name">
                                    ニックネーム
                                </label>
                            </div>
                            <div class="">
                                <input
                                    class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="inline-full-name" type="text" value="">
                            </div>
                        </div><!-- /name -->

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- age -->
                            <div class="">
                                <label class="block text-gray-700 font-bold mb-2 pr-4"
                                    for="inline-full-name">
                                    年齢
                                </label>
                            </div>
                            <div class="">
                                <select
                                    class="block appearance-none w-full bg-sky-50 border border-sky-50 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state">
                                    <option>10代(18歳以上)</option>
                                    <option>20代</option>
                                    <option>30代</option>
                                    <option>40代</option>
                                    <option>50歳以上</option>
                                </select>
                            </div>
                        </div><!-- /age -->

                        <div class="mb-6">
                            <!-- wanted -->
                            <div class="">
                                <p class="block text-gray-700 font-bold text-center mb-1 pr-4"
                                    for="inline-full-name">
                                    希望する相手の条件
                                </p>
                            </div>
                            <div class="flex space-x-10 justify-center items-center mb-1">
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

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- prefecture -->
                            <div class="">
                                <label class="block text-gray-700 font-bold mb-2 pr-4"
                                    for="inline-full-name">
                                    住んでいる場所
                                </label>
                            </div>
                            <div class="">
                                <select
                                    class="block appearance-none w-full bg-sky-50 border border-sky-50 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state">
                                    <option>北海道</option>
                                    <option>青森県</option>
                                    <option>岩手県</option>
                                </select>
                            </div>
                        </div><!-- /prefecture -->

                        <div class="mb-6">
                            <!-- sex -->
                            <div class="">
                                <p class="block text-gray-700 font-bold text-center mb-1 pr-4"
                                    for="inline-full-name">
                                    自分のセク
                                </p>
                            </div>
                            <div class="flex space-x-10 justify-center items-center mb-1">
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

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- email -->
                            <div class="">
                                <label class="block text-gray-700 font-bold mb-2 pr-4"
                                    for="inline-full-name">
                                    メールアドレス
                                </label>
                            </div>
                            <div class="">
                                <input
                                    class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="inline-full-name" type="email" placeholder="(非公開)">
                            </div>
                        </div><!-- /email -->

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- content -->
                            <div class="">
                                <label class="block text-gray-700 font-bold mb-2 pr-4"
                                    for="inline-full-name">
                                    投稿内容
                                </label>
                            </div>
                            <div class="">
                                <textarea
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="exampleFormControlTextarea1" rows="3" placeholder=""></textarea>
                            </div>
                        </div><!-- /content -->

                        <div class="w-2/3 mx-auto mb-6 text-center"><!-- caution -->
                            <label class="inline text-gray-700 font-bold text-center">
                                <input class="mr-2 leading-tight" type="checkbox">
                                <span class="text-sm">
                                    注意事項をチェックしました
                                </span>
                            </label>
                        </div><!-- /caution -->
                        <div class="flex items-center"><!-- confirmButton -->
                            <div class="mx-auto">
                                <button
                                    class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                    type="button">
                                    確認
                                </button>
                            </div>
                        </div><!-- /confirmButton -->
                    </form>

                </div><!-- 初期 -->
            </div>
        </div>
    </div>

    <x-slot name="script">
    </x-slot>
</x-guest-layout>
