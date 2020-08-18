<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run()
    {
        factory(Module::class)->create([
                                           'name'  => 'Introduction to WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/01+Introduction+to+WordPress.mp4',
                                           'order' => 1,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'WordPress.Org vs WordPress.Com',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/02+wordpress+org+vs+com.mp4',
                                           'order' => 2,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'How to install Wordpress manually',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/03+how+to+install+wordpress+automatically.mp4',
                                           'order' => 3,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'How to install Wordpress Automatically',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/04+how+to+install+wordpress+manually.mp4',
                                           'order' => 4,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Themes in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/05+Theme+in+WordPress.mp4',
                                           'order' => 5,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Plugins in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/06+Plugin+in+Wordpress.mp4',
                                           'order' => 6,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Menu in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/07+Menu+in+WordPress.mp4',
                                           'order' => 7,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'General Setting in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/08+General+Settings+in+WordPress.mp4',
                                           'order' => 8,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Writing Setting in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/09+Writing+Settings+in+WordPress.mp4',
                                           'order' => 9,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Reading Setting in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/10+Reading+in+WordPress.mp4',
                                           'order' => 10,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Discussion in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/11+Discussion+Setttings+in+WordPress.mp4',
                                           'order' => 11,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Media in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/12+Media+Settings+in+WordPress.mp4',
                                           'order' => 12,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Permalink Setting in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/13+Permalink+Settings+in+Wordpress.mp4',
                                           'order' => 13,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Privacy Setting in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/14+Privacy+Settings+in+WordPress.mp4',
                                           'order' => 14,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Pages vs Post in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/15+Pages+vs+Post+in+WordPress.mp4',
                                           'order' => 15,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'How to create post in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/16+How+to+create+a+posts+in+WordPress.mp4',
                                           'order' => 16,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'How to create pages in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/17+How+to+create+pages+in+Wordpress.mp4',
                                           'order' => 17,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Widgets in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/18+Widgets+in+WordPress.mp4',
                                           'order' => 18,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Visual Editor in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/19+Visual+Editor+in+WordPress.mp4',
                                           'order' => 19,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Moving Website Under Construction in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/20+Moving+the+website+under-construction.mp4',
                                           'order' => 20,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Installing WordPress Business Theme',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/21+Installing+WordPress+Business+Theme.mp4',
                                           'order' => 21,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Setting up demo Content in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/22+Setting+up+the+demo+content+Wordpress.mp4',
                                           'order' => 22,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Editing Call to Action Buttons',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/23+Editing+Call+to+Action+on+Home+Page.mp4',
                                           'order' => 23,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Editing Service Block in WordPress',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/24+Editing+Service+block+on+Home+Page.mp4',
                                           'order' => 24,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Editing Counters on Home Page',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/25+Editing+Counters+in+Home+Page.mp4',
                                           'order' => 25,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Editing Team Members on Home Page',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/26+Editing+Team+Members+on+Home+Page.mp4',
                                           'order' => 26,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating Why Choose us block on Home Page',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/27+Updating+the+why+choose+us+block+on+home+page.mp4',
                                           'order' => 27,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating Testimonials on Home Page',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/28+Updating+the+testimonial+block+on+home+Page.mp4',
                                           'order' => 28,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating the Blog Block on Home Page',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/29+Updating+the+blog+block+on+home+page.mp4',
                                           'order' => 29,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating Contact Us Block on Home Page',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/30+updating+contact+us+block+in+Home+Page.mp4',
                                           'order' => 30,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Editing the Footer Content',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/31+Editing+the+Footer+Content.mp4',
                                           'order' => 31,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating the Header Section',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/32+Updating+header+(logo+and+menu).mp4',
                                           'order' => 32,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating the Home Page Slider',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/33+Updating+the+slider+on+home+page.mp4',
                                           'order' => 33,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating the blog page header',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/34+Updating+the+blog+page+header.mp4',
                                           'order' => 34,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating the blog page content',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/35+Updating+the+blog+page+content.mp4',
                                           'order' => 35,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating Conent of About Us Page',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/36+Updating+the+content+of+about+us+page.mp4',
                                           'order' => 36,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating Our Team Page Content',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/37+Updating+the+content+of+our+team+page.mp4',
                                           'order' => 37,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Updating Contact Us Page Content',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/38+Updating+the+Contact+Us+Page.mp4',
                                           'order' => 38,
                                       ]);
        factory(Module::class)->create([
                                           'name'  => 'Concluding Thoughts',
                                           'video'   => 'https://studyzone.s3.us-east-2.amazonaws.com/Wordpress/39+Wordpress+Business+Website+Concluding+Thoughts.mp4',
                                           'order' => 39,
                                       ]);
    }
}
