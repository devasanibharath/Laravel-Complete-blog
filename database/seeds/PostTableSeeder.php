<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Bharath\Post;

class PostTableSeeder extends Seeder {

	public function run(){
		
		Post::create(
			[
				'title' => 'Bienvenidos a ZBlog',
				'metadescription' => 'Zoisoft is a professional web design and development company in Hyderabad. We offers responsive static, dynamic, cms, e-commerce web development, SEO services and mobile app development.',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptas, beatae minus ea assumenda officiis doloribus esse sunt in cupiditate error dignissimos eos, autem sapiente odio nesciunt ab ipsa amet eaque praesentium ipsum quia. Magnam aut recusandae molestias dignissimos, libero nostrum sunt accusantium voluptas nemo porro unde repellendus repudiandae pariatur dicta quidem doloribus assumenda quam vel qui quis. Ipsum natus excepturi necessitatibus perferendis optio dolores reiciendis similique, facere in ab cupiditate possimus, iste ea quia rem, consequuntur. Itaque asperiores nobis mollitia inventore quasi sapiente odit molestias! Accusantium obcaecati laudantium cumque eveniet? Odio, reprehenderit? Repudiandae ipsum consectetur dolorum velit molestias, error non deleniti officiis nobis, rerum rem dicta quisquam eveniet, dolore provident pariatur est. Voluptatum rerum atque dicta non dignissimos modi facilis quidem optio odit necessitatibus, soluta, ex aperiam, earum. Ullam tempora vero iure, reiciendis fugit dolor molestias ad culpa quibusdam, nisi nihil consequuntur laudantium possimus praesentium suscipit! Eos distinctio dolor deleniti officia, adipisci ratione ipsam nihil libero necessitatibus, tenetur animi delectus accusamus dolore qui dignissimos pariatur labore commodi corrupti ducimus quibusdam laborum placeat? A, dolorum vero. Modi repudiandae nobis facere adipisci, sapiente doloribus voluptate deserunt, architecto assumenda ab praesentium totam quisquam! Facilis doloribus dolor, eum quas minima neque totam fugiat, veniam cum et quo reprehenderit! Iure aut magnam illo ratione a expedita neque dolores autem, sapiente nam molestias magni aspernatur dolor cupiditate, consequatur! Consequatur esse sed doloribus laudantium impedit nulla officiis harum reiciendis fugiat, eius! Obcaecati enim vel cum architecto laborum delectus minus non nulla quod temporibus, saepe, ullam optio at culpa! Esse, reiciendis, nostrum! Repellendus, natus. Ipsam ut rerum, facilis nihil commodi, quod magnam ratione architecto ad, laborum quia nemo harum impedit est delectus! Quo voluptatibus sint sapiente provident, illo, a debitis voluptatum incidunt deserunt laborum velit molestias pariatur, illum veritatis, ex perspiciatis dolorum asperiores minus ab magni maxime?',
				'tags' => 'ZBlog,Welcome,PHP,New,Site',
				'photo' => 'https://download.unsplash.com/photo-1421757295538-9c80958e75b0'
			]
		);
		
		Post::create(
			[
				'title' => 'Laravel es genial!',
				'metadescription' => 'Zoisoft is a professional web design and development company in Hyderabad. We offers responsive static, dynamic, cms, e-commerce web development, SEO services and mobile app development.',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptas, beatae minus ea assumenda officiis doloribus esse sunt in cupiditate error dignissimos eos, autem sapiente odio nesciunt ab ipsa amet eaque praesentium ipsum quia. Magnam aut recusandae molestias dignissimos, libero nostrum sunt accusantium voluptas nemo porro unde repellendus repudiandae pariatur dicta quidem doloribus assumenda quam vel qui quis. Ipsum natus excepturi necessitatibus perferendis optio dolores reiciendis similique, facere in ab cupiditate possimus, iste ea quia rem, consequuntur. Itaque asperiores nobis mollitia inventore quasi sapiente odit molestias! Accusantium obcaecati laudantium cumque eveniet? Odio, reprehenderit? Repudiandae ipsum consectetur dolorum velit molestias, error non deleniti officiis nobis, rerum rem dicta quisquam eveniet, dolore provident pariatur est. Voluptatum rerum atque dicta non dignissimos modi facilis quidem optio odit necessitatibus, soluta, ex aperiam, earum. Ullam tempora vero iure, reiciendis fugit dolor molestias ad culpa quibusdam, nisi nihil consequuntur laudantium possimus praesentium suscipit! Eos distinctio dolor deleniti officia, adipisci ratione ipsam nihil libero necessitatibus, tenetur animi delectus accusamus dolore qui dignissimos pariatur labore commodi corrupti ducimus quibusdam laborum placeat? A, dolorum vero. Modi repudiandae nobis facere adipisci, sapiente doloribus voluptate deserunt, architecto assumenda ab praesentium totam quisquam! Facilis doloribus dolor, eum quas minima neque totam fugiat, veniam cum et quo reprehenderit! Iure aut magnam illo ratione a expedita neque dolores autem, sapiente nam molestias magni aspernatur dolor cupiditate, consequatur! Consequatur esse sed doloribus laudantium impedit nulla officiis harum reiciendis fugiat, eius! Obcaecati enim vel cum architecto laborum delectus minus non nulla quod temporibus, saepe, ullam optio at culpa! Esse, reiciendis, nostrum! Repellendus, natus. Ipsam ut rerum, facilis nihil commodi, quod magnam ratione architecto ad, laborum quia nemo harum impedit est delectus! Quo voluptatibus sint sapiente provident, illo, a debitis voluptatum incidunt deserunt laborum velit molestias pariatur, illum veritatis, ex perspiciatis dolorum asperiores minus ab magni maxime?',
				'tags' => 'Laravel,PHP,Blog,Post',
				'photo' => 'https://download.unsplash.com/photo-1416339442236-8ceb164046f8'
			]
		);
		
		Post::create(
			[
				'title' => 'Nueva documentación de Laravel',
				'metadescription' => 'Zoisoft is a professional web design and development company in Hyderabad. We offers responsive static, dynamic, cms, e-commerce web development, SEO services and mobile app development.',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptas, beatae minus ea assumenda officiis doloribus esse sunt in cupiditate error dignissimos eos, autem sapiente odio nesciunt ab ipsa amet eaque praesentium ipsum quia. Magnam aut recusandae molestias dignissimos, libero nostrum sunt accusantium voluptas nemo porro unde repellendus repudiandae pariatur dicta quidem doloribus assumenda quam vel qui quis. Ipsum natus excepturi necessitatibus perferendis optio dolores reiciendis similique, facere in ab cupiditate possimus, iste ea quia rem, consequuntur. Itaque asperiores nobis mollitia inventore quasi sapiente odit molestias! Accusantium obcaecati laudantium cumque eveniet? Odio, reprehenderit? Repudiandae ipsum consectetur dolorum velit molestias, error non deleniti officiis nobis, rerum rem dicta quisquam eveniet, dolore provident pariatur est. Voluptatum rerum atque dicta non dignissimos modi facilis quidem optio odit necessitatibus, soluta, ex aperiam, earum. Ullam tempora vero iure, reiciendis fugit dolor molestias ad culpa quibusdam, nisi nihil consequuntur laudantium possimus praesentium suscipit! Eos distinctio dolor deleniti officia, adipisci ratione ipsam nihil libero necessitatibus, tenetur animi delectus accusamus dolore qui dignissimos pariatur labore commodi corrupti ducimus quibusdam laborum placeat? A, dolorum vero. Modi repudiandae nobis facere adipisci, sapiente doloribus voluptate deserunt, architecto assumenda ab praesentium totam quisquam! Facilis doloribus dolor, eum quas minima neque totam fugiat, veniam cum et quo reprehenderit! Iure aut magnam illo ratione a expedita neque dolores autem, sapiente nam molestias magni aspernatur dolor cupiditate, consequatur! Consequatur esse sed doloribus laudantium impedit nulla officiis harum reiciendis fugiat, eius! Obcaecati enim vel cum architecto laborum delectus minus non nulla quod temporibus, saepe, ullam optio at culpa! Esse, reiciendis, nostrum! Repellendus, natus. Ipsam ut rerum, facilis nihil commodi, quod magnam ratione architecto ad, laborum quia nemo harum impedit est delectus! Quo voluptatibus sint sapiente provident, illo, a debitis voluptatum incidunt deserunt laborum velit molestias pariatur, illum veritatis, ex perspiciatis dolorum asperiores minus ab magni maxime?',
				'tags' => 'ZBlog,Welcome,PHP,New,Site',
				'photo' => 'https://download.unsplash.com/45/QDSMoAMTYaZoXpcwBjsL__DSC0104-1.jpg'
			]
		);
		
		Post::create(
			[
				'title' => 'Una forma genial de programar PHP',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptas, beatae minus ea assumenda officiis doloribus esse sunt in cupiditate error dignissimos eos, autem sapiente odio nesciunt ab ipsa amet eaque praesentium ipsum quia. Magnam aut recusandae molestias dignissimos, libero nostrum sunt accusantium voluptas nemo porro unde repellendus repudiandae pariatur dicta quidem doloribus assumenda quam vel qui quis. Ipsum natus excepturi necessitatibus perferendis optio dolores reiciendis similique, facere in ab cupiditate possimus, iste ea quia rem, consequuntur. Itaque asperiores nobis mollitia inventore quasi sapiente odit molestias! Accusantium obcaecati laudantium cumque eveniet? Odio, reprehenderit? Repudiandae ipsum consectetur dolorum velit molestias, error non deleniti officiis nobis, rerum rem dicta quisquam eveniet, dolore provident pariatur est. Voluptatum rerum atque dicta non dignissimos modi facilis quidem optio odit necessitatibus, soluta, ex aperiam, earum. Ullam tempora vero iure, reiciendis fugit dolor molestias ad culpa quibusdam, nisi nihil consequuntur laudantium possimus praesentium suscipit! Eos distinctio dolor deleniti officia, adipisci ratione ipsam nihil libero necessitatibus, tenetur animi delectus accusamus dolore qui dignissimos pariatur labore commodi corrupti ducimus quibusdam laborum placeat? A, dolorum vero. Modi repudiandae nobis facere adipisci, sapiente doloribus voluptate deserunt, architecto assumenda ab praesentium totam quisquam! Facilis doloribus dolor, eum quas minima neque totam fugiat, veniam cum et quo reprehenderit! Iure aut magnam illo ratione a expedita neque dolores autem, sapiente nam molestias magni aspernatur dolor cupiditate, consequatur! Consequatur esse sed doloribus laudantium impedit nulla officiis harum reiciendis fugiat, eius! Obcaecati enim vel cum architecto laborum delectus minus non nulla quod temporibus, saepe, ullam optio at culpa! Esse, reiciendis, nostrum! Repellendus, natus. Ipsam ut rerum, facilis nihil commodi, quod magnam ratione architecto ad, laborum quia nemo harum impedit est delectus! Quo voluptatibus sint sapiente provident, illo, a debitis voluptatum incidunt deserunt laborum velit molestias pariatur, illum veritatis, ex perspiciatis dolorum asperiores minus ab magni maxime?',
				'tags' => 'Laravel,PHP,Blog,Post',
				'photo' => 'https://download.unsplash.com/19/desktop.JPG'
			]
		);

		
	}

}