<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * enlightlite_modified theme Settings page.
 * @package    theme_enlightlite_modified
 * @copyright  2015 onwards LMSACE Dev Team (http://www.lmsace.com)
 * @author    LMSACE Dev Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings = new theme_boost_admin_settingspage_tabs('themesettingenlightlite_modified',
    get_string('enlightlite_modified_settings', 'theme_enlightlite_modified'));

    /* General Settings */
    $temp = new admin_settingpage('theme_enlightlite_modified_general', get_string('themegeneralsettings', 'theme_enlightlite_modified'));

    // This is the descriptor for Slide One.
    $name = 'theme_enlightlite_modified/theme_enlightlite_modified_generalsub1';
    $heading = get_string('generallogo_menu', 'theme_enlightlite_modified');
    $information = "";
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_enlightlite_modified/patternselect';
    $title = get_string('patternselect', 'theme_enlightlite_modified');
    $description = get_string('patternselectdesc', 'theme_enlightlite_modified');
    $default = 'default';
    $choices = array(
        'default' => get_string("blue", "theme_enlightlite_modified"),
        '1' => get_string("green", "theme_enlightlite_modified"),
        '2' => get_string("lavender", "theme_enlightlite_modified"),
        '3' => get_string("red", "theme_enlightlite_modified"),
        '4' => get_string("purple", "theme_enlightlite_modified")
    );

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $pimg = array();
    global $CFG;

    // Logo file setting.
    $name = 'theme_enlightlite_modified/logo';
    $title = get_string('logo', 'theme_enlightlite_modified');
    $description = get_string('logodesc', 'theme_enlightlite_modified');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Primary menu position.
    $name = 'theme_enlightlite_modified/primarymenu';
    $title = get_string('primarymenu', 'theme_enlightlite_modified');
    $description = get_string('primarymenudesc', 'theme_enlightlite_modified');
    $default = get_string('primary_menu', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    // Course menu.
    $name = 'theme_enlightlite_modified/cmenushow';
    $title = get_string('cmenushow', 'theme_enlightlite_modified');
    $description = get_string('cmenushowdesc', 'theme_enlightlite_modified');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Course menu position.
    $name = 'theme_enlightlite_modified/cmenuPosition';
    $title = get_string('cmenuPosition', 'theme_enlightlite_modified');
    $description = get_string('cmenuPosition_desc', 'theme_enlightlite_modified');
    $default = '2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $temp->add($setting);

    // This is the descriptor for Slide One.
    $name = 'theme_enlightlite_modified/theme_enlightlite_modified_miscellaneous';
    $heading = get_string('miscellaneous', 'theme_enlightlite_modified');
    $information = "";
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Combo list box type.
    $name = 'theme_enlightlite_modified/comboListboxType';
    $title = get_string('comboListboxType', 'theme_enlightlite_modified');
    $description = get_string('comboListboxType_desc', 'theme_enlightlite_modified');
    $expand = get_string('expand', 'theme_enlightlite_modified');
    $collapse = get_string('collapse', 'theme_enlightlite_modified');
    $default = 1;
    $choices = array(0 => $expand, 1 => $collapse);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    // Custom CSS file.
    $name = 'theme_enlightlite_modified/customcss';
    $title = get_string('customcss', 'theme_enlightlite_modified');
    $description = get_string('customcssdesc', 'theme_enlightlite_modified');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $settings->add($temp);
    // General settings end.

    /* Slideshow Settings Start */

    $temp = new admin_settingpage('theme_enlightlite_modified_slideshow', get_string('slideshowheading', 'theme_enlightlite_modified'));
    $temp->add(new admin_setting_heading('theme_enlightlite_modified_slideshow', get_string('slideshowheadingsub', 'theme_enlightlite_modified'),
    format_text(get_string('slideshowdesc', 'theme_enlightlite_modified'), FORMAT_MARKDOWN)));

    // SlideShow Status.
    $name = 'theme_enlightlite_modified/slideshowStatus';
    $title = get_string('slideshowStatus', 'theme_enlightlite_modified');
    $description = get_string('slideshowStatus_desc', 'theme_enlightlite_modified');
    $yes = get_string('yes');
    $no = get_string('no' );
    $default = 1;
    $choices = array(1 => $yes , 0 => $no);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // Auto Scroll.
    $name = 'theme_enlightlite_modified/autoslideshow';
    $title = get_string('autoslideshow', 'theme_enlightlite_modified');
    $description = get_string('autoslideshowdesc', 'theme_enlightlite_modified');
    $yes = get_string('yes');
    $no = get_string('no');
    $default = 1;
    $choices = array(1 => $yes , 0 => $no);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // Slide Show Interval.
    $name = 'theme_enlightlite_modified/slideinterval';
    $title = get_string('slideinterval', 'theme_enlightlite_modified');
    $description = get_string('slideintervaldesc', 'theme_enlightlite_modified');
    $default = 3500;
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_INT);
    $temp->add($setting);

    // Slide Overlay Opacity.
    $name = 'theme_enlightlite_modified/slideOverlay_opacity';
    $title = get_string('slideOverlay', 'theme_enlightlite_modified');
    $description = get_string('slideOverlay_desc', 'theme_enlightlite_modified');
    $opacity = array();
    $opacity = array_combine(range(0, 1, 0.1 ), range(0, 1, 0.1 ));
    $setting = new admin_setting_configselect($name, $title, $description, '0.4', $opacity);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    for ($i = 1; $i <= 3; $i++) {

        // This is the descriptor for Slide One.
        $name = 'theme_enlightlite_modified/slide' . $i . 'info';
        $heading = get_string('slideno', 'theme_enlightlite_modified', array('slide' => $i));
        $information = "";
        $setting = new admin_setting_heading($name, $heading, $information);
        $temp->add($setting);

        // SlideShow Status.
        $name = 'theme_enlightlite_modified/slide'.$i.'status';
        $title = get_string('slideStatus', 'theme_enlightlite_modified', array('slide' => $i));
        $description = get_string('slideStatus_desc', 'theme_enlightlite_modified', array('slide' => $i));
        $yes = get_string('enable', 'theme_enlightlite_modified');
        $no = get_string('disable', 'theme_enlightlite_modified');
        $default = 1;
        $choices = array(1 => $yes , 0 => $no);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $temp->add($setting);

        // Slide Image.
        $name = 'theme_enlightlite_modified/slide' . $i . 'image';
        $title = get_string('slideimage', 'theme_enlightlite_modified', array('slide' => $i));
        $description = get_string('slideimagedesc', 'theme_enlightlite_modified');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide' . $i . 'image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Slide Caption.
        $name = 'theme_enlightlite_modified/slide' . $i . 'caption';
        $title = get_string('slidecaption', 'theme_enlightlite_modified', array('slide' => $i));
        $description = get_string('slidecaptiondesc', 'theme_enlightlite_modified');
        $default = 'lang:slidecaptiondefault';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
        $temp->add($setting);

        // Slide Description Text.
        $name = 'theme_enlightlite_modified/slide' . $i . 'desc';
        $title = get_string('slidedesc', 'theme_enlightlite_modified', array('slide' => $i));
        $description = get_string('slidedesctext', 'theme_enlightlite_modified');
        $default = 'lang:slidedescdefault';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT);
        $temp->add($setting);

        // Slide Link text.
        $name = 'theme_enlightlite_modified/slide' . $i . 'urltext1';
        $title = get_string('slideurl1text', 'theme_enlightlite_modified', array('type' => "1"));
        $description = get_string('slideurl1textdesc', 'theme_enlightlite_modified');
        $default = 'lang:knowmore';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
        $temp->add($setting);

        // Slide Url.
        $name = 'theme_enlightlite_modified/slide' . $i . 'url1';
        $title = get_string('slideurl1', 'theme_enlightlite_modified', array('type' => "1"));
        $description = get_string('slideurl1desc', 'theme_enlightlite_modified');
        $default = 'http://www.example.com/';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
        $temp->add($setting);

        $name = 'theme_enlightlite_modified/slide'.$i.'urltarget1';
        $title = get_string('urltarget1', 'theme_enlightlite_modified', array('type' => "1"));
        $description = get_string('urltarget_desc', 'theme_enlightlite_modified', array('slide' => $i));
        $same = get_string('sameWindow', 'theme_enlightlite_modified');
        $new = get_string('newWindow', 'theme_enlightlite_modified');
        $default = 1;
        $choices = array(0 => $same , 1 => $new);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $temp->add($setting);

        $name = 'theme_enlightlite_modified/slide' . $i . 'contFullwidth';
        $title = get_string('slideCont_full', 'theme_enlightlite_modified');
        $description = get_string('slideCont_fulldesc', 'theme_enlightlite_modified');
        $default = "50";
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);


         // Slider content position.
        $name = 'theme_enlightlite_modified/slide' . $i . 'contentPosition';
        $title = get_string('slidecontent', 'theme_enlightlite_modified', array('slide' => $i));
        $description = get_string('slidecontentdesc', 'theme_enlightlite_modified');

        $topleft = get_string("topLeft", "theme_enlightlite_modified");
        $topcenter = get_string("topCenter", "theme_enlightlite_modified");
        $topright = get_string("topRight", "theme_enlightlite_modified");
        $centerleft = get_string("centerLeft", "theme_enlightlite_modified");
        $center = get_string("center", "theme_enlightlite_modified");
        $centerright = get_string("centerRight", "theme_enlightlite_modified");
        $bottomleft = get_string("bottomLeft", "theme_enlightlite_modified");
        $bottomcenter = get_string("bottomCenter", "theme_enlightlite_modified");
        $bottomright = get_string("bottomRight", "theme_enlightlite_modified");

        $default = 'centerRight';
        $choices = array(
            "topLeft" => $topleft,
            "topCenter" => $topcenter,
            "topRight" => $topright,
            "centerLeft" => $centerleft,
            "center" => $center,
            "centerRight" => $centerright,
            "bottomLeft" => $bottomleft,
            "bottomCenter" => $bottomcenter,
            "bottomRight" => $bottomright,
            );

        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $temp->add($setting);
    }

    $settings->add($temp);
    /* Slideshow Settings End*/
    /* Front Page Settings */
    $temp = new admin_settingpage('theme_enlightlite_modified_marketingspot', get_string('frontpageheading', 'theme_enlightlite_modified'));
    /* Marketing Spot 1*/
    $name = 'theme_enlightlite_modified_mspot1heading';
    $heading = get_string('marketingspot', 'theme_enlightlite_modified').' 1 ('.get_string('aboutustxt', 'theme_enlightlite_modified').')';
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    // Marketing Spot 1 Title.

    // Marketing Spot 1 Enable or disable.
    $name = 'theme_enlightlite_modified/marketingSpot1_status';
    $title = get_string('marketingSpot1_status', 'theme_enlightlite_modified');
    $description = get_string('marketingSpot1_statusdesc', 'theme_enlightlite_modified');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);
    // Marketing Spot 1 Enable or disable.

    // Marketing Spot 1 Title.
    $name = 'theme_enlightlite_modified/mspot1title';
    $title = get_string('title', 'theme_enlightlite_modified');
    $description = get_string('mspottitledesc', 'theme_enlightlite_modified', array('msno' => '1'));
    $default = 'lang:aboutus';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Marketing Spot 1 Description.
    $name = 'theme_enlightlite_modified/mspot1desc';
    $title = get_string('description');
    $description = get_string('mspotdescdesc', 'theme_enlightlite_modified', array('msno' => '1'));
    $default = 'lang:aboutusdesc';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT);
    $temp->add($setting);

    // Marketing spot 1 Media content.
    $name = 'theme_enlightlite_modified/mspot1media';
    $title = get_string('media', 'theme_enlightlite_modified');
    $description = get_string('mspotmediadesc', 'theme_enlightlite_modified', array('msno' => '1'));
    $default = '<div style="display:none;">image</div>
    <img src="https://res.cloudinary.com/lmsace/image/upload/v1593602097/about-img_rztwgu.jpg">';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    /* Marketing Spot 1*/

    /* Marketing Spot 2*/
    $name = 'theme_enlightlite_modified_mspot2heading';
    $heading = get_string('marketingspot', 'theme_enlightlite_modified').' 2 ( '.get_string('learntitle', 'theme_enlightlite_modified')." )";
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_enlightlite_modified/marketingSpot2_status';
    $title = get_string('marketingSpot2_status', 'theme_enlightlite_modified');
    $description = get_string('marketingSpot2_statusdesc', 'theme_enlightlite_modified');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Marketing Spot 2 Title.
    $name = 'theme_enlightlite_modified/mspot2title';
    $title = get_string('title', 'theme_enlightlite_modified');
    $description = get_string('mspottitledesc', 'theme_enlightlite_modified', array('msno' => '2'));
    $default = 'lang:learnanytime';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Marketing Spot 2 Description.
    $name = 'theme_enlightlite_modified/mspot2desc';
    $title = get_string('description');
    $description = get_string('mspotdescdesc', 'theme_enlightlite_modified', array('msno' => '2'));
    $default = 'lang:learnanytimedesc';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT);
    $temp->add($setting);

    // Marketing Spot 2 Link Text.
    $name = 'theme_enlightlite_modified/mspot2urltext';
    $title = get_string('button', 'theme_enlightlite_modified').' '.get_string('text', 'theme_enlightlite_modified');
    $description = get_string('mspot2urltxtdesc', 'theme_enlightlite_modified', array('msno' => '2'));
    $default = 'lang:viewallcourses';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $temp->add($setting);

    // Marketing Spot 2 Link.
    $name = 'theme_enlightlite_modified/mspot2url';
    $title = get_string('button', 'theme_enlightlite_modified').' '.get_string('link', 'theme_enlightlite_modified');
    $description = get_string('mspot2urldesc', 'theme_enlightlite_modified');
    $default = 'http://www.example.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_enlightlite_modified/mspot2urltarget';
    $title = get_string('button', 'theme_enlightlite_modified').' '.get_string('target', 'theme_enlightlite_modified');
    $description = get_string('mspot2urltarget_desc', 'theme_enlightlite_modified');
    $same = get_string('sameWindow', 'theme_enlightlite_modified');
    $new = get_string('newWindow', 'theme_enlightlite_modified');
    $default = 1;
    $choices = array(0 => $same , 1 => $new);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);
    /* Marketing Spot 2*/
    $settings->add($temp);
    /* Front Page Settings End */

    /*Testimonials End*/

    /* Footer Settings start */
    $temp = new admin_settingpage('theme_enlightlite_modified_footer', get_string('footerheading', 'theme_enlightlite_modified'));

    /* Footer Block1 */
    $name = 'theme_enlightlite_modified_footerblock1heading';
    $heading = get_string('footerblock', 'theme_enlightlite_modified').' 1 ';
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

     $name = 'theme_enlightlite_modified/footerb1_status';
    $title = get_string('activateblock', 'theme_enlightlite_modified');
    $description = get_string('footerb1_statusdesc', 'theme_enlightlite_modified');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_enlightlite_modified/footerbtitle1';
    $title = get_string('title', 'theme_enlightlite_modified');
    $description = get_string('footerbtitledesc', 'theme_enlightlite_modified');
    $default = 'lang:footerbtitle1default';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_enlightlite_modified/footerdesc1';
    $title = get_string('footnote', 'theme_enlightlite_modified');
    $description = get_string('footerdescription_desc', 'theme_enlightlite_modified', array('blockno' => '1'));
    $default = get_string('footerblink1default', 'theme_enlightlite_modified');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    /* Footer Block1 */

    /* Footer Block2*/
    $name = 'theme_enlightlite_modified_footerblock2heading';
    $heading = get_string('footerblock', 'theme_enlightlite_modified').' 2 ';
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_enlightlite_modified/footerb2_status';
    $title = get_string('activateblock', 'theme_enlightlite_modified');
    $description = get_string('footerb1_statusdesc', 'theme_enlightlite_modified');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_enlightlite_modified/footerbtitle2';
    $title = get_string('title', 'theme_enlightlite_modified');
    $description = get_string('footerbtitledesc', 'theme_enlightlite_modified');
    $default = 'lang:footerbtitle2default';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_enlightlite_modified/footerblink2';
    $title = get_string('links', 'theme_enlightlite_modified');
    $description = get_string('footerblink_desc', 'theme_enlightlite_modified', array('blockno' => '2'));
    $default = get_string('footerblink2default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);
    /* Footer Block2 */

    /* Footer Block3 */

    $name = 'theme_enlightlite_modified_footerblock3heading';
    $heading = get_string('footerblock', 'theme_enlightlite_modified').' 3 ';
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Footer block 3 status.
    $name = 'theme_enlightlite_modified/footerb3_status';
    $title = get_string('activateblock', 'theme_enlightlite_modified');
    $description = get_string('footerb1_statusdesc', 'theme_enlightlite_modified');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Footer block title 3.
    $name = 'theme_enlightlite_modified/footerbtitle3';
    $title = get_string('title', 'theme_enlightlite_modified');
    $description = get_string('footerbtitledesc', 'theme_enlightlite_modified');
    $default = 'lang:footerbtitle3default';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Footer block 3 link.
    $name = 'theme_enlightlite_modified/footerblink3';
    $title = get_string('links', 'theme_enlightlite_modified');
    $description = get_string('footerblink_desc', 'theme_enlightlite_modified', array('blockno' => '3'));
    $default = get_string('footerblink3default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);
    /* Footer Block3 */

    /* Footer Block4 */
    $name = 'theme_enlightlite_modified_footerblock4heading';
    $heading = get_string('footerblock', 'theme_enlightlite_modified').' 4 ';
    $information = get_string('socialmediadesc', 'theme_enlightlite_modified');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Footer block 4 status.
    $name = 'theme_enlightlite_modified/footerb4_status';
    $title = get_string('activateblock', 'theme_enlightlite_modified');
    $description = get_string('footerb1_statusdesc', 'theme_enlightlite_modified');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Footer block 4 Title.
    $name = 'theme_enlightlite_modified/footerbtitle4';
    $title = get_string('title', 'theme_enlightlite_modified');
    $description = get_string('footerbtitledesc', 'theme_enlightlite_modified');
    $default = 'lang:footerbtitle4default';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Footer Address.
    $name = 'theme_enlightlite_modified/footaddress';
    $title = get_string('address', 'theme_enlightlite_modified');
    $description = get_string('address_desc', 'theme_enlightlite_modified');
    $default = get_string('defaultaddress', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    // Footer Email Id.
    $name = 'theme_enlightlite_modified/footemailid';
    $title = get_string('emailid', 'theme_enlightlite_modified');
    $description = '';
    $default = get_string('defaultemailid', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Footer phone number.
    $name = 'theme_enlightlite_modified/footphoneno';
    $title = get_string('phoneno', 'theme_enlightlite_modified');
    $description = '';
    $default = get_string('defaultphoneno', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Enable / Disable social media icon 1.
    $name = 'theme_enlightlite_modified/siconenable1';
    $title = get_string('enable', 'theme_enlightlite_modified').' '.get_string('socialicon', 'theme_enlightlite_modified').' 1 ';
    $description = '';
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon 1 - name.
    $name = 'theme_enlightlite_modified/socialicon1';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 1 ';
    $description = get_string('socialicondesc', 'theme_enlightlite_modified');
    $default = get_string('socialicon1default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon 1 - Background color.
    $name = 'theme_enlightlite_modified/siconbgc1';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 1 '.get_string('bgcolor', 'theme_enlightlite_modified');
    $description = get_string('siconbgcdesc', 'theme_enlightlite_modified');
    $default = get_string('siconbgc1default', 'theme_enlightlite_modified');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    // Social Media Icon Url 1.
    $name = 'theme_enlightlite_modified/siconurl1';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 1 '.get_string('url', 'theme_enlightlite_modified');
    $description = get_string('siconurldesc', 'theme_enlightlite_modified');
    $default = get_string('siconurl1default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Enable / Disable social media icon 2.
    $name = 'theme_enlightlite_modified/siconenable2';
    $title = get_string('enable', 'theme_enlightlite_modified').' '.get_string('socialicon', 'theme_enlightlite_modified').' 2 ';
    $description = '';
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon 2 - name.
    $name = 'theme_enlightlite_modified/socialicon2';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 2 ';
    $description = get_string('socialicondesc', 'theme_enlightlite_modified');
    $default = get_string('socialicon2default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon 2 - Background color.
    $name = 'theme_enlightlite_modified/siconbgc2';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 2 '.get_string('bgcolor', 'theme_enlightlite_modified');
    $description = get_string('siconbgcdesc', 'theme_enlightlite_modified');
    $default = get_string('siconbgc2default', 'theme_enlightlite_modified');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    // Social Media Icon Url 2.
    $name = 'theme_enlightlite_modified/siconurl2';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 2 '.get_string('url', 'theme_enlightlite_modified');
    $description = get_string('siconurldesc', 'theme_enlightlite_modified');
    $default = get_string('siconurl2default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Enable / Disable social media icon 3.
    $name = 'theme_enlightlite_modified/siconenable3';
    $title = get_string('enable', 'theme_enlightlite_modified').' '.get_string('socialicon', 'theme_enlightlite_modified').' 3 ';
    $description = '';
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon 3 - name.
    $name = 'theme_enlightlite_modified/socialicon3';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 3 ';
    $description = get_string('socialicondesc', 'theme_enlightlite_modified');
    $default = get_string('socialicon3default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon 3 - Background color.
    $name = 'theme_enlightlite_modified/siconbgc3';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 3 '.get_string('bgcolor', 'theme_enlightlite_modified');
    $description = get_string('siconbgcdesc', 'theme_enlightlite_modified');
    $default = get_string('siconbgc3default', 'theme_enlightlite_modified');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    // Social Media Icon Url 3.
    $name = 'theme_enlightlite_modified/siconurl3';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 3 '.get_string('url', 'theme_enlightlite_modified');
    $description = get_string('siconurldesc', 'theme_enlightlite_modified');
    $default = get_string('siconurl3default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Enable / Disable social media icon 4.
    $name = 'theme_enlightlite_modified/siconenable4';
    $title = get_string('enable', 'theme_enlightlite_modified').' '.get_string('socialicon', 'theme_enlightlite_modified').' 4 ';
    $description = '';
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon 4 - name.
    $name = 'theme_enlightlite_modified/socialicon4';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 4 ';
    $description = get_string('socialicondesc', 'theme_enlightlite_modified');
    $default = get_string('socialicon4default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon 4 - Background color.
    $name = 'theme_enlightlite_modified/siconbgc4';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 4 '.get_string('bgcolor', 'theme_enlightlite_modified');
    $description = get_string('siconbgcdesc', 'theme_enlightlite_modified');
    $default = get_string('siconbgc4default', 'theme_enlightlite_modified');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    // Social Media Icon Url 4.
    $name = 'theme_enlightlite_modified/siconurl4';
    $title = get_string('socialicon', 'theme_enlightlite_modified').' 4 '.get_string('url', 'theme_enlightlite_modified');
    $description = get_string('siconurldesc', 'theme_enlightlite_modified');
    $default = get_string('siconurl4default', 'theme_enlightlite_modified');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    /* Footer Block4 */

    // Copyright.
    $name = 'theme_enlightlite_modified_copyrightheading';
    $heading = get_string('copyrightheading', 'theme_enlightlite_modified');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Copyright setting.
    $name = 'theme_enlightlite_modified/copyright';
    $title = get_string('copyright', 'theme_enlightlite_modified');
    $description = get_string('copyrightdesc', 'theme_enlightlite_modified');
    $default = 'lang:copyrightdefault';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $settings->add($temp);
    /* Footer Settings end */

}
