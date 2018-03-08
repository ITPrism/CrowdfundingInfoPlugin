<?php
/**
 * @package         Crowdfunding
 * @subpackage      Plugins
 * @author          Todor Iliev
 * @copyright       Copyright (C) 2017 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license         http://www.gnu.org/licenses/gpl-3.0.en.html GNU/GPLv3
 */

defined('_JEXEC') or die;
/**
 * @var Joomla\Registry\Registry $componentParams
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4><span class="fa fa-info-circle"></span> <?php echo JText::_('PLG_CONTENT_CROWDFUNDINGINFO_ABOUT');?></h4>
    </div>
    <div class="panel-body">
        <div class="col-md-6">
            <h5><?php echo JText::_('PLG_CONTENT_CROWDFUNDINGINFO_PROJECT_BY'); ?> <?php echo JHtml::_('crowdfunding.profileName', $user->get('name'), $profileLink, $proofVerified); ?></h5>
            <div class="media">
                <div class="media-left">
                    <?php echo JHtml::_('crowdfunding.profileAvatar', $socialAvatar, $profileLink); ?>
                </div>
                <div class="media-body">
                    <?php if ($this->params->get('user_display_location', 0)) { ?>
                    <p class="cf-location"><?php echo $socialLocation; ?></p>
                    <?php } ?>
                </div>
            </div>

            <?php if (($this->params->get('display_location', 0) and $location->getId()) or $this->params->get('display_dates', 0)) {?>

                <div class="panel panel-default mt-20">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h5 class="text-capitalized"><?php echo JText::_('PLG_CONTENT_CROWDFUNDINGINFO_CAMPAIGN_INFORMATION'); ?></h5></div>
                    <div class="panel-body">
                        <?php if ($this->params->get('display_location', 0) and $location->getId()) { ?>
                            <div><strong><?php echo JText::_('PLG_CONTENT_CROWDFUNDINGINFO_LOCATION'); ?></strong></div>
                            <div class="cf-location"><?php echo $location->getName() . ', ' . $location->getCountryCode(); ?></div>
                        <?php } ?>

                        <?php if ($this->params->get('display_dates', 0)) { ?>
                            <div class="mt-20"><strong><?php echo JText::_('PLG_CONTENT_CROWDFUNDINGINFO_FUNDING_PERIOD'); ?></strong></div>
                            <div><?php echo JText::sprintf('PLG_CONTENT_CROWDFUNDINGINFO_DISPLAY_START_DATE', JHtml::_('crowdfunding.date', $item->funding_start, $componentParams->get('date_format_views', JText::_('DATE_FORMAT_LC3')))); ?></div>
                            <div><?php echo JText::sprintf('PLG_CONTENT_CROWDFUNDINGINFO_DISPLAY_END_DATE', JHtml::_('crowdfunding.date', $item->funding_end, $componentParams->get('date_format_views', JText::_('DATE_FORMAT_LC3')))); ?></div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

        </div>

        <?php echo $mapCode; ?>
    </div>
</div>
