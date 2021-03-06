<div>
   
    <x-table>
        
        <div class="flex items-center px-6 py-4">
            <x-jet-input class="flex-1 mr-4" placeholder="Escriba lo que quiere buscar" type="text" wire:model="buscar"/>
            @livewire('createpost')
        </div>

        @if ($posts->count())
        <table class="w-full table-auto">
            <thead>
                <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                    <th style="width: 80px" class="w-4 px-6 py-3 text-left cursor-pointer" wire:click="order('id')">Id
                    @if ($sort == 'id')
                        @if ($direction=='asc')
                            <i class="float-right mt-1 fas fa-sort-numeric-up-alt"></i>
                        @else
                            <i class="float-right mt-1 fas fa-sort-numeric-down-alt"></i>
                        @endif
                        
                    @else
                        <i class="float-right mt-1 fas fa-sort"></i>
                    @endif
                    </th>
                    <th class="px-6 py-3 text-left cursor-pointer" wire:click="order('title')">
                        Title
                        @if ($sort == 'title')
                            @if ($direction=='asc')
                                <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                            @else
                                <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                            @endif
                            
                        @else
                            <i class="float-right mt-1 fas fa-sort"></i>
                        @endif
                        
                    </th>
                    <th class="px-6 py-3 text-left cursor-pointer" wire:click="order('content')">Content
                        @if ($sort == 'content')
                            @if ($direction=='asc')
                                <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                            @else
                                <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                            @endif
                            
                        @else
                            <i class="float-right mt-1 fas fa-sort"></i>
                        @endif
                    </th>
                    <th class="px-6 py-3 text-center" wire:click="order('id')">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm font-light text-gray-600">
            @foreach ($posts as $post)

                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="px-6 py-3 text-left whitespace-nowrap">
                        <div class="flex items-center">
                        {{$post->id}}
                        </div>
                    </td>
                    <td class="px-6 py-3 text-left">
                        <div class="flex items-center">
                        {{$post->title}}
                        </div>
                    </td>
                    <td class="px-6 py-3 text-center">
                        <div class="flex items-center justify-center">
                        {{$post->content}}
                        </div>
                    </td>
                
                    <td class="px-6 py-3 text-center">
                        <div class="flex justify-center item-center">
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            
            </tbody>
        </table>
        @else
            <div class="px-6 py-4">
                No se encontraron resultados
            </div>
        @endif

        
    </x-table>
</div>
