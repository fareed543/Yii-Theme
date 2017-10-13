<?php
	/* @var $this SiteController */
	/* @var $model LoginForm */
	/* @var $form CActiveForm  */
	
	$this->pageTitle=Yii::app()->name . ' - Login';
	$this->breadcrumbs=array(
	'Login',
	);
?>


<div class="main">	 
	<div class="contact about-desc">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-8 contact_left">
   					<h2>Login</h2>
   					<p class="m_6">Enjoying Yii Template .?</p>
					
					<p class="m_6">Hint: You may login with demo / demo  (or) admin / admin</p>
				</div>
   				<div class="col-md-4">
   					<div class="contact_right">
						<div class="contact-form_grid">
							
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'login-form',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
								'validateOnSubmit'=>true,
								),
							)); ?>
							
							<?php echo $form->textField($model,'username',array('placeholder'=>'Username')); ?>
							<?php echo $form->error($model,'username'); ?>
							
							<?php echo $form->passwordField($model,'password',array('placeholder'=>'Password')); ?>
							<?php echo $form->error($model,'password'); ?> <br />								
							
							<?php echo $form->checkBox($model,'rememberMe'); ?>
							<?php echo $form->label($model,'rememberMe'); ?>
							<?php echo $form->error($model,'rememberMe'); ?>
							
							<div class="row buttons">
								<?php echo CHtml::submitButton('Login'); ?>
							</div>
							
							<?php $this->endWidget(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		