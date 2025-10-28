<nav class="flex p-4 items-center justify-between bg-yellow-400">
  <div class="font-bold text-xl text-white">
    <span>SiagaRT</span>
  </div>
  <li class="flex">
    {{-- <div  class="text-white text-md bg-green-700 p-2 w-20 text-center font-bold rounded-lg
  transition duration-200 ease-in-out hover:scale-105 hover:bg-green-950 hover:text-yellow-300 mr-5">
    <a href="{{route('login')}}" class="text-white no-underline!">
      Login
    </a>
  </div> --}}
  <form action="{{route('logout')}}" method="POST" >
    @csrf
     <div class="text-green-700 text-md border-2 border-green-700 p-2 w-20 text-center font-bold rounded-lg
  transition duration-200 ease-in-out hover:scale-105 hover:bg-red-500 hover:text-yellow-200">
   <button>
      logout
   </button>
  </li>
  </div>
  </form>
 
</nav>