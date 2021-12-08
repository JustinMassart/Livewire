<?php

    namespace App\Http\Livewire;

    use App\Models\Contact;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Livewire\Component;
    use Livewire\WithPagination;

    class Contacts extends Component
    {

        use WithPagination;


        public string $searchCriterium;
        public string $searchTerm;
        public string $sortCriterium;
        public string $sortOrder;

        public function mount()
        {

            $this->searchTerm = '';
            $this->searchCriterium = 'name';
            $this->sortCriterium = 'name';
            $this->sortOrder = 'asc';

        }

        public function orderBy($sortCriterium, $sortOrder)
        {
            $this->sortCriterium = $sortCriterium;
            $this->sortOrder = $sortOrder === 'desc' ? 'asc' : 'desc';
        }

        public function getContactsProperty()
        {
            return Contact::where($this->searchCriterium, 'like', '%' . $this->searchTerm . '%')
                ->orderBy($this->sortCriterium, $this->sortOrder)
                ->paginate(20);
        }

        public function updatedSearchTerm()
        {
            $this->resetPage();
        }

        public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
        {
            return view('livewire.contacts');
        }

    }
