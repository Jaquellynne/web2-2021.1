<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class Cliente extends Models {

        use MasFactory;
        protected $table = "clientes";

        protected $fillable = ['nome', 'endereco', 'debito'];
    }
?>