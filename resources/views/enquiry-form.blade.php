<div>

        <div class="bg-white p-4">

                <form wire:submit.prevent="submit" class="grid grid-cols-1 gap-y-6">
                    <div>
                        <label for="full-name" class="sr-only">Full name</label>
                        <input wire:model.lazy="enquiry.name" type="text" name="name" id="full-name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Full name">
                        @error('enquiry.name') <span class="block text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input wire:model.lazy="enquiry.email" id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Email">
                        @error('enquiry.email') <span class="block text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="phone" class="sr-only">Phone</label>
                        <input wire:model.lazy="enquiry.telephone" type="text" name="telephone" id="telephone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Telephone">
                        @error('enquiry.telephone') <span class="block text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="message" class="sr-only">Message</label>
                        <textarea wire:model.lazy="enquiry.message" id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md" placeholder="Message"></textarea>
                        @error('enquiry.message') <span class="block text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                    </div>
                </form>

        </div>

</div>
