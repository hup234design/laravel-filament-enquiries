<div>
    <form wire:submit.prevent="submit">

        <div class="divide-y p-4">

            <div class="py-4">
                <input type="text" wire:model="enquiry.name" class="border w-full p-2">
                @error('enquiry.name') <span class="block text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="py-4">
                <input type="text" wire:model="enquiry.email" class="border w-full p-2">
                @error('enquiry.email') <span class="block text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="py-4">
                <input type="text" wire:model="enquiry.telephone" class="border w-full p-2">
                @error('enquiry.telephone') <span class="block text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="py-4">
                <input type="text" wire:model="enquiry.message" class="border w-full p-2">
                @error('enquiry.message') <span class="block text-red-600">{{ $message }}</span> @enderror
            </div>

            <button type="submit">Send Message</button>

        </div>

    </form>
</div>
