<div>


            @if($submitted)

                    <div class="rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/check-circle -->
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-green-800">Thank you for your enquiry</h3>
                                <div class="mt-2 text-sm text-green-700">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.</p>
                                </div>
{{--                                <div class="mt-4">--}}
{{--                                    <div class="-mx-2 -my-1.5 flex">--}}
{{--                                        <button type="button" class="bg-green-50 px-2 py-1.5 rounded-md text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">View status</button>--}}
{{--                                        <button type="button" class="ml-3 bg-green-50 px-2 py-1.5 rounded-md text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">Dismiss</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>


                @else
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

            @endif

</div>
