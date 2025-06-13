<div>
    <h1>register</h1>
    
    @if($message = session()->get("message"))
        <div>{{$message}}</div>
    @endif

    <div>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Name" value = "{{old('name')}}">
                @error('name')
                    <span>{{$message}}</span>
                @enderror
            </div>

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
            <div>
                <input type="text" name="email_confirmation" placeholder="Email confirmation" value = "{{old('email')}}"/>
            </div>
            <button>Registrar</button>
        </form>
    </div>
</div>
