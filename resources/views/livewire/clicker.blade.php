<div>
    <form class="p-5" wire:submit='createNewUser' action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model='name' type="text"
            placeholder="name">

        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model='email' type="email"
            placeholder="email">

        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model='password' type="password"
            placeholder="password">

        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <button class="block rounded px-3 py-1 bg-gray-400 text-white"
            wire:click.prevent="createNewUser">Create</button>
    </form>

    <hr>

    @foreach ($users as $user)
        <p>Name: {{ $user->name }}
            <br>
            Email: {{ $user->email }}
        </p>
    @endforeach
</div>
