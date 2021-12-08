<section class="flex flex-col">
    <div class="px-5 py-5">
        <label for="searchTerm" class="">Search Term</label>
        <input id="searchTerm" type="text" wire:model="searchTerm" class="border border-gray-500">
    </div>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <a href="#" wire:click.prevent="orderBy('name', '{{$sortOrder}}')">Name</a>
                            @if($sortCriterium ==='name' & $sortOrder === 'asc' )
                                <span>↑</span>
                            @elseif($sortCriterium ==='name' & $sortOrder === 'desc')
                                <span>↓</span>
                            @else
                                <span class="opacity-25">↑</span>
                            @endif
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <a href="#" wire:click.prevent="orderBy('birthdate', '{{$sortOrder}}')">Birthday</a>
                            @if($sortCriterium ==='birthdate' & $sortOrder === 'asc' )
                                <span>↑</span>
                            @elseif($sortCriterium ==='birthdate' & $sortOrder === 'desc')
                                <span>↓</span>
                            @else
                                <span class="opacity-25">↑</span>
                            @endif
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <a href="#" wire:click.prevent="orderBy('last_contacted_at', '{{$sortOrder}}')">Last
                                                                                                            Contact</a>
                            @if($sortCriterium ==='last_contacted_at' & $sortOrder === 'asc' )
                                <span>↑</span>
                            @elseif($sortCriterium ==='last_contacted_at' & $sortOrder === 'desc')
                                <span>↓</span>
                            @else
                                <span class="opacity-25">↑</span>
                            @endif
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <a href="#" wire:click.prevent="orderBy('favorite_color', '{{$sortOrder}}')">Favorite
                                                                                                         Color</a>
                            @if($sortCriterium ==='favorite_color' & $sortOrder === 'asc' )
                                <span>↑</span>
                            @elseif($sortCriterium ==='favorite_color' & $sortOrder === 'desc')
                                <span>↓</span>
                            @else
                                <span class="opacity-25">↑</span>
                            @endif
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($this->contacts as $index => $contact)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$contact->name}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{$contact->birthdate->format('d-m-Y')}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  {{$contact->last_contacted_at->format('d-m-Y')}}
                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$contact->favorite_color}}
                            </td>
                        </tr>
                    @endforeach

                    <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="px-5 py-5">
        {{$this->contacts->links()}}
    </div>
</section>
