<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class Produtos extends Seeder
{
    public function run()
    {
        $desc = ['Notebook', 'Tablet', 'Mouse'];
        $valor = [1000, 3000, 25];
        for($x = 0; $x < 3; $x++){
            $data = [
                        'descrição' => $desc[$x],
                        'valor' =>   $valor[$x],
                    ];
        
        

        $this->db->table('produtos')->insert($data);
        }
    }
}