<x-layout>
    <x-slot:heading>
        Register 
    </x-slot:heading>
    
    
<form method="POST" action="/register">
  @csrf
  
  <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
 
        <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <div class="sm:col-span-4">
            <x-form-label for="name" >Name</x-form-label>
            <div class="mt-2">
              <x-form-input name="name" id="name" placeholder="Your name" required ></x-form-input>

 
              <x-form-error name="name" ></x-form-error>
            </div>
          </div>

          <div class="sm:col-span-4">
            <x-form-label for="email" >Email</x-form-label>
            <div class="mt-2">
              <x-form-input name="email" id="email" type="email" required></x-form-input>

              <x-form-error name="email" ></x-form-error>
            </div>
          </div>

          <div class="sm:col-span-4">
            <x-form-label for="password" >Password</x-form-label>
            <div class="mt-2">
              <x-form-input name="password" id="password" type="password" required></x-form-input>

              <x-form-error name="password" ></x-form-error>
            </div>
          </div>

          <div class="sm:col-span-4">
            <x-form-label for="password_confirmation" >Confirm Password</x-form-label>
            <div class="mt-2">
              <x-form-input name="password_confirmation" id="password_confirmation" type="password_confirmation" required ></x-form-input>

              <x-form-error name="password_confirmation" ></x-form-error>
            </div>
          </div>

        </div>
      </div> 
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <x-form-button>Register</x-form-button>
    </div>
  </form>
  
</x-layout>