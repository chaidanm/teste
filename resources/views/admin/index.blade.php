<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Movimentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8 space-y-6">
            <table class="table-auto min-w-max w-full">
    <thead>
       <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
        <th class="py-3 px-6 text-left"> id</td>
        <th class="py-3 px-6 text-left"> Nome</td>
        <th class="py-3 px-6 text-left"> KM</td>
        <th class="py-3 px-6 text-left"> DATA</td>
    </tr>
</thead>
    <tbody class="text-gray-600 text-sm font-light">
    @foreach($lista as $item)
</div>

    <tr class="border-b border-gray-200 bg-gray-200 hover:bg-gray-100 txt-cyan-600">
        <td class="py-3 px-6 text-left"> {{$item->id}}</td>
        <td class="py-3 px-6 text-left">{{$item->nome}}</td>
        <td class="py-3 px-6 text-left"> {{$item->km}}</td>
        <td class="py-3 px-6 text-left">{{$item->data->format('d/m/y')}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
</x-app-layout>