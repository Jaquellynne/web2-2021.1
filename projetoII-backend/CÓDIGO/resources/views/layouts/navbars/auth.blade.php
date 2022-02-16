<div class="sidebar" data-color="white" data-active-color="carsystem">
    <div class="logo">
        <a class="simple-text logo-mini">
            <div class="logo-image-small">
                @php
                    $avatar = '';
                    if (auth()->user()->foto) {
                        $avatar = url("../storage/app/".auth()->user()->foto);
                    } else {
                        $avatar = asset('paper').'/img/default-avatar.png';
                    }
                    
                @endphp
                <img src="{{ $avatar }}" class="rounded-circle"  title="foto de {{auth()->user()->name}}" alt="foto de {{auth()->user()->name}}">             
            </div>
        </a>
        <span class="simple-text logo-normal">
            {{ auth()->user()->name }}
        </span>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Home') }}</p>
                </a>
            </li>
            
            <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                <a href="{{ route('profile.edit') }}">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <p>{{ __('Minha Conta') }}</p>
                </a>
            </li>    
                    

            <li class="{{ $elementActive == 'produto' ? 'active' : '' }}">
                <a href="{{ route('produto.index') }}">
                    <i class="fa fa-car"></i>
                    <p>{{ __('Carro') }}</p>
                </a>
            </li>

            <li class="{{ $elementActive == 'categoria' ? 'active' : '' }}">
                <a href="{{ route('categoria.index') }}">
                    <i class="fa fa-list-alt"></i>
                    <p>{{ __('Categoria') }}</p>
                </a>
            </li>

            <li class="{{ $elementActive == 'fornecedor' ? 'active' : '' }}">
                <a href="{{ route('fornecedor.index') }}">
                    <i class="fa fa-handshake-o"></i>
                    <p>{{ __('Fornecedor') }}</p>
                </a>
            </li>

            <li class="{{ $elementActive == 'cliente' ? 'active' : '' }}">
                <a href="{{ route('cliente.index') }}">
                    <i class="fa fa-users"></i>
                    <p>{{ __('cliente') }}</p>
                </a>
            </li>

            <li class="{{ $elementActive == 'funcionario' ? 'active' : '' }}">
                <a href="{{ route('funcionario.index') }}">
                    <i class="fa fa-user-circle-o"></i>
                    <p>{{ __('Funcionario') }}</p>
                </a>
            </li>

            <li class="{{ $elementActive == 'formapagamento' ? 'active' : '' }}">
                <a href="{{ route('formapagamento.index') }}">
                    <i class="fa fa-money"></i>
                    <p>{{ __('Forma Pagamento') }}</p>
                </a>
            </li>

            <li class="{{ $elementActive == 'venda' ? 'active' : '' }}">
                <a href="{{ route('venda.index') }}">
                    <i class="fa fa-shopping-cart"></i>
                    <p>{{ __('Venda') }}</p>
                </a>
            </li>


            <li class="{{ $elementActive == 'compra' ? 'active' : '' }}">
                <a href="{{ route('compra.index') }}">
                    <i class="fa fa-truck"></i>
                    <p>{{ __('Compra') }}</p>
                </a>
            </li>
            
           
        </ul>
    </div>
</div>
