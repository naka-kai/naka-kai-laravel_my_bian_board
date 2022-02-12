<x-guest-layout>
    <x-slot name="title">
        編集
    </x-slot>

    <x-slot name="head">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            編集
        </h2>
        <a href="{{ route('post.index') }}" class="underline text-blue-500">TOPに戻る</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- 初期 -->

                    <form class="w-full" action="{{ route('post.edit_confirm', ['id' => $id]) }}"
                        method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="w-2/3 mx-auto mb-6">
                            <!-- title -->
                            <div class="mb-2 pr-4">
                                <label class="text-gray-700 font-bold " for="title">
                                    タイトル
                                </label>
                                @error('title')
                                    <p class="text-sm py-1 text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <input
                                    class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="title" type="text" name="title" value="{{ old('title', $data['title']) }}">
                            </div>
                        </div><!-- /title -->

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- name -->
                            <div class="mb-2 pr-4">
                                <label class="text-gray-700 font-bold" for="name">
                                    ニックネーム
                                </label>
                                @error('name')
                                    <p class="text-sm py-1 text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <input
                                    class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="name" type="text" name="name" value="{{ old('name', $data['name']) }}">
                            </div>
                        </div><!-- /name -->

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- age -->
                            <div class="mb-2 pr-4">
                                <label class="text-gray-700 font-bold" for="age">
                                    年齢
                                </label>
                                @error('age')
                                    <p class="text-sm py-1 text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <select
                                    class="block appearance-none w-full bg-sky-50 border border-sky-50 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="age" name="age">
                                    {{-- <option value="">選択してください</option> --}}
                                    @foreach ($get_ages as $age)
                                        <option value="{{ $age->id }}" @if ($age->id == old('age_id', $data['age_id'])) selected @endif>{{ $age->age }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- /age -->

                        <div class="mb-6">
                            <!-- wanted -->
                            <div class="mb-1 pr-4">
                                <p class="text-gray-700 font-bold text-center">
                                    希望する相手の条件
                                </p>
                            </div>
                            {{-- {{ dd($data) }} --}}
                            <div class="flex space-x-10 justify-center items-center mb-1">
                                @foreach ($get_wanteds as $wanted)
                                    <label class="block text-gray-500 font-bold" for="{{ $wanted->inputName }}">
                                        <input type="checkbox" id="{{ $wanted->inputName }}" name="wanted[]" value="{{ $wanted->id }}" @if(in_array($wanted->id, $data['wanted_id'])) checked @endif>
                                        <span class="text-sm">
                                            {{ $wanted->wanted }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div><!-- /wanted -->

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- prefecture -->
                            <div class="mb-2 pr-4">
                                <label class="text-gray-700 font-bold" for="">
                                    住んでいる場所
                                </label>
                                @error('prefecture')
                                    <p class="text-sm py-1 text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <select
                                    class="block appearance-none w-full bg-sky-50 border border-sky-50 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="prefecture">
                                    {{-- <option value="">選択してください</option> --}}
                                    @foreach ($get_prefectures as $prefecture)
                                        <option value="{{ $prefecture->id }}" @if ($prefecture->id == $data['prefecture_id']) selected @endif>
                                            {{ $prefecture->prefecture }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- /prefecture -->

                        <div class="mb-6">
                            <!-- sex -->
                            <div class="mb-1 pr-4">
                                <p class="text-gray-700 font-bold text-center" for="">
                                    自分のセク
                                </p>
                            </div>
                            <div class="flex space-x-10 justify-center items-center mb-1">
                                @foreach ($get_sexes as $sex)
                                    <label class="block text-gray-500 font-bold" for="{{ $sex->inputName }}">
                                        <input class="mr-2 leading-tight" type="checkbox" id="{{ $sex->inputName }}"
                                            name="sex[]" value="{{ $sex->id }}" @if(in_array($sex->id, $data['sex_id'])) checked @endif>
                                        <span class="text-sm">
                                            {{ $sex->sex }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div><!-- /sex -->

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- email -->
                            <div class="mb-2 pr-4">
                                <label class="text-gray-700 font-bold" for="email">
                                    メールアドレス
                                </label>
                                @error('email')
                                    <p class="text-sm py-1 text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <input
                                    class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="email" type="email" placeholder="(非公開)" name="email"
                                    value="{{ old('email', $data['email']) }}">
                            </div>
                        </div><!-- /email -->

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- content -->
                            <div class="mb-2 pr-4">
                                <label class="text-gray-700 font-bold" for="content">
                                    投稿内容
                                </label>
                                @error('content')
                                    <p class="text-sm py-1 text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <textarea
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="content" rows="10"
                                    name="content">{{ old('content', $data['content']) }}</textarea>
                            </div>
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
                                        確認
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
