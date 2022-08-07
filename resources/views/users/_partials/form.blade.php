@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2" >

<input type="email" name="email" placeholder="Email:" value="{{ $user->email ?? old('email')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">

<input type="password" name="password" placeholder="Password:">

<button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Enviar</button>
