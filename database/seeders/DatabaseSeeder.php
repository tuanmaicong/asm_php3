<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table("danh_muc")->insert([
            ["ten_danh_muc"=>"Ngoại ngữ","created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_danh_muc"=>"Marketing","created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_danh_muc"=>"Thiết kế","created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_danh_muc"=>"Công nghệ thông tin","created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
        ]);

        DB::table("khoa_hoc")->insert([
            ["ten_khoa_hoc"=>"Tiếng Anh","mo_ta"=>"Tiếng Anh căn bản đến nâng cao","gia_tien"=>500000,"id_danh_muc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Tiếng Pháp","mo_ta"=>"Tiếng Pháp căn bản đến nâng cao","gia_tien"=>600000,"id_danh_muc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Tiếng Trung Quốc","mo_ta"=>"Tiếng Trung căn bản đến nâng cao","gia_tien"=>600000,"id_danh_muc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Marketing online","mo_ta"=>"Marketing trên nền tảng mạng xã hội","gia_tien"=>600000,"id_danh_muc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"SEO","mo_ta"=>"Seo web tối ưu hóa website","gia_tien"=>650000,"id_danh_muc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Google Ads","mo_ta"=>"Quảng cáo tăng thứ hạng tìm kiếm","gia_tien"=>650000,"id_danh_muc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Thiết kế web","mo_ta"=>"Thiết kế web bằng worldpress","gia_tien"=>700000,"id_danh_muc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Photoshop","mo_ta"=>"Thiết kế hình ảnh với photoshop","gia_tien"=>600000,"id_danh_muc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Thiết kế quảng cáo","mo_ta"=>"Thiết kế banner,poster quảng cáo","gia_tien"=>600000,"id_danh_muc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Lập trình PHP","mo_ta"=>"Lộ trình từ căn bản đến nâng cao","gia_tien"=>1000000,"id_danh_muc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Lập trình C#","mo_ta"=>"Lộ trình từ căn bản đến nâng cao","gia_tien"=>1200000,"id_danh_muc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_khoa_hoc"=>"Lập trình java","mo_ta"=>"Lộ trình từ căn bản đến nâng cao","gia_tien"=>1100000,"id_danh_muc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
        ]);

        DB::table("lop")->insert([
            ["ten_lop"=>"Tiếng Anh căn bản","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Tiếng Anh nâng cao","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Tiếng Pháp căn bản","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Tiếng Pháp nâng cao","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Tiếng Trung căn bản","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Tiếng Trung nâng cao","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Marketing online 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Marketing online 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Marketing online 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"SEO 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"SEO 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"SEO 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Google Ads 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Google Ads 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Google Ads 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Thiết kế quảng cáo 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Thiết kế quảng cáo 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Thiết kế quảng cáo 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Photoshop 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Photoshop 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Photoshop 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Thiết kế web 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Thiết kế web 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Thiết kế web 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình PHP 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình PHP 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình PHP 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình C# 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình C# 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình C# 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình java 1","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình java 2","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_lop"=>"Lập trình java 3","ngay_bat_dau"=>date("Y-m-d H:i:s"),"ngay_ket_thuc"=>date("Y-m-d H:i:s"),"thoi_gian_hoc"=>6,"id_khoa_hoc"=>4,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
        ]);

        DB::table("hoc_vien")->insert([
            ["ten_hoc_vien"=>"Nguyễn Văn A","dia_chi"=>"Hà Nội","email"=>"A@gmail.com","so_dien_thoai"=>1234567893,"so_cmt"=>345678902,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_hoc_vien"=>"Nguyễn Văn B","dia_chi"=>"Hà Giang","email"=>"B@gmail.com","so_dien_thoai"=>1234567891,"so_cmt"=>45678901,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_hoc_vien"=>"Nguyễn Văn C","dia_chi"=>"TP.Hồ Chí Minh","email"=>"C@gmail.com","so_dien_thoai"=>1234567892,"so_cmt"=>45678904,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
        ]);

        DB::table("dang_ky")->insert([
            ["id_hoc_vien"=>1,"id_lop"=>1,"ngay_dang_ky"=>date("Y-m-d H:i:s"),"tong_tien"=>500000,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["id_hoc_vien"=>2,"id_lop"=>1,"ngay_dang_ky"=>date("Y-m-d H:i:s"),"tong_tien"=>500000,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["id_hoc_vien"=>3,"id_lop"=>1,"ngay_dang_ky"=>date("Y-m-d H:i:s"),"tong_tien"=>500000,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
        ]);

        DB::table("giang_vien")->insert([
            ["ten_giang_vien"=>"Mai Văn A","gioi_thieu"=>"Giảng viên CĐ FPT","id_lop"=>1,"id_danh_gia"=>1,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_giang_vien"=>"Mai Văn B","gioi_thieu"=>"Giảng viên CĐ FPT","id_lop"=>2,"id_danh_gia"=>2,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["ten_giang_vien"=>"Mai Văn C","gioi_thieu"=>"Giảng viên CĐ FPT","id_lop"=>3,"id_danh_gia"=>3,"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
        ]);

        DB::table("danh_gia")->insert([
            ["id_dang_ky"=>1,"id_hoc_vien"=>1,"so_sao"=>5,"noi_dung"=>"Khóa học rất hay","created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["id_dang_ky"=>2,"id_hoc_vien"=>2,"so_sao"=>5,"noi_dung"=>"Khóa học rất hay","created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")],
            ["id_dang_ky"=>3,"id_hoc_vien"=>3,"so_sao"=>4,"noi_dung"=>"Khóa học hay","created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s")]
        ]);

        DB::table("users")->insert([
            "name"=>"Mai Công Tuấn",
            "email"=>"Tuan12@gmail.com",
            "password"=>Hash::make("123456"),
            "created_at"=>date("Y-m-d H:i:s"),
            "updated_at"=>date("Y-m-d H:i:s")
        ]);
        DB::table("product")->insert([
           "name"=>"sản phẩm 1",
           "price"=>100000,
        ]);
    }
}
