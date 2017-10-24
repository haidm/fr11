<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Sales
 * @copyright  Copyright (c) 2006-2017 X.commerce, Inc. and affiliates (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
$installer = $this;

/* @var $installer Mage_Sales_Model_Entity_Setup */

$installer->startSetup();

$installer->run("
UPDATE {$this->getTable('core_email_template')} set template_text=Photolong\')}})</small></h3>\r\n                              <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                                 <thead>\r\n                                 <tr>\r\n                                        <th align=\"left\" width=\"48.5%\" bgcolor=\"#d9e5ee\" style=\"padding:5px 9px 6px 9px; border:1px solid #bebcb7; border-bottom:none; line-height:1em;\">Billing \r\n                                       Information:</th>\r\n                                       <th width=\"3%\"></th>\r\n                                      <th align=\"left\" width=\"48.5%\" bgcolor=\"#d9e5ee\" style=\"padding:5px 9px 6px 9px; border:1px solid #bebcb7; border-bottom:none; line-height:1em;\">Payment \r\n                                       Method:</th>\r\n                                    </tr>\r\n                                   </thead>\r\n                                    <tbody>\r\n                                 <tr>\r\n                                        <td valign=\"top\" style=\"padding:7px 9px 9px 9px; border:1px solid #bebcb7; border-top:0; background:#f8f7f5;\">{{var order.billing_address.format(\'html\')}}</td>\r\n                                      <td>&nbsp;</td>\r\n                                     <td valign=\"top\" style=\"padding:7px 9px 9px 9px; border:1px solid #bebcb7; border-top:0; background:#f8f7f5;\"> {{var payment_html}}</td>\r\n                                 </tr>\r\n                                   </tbody>\r\n                                </table><br/>\r\n                                               <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                                 <thead>\r\n                                 <tr>\r\n                                        <th align=\"left\" width=\"48.5%\" bgcolor=\"#d9e5ee\" style=\"padding:5px 9px 6px 9px; border:1px solid #bebcb7; border-bottom:none; line-height:1em;\">Shipping \r\n                                      Information:</th>\r\n                                       <th width=\"3%\"></th>\r\n                                      <th align=\"left\" width=\"48.5%\" bgcolor=\"#d9e5ee\" style=\"padding:5px 9px 6px 9px; border:1px solid #bebcb7; border-bottom:none; line-height:1em;\">Shipping \r\n                                      Method:</th>\r\n                                    </tr>\r\n                                   </thead>\r\n                                    <tbody>\r\n                                 <tr>\r\n                                        <td valign=\"top\" style=\"padding:7px 9px 9px 9px; border:1px solid #bebcb7; border-top:0; background:#f8f7f5;\">{{var order.shipping_address.format(\'html\')}}</td>\r\n                                     <td>&nbsp;</td>\r\n                                     <td valign=\"top\" style=\"padding:7px 9px 9px 9px; border:1px solid #bebcb7; border-top:0; background:#f8f7f5;\">{{var order.shipping_description}}</td>\r\n                                   </tr>\r\n                                   </tbody>\r\n                                </table><br/>\r\n\r\n{{var items_html}}<br/>\r\n      {{var order.getEmailCustomerNote()}}                          \r\n                                <p>Thank you again,<br/><strong>Magento Demo Store</strong></p>\r\n\r\n\r\n                             </td>\r\n                           </tr>\r\n                       </table>\r\n                    \r\n                    </td>\r\n               </tr>\r\n           </table>\r\n            </div>\r\n' WHERE template_code='New order (HTML)';
");

$installer->endSetup();
