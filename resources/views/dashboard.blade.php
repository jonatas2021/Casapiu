<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @foreach(Auth::user()->sapatos as $sapato)
                            <tr>
                                <td>{{$sapato->marca}}</td>
                                <td>{{$sapato->modelo}}</td>
                                <td>{{$sapato->tamanho}}</td>
                                <td>{{$sapato->cor}}</td>
                            </tr>
                        @endforeach
                    </table>
                    <form action="/add-sapato" method="POST">
                        @csrf
                        <input type="text" name="marca" placeholder="marca">
                        <input type="text" name="modelo" placeholder="modelo">
                        <input type="text" name="tamanho" placeholder="tamanho">
                        <input type="text" name="cor" placeholder="cor">
                        <input type="submit" value="add">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
