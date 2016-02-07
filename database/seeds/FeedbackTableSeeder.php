<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Bharath\Feedback;

class FeedbackTableSeeder extends Seeder {

	public function run(){
		
		Feedback::create(
			[
				'usuario' => 'Jonh Doe',
				'content' => 'Excelentes tutoriales espero que sigas avanzando.'
			]
		);

		Feedback::create(
			[
				'usuario' => 'Juan Peréz',
				'content' => 'Bro tus tutoriales son un asco.'
			]
		);
	}

}