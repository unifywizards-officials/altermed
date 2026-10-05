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

        // Billing services
        ServicePage::create([
            'service_banner_image'   => null,
            'service_banner_title'   => 'Medical Coding and Billing',
            'service_banner_details' => 'Centralize provider data to ensure compliance and streamline billing processes.',
            'service_image'          => null,
            'service_title'          => 'Medical Coding and Billing',
            'service_description'    => 'We provide comprehensive medical coding and billing services to ensure accurate claims submission and faster reimbursements.',
            'acquire_heading'        => 'How to Get Started',
            'acquire_title'          => ['Contact Us', 'Submit Documentation', 'Start Processing'],
            'icon'                   => ['fa-file-invoice-dollar', 'fa-calculator', 'fa-clock'],
            'icon_title'             => ['Accurate Coding', 'Fast Processing', 'Timely Payments'],
            'icon_heading'           => ['Precise medical coding', 'Efficient billing cycles', 'Accelerated reimbursements'],
            'description'            => 'Our expert team handles all aspects of medical billing to maximize your revenue cycle.',
            'faq_title'              => ['What is medical coding?', 'How long does billing take?', 'What if claims are denied?'],
            'faq_heading'            => ['Medical coding converts healthcare services into codes for billing.', 'Billing cycles typically take 30-60 days.', 'We handle all denials and resubmissions at no extra cost.'],
            'image_why_choose'       => null,
            'why_choose_title'       => 'Why Choose Our Billing Services',
            'why_choose_heading'     => 'Expert billing solutions for healthcare providers',
            'whychoos_name'          => ['98% Clean Claim Rate', '30-Day Average Collection', 'Dedicated Account Managers'],
            'slug'                   => Str::slug('Medical Coding and Billing'),
            'service_type'           => 'Billing services',
            'status'                 => 1,
            'meta_title'             => 'Medical Coding and Billing Services | AlterMed RCM',
            'meta_description'       => 'Professional medical coding and billing services with 98% clean claim rate. Get faster reimbursements and maximize revenue.',
            'meta_keywords'          => 'medical coding, medical billing, healthcare billing, claims processing',
        ]);

        ServicePage::create([
            'service_banner_image'   => null,
            'service_banner_title'   => 'Physician Billing Services',
            'service_banner_details' => 'Get Tailored Physician Medical Billing Services for optimal revenue cycle management.',
            'service_image'          => null,
            'service_title'          => 'Physician Billing Services',
            'service_description'    => 'Specialized billing services designed specifically for physician practices and medical groups.',
            'acquire_heading'        => 'Get Started Today',
            'acquire_title'          => ['Initial Consultation', 'System Integration', 'Ongoing Support'],
            'icon'                   => ['fa-user-md', 'fa-chart-line', 'fa-shield-alt'],
            'icon_title'             => ['Physician Focused', 'Revenue Optimization', 'Compliance Guaranteed'],
            'icon_heading'           => ['Tailored for physicians', 'Maximize collections', 'HIPAA compliant'],
            'description'            => 'Comprehensive billing solutions specifically designed for physician practices.',
            'faq_title'              => ['Do you handle all specialties?', 'What\'s your success rate?', 'How do you handle denials?'],
            'faq_heading'            => ['We support all medical specialties.', '95% first-pass claim acceptance.', 'Comprehensive denial management included.'],
            'image_why_choose'       => null,
            'why_choose_title'       => 'Why Choose Our Physician Billing',
            'why_choose_heading'     => 'Specialized billing for physician success',
            'whychoos_name'          => ['All Specialties Supported', '95% First-Pass Rate', '24/7 Support Available'],
            'slug'                   => Str::slug('Physician Billing Services'),
            'service_type'           => 'Billing services',
            'status'                 => 1,
            'meta_title'             => 'Physician Billing Services | Medical Practice Billing',
            'meta_description'       => 'Specialized medical billing services for physicians. Improve collections and reduce administrative burden.',
            'meta_keywords'          => 'physician billing, medical billing, practice management',
        ]);

        // Credentialed services
        ServicePage::create([
            'service_banner_image'   => null,
            'service_banner_title'   => 'CVO Credentialing',
            'service_banner_details' => 'Streamline credentialing to NCQA and TJC standards from PSV to committee management.',
            'service_image'          => null,
            'service_title'          => 'CVO Credentialing Services',
            'service_description'    => 'Comprehensive credentialing services that ensure your providers meet all necessary standards and requirements.',
            'acquire_heading'        => 'Start Credentialing Process',
            'acquire_title'          => ['Document Collection', 'Application Preparation', 'Submission & Tracking'],
            'icon'                   => ['fa-file-check', 'fa-user-check', 'fa-clock'],
            'icon_title'             => ['Complete Documentation', 'Verified Credentials', 'Fast Processing'],
            'icon_heading'           => ['All required documents', 'Verified and approved', 'Expedited timelines'],
            'description'            => 'End-to-end credentialing services for healthcare providers and facilities.',
            'faq_title'              => ['What is CVO credentialing?', 'How long does it take?', 'What documents are needed?'],
            'faq_heading'            => ['Centralized verification organization for credentialing.', 'Typically 60-90 days depending on requirements.', 'Licenses, certifications, references, and background checks.'],
            'image_why_choose'       => null,
            'why_choose_title'       => 'Why Choose Our Credentialing Services',
            'why_choose_heading'     => 'Expert credentialing for healthcare success',
            'whychoos_name'          => ['NCQA & TJC Compliant', '99% Success Rate', 'Dedicated Coordinators'],
            'slug'                   => Str::slug('CVO Credentialing'),
            'service_type'           => 'Credentialed',
            'status'                 => 1,
            'meta_title'             => 'CVO Credentialing Services | Healthcare Provider Credentialing',
            'meta_description'       => 'Professional credentialing services for healthcare providers. NCQA and TJC compliant with 99% success rate.',
            'meta_keywords'          => 'CVO credentialing, healthcare credentialing, provider credentialing',
        ]);

        ServicePage::create([
            'service_banner_image'   => null,
            'service_banner_title'   => 'Privileging',
            'service_banner_details' => 'Accelerate privileging with automated workflows and seamless hospital coordination.',
            'service_image'          => null,
            'service_title'          => 'Medical Staff Privileging',
            'service_description'    => 'Streamlined privileging services to get your providers approved and practicing quickly.',
            'acquire_heading'        => 'Begin Privileging Process',
            'acquire_title'          => ['Application Review', 'Hospital Coordination', 'Committee Presentation'],
            'icon'                   => ['fa-hospital', 'fa-gavel', 'fa-check-circle'],
            'icon_title'              => ['Hospital Network', 'Committee Approved', 'Fully Privileged'],
            'icon_heading'           => ['Extensive hospital network', 'Approved by committees', 'Ready to practice'],
            'description'            => 'Complete privileging services for medical staff appointments and reappointments.',
            'faq_title'              => ['What is medical privileging?', 'How long does privileging take?', 'Do you handle renewals?'],
            'faq_heading'            => ['Process to grant clinical privileges to practice medicine.', '90-180 days depending on specialty.', 'Yes, we handle all renewals and reappointments.'],
            'image_why_choose'       => null,
            'why_choose_title'       => 'Why Choose Our Privileging Services',
            'why_choose_heading'     => 'Accelerated privileging for faster practice',
            'whychoos_name'          => ['180+ Hospitals', '90% Faster Processing', 'Complete Documentation'],
            'slug'                   => Str::slug('Privileging'),
            'service_type'           => 'Credentialed',
            'status'                 => 1,
            'meta_title'             => 'Medical Staff Privileging Services | Hospital Privileges',
            'meta_description'       => 'Accelerated medical staff privileging services. Get approved faster with our extensive hospital network.',
            'meta_keywords'          => 'medical privileging, hospital privileges, medical staff credentials',
        ]);

        // We Serve services
        ServicePage::create([
            'service_banner_image'   => null,
            'service_banner_title'   => 'Provider Groups',
            'service_banner_details' => 'Accelerate time-to-revenue with end-to-end enrollment and credentialing automation.',
            'service_image'          => null,
            'service_title'          => 'Provider Group Services',
            'service_description'    => 'Comprehensive services for medical groups and provider organizations.',
            'acquire_heading'        => 'Partner With Us',
            'acquire_title'          => ['Group Assessment', 'Custom Solutions', 'Implementation'],
            'icon'                   => ['fa-users', 'fa-building', 'fa-handshake'],
            'icon_title'             => ['Group Practice', 'Large Organizations', 'Partnership Focus'],
            'icon_heading'           => ['Multi-provider groups', 'Healthcare systems', 'Strategic partnerships'],
            'description'            => 'Tailored solutions for provider groups of all sizes.',
            'faq_title'              => ['What size groups do you serve?', 'Do you offer customized solutions?', 'What\'s your implementation process?'],
            'faq_heading'            => ['From small groups to large healthcare systems.', 'Yes, all solutions are customized.', 'Assessment, planning, and seamless implementation.'],
            'image_why_choose'       => null,
            'why_choose_title'       => 'Why Choose Us for Provider Groups',
            'why_choose_heading'     => 'Comprehensive solutions for healthcare groups',
            'whychoos_name'          => ['All Group Sizes', 'Custom Solutions', 'Dedicated Teams'],
            'slug'                   => Str::slug('Provider Groups'),
            'service_type'           => 'We Serve',
            'status'                 => 1,
            'meta_title'             => 'Provider Group Services | Medical Group Management',
            'meta_description'       => 'Comprehensive billing and credentialing services for medical groups and provider organizations.',
            'meta_keywords'          => 'provider groups, medical groups, healthcare organizations',
        ]);

        ServicePage::create([
            'service_banner_image'   => null,
            'service_banner_title'   => 'Health Systems',
            'service_banner_details' => 'Accelerate onboarding and improve satisfaction with end-to-end credentialing and enrollment.',
            'service_image'          => null,
            'service_title'          => 'Health System Services',
            'service_description'    => 'Enterprise-level solutions for large health systems and hospital networks.',
            'acquire_heading'        => 'Transform Your Health System',
            'acquire_title'          => ['System Analysis', 'Enterprise Solutions', 'Network-wide Implementation'],
            'icon'                   => ['fa-hospital', 'fa-network-wired', 'fa-chart-pie'],
            'icon_title'             => ['Hospital Networks', 'System Integration', 'Analytics & Reporting'],
            'icon_heading'           => ['Multi-hospital systems', 'Complete integration', 'Performance insights'],
            'description'            => 'Scalable solutions designed for large healthcare systems.',
            'faq_title'              => ['Do you serve large health systems?', 'What integrations do you support?', 'Do you provide analytics?'],
            'faq_heading'            => ['Yes, we specialize in enterprise healthcare.', 'All major EHR and practice management systems.', 'Comprehensive analytics and reporting included.'],
            'image_why_choose'       => null,
            'why_choose_title'       => 'Why Choose Us for Health Systems',
            'why_choose_heading'     => 'Enterprise solutions for healthcare systems',
            'whychoos_name'          => ['Enterprise Scale', 'Full Integration', 'Advanced Analytics'],
            'slug'                   => Str::slug('Health Systems'),
            'service_type'           => 'We Serve',
            'status'                 => 1,
            'meta_title'             => 'Health System Services | Enterprise Healthcare Solutions',
            'meta_description'       => 'Enterprise-level billing and credentialing solutions for large health systems and hospital networks.',
            'meta_keywords'          => 'health systems, hospital networks, enterprise healthcare',
        ]);
    }
}


