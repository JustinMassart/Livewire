<?php

    namespace App\Http\Livewire;

    use Livewire\Component;

    class Counter extends Component
    {

        public int $counterValue;

        public function mount()
        {
            $this->counterValue = 0;
        }

        public function increment()
        {
            $this->counterValue += 1;
        }

        public function render()
        {
            return view('livewire.counter');
        }
    }
