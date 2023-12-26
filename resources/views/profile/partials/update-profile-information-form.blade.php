<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form action="/updateprofile" method="POST" enctype="multipart/form-data">
@csrf
    <div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl sm:px-12 dark:bg-gray-900 dark:text-gray-100">
        <img src="{{ asset('storage/images/'.Auth::user()->img) }}" alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
        {{-- <img id="output" src=""   alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square"> --}}

        <div class="space-y-4 text-center divide-y dark:divide-gray-700">


            <div class="my-2 space-y-1">
                <h2 class="text-xl font-semibold sm:text-2xl">{{ Auth::user()->name }}</h2>
                <p class="px-5 text-xs sm:text-base dark:text-gray-400">{{ Auth::user()->email }}</p>
                <input onchange="onFileChange(e)" name="pic"  type="file" href="" class="font-mono pt-1 text-red-600"></input>

         <button  class="bg-transparent mt-2 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Update
                  </button>

            </div>


        </div>
    </div>
</form>


    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">

        @csrf
        @method('patch')




        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>




            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>





        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>


<script>
           onFileChange(e){
   var image = e.target.files[0];
   var url1=URL.createObjectURL(image);
   var output = document.getElementById('output');
      output.src = url1;
   },
</script>
