<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Infografisgempa;
use App\Models\Infografispetir;
use App\Models\InfografisTTM;
use App\Models\PegawaiCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Pegawai::create([
            'name' => 'Rasmid, M.Si',
            'role' => 'Kepala Stasiun Geofisika Balikpapan',
            'pegawaicategory_id' => 1
        ]);
        Pegawai::create([
            'name' => 'Ayun Lestari, S.E',
            'role' => 'Staf Admin',
            'pegawaicategory_id' => 1
        ]);
        Pegawai::create([
            'name' => 'Abdul Arif, S.Tr.Inst',
            'role' => 'Teknisi',
            'pegawaicategory_id' => 1
        ]);
        Pegawai::create([
            'name' => 'Vida Julia Widianty, S.Tr.Geof',
            'role' => 'Observer',
            'pegawaicategory_id' => 1
        ]);
        Pegawai::create([
            'name' => 'Nurhalifah',
            'role' => 'PPNPN',
            'pegawaicategory_id' => 2
        ]);
        Pegawai::create([
            'name' => 'Febri',
            'role' => 'PPNPN',
            'pegawaicategory_id' => 2
        ]);

        PegawaiCategory::create([
            'name' => 'Pegawai Negeri Sipil',
            'slug' => 'pegawai-negeri-sipil'
        ]);

        PegawaiCategory::create([
            'name' => 'Pegawai Pemerintah Non Pegawai Negeri ',
            'slug' => 'pegawai-pemerintah-non-pegawai-negeri'
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Abdul Arif',
        //     'username' => 'abdul-arif',
        //     'email' => 'ajo@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Handrian Dama',
        //     'username' => 'handrian-dama',
        //     'email' => 'handrian@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        News::factory(200)->create();
        // News::create([
        //     'title'=>'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum rem fuga, et necessitatibus esse iure quis ex. Vero atque reiciendis ut fugit. Nesciunt nemo sed cupiditate? Repudiandae exercitationem vitae animi quasi earum aspernatur praesentium vel, provident, non, delectus odit tenetur aperiam dolore id in commodi inventore velit. Impedit deleniti cum tempora unde ut eligendi ullam, similique fuga vel, quo adipisci itaque minima temporibus autem officiis est laboriosam recusandae ipsam consequatur obcaecati, in natus facilis? Perspiciatis maxime deleniti veritatis aliquam quas ut animi enim molestias velit consequatur soluta illo impedit suscipit eum, tempora exercitationem nesciunt unde quaerat voluptatibus quo modi.',
        //     'user_id' => '1'
        // ]);
        // News::create([
        //     'title'=>'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum sit amet consectetur adipisicing elit. Accusamus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum rem fuga, et necessitatibus esse iure quis ex. Vero atque reiciendis ut fugit. Nesciunt nemo sed cupiditate? Repudiandae exercitationem vitae animi quasi earum aspernatur praesentium vel, provident, non, delectus odit tenetur aperiam dolore id in commodi inventore velit. Impedit deleniti cum tempora unde ut eligendi ullam, similique fuga vel, quo adipisci itaque minima temporibus autem officiis est laboriosam recusandae ipsam consequatur obcaecati, in natus facilis? Perspiciatis maxime deleniti veritatis aliquam quas ut animi enim molestias velit consequatur soluta illo impedit suscipit eum, tempora exercitationem nesciunt unde quaerat voluptatibus quo modi.',
        //     'user_id' => '2'
        // ]);

        Infografisgempa::factory(50)->create();
        // Infografisgempa::create([
        //     'title' => 'Infografis gempa pertama ',
        //     'slug' => 'infografis-gempa-pertama',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, error consequatur blanditiis fuga adipisci qui quasi eum vitae incidunt sapiente.'
        // ]);

        Infografispetir::create([
            'title' => 'Infografis petor pertama ',
            'slug' => 'infografis-petir-pertama',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, error consequatur blanditiis fuga adipisci qui quasi eum vitae incidunt sapiente.'
        ]);
        Infografispetir::factory(50)->create();

        InfografisTTM::create([
            'title' => 'Infografis TTM Pertama',
            'slug' => 'infografis-ttm-pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, placeat eum obcaecati aut vel tempore fuga asperiores sunt ex id.'
        ]);
        InfografisTTM::factory(50)->create();
    }
}
