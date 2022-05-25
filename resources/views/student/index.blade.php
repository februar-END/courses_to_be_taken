<x-layout title="TOP | 履修登録">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            履修登録
        </h2>
        <x-student.list :students="$students"></x-student.list>
    </x-layout.single>
</x-layout>