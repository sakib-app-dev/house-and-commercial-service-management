<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h1 style="background-color: #3498DB; color: white; font-size:25px; margin-top:15px;border-radius:45px;border-style:solid;padding:5px 35px;font-weight: bold;">
                HCMS Sign up
            </h1>  
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-5">
                <div style="border: 1px solid gray;border-radius:15px;padding:75px 10px">
                    <label for="role"  class="block w-full" style="font-size:20px;font-weight: bold;color:white;background-color:#DC143C;padding:2px 8px;border-radius:5px;display;inline-block;text-align:center" >Join as a...</label>

                    <select id="role"  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm " name="role" required>

                        <option selected disabled hidden >
                            Select...
                        </option>
                        <option value="0">
                            Client
                        </option>
                        <option value="1">
                            Service Provider
                        </option>
        
                    </select>
                </div>
            </div>
            <div class="pt-5 mt-5">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            
            <div>
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <select id="gender"  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm " name="gender">

                    <option selected disabled hidden >
                        Select...
                    </option>
                    <option value="m" >
                        Male
                    </option>
                    <option value="f">
                        Female
                    </option>
    
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="present_address" value="{{ __('Present Address') }}" />
                <x-jet-input id="present_address" class="block mt-1 w-full" type="text" name="present_address" :value="old('permanent_address')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="permanent_address" value="{{ __('Permanent Address') }}" />
                <x-jet-input id="permanent_address" class="block mt-1 w-full" type="text" name="permanent_address" :value="old('permanent_address')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="birthday" value="{{ __('Birthday') }}" />
                <x-jet-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="nid" value="{{ __('NID No.') }}" />
                <x-jet-input id="nid" class="block mt-1 w-full" type="number" name="nid" :value="old('nid')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="marital_status" value="{{ __('Marital Status') }}" />
                <x-jet-input id="marital_status" class="block mt-1 w-full" type="text" name="marital_status" :value="old('marital_status')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
