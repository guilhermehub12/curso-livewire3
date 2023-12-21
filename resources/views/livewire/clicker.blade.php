<div>
    <form wire:submit='createNewUser' action="">
        <input wire:model='name' type="text" placeholder="name">
        <input wire:model='email' type="email" placeholder="email">
        <input wire:model='password' type="password" placeholder="password">

        <button wire:click.prevent="createNewUser">Create</button>
    </form>

    <hr>

    @foreach ($users as $user)
        <p>Name: {{ $user->name }}
            <br>
            Email: {{ $user->email }}
        </p>
    @endforeach
</div>
