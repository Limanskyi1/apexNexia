<?

/*
    Template Name: Contacts
*/


get_header();

?>
<? _e('[:ru][:en][:]'); ?>

<main class="content">
    <? get_template_part( 'part-templates/part_subheader' ); ?>
    <section class="contacts">
        <div class="container">
            <div class="contacts__wrap">
                <div class="contacts__feedback">
                    <h3>
                        <? _e('[:ru]
                               [:en]Contact Us
                               [:]'); ?>
                    </h3>
                    <form action="" class="form__content" id="contacts-form">
                        <div class="contacts__block">
                            <input type="text" placeholder=
                            "<? _e('[:ru]
                                    [:en]Your name
                                    [:]'); ?>" required="" id="fname" name="name">
                        </div>
                        <div class="contacts__block">
                            <input type="tel" placeholder="<? _e('[:ru]
                                                                  [:en]Phone Number
                                                                  [:]'); ?>" required="" id="input-phone" name="phone">
                                                    </div>
                        <div class="contacts__block">
                            <input type="email" placeholder="<? _e('[:ru]
                                                                    [:en]Your Email
                                                                    [:]'); ?>" required="" id="email" name="email">
                        </div>
                        <div class="contacts__block">
                            <textarea name="message" type="text" id="" class="input__msg" placeholder="<? _e('[:ru]
                                                                                                              [:en]Your Comment
                                                                                                              [:]'); ?>" ></textarea>
                        </div>
                        <span id="successMessage" style="display: none;"><? _e('[:ru]
                                                                                 [:en]Your Comment
                                                                                 [:]'); ?></span>
                        <button type="submit" id="submitBtn" class="btn-common contacts__btn">
                            <p>
                                <? _e('[:ru][:en]Submit[:]'); ?>
                            </p>
                        </button>
                    </form>
                </div>
                <div class="contacts__info">
                    <h3>
                        <? _e('[:ru]
                               [:en]Let’s Get In Touch
                               [:]'); ?>
                    </h3>
                    <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/contacts/phone.svg'?>" alt="header logo">
                        <h4>
                            <? _e('[:ru]
                                   [:en]Phone:
                                   [:]'); ?>
                        </h4>
                        <a href="tel:<?php echo get_option('custom_field_value_phone'); ?>">
                            <?php echo get_option('custom_field_value_phone'); ?>
                        </a>
                        <br>
                        <br>
                        <p>WhatsApp:</p>
                        <a href="tel:<?php echo get_option('custom_field_value_phone2'); ?>">
                            <?php echo get_option('custom_field_value_phone2'); ?>
                        </a>
                    </div>
                    <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/contacts/location.svg'?>" alt="">
                        <h4>
                            <? _e('[:ru]
                                   [:en]Address :
                                   [:]'); ?>
                        </h4>
                        <a href="">
                            <?php echo get_option('custom_field_value_address'); ?>
                        </a>
                    </div>
                    <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/contacts/mail.svg'?>" alt="">
                        <h4>
                            <? _e('[:ru]
                                   [:en]Email:
                                   [:]'); ?>
                        </h4>
                        <a href="mailto:<?php echo get_option('custom_field_value_email'); ?>">
                            <?php echo get_option('custom_field_value_email'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<? get_footer() ?>