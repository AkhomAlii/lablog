@props(['name'])

@error($name)
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @if($message == 'The email has already been taken.')
       <div class="flex">
            <p class="text-red-500 text-xs mt-2"> Why don't you just</p>
            <a href="/login" class="bg-blue-500 text-white uppercase font-semibold ml-10 text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
              Login!
            </a>
       </div>
    @elseif($message == 'Your provided credentials could not be verified.')
        <a href="{{route('forget.password')}}" class="bg-blue-500 mb-4 h-8 relative top-1 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
            Forgot Password 😒
        </a>
    @endif
@enderror
