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
        <a href="{{ route('post.index') }}" class="underline text-blue-500">TOPに戻る</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- 初期 -->
                    <p class="text-center">注意事項</p>
                    <p class="mb-8 text-center">※18歳未満の方の利用は禁止です。18歳になってから利用してください。</p>

                    <form class="w-full" action="{{ route('post.update') }}" method="POST">
                        @csrf
                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- title -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3" for="title">
                                タイトル
                            </label>
                            <p class="w-2/3 break-words">{{ $inputs['title'] }}</p>
                            <input type="hidden" name="title" value="{{ $inputs['title'] }}">
                        </div><!-- /title -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- name -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3" for="name">
                                ニックネーム
                            </label>
                            <p class="w-2/3 break-words">{{ $inputs['name'] }}</p>
                            <input type="hidden" name="name" value="{{ $inputs['name'] }}">
                        </div><!-- /name -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- age -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                年齢
                            </label>
                            <p class="w-2/3">{{ $inputs['age'] }}</p>
                            <input type="hidden" name="age" value="{{ $inputs['age_id'] }}">
                        </div><!-- /age -->

                        {{-- {{ dd($input['wanted']) }} --}}
                        @if (isset($inputs['wanted']))
                            <div class="w-1/2 mx-auto mb-6 flex">
                                <!-- wanted -->
                                <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                    希望する相手の条件
                                </label>
                                {{-- {{ dd($inputs['wanted']) }} --}}
                                @if (is_array($inputs['wanted']))
                                    @foreach (array_map(null, $inputs['wanteds'], $inputs['wanted_id']) as [$wanted, $wanted_id])
                                        {{-- {{ dd($wanted) }} --}}
                                        <p class="mr-5">{{ $wanted }}</p>
                                        <input type="hidden" name="wanted[]" value="{{ $wanted_id }}">
                                    @endforeach
                                @else
                                    {{-- {{ dd($inputs['wanted']) }} --}}
                                    <p>{{ $inputs['wanteds'] }}</p>
                                    <input type="hidden" name="wanted[]" value="{{ $inputs['wanted_id'] }}">
                                @endif
                            </div><!-- /wanted -->
                        @endif

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- prefecture -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                住んでいる場所
                            </label>
                            <p class="w-2/3">{{ $inputs['prefecture'] }}</p>
                            <input type="hidden" name="prefecture" value="{{ $inputs['prefecture_id'] }}">
                        </div><!-- /prefecture -->

                        @if (isset($inputs['sex']))
                            <div class="w-1/2 mx-auto mb-6 flex">
                                <!-- sex -->
                                <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                    自分のセク
                                </label>
                                @if (is_array($inputs['sex']))
                                    @foreach (array_map(null, $inputs['sexes'], $inputs['sex_id']) as [$sex, $sex_id])
                                        <p class="mr-5">{{ $sex }}</p>
                                        <input type="hidden" name="sex[]" value="{{ $sex_id }}">
                                    @endforeach
                                @else
                                    <p>{{ $inputs['sexes'] }}</p>
                                    <input type="hidden" name="sex" value="{{ $inputs['sex_id'] }}">
                                @endif
                            </div><!-- /sex -->
                        @endif

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- email -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                メールアドレス
                            </label>
                            <p class="w-2/3">{{ $inputs['email'] }}</p>
                            <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                        </div><!-- /email -->

                        <div class="w-1/2 mx-auto mb-6 flex">
                            <!-- content -->
                            <label class="block text-gray-700 font-bold mb-2 pr-4 w-1/3">
                                投稿内容
                            </label>
                            <p class="w-2/3 break-words">{{ $inputs['content'] }}</p>
                            <input type="hidden" name="content" value="{{ $inputs['content'] }}">
                        </div><!-- /content -->

                        <div class="flex items-center justify-center">
                            <div class="mr-5">
                                <!-- backButton -->
                                <div class="mx-auto">
                                    <button
                                        class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                        type="submit" name="action" value="back">
                                        戻る
                                    </button>
                                </div>
                            </div><!-- /backButton -->

                            <div>
                                <!-- confirmButton -->
                                <div class="mx-auto">
                                    <button
                                        class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                        type="submit" name="action" value="submit">
                                        完了
                                    </button>
                                </div>
                            </div><!-- /confirmButton -->
                        </div>
                    </form>

                </div><!-- 初期 -->
            </div>
        </div>
    </div>

    <x-slot name="script">
    </x-slot>
</x-guest-layout>
