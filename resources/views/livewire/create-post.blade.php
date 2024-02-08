<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form wire:submit='store'>
                    <div class="row">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" type="text" class="mt-1 block w-full" wire:model="formData.title"/>
                            @error('formData.title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="description" rows="10" class="mt-1 block w-full" wire:model="formData.description"></textarea>
                            @error('formData.description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-4 mt-5">
                            <x-button>
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
