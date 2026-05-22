<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SiteSetting;
use App\Models\Service;
use App\Models\Benefit;
use App\Models\Testimonial;
use App\Models\Step;
use App\Models\Stat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@sedotwc.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('admin123'),
            ]
        );

        // 2. Seed Site Settings
        $settings = [
            'site_title' => [
                'val' => 'Jasa Sedot WC Profesional - Solusi Cepat & Bergaransi 24/7',
                'group' => 'general'
            ],
            'site_description' => [
                'val' => 'Jasa Sedot WC Profesional, Murah, dan Bergaransi. Mengatasi WC mampet, septic tank penuh, dan saluran tersumbat 24 Jam dengan armada modern.',
                'group' => 'general'
            ],
            'hero_badge' => [
                'val' => '#1 Jasa Sanitasi Terpercaya',
                'group' => 'hero'
            ],
            'hero_title' => [
                'val' => 'Solusi Cepat <span>WC Mampet</span> & Septic Tank Penuh!',
                'group' => 'hero'
            ],
            'hero_description' => [
                'val' => 'Layanan profesional, berpengalaman, dan bergaransi resmi. Kami hadir 24 Jam siap mengatasi berbagai masalah sanitasi Anda secara tuntas tanpa repot.',
                'group' => 'hero'
            ],
            'hero_image' => [
                'val' => '/images/hero_sedot_wc.png',
                'group' => 'hero'
            ],
            'floating_badge_1_title' => [
                'val' => 'Armada Canggih',
                'group' => 'hero'
            ],
            'floating_badge_1_value' => [
                'val' => 'Selang 100m+',
                'group' => 'hero'
            ],
            'floating_badge_2_title' => [
                'val' => 'Respon Cepat',
                'group' => 'hero'
            ],
            'floating_badge_2_value' => [
                'val' => '24 Jam Nonstop',
                'group' => 'hero'
            ],
            'contact_whatsapp' => [
                'val' => '628123456789',
                'group' => 'contact'
            ],
            'contact_phone' => [
                'val' => '+62 812-3456-7890',
                'group' => 'contact'
            ],
            'contact_email' => [
                'val' => 'info@sedotwc.com',
                'group' => 'contact'
            ],
            'contact_address' => [
                'val' => 'Jl. Kesehatan Raya No. 12, Area Metropolitan, Indonesia',
                'group' => 'contact'
            ],
            'footer_about' => [
                'val' => 'SedotWC.com adalah penyedia jasa layanan sedot WC, pelancaran saluran mampet, dan pembuatan septic tank baru profesional berlisensi yang beroperasi 24 Jam setiap hari.',
                'group' => 'general'
            ],
        ];

        foreach ($settings as $key => $data) {
            SiteSetting::setVal($key, $data['val'], $data['group']);
        }

        // 3. Seed Stats
        Stat::truncate();
        $stats = [
            ['label' => 'Pekerjaan Selesai', 'value' => '12k+', 'order_index' => 1],
            ['label' => 'Armada Truk Tangki', 'value' => '50+', 'order_index' => 2],
            ['label' => 'Kepuasan Pelanggan', 'value' => '100%', 'order_index' => 3],
            ['label' => 'Tahun Pengalaman', 'value' => '10+', 'order_index' => 4],
        ];
        foreach ($stats as $stat) {
            Stat::create($stat);
        }

        // 4. Seed Services
        Service::truncate();
        $services = [
            [
                'title' => 'Sedot Septic Tank',
                'description' => 'Mengatasi septic tank penuh secara berkala agar lingkungan Anda tetap sehat dan terhindar dari bau tidak sedap.',
                'icon' => 'fas fa-trash-restore',
                'wa_text' => 'Halo Admin Sedot WC, saya ingin layanan Sedot Septic Tank...',
                'order_index' => 1
            ],
            [
                'title' => 'Pelancaran WC Mampet',
                'description' => 'WC tersumbat pembalut, mainan anak, atau kerak? Kami lancarkan kembali tanpa perlu melakukan pembongkaran pipa.',
                'icon' => 'fas fa-fill-drip',
                'wa_text' => 'Halo Admin Sedot WC, saya ingin layanan Pelancaran WC Mampet...',
                'order_index' => 2
            ],
            [
                'title' => 'Saluran Air Mampet',
                'description' => 'Mengatasi genangan air akibat saluran wastafel, floor drain kamar mandi, maupun talang air yang tersumbat lemak & kotoran.',
                'icon' => 'fas fa-shower',
                'wa_text' => 'Halo Admin Sedot WC, saya ingin layanan Saluran Air Mampet...',
                'order_index' => 3
            ],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }

        // 5. Seed Benefits
        Benefit::truncate();
        $benefits = [
            [
                'title' => 'Teknisi Profesional & Ramah',
                'description' => 'Seluruh tim kami adalah pekerja terlatih yang berpengalaman bertahun-tahun di bidang sanitasi.',
                'icon' => 'fas fa-user-tie',
                'order_index' => 1
            ],
            [
                'title' => 'Peralatan Modern & Vacuum Kuat',
                'description' => 'Armada truk tangki dengan teknologi vacuum terbaru bertekanan tinggi untuk hasil penyedotan maksimal.',
                'icon' => 'fas fa-cogs',
                'order_index' => 2
            ],
            [
                'title' => 'Harga Transparan & Terjangkau',
                'description' => 'Sistem tarif jujur sesuai kesepakatan awal tanpa ada biaya siluman atau tambahan tak terduga.',
                'icon' => 'fas fa-tags',
                'order_index' => 3
            ],
        ];
        foreach ($benefits as $benefit) {
            Benefit::create($benefit);
        }

        // 6. Seed Testimonials
        Testimonial::truncate();
        $testimonials = [
            [
                'name' => 'Pak Rahmat, Jakarta',
                'text' => 'Sangat cepat tanggap! Kurang dari 1 jam tim sudah sampai rumah dan WC mampet langsung beres tanpa dibongkar. Harga sangat bersahabat.',
                'stars' => 5,
                'order_index' => 1
            ],
            [
                'name' => 'Ibu Sarah, Tangerang',
                'text' => 'Petugasnya ramah dan kerjanya rapi sekali. Selesai disedot halaman langsung dibersihkan kembali. Rekomendasi sekali buat yang septic tank-nya penuh!',
                'stars' => 5,
                'order_index' => 2
            ],
        ];
        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        // 7. Seed Steps
        Step::truncate();
        $steps = [
            [
                'title' => 'Hubungi Via WhatsApp',
                'description' => 'Klik tombol hubungi kami untuk langsung berkonsultasi mengenai keluhan dan lokasi rumah Anda dengan admin responsif kami.',
                'step_number' => 1,
                'order_index' => 1
            ],
            [
                'title' => 'Tim Meluncur ke Lokasi',
                'description' => 'Tim profesional kami beserta armada tangki vacuum akan langsung dikerahkan ke lokasi Anda sesuai waktu yang disepakati.',
                'step_number' => 2,
                'order_index' => 2
            ],
            [
                'title' => 'Pengerjaan & Pembayaran',
                'description' => 'Teknisi melakukan penyedotan/pelancaran. Setelah dipastikan lancar dan bersih, Anda cukup membayar sesuai tarif awal.',
                'step_number' => 3,
                'order_index' => 3
            ],
        ];
        foreach ($steps as $step) {
            Step::create($step);
        }
    }
}
