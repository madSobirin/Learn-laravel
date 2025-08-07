<x-layout>
    <x-slot name="header">
        <x-header title="My Posts" />
    </x-slot>
    <div class="p-4 sm:p-6 lg:p-8">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border border-gray-300 rounded-md">
                <thead class="bg-gray-100 ">
                    <tr class="text-center">
                        <th class="px-6 py-3  text-xs font-medium text-gray-600 uppercase">No</th>
                        <th class="px-6 py-3  text-xs font-medium text-gray-600 uppercase">Judul</th>
                        <th class="px-6 py-3  text-xs font-medium text-gray-600 uppercase">Category</th>
                        <th class="px-6 py-3  text-xs font-medium text-gray-600 uppercase">Action</th>
                        {{-- <th class="px-6 py-3  text-xs font-medium text-gray-600 uppercase">Tanggal</th> --}}
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($posts as $post)
                        <tr class="hover:bg-gray-50 text-center">
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm font-semibold text-gray-800">{{ $post->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $post->body }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <div class="flex justify-center items-center gap-2">
                                    <a href="posts/{{ $post->id }}"><x-heroicon-o-eye
                                            class="w-5 h-5 hover:text-amber-300" /></a>
                                    <a href="#"><x-heroicon-o-pencil-square
                                            class="w-5 h-5 hover:text-amber-300" /></a>
                                    <a href="#"><x-heroicon-o-trash class="w-5 h-5 hover:text-amber-300" /></a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($posts->isEmpty())
                <div class="text-center text-gray-500 mt-6">Belum ada postingan.</div>
            @endif
        </div>
    </div>
</x-layout>
