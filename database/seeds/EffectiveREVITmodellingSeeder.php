<?php

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class EffectiveREVITmodellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'effectiveREVITmodelling_banner_background' => 'banner_bg.png',
            'effectiveREVITmodelling_banner_h2' => 'Create effective REVIT MODELS, for accurate construction designs and estimations on project cost and material quantity.',
            'effectiveREVITmodelling_content' => '<div class="revit-modelling-list w-100">
            <div class="mb-4">
                <p class="mb-2">Create highly functional Revit models for maximum efficiency
                    and accuracy. Revit provides a holistic approach towards construction
                    designing based on Building Information Modeling (BIM).
                </p>
                <p class="mb-2">
                    At Design Goal we help you create effective Revit models, making way for accurate
                    construction designs, drawings, and estimations on project
                    cost and material quantity. We prides ourself as one of the top designing firms in
                    Nigeria, providing skillful CAD to Revit conversion and
                    remodeling service. Our team is proficient in working with both the solutions and
                    can successfully convert your CAD project to Revit.
                </p>
            </div>
            <ul>
                <p>
                    Revit is a far advanced solution and used for creating models based on Building
                    Information Modeling or BIM, enhancing geometry with real
                    life information.</p>
                <ol class="mt-2">
                    <li>Used to develop cost schedules.</li>
                    <li>Foster collaboration and manage change.</li>
                    <li>Revit modeling facilitates project management on the site.</li>
                </ol>
            </ul>
            <ul class="mt-3 ul-list">
                <p class="mb-2">Our CAD to Revit modeling can help you to:</p>
                <li>Personalize and tailor your designs to meet your individual requirements.</li>
                <li>Access our vast library of projects for innovative ideas and approaches.</li>
                <li>Determine accurate project estimates through an in-depth rate analysis process.</li>
                <li>Create Bill of Quantities (BOQ) for a clear picture of what your project entails.
                </li>
                <li>Develop cost schedules for effective planning and execution.</li>
                <li>Mitigate errors and risks easily by addressing them early in the design stage.</li>
                <li>Foster collaboration and coordination between different stakeholders.</li>
                <li>Access all building information from a single location.</li>
            </ul>
        </div>'
        ];
        foreach($data as $key => $value){
            $content = new PageContent();
            $content->key = $key;
            $content->value = $value;
            $content->save();
        }
    }
}
