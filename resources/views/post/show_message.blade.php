<x-guest-layout>
    <x-slot name="title">
        {{ $detail_post->name }}さんの詳細ページ
    </x-slot>

    <x-slot name="head">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            {{ $detail_post->name }}さんの詳細ページ
        </h2>
        <a href="{{ route('post.index') }}" class="underline text-blue-500">TOPに戻る</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- 初期 -->

                    <div class="w-2/3 mx-auto text-gray-800" x-data="accordion">
                        <div class="flex justify-between items-center">
                            <h3 class="py-2 font-semibold text-lg">{{ $detail_post->title }}</h3>
                            {{-- {{ dd($detail_post) }} --}}
                            <div class="flex">
                                <form action="{{ route('post.editPassConfirm', ['id' => $id]) }}" method="get">
                                    <input type="submit" class="mr-3 text-blue-400 cursor-pointer" value="[ 編集 ]" name="editId">
                                </form>
                                <form action="" method="get">
                                    <input type="submit" class="mr-3 text-blue-400 cursor-pointer" value="[ 削除 ]" name="editId">
                                </form>
                            </div>
                        </div>
                        <hr>
                        <p class="pt-3 pb-2">
                            {{ date('Y/m/d h:m', strtotime($detail_post->created_at)) }}
                        </p>
                        <div class="flex py-2">
                            @if ($detail_post->wanteds)
                                @foreach ($detail_post->wanteds as $wanted)
                                    <div class="flex">
                                        <div
                                            class="@if ($wanted->id == 1)
                                            bg-orange-100 border-orange-300
                                            @elseif ($wanted->id == 2)
                                            bg-pink-100 border-pink-300
                                            @else
                                            bg-blue-100 border-blue-300
                                            @endif
                                            px-2 py-1 mr-3 rounded">
                                            <p>{{ $wanted->wanted }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <p class="px-2 py-1">{{ $detail_post->prefecture->prefecture }}</p>
                            <p class="px-2 py-1">{{ $detail_post->age->age }}</p>
                        </div>

                        <div class="flex my-2">
                            <p class="mr-5">名前：{{ $detail_post->name }}さん</p>
                            @if ($detail_post->sexes)
                                @foreach ($detail_post->sexes as $sex)
                                    <p class="mr-3">[{{ $sex->sex }}]</p>
                                @endforeach
                            @endif
                        </div>

                        <div class="py-1 leading-7">
                            {{ $detail_post->content }}
                        </div>

                        <div>
                            <p class="mt-8 bg-white hover:bg-sky-50 py-2 px-4 border border-sky-200 rounded shadow-md shadow-sky-100 inline-block cursor-pointer"
                                x-on:click="handleClick()">{{ $detail_post->name }}さんに連絡する！</p>
                        </div>
                        <form action="" method="POST">
                            <div x-ref="tab" :style="handleToggle()"
                                class="overflow-hidden max-h-0 duration-500 transition-all mt-10">
                                <div>
                                    <div class="border border-red-400 p-2">
                                        <p>※注意事項</p>
                                        <p>18歳未満の方のご利用は禁止です。</p>
                                        <p>こちらは女性同士の交流を目的とした掲示板です。</p>
                                        <p>男性の方がメッセージを送ることや、性別を偽る迷惑行為はお辞め下さい。</p>
                                        <p>お相手からお返事があることを保証するものではありませんので予めご了承ください。</p>
                                    </div>
                                    <p class="my-4"><span class="text-red-400">*</span> 印がついているものは必須項目です</p>
                                    <div class="mb-6 mx-auto">
                                        <!-- name -->
                                        <div>
                                            <label class="block text-gray-700 font-bold mb-2 pr-4" for="name">
                                                お名前 <span class="text-red-400">*</span>
                                            </label>
                                        </div>
                                        <div>
                                            <input
                                                class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="name" type="text" name="name">
                                        </div>
                                    </div><!-- /name -->
                                    <div class="mx-auto mb-6">
                                        <!-- email -->
                                        <div>
                                            <label class="block text-gray-700 font-bold mb-2 pr-4" for="email">
                                                メールアドレス <span class="text-red-400">*</span>
                                            </label>
                                        </div>
                                        <div>
                                            <input
                                                class="bg-sky-50 appearance-none border-2 border-sky-50 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="email" type="email" name="email">
                                        </div>
                                    </div><!-- /email -->
                                </div>
                                <div class="mx-auto mb-6">
                                    <!-- content -->
                                    <div>
                                        <label class="block text-gray-700 font-bold mb-2 pr-4" for="message">
                                            メッセージ <span class="text-red-400">*</span>
                                        </label>
                                    </div>
                                    <div>
                                        <textarea
                                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="message" name="message" rows="3"
                                            placeholder="お相手に失礼のない常識的な内容を送りましょう"></textarea>
                                    </div>
                                </div><!-- /content -->

                                <div class="mx-auto mb-6">
                                    <!-- caution -->
                                    <label class="block text-gray-700 font-bold text-center">
                                        <input class="mr-2 leading-tight" type="checkbox" name="check">
                                        <span class="text-sm">
                                            注意事項をチェックしました <span class="text-red-400">*</span>
                                        </span>
                                    </label>
                                </div><!-- /caution -->

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
                            </div>
                        </form>

                    </div>


                </div><!-- 初期 -->
            </div>
        </div>
    </div>

    <x-slot name="script">
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
