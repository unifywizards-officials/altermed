<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServicePage;
use Illuminate\Support\Str;

class ServicePageSeeder extends Seeder
{
    public function run(): void
    {
        if (ServicePage::count() > 0) {
            return;
        }

        ServicePage::create([
            'service_banner_image'   => null,
            'service_banner_title'   => 'Our Services',
            'service_banner_details' => 'Explore our wide range of services.',
            'service_image'          => null,
            'service_title'          => 'Primary Services',
            'service_description'    => 'We provide top-notch services to our clients.',
            'acquire_heading'        => 'How to Acquire',
            'acquire_title'          => ['Step 1', 'Step 2'],
            'icon'                   => ['fa-user', 'fa-cog'],
            'icon_title'             => ['User', 'Cog'],
            'icon_heading'           => ['Heading 1', 'Heading 2'],
            'description'            => 'Detailed description of services.',
            'faq_title'              => ['What is this?', 'How does it work?'],
            'faq_heading'            => ['FAQ 1', 'FAQ 2'],
            'image_why_choose'       => null,
            'why_choose_title'       => 'Why Choose Us',
            'why_choose_heading'     => 'We are the best',
            'whychoos_name'          => ['Reason 1', 'Reason 2'],
            'slug'                   => Str::slug('Our Services'),
            'meta_title'             => 'Services Meta Title',
            'meta_description'       => 'Meta description for services.',
            'meta_keywords'          => 'services,altermed,dummy',
        ]);
    }
}


