<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Beatriz Monteiro',
                'email' => 'beatrizkmonteiro014@gmail.com',
                'password' => bcrypt('Beatriz1234'),
                'username' => 'beatriz.monteiro',
                'document' => '769.764.188-73',
                'date_of_birth' => '2007-01-14',
                'city' => 'jaú',
                'gender' => 'female',
                'avatar' => 'beaamonteiro.jpg',
                'bio' => 'Tenho 18 anos, estudante de Desenvolvimento de Software Multiplataforma (DSM). No meu tempo livre, adoro ouvir música e tocar ukulele. Também gosto de filmes de terror, ação e estou sempre buscando aprender mais, tanto na área de tecnologia quanto no mundo ao meu redor.',
                'friends_count' => 0,
            ],
            [
                'name' => 'Euller Lourenço',
                'email' => 'euller.lourenco.silva@gmail.com',
                'password' => bcrypt('Euller1234'),
                'username' => 'eullerlourenco',
                'document' => '008.862.123-59',
                'date_of_birth' => '2003-07-01',
                'city' => 'jaú',
                'gender' => 'male',
                'avatar' => 'eullerls.jpeg',
                'bio' => 'Tenho 21 anos e sou estudante do curso de DSM na Fatec Jahu, atuo também como Desenvolvedor Full Stack na Labi9. Gosto de aprender novas tecnologias e sempre busco aprimorar minhas habilidades. Além disso, gosto muito de praticar Acadêmia, ouvir música, ver filmes e aproveitar o tempo com amigos e família.',
                'friends_count' => 0,
            ],
            [
                'name' => 'Gabriel Alexandre',
                'email' => 'gabrielalexandreribeiro750@gmail.com',
                'password' => bcrypt('Gabriel1234'),
                'username' => 'gabriel-ribeiro02',
                'document' => '287.765.396-01',
                'date_of_birth' => '2007-02-26',
                'city' => 'bariri',
                'gender' => 'male',
                'avatar' => 'gabribeiro.jpg',
                'bio' => 'Tenho 18 anos, sou estudante de Desenvolvimento de Software Multiplataforma na Fatec Jahu, sendo meu principal hobby a academia, onde busco sempre melhorar minha saúde e condicionamento físico.',
                'friends_count' => 0,
            ],
            [
                'name' => 'João Francisco',
                'email' => 'joaofabbrifonseca@gmail.com',
                'password' => bcrypt('Joao1234'),
                'username' => 'joao.fonseca',
                'document' => '238.530.474-08',
                'date_of_birth' => '2007-05-03',
                'city' => 'jaú',
                'gender' => 'male',
                'avatar' => 'joaofran.jpg',
                'bio' => 'Tenho 18 anos, sou estudante de DSM na Fatec Jahu e também atuo como gestor de tráfego pago, ajudando negócios a crescer por meio da mídia digital. Tenho interesse por tecnologia, marketing e inovação, e gosto de aprender sempre na prática. Fora da área técnica, gosto muito de jogar vôlei, ir para a academia, ver séries e passar tempo com a família e os amigos.',
                'friends_count' => 0,
            ],
            [
                'name' => 'Lucas Bardeli',
                'email' => 'lucasbbsjau@gmail.com',
                'password' => bcrypt('Lucas1234'),
                'username' => 'lucas-bardeli',
                'document' => '746.170.912-70',
                'date_of_birth' => '2006-01-26',
                'city' => 'jaú',
                'gender' => 'male',
                'avatar' => 'lucasbardeli.jpg',
                'bio' => 'Tenho 19 anos. Atualmente estou cursando Desenvolvimento de Software Multiplataforma na Fatec de Jahu e trabalhando como Estagiário de T.I na Integrale Gestão Empresarial. Meu esporte favorito é vôlei, consequentemente sendo meu hobby favorito, além de assistir séries e filmes.',
                'friends_count' => 0,
            ],
            [
                'name' => 'Teste',
                'email' => 'teste@gmail.com',
                'password' => bcrypt('Teste1234'),
                'username' => 'teste_0123',
                'document' => '789.923.930-32',
                'date_of_birth' => '2009-08-13',
                'city' => 'barra bonita',
                'gender' => 'other',
                'avatar' => null,
                'bio' => null,
                'friends_count' => 0,
            ],
        ]);
    }
}
