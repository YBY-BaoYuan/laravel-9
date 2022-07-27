<div>
    {{ $name }}

{{--    <input type="text" wire:model.lazy="name">--}}
    <input type="text" wire:model.debounce.2000ms="name">

{{--    <button wire:click="changeName">修改名称</button>--}}
</div>
