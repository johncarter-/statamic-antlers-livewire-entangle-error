<div x-data="{open: @entangle('showDropdown')}">
    <button @click="open = !open">Toggle Open</button>
    <div x-show="open">We are open</div>
</div>