<div>
    @if (session('success'))
        <div class="bg-indigo-900 text-center py-4 lg:px-4">
            <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                role="alert">
                <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{ session('success') }}</span>
                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
            </div>
        </div>
    @endif
    <form class="p-5" wire:submit='createNewUser' action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model='name' type="text"
            placeholder="name">

        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded bo rder border-gray-100 px-3 py-1 mt-1" wire:model='email' type="email"
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
        <p>ID: {{ $user->id }}
            <br>
            Name: {{ $user->name }}
            <br>
            Email: {{ $user->email }}
        </p>
    @endforeach

    <div>
        {{ $users->links('vendor.livewire.test') }}
    </div>

    <a href="/register">Go to Register Form</a>
</div>
