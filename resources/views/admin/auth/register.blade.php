<x-authentication-layout-admin>
    <h1 class="text-3xl text-slate-800 font-bold mb-6">{{ __('Create your Account') }} ✨</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-forms.label for="name">{{ __('Full Name') }} <span class="text-rose-500">*</span></x-forms.label>
                <x-forms.input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-forms.label for="email">{{ __('Email Address') }} <span class="text-rose-500">*</span></x-forms.label>
                <x-forms.input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-forms.label for="password" value="{{ __('Password') }}" />
                <x-forms.input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-forms.label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-forms.input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            <div class="mr-1">
                <label class="flex items-center" name="newsletter" id="newsletter">
                    <input type="checkbox" class="form-checkbox" />
                    <span class="text-sm ml-2">Email me about product news.</span>
                </label>
            </div>
            <x-forms.button>
                {{ __('Sign Up') }}
            </x-forms.button>
        </div>
    </form>
    <x-forms.validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200">
        <div class="text-sm">
            {{ __('Have an account?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('login') }}">{{ __('Sign In') }}</a>
        </div>
    </div>
</x-authentication-layout-admin>
