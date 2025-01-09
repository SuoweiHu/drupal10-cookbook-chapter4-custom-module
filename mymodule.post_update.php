<?php


/**
 * implment one of the the post_update hooks
 * Update "Contact Us" from to have areply message
 */
function mymodule_post_update_change_contactus_reply(){
    $contact_form=\Drupal\contact\Entity\ContactForm::load('contactus');
    $contact_form->setReply(t('Thank you for contacting us, we will reply shortly'));
    $contact_form->save();
}



