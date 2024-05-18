<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Page;


class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();
       
        $data[] =  [
            'name'=>'Terms & Conditions',
            'slug'=>'terms-and-conditions',
            'content'=>'<h1>Content for Terms & Conditions</h1>',
            'meta'=>'<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
            <meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">
            <title>Save Big with Online Promo Codes - Coupons Percent Off</title>',
        ];
        $data[] =  [
            'name'=>'Privacy Policy',
            'slug'=>'privacy-policy',
            'content'=>'<h1>Content for Privacy Policy</h1>',
            'meta'=>'<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
            <meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">',
        ];
        $data[] =  [
            'name'=>'Disclaimer',
            'slug'=>'disclaimer',
            'content'=>'<h1>Content for Disclaimer</h1>',
            'meta'=>'<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
            <meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">
            <title>Save Big with Online Promo Codes - Coupons Percent Off</title>',
        ];
        $data[] =  [
            'name'=>'About Us',
            'slug'=>'about-us',
            'content'=>'<h1>Content for About Us</h1>',
            'meta'=>'<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
            <meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">
            <title>Save Big with Online Promo Codes - Coupons Percent Off</title>',
        ];
        $data[] =  [
            'name'=>'Contact Us',
            'slug'=>'contact-us',
            'content'=>'<h1>Content for Contact Us</h1>',
            'meta'=>'<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
            <meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">
            <title>Save Big with Online Promo Codes - Coupons Percent Off</title>',
        ];
        $data[] =  [
            'name'=>'FAQ',
            'slug'=>'faqs',
            'content'=>'<h1>Content for FAQS</h1>',
            'meta'=>'<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
            <meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">
            <title>Save Big with Online Promo Codes - Coupons Percent Off</title>',
        ];
               
        foreach($data as $val){
            Page::create($val);
        }
    }
}
