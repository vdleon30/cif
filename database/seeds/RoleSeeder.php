<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['roles' => [

			// Admin
			['name' 		=> 'admin',
			 'display_name' => 'Administrador' ],

            // Support
            ['name'         => 'support',
             'display_name' => 'Support' ],

			// Docente
			['name' 		=> 'teacher',
			 'display_name' => 'Docente' ],

			// Asistente
			['name' 		=> 'assistant',
			 'display_name' => 'Asistente' ],

			// Colaborador
			['name' 		=> 'collaborator',
			 'display_name' => 'Colaborador' ],
		]];

		// Insertar datos en la BD
	
        foreach($data['roles'] as $roles) 
        {
         	// Inserta los roles en la BD
         	DB::table('roles')->insert(['name' => $roles['name'], 'display_name' => $roles['display_name']]);
        }
    }
}
