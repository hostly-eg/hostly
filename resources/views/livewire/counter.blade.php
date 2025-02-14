<div class="center text-center">
    <h1>Counter</h1>
    <div>
        <button class="btn btn-outline-info" wire:click="decrement">-</button>
        <h5 class="text-lg">{{ $count }}</h5>
        <button class="btn btn-outline-warning" wire:click="increment">+</button>
    </div>
</div>
