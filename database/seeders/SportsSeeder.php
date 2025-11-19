<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sport::insert([
            [
                'name' => 'Futebol',
                'description' => 'No futebol, duas equipes de 11 jogadores tentam marcar gols, usando os pés, cabeça ou outras partes do corpo, exceto as mãos. O jogo ocorre em um campo retangular com um gol em cada extremidade.',
                'image' => 'futebol.jpg',
            ],
            [
                'name' => 'Basquete',
                'description' => 'O basquete é jogado entre duas equipes de cinco jogadores. O objetivo é marcar pontos lançando a bola em um cesto elevado, enquanto se defende a cesta própria. O jogo exige habilidade no manejo da bola, passe, arremesso e coordenação em equipe.',
                'image' => 'basquete.webp',
            ],
            [
                'name' => 'Vôlei',
                'description' => 'O voleibol é um esporte coletivo jogado por duas equipes de seis jogadores, em uma quadra dividida por uma rede. O objetivo é fazer a bola tocar o chão do lado adversário, usando no máximo três toques por time. Vence quem fizer mais pontos.',
                'image' => 'volei.jpeg',
            ],
            [
                'name' => 'Beach Tennis',
                'description' => 'Beach Tennis é uma mistura de tênis e vôlei de praia. Jogadores usam  raquetes para trocar bolas sobre uma rede, sempre em quadra de areia, com partidas rápidas e dinâmicas.',
                'image' => 'beach-tennis.jpeg',
            ],
            [
                'name' => 'Futevôlei',
                'description' => 'Futevôlei combina futebol e vôlei, sendo jogado geralmente na areia. Os jogadores usam os pés, cabeça, ombros e peito para passar a bola por cima da rede, sem usar as mãos.',
                'image' => 'futevolei.jpg',
            ],
            [
                'name' => 'Tênis',
                'description' => 'Tênis é um esporte de raquete disputado individualmente ou em duplas. Os jogadores trocam bolas por cima de uma rede, com o objetivo de marcar pontos dificultando o retorno do adversário.',
                'image' => 'tenis.jpg',
            ],
            [
                'name' => 'Ciclismo',
                'description' => 'Ciclismo é a prática de pedalar, seja em competições, passeios ou treinos. Pode ocorrer em estradas, trilhas ou pistas, exigindo resistência e técnica.',
                'image' => 'ciclismo.jpeg',
            ],
            [
                'name' => 'Corrida',
                'description' => 'Corrida é um esporte individual baseado na velocidade e resistência. Pode variar de pequenas distâncias a maratonas, promovendo saúde e superação pessoal.',
                'image' => 'corrida.jpeg',
            ],
            [
                'name' => 'Skate',
                'description' => 'Skate envolve o uso de um skate para manobras e locomoção. Pode ser praticado em rampas, pistas ou nas ruas, unindo equilíbrio, criatividade e técnica.',
                'image' => 'skate.jpeg',
            ],
            [
                'name' => 'Boxe',
                'description' => 'Boxe é uma luta entre dois oponentes que usam luvas e buscam acertar golpes dentro das regras. O esporte exige força, estratégia, resistência e preparo físico.',
                'image' => 'boxe.webp',
            ],
            [
                'name' => 'Jiu-Jitsu',
                'description' => 'Jiu-jitsu é uma arte marcial focada em alavancas, imobilizações e finalizações. É praticado tanto como defesa pessoal quanto em competições esportivas.',
                'image' => 'jiu-jitsu.webp',
            ],
            [
                'name' => 'Parkour',
                'description' => 'Parkour é a arte de se locomover superando obstáculos com o corpo, usando saltos, escaladas e corrida. É urbano, dinâmico e exige agilidade e controle.',
                'image' => 'parkour.jpeg',
            ],
            [
                'name' => 'Sinuca',
                'description' => 'Sinuca ou bilhar é um jogo de mesa que envolve bolas e tacos. O objetivo é encaçapar bolas em ordem e com precisão, sendo muito associado à concentração e estratégia.',
                'image' => 'sinuca.jpeg',
            ],
            [
                'name' => 'Tênis de Mesa',
                'description' => 'Tênis de mesa, ou pingue-pongue, é uma versão de tênis jogada em uma mesa com raquetes pequenas. É um esporte rápido, que exige reflexos e coordenação.',
                'image' => 'tenis-de-mesa.webp',
            ],
            [
                'name' => 'Handeball',
                'description' => 'Handebol é um esporte coletivo onde os jogadores usam as mãos para passar a bola e marcar gols. É rápido e envolve táticas ofensivas e defensivas.',
                'image' => 'handeball.jpeg',
            ],
            [
                'name' => 'Calistenia',
                'description' => 'Calistenia é um método de treino com o peso do próprio corpo. Inclui exercícios como barras, flexões e abdominais, buscando força, mobilidade e controle corporal.',
                'image' => 'calistenia.jpeg',
            ],
        ]);
    }
}
