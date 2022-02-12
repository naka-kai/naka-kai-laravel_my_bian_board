<x-guest-layout>
    <x-slot name="title">
        {{ $detail_post->name }}さんの編集パス確認ページ
    </x-slot>

    <x-slot name="head">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            {{ $detail_post->name }}さんの編集パス確認ページ
        </h2>
        <a href="{{ route('post.index') }}" class="underline text-blue-500">TOPに戻る</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- 初期 -->

                    <form class="w-full" action="{{ route('post.edit', ['id' => $id]) }}" method="post">
                        @csrf

                        <div class="w-2/3 mx-auto mb-6">
                            <!-- password -->
                            <div class="mb-2 pr-4">
                                <label class="text-gray-700 font-bold" for="password">
                                    パスワード
                                </label>
                                @if (session('notPass'))
                                    <p class="text-sm py-1 text-red-400">{{ session('notPass') }}</p>
                                @endif
                                @error('password')
                                    <p class="text-sm py-1 text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <input
                                    class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="password" type="password" name="password">
                            </div>
                        </div><!-- /password -->

                        <div class="flex justify-center">
                            <div class="flex items-center mr-3">
                                <!-- backButton -->
                                <div class="mx-auto">
                                    <button
                                        class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                        type="submit" value="action" name="back">
                                        戻る
                                    </button>
                                </div>
                            </div><!-- /backButton -->

                            <div class="flex items-center">
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
