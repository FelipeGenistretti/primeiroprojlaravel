<div>
    <h1>Login</h1>
    
    @if($message = session()->get("message"))
        <div>{{$message}}</div>
    @endif

    <div>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div>
                <input type="text" name="email" placeholder="email" value = "{{old('email')}}">
                @error('email')
                    <span>{{$message}}</span>
                @enderror
            </div>
<br>
            <div>
                <input type="password" name="password" placeholder="senha">
                @error('password')
                    <span>{{$message}}</span>
                @enderror
            </div>    
            <button>Logar</button>
        </form>
    </div>
</div>
