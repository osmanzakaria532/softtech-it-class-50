<?php

defined("ABSPATH") or die("");

use Duplicator\Addons\ProBase\LicensingController;
use Duplicator\Core\Controllers\ControllersManager;
use Duplicator\Utils\Support\SupportToolkit;

$thanks_display = 'none';
$error_display  = 'none';
$form_display   = 'block';
$message        = '';

$settingsLicensingUrl = ControllersManager::getMenuLink(
    ControllersManager::SETTINGS_SUBMENU_SLUG,
    LicensingController::L2_SLUG_LICENSING
);

?>
<style>
    div.dup-support-all {font-size:13px; line-height:20px;}
    div.dup-support-txts-links {width:100%;font-size:14px; font-weight:bold; line-height:26px; text-align:center}
    div.dup-support-hlp-area {width:375px; height:175px; float:left; border:1px solid #dfdfdf; border-radius:4px; margin:10px; line-height:18px;box-shadow: 0 8px 6px -6px #ccc;}
    table.dup-support-hlp-hdrs {border-collapse:collapse; width:100%; border-bottom:1px solid #dfdfdf}
    table.dup-support-hlp-hdrs {background-color:#efefef;}
    div.dup-support-hlp-hdrs {
        font-weight:bold; font-size:17px; height: 35px; padding:5px 5px 5px 10px;
        background-image:-ms-linear-gradient(top, #FFFFFF 0%, #DEDEDE 100%);
        background-image:-moz-linear-gradient(top, #FFFFFF 0%, #DEDEDE 100%);
        background-image:-o-linear-gradient(top, #FFFFFF 0%, #DEDEDE 100%);
        background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #DEDEDE));
        background-image:-webkit-linear-gradient(top, #FFFFFF 0%, #DEDEDE 100%);
        background-image:linear-gradient(to bottom, #FFFFFF 0%, #DEDEDE 100%);
    }
    div.dup-support-hlp-hdrs div {padding:5px; margin:4px 20px 0px -20px;  text-align: center;}
    div.dup-support-hlp-txt{padding:10px 4px 4px 4px; text-align:center}
</style>


<div class="dup-support-all">
    <div style="display:<?php echo $form_display; ?>;">

        <div style="width:800px; margin:auto; margin-top: 20px">
            <!-- HELP LINKS -->
            <div class="dup-support-hlp-area" >
                <div class="dup-support-hlp-hdrs">
                    <i class="fas fa-cube fa-2x fa-pull-left"></i>
                    <div><?php esc_html_e('Knowledgebase', 'duplicator-pro') ?></div>
                </div>
                <div class="dup-support-hlp-txt">
                    <?php esc_html_e('Complete Online Documentation', 'duplicator-pro'); ?><br/>
                    <select id="dup-support-kb-lnks" style="margin-top:18px; font-size:16px; min-width: 170px">
                        <option value="NULL"> <?php esc_html_e('Choose A Section', 'duplicator-pro') ?> </option>
                        <option value="<?php echo DUPLICATOR_PRO_BLOG_URL; ?>knowledge-base-article-categories/quick-start/"><?php esc_html_e('Quick Start', 'duplicator-pro') ?></option>
                        <option value="<?php echo DUPLICATOR_PRO_DUPLICATOR_DOCS_URL; ?>"><?php esc_html_e('User Guide', 'duplicator-pro') ?></option>
                        <option value="<?php echo DUPLICATOR_PRO_TECH_FAQ_URL; ?>"><?php esc_html_e('FAQs', 'duplicator-pro') ?></option>
                        <option value="<?php echo DUPLICATOR_PRO_DUPLICATOR_DOCS_URL; ?>changelog/"><?php esc_html_e('Change Log', 'duplicator-pro') ?></option>
                        <option value="<?php echo esc_url(DUPLICATOR_PRO_BLOG_URL . 'my-account'); ?>"><?php esc_html_e('Dashboard', 'duplicator-pro') ?></option>
                    </select>
                </div>
            </div>

            <!-- ONLINE SUPPORT -->
            <div style="margin: auto; height: 350px;  text-align: center">
                <!-- HELP TICKET-->
                <div class="dup-support-hlp-area">
                    <div class="dup-support-hlp-hdrs">
                        <i class="far fa-lightbulb fa-2x fa-pull-left"></i>
                        <div><?php esc_html_e('Submit Help Ticket', 'duplicator-pro') ?></div>
                    </div>
                    <div class="dup-support-hlp-txt">
                        <?php esc_html_e("You can access our world-class support below.", "duplicator-pro"); ?><br/>
                        <i>
                            <?php echo wp_kses(
                                sprintf(
                                    _x(
                                        'If reporting a bug, remember to include the %1$s to speed up the debugging process.',
                                        '1: diagnostic data link with label or link to instructions to download logs manually',
                                        'duplicator-pro'
                                    ),
                                    SupportToolkit::getDiagnosticInfoLinks()
                                ),
                                [
                                    'a' => [
                                        'href'   => [],
                                        'target' => [],
                                    ],
                                ]
                            ); ?>
                        </i>
                        <br/><br/>
                        <div class="dup-support-txts-links">
                            <button 
                                class="button button-primary button-large" 
                                data-dup-open-window="<?php echo esc_attr('https://duplicator.com/my-account/support/'); ?>" 
                                data-dup-window-name="<?php echo esc_attr('Duplicator Pro Support'); ?>" 
                            >
                                <?php esc_html_e('Get Support!', 'duplicator-pro') ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div style="margin-top:112px; text-align:center; display:<?php echo $thanks_display; ?>">
        <p style="margin-bottom:0px; font-size:32px"><?php esc_html_e('Thanks, we\'ll get back to you shortly.', 'duplicator-pro'); ?></p>
        <p style="font-size:12px">
            <?php esc_html_e('*Contact support@duplicator.com if you don\'t get a confirmation email within an hour.', 'duplicator-pro'); ?>
        </p>
    </div>
    <div style="margin-top:112px; text-align:center; display:<?php echo $error_display; ?>">
        <p style="margin-bottom:0px; font-size:32px"><?php esc_html_e('There was a problem sending the email.', 'duplicator-pro'); ?></p>
        <p>
            <?php esc_html_e("We had a problem sending the support email. Instead, send your problem or question to", 'duplicator-pro') ?> 
            <a href='mailto:support@duplicator.com' target='_blank'>support@duplicator.com.</a>
        </p>

        <p style='font-weight:bold'><?php echo $message; ?></p>
    </div>
</div><br/><br/><br/><br/>

<script>
    jQuery(document).ready(function ($) {
        //ATTACHED EVENTS
        jQuery('#dup-support-kb-lnks').change(function () {
            if (jQuery(this).val() != "NULL")
                window.open(jQuery(this).val())
        });

    });
</script>
