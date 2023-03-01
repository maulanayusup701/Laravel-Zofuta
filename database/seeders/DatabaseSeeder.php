<?php

namespace Database\Seeders;

use App\Models\Gor;
use App\Models\Role;
use App\Models\User;
use App\Models\Field;
use App\Models\Payment;
use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'username' => 'developer',
            'fullname' => 'Developer Zofuta',
            'password' => Hash::make('developer'),
            'email' => 'dev@gmail.com',
            'notelp' => '083808380838',
            'alamat' => 'Purwakarta',
            'role_id' => '1'
        ]);
        User::factory()->create([
            'username' => 'admin',
            'fullname' => 'Admin Lapangan',
            'password' => Hash::make('admin'),
            'email' => 'admin@gmail.com',
            'notelp' => '083808380838',
            'alamat' => 'Purwakarta',
            'role_id' => '2'
        ]);
        User::factory()->create([
            'username' => 'user',
            'fullname' => 'User Lapangan',
            'password' => Hash::make('user'),
            'email' => 'user@gmail.com',
            'notelp' => '083808380838',
            'alamat' => 'Purwakarta',
            'role_id' => '3'
        ]);

        //table Roles
        Role::factory()->create([
            'role' => 'Developer',
            'slug-role' => 'depeloper'
        ]);
        Role::factory()->create([
            'role' => 'Admin',
            'slug-role' => 'admin'
        ]);
        Role::factory()->create([
            'role' => 'User',
            'slug-role' => 'user'
        ]);

        //table Gor
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
            'slug_gor' => 'gulden-futsal',
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

        //table field
        Field::factory()->create([
            'id_gor' => '1',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '1',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '2',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '2',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '3',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '3',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '4',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '4',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '5',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '5',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '6',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '6',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '7',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '7',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '8',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '8',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '9',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '9',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '10',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '10',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '11',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '11',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '12',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '12',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '13',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '13',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '14',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '14',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '15',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '15',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '16',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '16',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
        Field::factory()->create([
            'id_gor' => '17',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        //table field
        Field::factory()->create([
            'id_gor' => '17',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Lapang Karet',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);

        //table Schedule
        Schedule::factory()->create([
            'id_lapangan' => '1',
            'id_gor' => '1',
            'status' => 'Available',
            'waktu' => '06.00 - 07.00',
            'tanggal' => '2022-11-23'
        ]);

        //table Payment
        payment::factory()->create([
            'id_gor' => '1',
            'id_lapangan' => '1',
            'id_user' => '1',
            'jam_mulai' => '06.00',
            'jam_selesai' => '07.00',
            'tanggal' => '2022-11-23',
            'durasi_sewa' => '1 jam',
            'foto_struk' => 'struk.png',
            'status' => 'booked',
            'waktu' => '2022-11-23',
            'subtotal' => '100000'
        ]);
    }
}
