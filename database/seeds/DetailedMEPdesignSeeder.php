<?php

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class DetailedMEPdesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'detailedMEPdesign_banner_background' => 'banner_bg.png',
            'detailedMEPdesign_banner_h3' => 'For your detailed',
            'detailedMEPdesign_banner_h2' => 'Mechanical, Electrical and Plumbing
            Design & Engineering Services',
            'detailedMEPdesign_banner_p' => 'Residential | Office space | Hotel | Hospital | Factory | Estates | School | Sport Complex',
            'detailedMEPdesign_content_heading' => 'Our MEP design programme of works',
            'detailedMEPdesign_content' => '<ul class="mep-design-list">
            <li>
                <h2>Get your briefing</h2>
                <p>We start by understanding your needs while ensuring smooth communication and
                    information exchange to deliver conceptual designs that
                    align to your vision of the project.</p>
            </li>
            <li>
                <h2>Conduct survey and feasibility study on your site</h2>
                <p>We carry out detailed studies of the site to supplement the information provided and
                    conduct appraisals on specific MEP areas. We research
                    into constraints and opportunities evolving from the location of proposed project to
                    the physical characteristics of the potential site.</p>
            </li>
            <li>
                <h2>Define scope of work & fee proposal</h2>
                <p>Once we do the feasibility study, we offer you detailed description of the works
                    required on the project, significant milestones, a Programme
                    of work with the expected timeframes for delivery with our professional fee
                    breakdown.</p>
            </li>
            <li>
                <h2>Deliver preliminary design drawings for your feedback</h2>
                <p>Upon agreement between both parties, we deliver a conceptualized design for your
                    project based on your earlier brief and our preparatory
                    work, within the stipulated time frame. This is for your review and feedback.</p>
            </li>
            <li>
                <h2>Deliver comprehensive approval/construction design drawings</h2>
                <p>
                    Here we deliver a comprehensive design that depicts your dream project, for both
                    construction and authority approval.
                    Here is what you will get:
                <ol class="ps-0">
                    <li><span>></span> 5 set approval drawing, stamped and sealed by our professional
                        and COREN certified engineer. This cover:</li>
                    <li><span>></span> E-copy of the AutoCAD drawing delivered to your mailbox</li>
                    <li><span>></span> 2 sets construction drawing</li>
                </ol>
                </p>
            </li>
        </ul>',
            'detailedMEPdesign_pages_title_1'=>'Mechanical page',
            'detailedMEPdesign_pages_title_2'=>'Electrical page',
            'detailedMEPdesign_pages_title_3'=>'Plumbing page',
        ];

        foreach($data as $key => $value){
            $content = new PageContent();
            $content->key = $key;
            $content->value = $value;
            $content->save();
        }
    }
}
