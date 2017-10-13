<?php
	/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
'Contact',
);
?>
<div class="main">	 
	<div class="contact about-desc">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-8 contact_left">
   					<h2>We Want to hear from you</h2>
   					<p class="m_6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla</p>
   					<p class="m_7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<ul class="contact_info">
						<li><i class="fa fa-map-marker"></i><span>Lorem ipsum dolor sit amet, consectetuer <br>adipiscing elit, sed diam nonummy nibh euismod</span><div class="clear"></div></li>
						<li><i class="fa fa-phone"></i><span>Tell: +1-900-235-2456<br>Fax: +1-900-235-2456</span><div class="clear"></div></li>
						<li><i class="fa fa-envelope"></i><span class="msg"><a href="mailto:yourcompany@mail.com">yourcompany(at)mail.com </a></span><div class="clear"></div></li>
					</ul>
				</div>
   				<div class="col-md-4">
   					<div class="contact_right">
						<div class="contact-form_grid">
							
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'contact-form',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
								'validateOnSubmit'=>true,
								),
							)); ?>
							
							
							<?php /*echo $form->errorSummary($model);*/ ?>
							
							<?php if(Yii::app()->user->hasFlash('contact')): ?>
							
							<div class="flash-success">
								<?php echo Yii::app()->user->getFlash('contact'); ?>
							</div>
							<?php else: ?>
							<?php echo $form->textField($model,'name',array('placeholder'=>'Name')); ?>
							<?php echo $form->error($model,'name'); ?>
							
							<?php echo $form->textField($model,'email',array('placeholder'=>'Email')); ?>
							<?php echo $form->error($model,'email'); ?>
							
							<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128,'placeholder'=>'Subject')); ?>
							<?php echo $form->error($model,'subject'); ?>
							
							<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50,'placeholder'=>'Body')); ?>
							<?php echo $form->error($model,'body'); ?>
							
							
							<?php if(CCaptcha::checkRequirements()): ?>				
							<div>
								<?php $this->widget('CCaptcha'); ?>
								<?php echo $form->textField($model,'verifyCode'); ?>
							</div>								
							<?php echo $form->error($model,'verifyCode'); ?>
							<?php endif; ?>
							<?php echo CHtml::submitButton('Submit'); ?>							
							<?php $this->endWidget(); ?>
							
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>		