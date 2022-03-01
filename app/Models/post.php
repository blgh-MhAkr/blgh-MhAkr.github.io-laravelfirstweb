<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

//class post //extends Model
//{
    //use HasFactory;
//}

class post 
{
    //use HasFactory;
    private static $blog_posts = [
        [
            'title' => 'anggota 1',
            'slug' => 'anggota-1',
            'penulis' => 'Muh. Arfah Awaluddin T.',
            'nim' => '1929042012',
            'cerita' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Dolores nobis molestiae nihil numquam ratione debitis labore 
            vel esse dignissimos distinctio cupiditate veritatis ea, 
            omnis beatae iusto porro voluptates vitae doloremque reprehenderit consequuntur, 
            animi neque sunt! Doloremque modi optio consequatur quae.
            '
        ],
        [
            'title' => 'anggota 2',
            'slug' => 'anggota-2',
            'penulis' => 'Muhammad Al Isra',
            'nim' => '1929042013',
            'cerita' => '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Itaque doloribus quia eveniet atque voluptate modi quod porro ipsa voluptas 
            exercitationem assumenda nemo saepe facere minus ab fugit expedita, minima dicta, 
            dolorum eligendi? Natus sunt alias deleniti doloremque voluptate repudiandae dicta!
            '
        ],
        [
            'title' => 'anggota 3',
            'slug' => 'anggota-3',
            'penulis' => 'Devika Diyanti Haris',
            'nim' => '1929042014',
            'cerita' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum distinctio, 
            labore quidem illo quibusdam officiis perspiciatis earum culpa pariatur maxime suscipit, 
            soluta est ad? Obcaecati doloremque quas aut? Inventore amet et deleniti esse autem ipsum laboriosam, 
            dolores doloribus voluptates temporibus?
            '
        ],
        [
            'title' => 'anggota 4',
            'slug' => 'anggota-4',
            'penulis' => 'Muh. Firmansyah',
            'nim' => '1929042015',
            'cerita' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Fugiat atque aspernatur sit aperiam hic, beatae molestiae neque unde, 
            explicabo corporis saepe voluptatum animi id at tempore iste obcaecati repudiandae quasi? 
            Fugiat eos aliquam harum repellat alias, amet eligendi eveniet dolor?
            '
        ],
        [
            'title' => 'anggota 5',
            'slug' => 'anggota-5',
            'penulis' => 'Andi Aulia Ahmad Althaf P.',
            'nim' => '1929042016',
            'cerita' => '
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eaque explicabo quod sint ipsam praesentium nam. Modi nobis expedita voluptatum? 
            Similique fugiat eligendi, 
            ratione ut provident animi quae repudiandae qui rerum sequi mollitia tempora eius, 
            reiciendis ipsam, doloribus nulla ex ab!
            '
        ],
        [
            'title' => 'anggota 6',
            'slug' => 'anggota-6',
            'penulis' => 'Muhaiminul Akram',
            'nim' => '1929042017',
            'cerita' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Quos laudantium ducimus veniam dolor dicta, harum facere eum tenetur, 
            atque non eligendi possimus, eos quis soluta iusto eaque nobis odio ad officia quasi. 
            Ad unde doloribus necessitatibus mollitia. Deserunt, eum fuga.
            '
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $about = static::all();
        return $about -> firstWhere('slug', $slug);
    }
}