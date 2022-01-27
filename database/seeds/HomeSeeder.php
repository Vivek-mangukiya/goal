<?php

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            "home_banner_h3" => "For your detailed",
            "home_banner_h2" => "Mechanical, Electrical and Plumbing Design & Engineering Services",
            "home_banner_p" => "Residential | Office space | Hotel | Hospital | Factory |Estates | School | Sport Complex ",
            "home_banner_a" => "Request proposal",
            "home_banner_background" => "banner-bg.png",
            "home_tab_heading_1" => "Engineering",
            "home_tab_heading_2" => "Academy",
            "home_tab_heading_3" => "Engipreneurs",
            "home_tab_content_1_p" => "Cut your construction cost, maximize energy efficiency with our strategic Mechanical, Electrical and Plumbing (MEP) Design and Engineering.",
            "home_tab_content_2_p" => "Cut your construction cost, maximize energy efficiency with our strategic Mechanical, Electrical and Plumbing (MEP) Design and Engineering.",
            "home_tab_content_3_p" => "Cut your construction cost, maximize energy efficiency with our strategic Mechanical, Electrical and Plumbing (MEP) Design and Engineering.",
            "home_portfolio_heading_h2" => "Our projects",
            "home_portfolio_heading_content" => "Lorem ipsum mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.",
            "home_portfolio_residential_img" => "project-4.png",
            "home_portfolio_residential_h2" => "Project title",
            "home_portfolio_office_img" => "project-3.png",
            "home_portfolio_office_h2" => "Project title",
            "home_portfolio_hotel_img" => "project-2.png",
            "home_portfolio_hote_h2" => "Project title",
            "home_portfolio_hospital_img" => "project-4.png",
            "home_portfolio_hospital_h2" => "Project title",
            "home_portfolio_factory_img" => "project-4.png",
            "home_portfolio_factory_h2" => "Project title",
            "home_feature_heading_h2" => "Why choose us for your MEP Enginnering Design",
            "home_feature_1_img" => "feature-icon.svg",
            "home_feature_2_img" => "feature-icon.svg",
            "home_feature_3_img" => "feature-icon.svg",
            "home_feature_1_p" => "Comprehensive and detailed design",
            "home_feature_2_p" => "80% first-time approval",
            "home_feature_3_p" => "40% faster turnaround time versus industry practice",
            "home_counter_count_1" => "500",
            "home_counter_count_2" => "1000",
            "home_counter_count_3" => "50",
            "home_counter_p_1" => "Happy clients",
            "home_counter_p_2" => "Projects done",
            "home_counter_p_3" => "Awesome staff",
            "home_training_h2" => "Training",
            "home_training_p" => "Training",
            "home_training_a" => "Join our training",
        ];

        foreach($data as $key => $value){
            $content = new PageContent();
            $content->key = $key;
            $content->value = $value;
            $content->save();
        }
    }
}
