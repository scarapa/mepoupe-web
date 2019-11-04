<h3>Clientes</h3>
<a href="{{ route('clientes.create') }}"> NOVO CLIENTE </a>
<ol> 
    @foreach ($clientes AS $item)
        <li>
            <a href="{{ route('clientes.edit',$item['id']) }}">{{ $item['nome'] }} </a>
        </li>
    @endforeach

</ol>