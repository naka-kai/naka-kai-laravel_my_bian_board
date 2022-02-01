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

                    <form class="w-full" action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- title -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3" for="title">
                                タイトル
                            </label>
                            <p class="w-2/3 break-words">title5</p>
                            <input type="hidden" name="title" value="">
                        </div><!-- /title -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- name -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3" for="name">
                                ニックネーム
                            </label>
                            <p class="w-2/3 break-words">name5</p>
                            <input type="hidden" name="name" value="">
                        </div><!-- /name -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- age -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                年齢
                            </label>
                            <p class="w-2/3">20代</p>
                            <input type="hidden" name="age" value="">
                        </div><!-- /age -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- wanted -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                希望する相手の条件
                            </label>
                            <p class="w-2/3 break-words">恋人募集, 友達募集</p>
                            <input type="hidden" name="wanted" value="">
                        </div><!-- /wanted -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- prefecture -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                住んでいる場所
                            </label>
                            <p class="w-2/3">北海道</p>
                            <input type="hidden" name="prefecture" value="">
                        </div><!-- /prefecture -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- sex -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                自分のセク
                            </label>
                            <p class="w-2/3 break-words">ボイ, リバ</p>
                            <input type="hidden" name="sex" value="">
                        </div><!-- /sex -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- email -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                メールアドレス
                            </label>
                            <p class="w-2/3">test5@test.com</p>
                            <input type="hidden" name="email" value="">
                        </div><!-- /email -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- content -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                投稿内容
                            </label>
                            <p class="w-2/3 break-words">contentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontent<br>content</p>
                            <input type="hidden" name="content" value="">
                        </div><!-- /content -->

                        <div class="flex items-center">
                            <!-- confirmButton -->
                            <div class="mx-auto">
                                <button
                                    class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                    type="submit">
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
