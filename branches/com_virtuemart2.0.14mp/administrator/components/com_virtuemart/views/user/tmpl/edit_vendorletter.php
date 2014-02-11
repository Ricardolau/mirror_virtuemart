<?php
/**
*
* Modify user form view, User info
*
* @package	VirtueMart
* @subpackage User
* @author Oscar van Eijk
* @author Yagendoo Media Team
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: edit_vendor.php 6303 2012-08-01 07:42:16Z alatak $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access'); 

if(!file_exists(JPATH_VM_LIBRARIES.DS.'tcpdf'.DS.'tcpdf.php')){
	vmError('vmPdf: For the pdf, you must install the tcpdf library at '.JPATH_VM_LIBRARIES.DS.'tcpdf');
}
?>
<div class="col50">
	<p><?php echo JText::_('COM_VIRTUEMART_VENDORLETTER_DESC') ?></p>

	<table class="admintable">
		<!-- Invoice fieldset -->
		<tr>
			<td>
				<fieldset>
					<legend>
						<?php echo JText::_('COM_VIRTUEMART_VENDOR_FIELD_INVOICE'); ?>
					</legend>

					<table class="admintable">
						<td valign="top" width="60%">
							<table class="admintable">
								<!-- Invoice head -->
								<tr>
									<td>
										<fieldset>
											<legend>
												<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_HEAD') ?>
											</legend>

											<table class="admintable">
												<colgroup>
													<col width="25%">
													<col width="25%">
													<col width="25%">
													<col width="25%">
												</colgroup>

												<tr>
													<td class="key">
														<label for="vendor_letter_header"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_HEADER'); ?>:</label>
													</td>
													<td>
														<?php echo VmHTML::checkbox('vendor_letter_header', $this->vendor->vendor_letter_header); ?>
													</td>
													<td class="key">
														<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_HEADER_CELL_RATIO'); ?>:
													</td>
													<td>
														<input type="text" size="7" class="text_area" value="<?php echo $this->vendor->vendor_letter_header_cell_height_ratio; ?>" id="vendor_letter_header_cell_height_ratio" name="vendor_letter_header_cell_height_ratio">
													</td>
												</tr>
						
												<tr>
													<td class="key">
														<label for="vendor_letter_header_line"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_HEADER_LINE'); ?>:</label>
													</td>
													<td>
														<?php echo VmHTML::checkbox('vendor_letter_header_line', $this->vendor->vendor_letter_header_line); ?>
													</td>
													<td class="key">
														<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_HEADER_LINE_COLOR'); ?>:
													</td>
													<td>
														<input type="text" size="7" class="text_area" value="<?php echo $this->vendor->vendor_letter_header_line_color; ?>" id="vendor_letter_header_line_color" name="vendor_letter_header_line_color">
													</td>
												</tr>
								
												<tr>
													<td class="key">
														<label for="vendor_letter_header_image"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_HEADER_IMAGE'); ?>:</label>
													</td>
													<td>
														<?php echo VmHTML::checkbox('vendor_letter_header_image', $this->vendor->vendor_letter_header_image); ?>
													</td>
													<td class="key">
														<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_HEADER_IMAGESIZE'); ?>:
													</td>
													<td>
														<input type="text" size="7" class="text_area" value="<?php echo $this->vendor->vendor_letter_header_imagesize; ?>" id="vendor_letter_header_imagesize" name="vendor_letter_header_imagesize"><?php echo JText::_('COM_VIRTUEMART_UNIT_SYMBOL_MM') ?>
													</td>
												</tr>
								
												<tr>
													<td colspan="4">
														<?php echo $this->editor->display('vendor_letter_header_html', $this->vendor->vendor_letter_header_html, '100%', 200, 70, 15)?><br clear="all"/>
														<p><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_REPLACEMENTS_DESC'); ?></p>
													</td>
												</tr>
											</table>
										</fieldset>
									</td>
								</tr>
								<!-- /Invoice head -->
						
								<!-- Invoice free text 1 -->
								<tr>
									<td>
										<fieldset>
											<legend>
												<?php echo JText::_('COM_VIRTUEMART_VENDOR_INVOICE_FREE1') ?>
											</legend>
						
											<table class="admintable" width="100%">
												<tr>
													<td>
														<?php echo $this->editor->display('vendor_invoice_free1', $this->vendor->vendor_invoice_free1, '100%', 200, 70, 15)?><br clear="all"/>
														<p><?php echo JText::_('COM_VIRTUEMART_VENDOR_INVOICE_FREE1_DESC'); ?></p>
													</td>
												</tr>
											</table>
										</fieldset>
									</td>
								</tr>
								<!-- /Invoice free text 1 -->
						
								<!-- Invoice free text 2 -->
								<tr>
									<td>
										<fieldset>
											<legend>
												<?php echo JText::_('COM_VIRTUEMART_VENDOR_INVOICE_FREE2') ?>
											</legend>
						
											<table class="admintable" width="100%">
												<tr>
													<td>
														<?php echo $this->editor->display('vendor_invoice_free2', $this->vendor->vendor_invoice_free2, '100%', 200, 70, 15)?><br clear="all"/>
														<p><?php echo JText::_('COM_VIRTUEMART_VENDOR_INVOICE_FREE2_DESC'); ?></p>
													</td>
												</tr>
											</table>
										</fieldset>
									</td>
								</tr>
								<!-- /Invoice free text 2 -->
						
								<!-- Invoice footer -->
								<tr>
									<td>
										<fieldset>
											<legend>
												<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FOOT') ?>
											</legend>
						
											<table class="admintable" width="100%">
												<colgroup>
													<col width="25%">
													<col width="25%">
													<col width="25%">
													<col width="25%">
												</colgroup>
						
												<tr>
													<td class="key">
														<label for="vendor_letter_footer"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FOOTER'); ?>:</label>
													</td>
													<td >
														<?php echo VmHTML::checkbox('vendor_letter_footer', $this->vendor->vendor_letter_footer); ?>
													</td>
													<td class="key">
														<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FOOTER_CELL_RATIO'); ?>:
													</td>
													<td>
														<input type="text" size="7" class="text_area" value="<?php echo $this->vendor->vendor_letter_footer_cell_height_ratio; ?>" id="vendor_letter_footer_cell_height_ratio" name="vendor_letter_footer_cell_height_ratio">
													</td>
												</tr>
						
												<tr>
													<td class="key">
														<label for="vendor_letter_footer_line"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FOOTER_LINE'); ?>:</label>
													</td>
													<td >
														<?php echo VmHTML::checkbox('vendor_letter_footer_line', $this->vendor->vendor_letter_footer_line); ?>
													</td>
													<td class="key">
														<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FOOTER_LINE_COLOR'); ?>:
													</td>
													<td>
														<input type="text" size="7" class="text_area" value="<?php echo $this->vendor->vendor_letter_footer_line_color; ?>" id="vendor_letter_footer_line_color" name="vendor_letter_footer_line_color">
													</td>
												</tr>
								
												<tr>
													<td colspan="4">
													<?php echo $this->editor->display('vendor_letter_footer_html', $this->vendor->vendor_letter_footer_html, '100%', 200, 70, 15)?><br clear="all"/>
														<p><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_REPLACEMENTS_DESC'); ?></p>
													</td>
												</tr>
											</table>
										</fieldset>
									</td>
								</tr>
								<!-- /Invoice footer -->
							</table>
						</td>

						<td valign="top" width="40%">
							<!-- Invoice page geometry -->
							<fieldset>
								<legend>
									<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_PAGE') ?>
								</legend>
			
								<table class="admintable">
									<?php echo VmHTML::row('select', 'COM_VIRTUEMART_VENDOR_LETTER_FORMAT', 
										'vendor_letter_format', array('A4'=>JText::_('COM_VIRTUEMART_VENDOR_LETTER_A4'), 'Letter'=>JText::_('COM_VIRTUEMART_VENDOR_LETTER_LETTER')), 
										$default=$this->vendor->vendor_letter_format, $attrib='', 'value', 'text', 
										$zero=false); ?> 
									<?php echo VmHTML::row('select', 'COM_VIRTUEMART_VENDOR_LETTER_ORIENTATION', 
										'vendor_letter_orientation', array('P'=>JText::_('COM_VIRTUEMART_VENDOR_LETTER_ORIENTATION_PORTRAIT'), 'L'=>JText::_('COM_VIRTUEMART_VENDOR_LETTER_ORIENTATION_LANDSCAPE')), 
										$default=$this->vendor->vendor_letter_orientation, $attrib='', 'value', 'text', 
										$zero=false); ?> 
									<tr>
										<td colspan="2">
											<table>
												<thead>
													<colgroup>
														<col width="33%">
														<col width="17%">
														<col width="17%">
														<col width="33%">
													</colgroup>
												</thead>

												<tbody>
													<tr>
														<td colspan=2 align="center">
															<div>
																<span class="key">
																	<label class="hasTip" for="vendor_letter_margin_top" id="vendor_letter_margin_top-lbl"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_MARGIN_TOP'); ?></label>:
																</span><br/>
																<span style="white-space:nowrap"><input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_margin_top; ?>" id="vendor_letter_margin_top" name="vendor_letter_margin_top">mm</span>
															</div>
														</td>
														<td colspan=2 align="center">
															<div>
																<span class="key">
																	<label class="hasTip" for="vendor_letter_margin_header" id="vendor_letter_margin_header-lbl"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_MARGIN_HEADER'); ?></label>:
																</span> <br/>
																<span style="white-space:nowrap"><input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_margin_header; ?>" id="vendor_letter_margin_header" name="vendor_letter_margin_header">mm</span>
															</div>
														</td>
													</tr>

													<tr>
														<td align="center">
															<div>
																<span class="key"><label class="hasTip" for="vendor_letter_margin_left" id="vendor_letter_margin_left-lbl"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_MARGIN_LEFT'); ?></label>:</span> <br/>
																<span style="white-space:nowrap"><input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_margin_left; ?>" id="vendor_letter_margin_left" name="vendor_letter_margin_left">mm</span>
															</div>
														</td>
														<td align="center" colspan=2><img alt="" src="components/com_virtuemart/assets/images/margins-page.png"></td>
														<td align="center" style="height: 50%">
															<div>
																<span class="key"><label class="hasTip" for="vendor_letter_margin_right" id="vendor_letter_margin_right-lbl"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_MARGIN_RIGHT'); ?></label>:</span> <br/>
																<span style="white-space:nowrap"><input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_margin_right; ?>" id="vendor_letter_margin_right" name="vendor_letter_margin_right">mm</span>
															</div>
														</td>
													</tr>

													<tr>
														<td align="center" colspan=2>
															<div>
																<span class="editlinktip"><label class="hasTip" for="vendor_letter_margin_bottom" id="vendor_letter_margin_bottom-lbl"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_MARGIN_BOTTOM'); ?></label>:</span> <br/>
																<span style="white-space:nowrap"><input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_margin_bottom; ?>" id="vendor_letter_margin_bottom" name="vendor_letter_margin_bottom">mm</span>
															</div>
														</td>
														<td align="center" colspan=2>
															<div>
																<span class="editlinktip"><label class="hasTip" for="vendor_letter_margin_footer" id="vendor_letter_margin_footer-lbl"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_MARGIN_FOOTER'); ?></label>:</span> <br/>
																<span style="white-space:nowrap"><input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_margin_footer; ?>" id="vendor_letter_margin_footer" name="vendor_letter_margin_footer">mm</span>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<?php echo VmHTML::row('checkbox', 'COM_VIRTUEMART_VENDOR_LETTER_ADD_TOS', 
										'vendor_letter_add_tos', $this->vendor->vendor_letter_add_tos); ?> 
									<?php echo VmHTML::row('checkbox', 'COM_VIRTUEMART_VENDOR_LETTER_ADD_TOS_PAGEBREAK', 
										'vendor_letter_add_tos_newpage', $default=$this->vendor->vendor_letter_add_tos_newpage); ?> 
								</table>
							</fieldset>
							<!-- /Invoice page geometry -->

							<!-- Invoice page appearance -->
							<fieldset>
								<legend>
									<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FONTS') ?>
								</legend>

								<table class="admintable">
									<tr>
										<td class="key"><span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FONT_TIP'); ?>">
											<label for="vendor_letter_font"><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FONT') ?></label> </span>
										</td>
										<td>
											<?php echo JHTML::_('Select.genericlist', $this->pdfFonts, 'vendor_letter_font', 'size', 'value', 'text', $this->vendor->vendor_letter_font); ?>
											<?php //echo JHTML::link('http://dev.virtuemart.net/','Get More Fonts!','target="_blank"'); ?>
										</td>
									</tr>

									<tr>
										<td class="key">
											<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FONT_SIZE'); ?>:
										</td>
										<td>
											<input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_font_size; ?>" id="vendor_letter_font_size" name="vendor_letter_font_size">pt
										</td>
									</tr>
			
									<tr>
										<td class="key">
											<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FONT_SIZE_HEADER'); ?>:
										</td>
										<td >
											<input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_header_font_size; ?>" id="vendor_letter_header_font_size" name="vendor_letter_header_font_size">pt
										</td>
									</tr>

									<tr>
										<td class="key">
											<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_FONT_SIZE_FOOTER'); ?>:
										</td>
										<td>
											<input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_letter_footer_font_size; ?>" id="vendor_letter_footer_font_size" name="vendor_letter_footer_font_size">pt
										</td>
									</tr>

									<tr>
										<td colspan="2">
											<?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_CSS'); ?>:<br/>
											<textarea style="width: 100%;" class="inputbox" name="vendor_letter_css" id="vendor_letter_css" cols="55" rows="15"><?php echo $this->vendor->vendor_letter_css; ?></textarea>
										</td>
									</tr>
								</table>
							</fieldset>
							<!-- /Invoice page appearance -->
						</td>
					</table>
				</fieldset>
			</td>			
		</tr>
		<!-- /Invoice fieldset -->

		<!-- Email fieldset -->
		<tr>
			<td>
				<fieldset>
					<legend>
						<?php echo JText::_('COM_VIRTUEMART_VENDOR_FIELD_EMAIL'); ?>
					</legend>

					<table class="admintable" width="100%">
						<td valign="top" width="60%">
							<table class="admintable" width="100%">
								<!-- Email free text 1 -->
								<tr>
									<td>
										<fieldset>
											<legend>
												<?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FREE1') ?>
											</legend>
						
											<table class="admintable" width="100%">
												<tr>
													<td>
														<?php echo $this->editor->display('vendor_mail_free1', $this->vendor->vendor_mail_free1, '100%', 200, 70, 15)?><br clear="all"/>
														<p><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FREE1_DESC'); ?></p>
													</td>
												</tr>
											</table>
										</fieldset>
									</td>
								</tr>
								<!-- /Email free text 1 -->
						
								<!-- Email free text 2 -->
								<tr>
									<td>
										<fieldset>
											<legend>
												<?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FREE2') ?>
											</legend>
						
											<table class="admintable" width="100%">
												<tr>
													<td>
														<?php echo $this->editor->display('vendor_mail_free2', $this->vendor->vendor_mail_free2, '100%', 200, 70, 15)?><br clear="all"/>
														<p><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FREE2_DESC'); ?></p>
													</td>
												</tr>
											</table>
										</fieldset>
									</td>
								</tr>
								<!-- /Email free text 2 -->								
							</table>
						</td>

						<td valign="top" width="40%">
							<!-- Mail appearance settings -->
							<fieldset>
								<legend>
									<?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_APPEARANCE') ?>
								</legend>

								<table class="admintable">
									<tr>
										<td class="key">
											<label><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_WIDTH'); ?></label>
										</td>
										<td>
											<input type="text" size="4" class="text_area" value="<?php echo $this->vendor->vendor_mail_width; ?>" id="vendor_mail_width" name="vendor_mail_width">px
										</td>
									</tr>

									<tr>
										<td class="key">
											<label for="vendor_mail_header"><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_HEADER'); ?></label>
										</td>
										<td>
											<?php echo VmHTML::checkbox('vendor_mail_header', $this->vendor->vendor_mail_header); ?>
										</td>
									</tr>

									<tr>
										<td class="key">
											<label for="vendor_mail_tos"><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_TOS'); ?></label>
										</td>
										<td>
											<?php echo VmHTML::checkbox('vendor_mail_tos', $this->vendor->vendor_mail_tos); ?>
										</td>
									</tr>

									<tr>
										<td class="key">
											<label for="vendor_mail_logo"><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_LOGO'); ?></label>
										</td>
										<td>
											<?php echo VmHTML::checkbox('vendor_mail_logo', $this->vendor->vendor_mail_logo); ?>
										</td>
									</tr>

									<tr>
										<td class="key">
											<label><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_LOGO_WIDTH'); ?>:</label>
										</td>
										<td>
											<input type="text" size="4" class="text_area" value="<?php echo $this->vendor->vendor_mail_logo_width; ?>" id="vendor_mail_logo_width" name="vendor_mail_logo_width">px
										</td>
									</tr>

									<tr>
										<td class="key">
											<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FONT_TIP'); ?>">
												<label for="vendor_mail_font"><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FONT') ?>:</label>
											</span>
										</td>
										<td>
											<?php echo JHTML::_('Select.genericlist', $this->pdfFonts, 'vendor_mail_font', 'size', 'value', 'text', $this->vendor->vendor_mail_font); ?>
										</td>
									</tr>

									<tr>
										<td class="key">
											<label><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FONT_SIZE_HEADER'); ?>:</label>
										</td>
										<td>
											<input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_mail_header_font_size; ?>" id="vendor_mail_header_font_size" name="vendor_mail_header_font_size">px
										</td>
									</tr>

									<tr>
										<td class="key">
											<label><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FONT_SIZE'); ?>:</label>
										</td>
										<td>
											<input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_mail_font_size; ?>" id="vendor_mail_font_size" name="vendor_mail_font_size">px
										</td>
									</tr>

									<tr>
										<td class="key">
											<label><?php echo JText::_('COM_VIRTUEMART_VENDOR_MAIL_FONT_SIZE_FOOTER'); ?>:</label>
										</td>
										<td>
											<input type="text" size="3" class="text_area" value="<?php echo $this->vendor->vendor_mail_footer_font_size; ?>" id="vendor_mail_footer_font_size" name="vendor_mail_footer_font_size">px
										</td>
									</tr>

									<tr>
										<td class="key">
											<label><?php echo JText::_('COM_VIRTUEMART_VENDOR_LETTER_CSS'); ?>:</label><br/>
											<textarea style="width: 100%;" class="inputbox" name="vendor_mail_css" id="vendor_mail_css" cols="55" rows="15"><?php echo $this->vendor->vendor_mail_css; ?></textarea>
										</td>
									</tr>
								</table>
							</fieldset>
							<!-- /Mail appearance settings -->
						</td>
					</table>
				</fieldset>
			</td>
		</tr>
		<!-- /Email fieldset -->
	</table>
</div>