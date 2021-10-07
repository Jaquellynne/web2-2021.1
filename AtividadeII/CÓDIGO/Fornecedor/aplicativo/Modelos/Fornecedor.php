<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class Fornecedor extends Models {

        use MasFactory;
        protected $table = "fornecedor";

        protected $fillable = ['nome', 'CNPJ', 'email'];
    }
?>