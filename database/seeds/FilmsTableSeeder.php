<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            [
                'name' => 'Fight Club',
                'genre' => 'Thriller',
                'year' => '1999',
                'imdb'=> '8.8',
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMmEzNTkxYjQtZTc0MC00YTVjLTg5ZTEtZWMwOWVlYzY0NWIwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
                'trailer'=> 'https://www.youtube.com/embed/BdJKm16Co6M'
            ],
            [
                'name' => 'Interstellar',
                'genre' => 'Sci-Fi',
                'year' => '2014',
                'imdb'=> '8.6',
                'poster' => 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_SX675_AL_.jpg',
                'trailer'=> 'https://www.youtube.com/embed/zSWdZVtXT7E'  
            ],
            [
                'name' => 'Avengers: Infinity War',
                'genre' => 'Sci-Fi',
                'year' => '2018',
                'imdb'=> '8.5',
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
                'trailer'=> 'https://www.youtube.com/embed/6ZfuNTqbHE8'  
            ],
            [
                'name' => 'The Martian',
                'genre' => 'Adventure',
                'year' => '2015',
                'imdb'=> '8.0',
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMTc2MTQ3MDA1Nl5BMl5BanBnXkFtZTgwODA3OTI4NjE@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
                'trailer'=> 'https://www.youtube.com/embed/ej3ioOneTy8'  
            ],
            [
                'name' => 'Inception',
                'genre' => 'Adventure',
                'year' => '2010',
                'imdb'=> '8.8',
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
                'trailer'=> 'https://www.youtube.com/embed/Qwe6qXFTdgc'  
            ]
            
        ]);
    }
}
