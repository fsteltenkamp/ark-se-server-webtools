<div>
    <div class="px-4">
        <button class="button is-primary" wire:click="createConfig">
            <x-icon i="plus" spe="2"/>
            Add Config
        </button>
    </div>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Config Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($configs as $config)
                <tr>
                    <td>{{ $config->name }}</td>
                    <td>
                        <a class="button is-small is-info" href="{{route('api.ase.liveConfig.dynamicConfig.getIni', $config->id)}}">
                            <x-icon i="file-ini" spe="2"/>
                        </a>
                        <button class="button is-small is-primary" href="{{route('frontend.liveConfigs.dynamicConfigs.edit', $config->id)}}" wire:navigate>
                            <x-icon i="pen" spe="2"/>
                        </button>
                        <button class="button is-small is-danger" href="#" wire:click="deleteConfig({{ $config->id }})" wire:confirm='Are you sure you want to delete the Config "{{$config->name}}"?'
                            <x-icon i="trash" spe="2"/>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>