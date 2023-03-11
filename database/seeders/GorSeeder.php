<?php

namespace Database\Seeders;

use App\Models\Gor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GorSeeder extends Seeder
{
    public function run(): void
    {
        Gor::factory()->create([
            'nama_gor' => 'King Futsal',
            'slug_gor' => 'king-futsal',
            'alamat_gor' => 'Jl. Taman Pahlawan No.142, RT.16/RW.7, Purwamekar, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41119',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'kingfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Golden Futsal',
            'slug_gor' => 'golden-futsal',
            'alamat_gor' => 'Jl. Ipik Gandamanah No.9, Munjuljaya, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41117',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'goldenfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Blessing Futsal',
            'slug_gor' => 'blessing-futsal',
            'alamat_gor' => 'Jl. Kolonel Rahmat, Tegalmunjul, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41116',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'blessingfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Galaxy Futsal',
            'slug_gor' => 'galaxy-futsal',
            'alamat_gor' => 'Ciseureuh, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41118',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'galaxtfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Ciwareng Futsal',
            'slug_gor' => 'ciwareng-futsal',
            'alamat_gor' => 'Jl. Taman Pahlawan, Purwamekar, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41119',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'ciwareng-futsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Imron Futsal',
            'slug_gor' => 'imron-futsal',
            'alamat_gor' => 'Jalan Raya, Campaka, Purwakarta Regency, West Java 41181',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'imronfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Master Futsal',
            'slug_gor' => 'master-futsal',
            'alamat_gor' => 'Jl. Kapten Halim Pasar Kihiang, Lebakanyar, Kec. Pasawahan, Kabupaten Purwakarta, Jawa Barat 41172',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'masterfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Bj Futsal',
            'slug_gor' => 'bj-futsal',
            'alamat_gor' => 'Jl. Industri, Hegarmanah, Kec. Babakancikao, Kabupaten Purwakarta, Jawa Barat 41151',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'bjfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Sessar Futsal',
            'slug_gor' => 'sessar-futsal',
            'alamat_gor' => 'Jl. Jend. Ahmad Yani Blok Sukarata No.14, RT.14/RW.6, Cipaisan, Purwakarta, Purwakarta Regency, West Java 41113',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'sessarfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Gratia Futsal',
            'slug_gor' => 'gratia-fitsal',
            'alamat_gor' => 'Unnamed Road, Ciseureuh, Purwakarta, Purwakarta Regency, West Java 41118',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'gratiafutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'FAME Futsal',
            'slug_gor' => 'fame-futsal',
            'alamat_gor' => 'Kp Tegal Kalapa, RT.012/RW.004, Citeko, Kec. Plered, Kabupaten Purwakarta, Jawa Barat 41162',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'famefutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'IDEAL Futsal',
            'slug_gor' => 'Idea Futsal',
            'alamat_gor' => 'Sindangsari, Kec. Plered, Kabupaten Purwakarta, Jawa Barat 41162',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'idealfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Wanayasa Futsal',
            'slug_gor' => 'wanayasa-futsal',
            'alamat_gor' => 'Desa Cipulus, Nagrog, Kec. Wanayasa, Kabupaten Purwakarta, Jawa Barat 41174',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'wanayasafutsalcenter.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Wf. Barokah Futsal',
            'slug_gor' => 'wf-barokah-futsal',
            'alamat_gor' => 'Ciparungsari, Kec. Cibatu, Kabupaten Purwakarta, Jawa Barat 41181',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'wfbarikahfutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Nugraha Futsal',
            'slug_gor' => 'nugraha-futsal',
            'alamat_gor' => 'Ciparungsari, Kec. Cibatu, Kabupaten Purwakarta, Jawa Barat 41181',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'nugrahafutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Radja Futsal',
            'slug_gor' => 'radja-futsal',
            'alamat_gor' => 'Palinggihan, Kec. Plered, Kabupaten Purwakarta, Jawa Barat 41162',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'nugrahafutsal.png',
        ]);
        Gor::factory()->create([
            'nama_gor' => 'Green Garden Sport Center',
            'slug_gor' => 'green-garden-sport-center',
            'alamat_gor' => 'Jl. Raya Pantura No.61a, Cikopo, Kec. Bungursari, Kabupaten Purwakarta, Jawa Barat 41181',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'greengardensportcenter.png',
        ]);
    }
}
