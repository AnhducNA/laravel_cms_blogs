<x-authentication-layout-admin>
    <h1 class="text-3xl text-slate-800 font-bold mb-6">{{ __('Welcome back!') }} ✨</h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-forms.label for="email" value="{{ __('Email') }}"/>
                <x-forms.input id="email" type="email" name="email" :value="old('email')" required autofocus/>
            </div>
            <div>
                <x-forms.label for="password" value="{{ __('Password') }}" />
                <x-forms.input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="flex items-center justify-between mt-6" >
                @if (Route::has('password.request'))
                    <div class="mr-1">
                        <a class="text-sm underline hover:no-underline" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    </div>
                @endif
                <x-forms.button class="ml-3">
                    {{ __('Sign in') }}
                </x-forms.button>
            </div>
        </div>
    </form>
</x-authentication-layout-admin>
