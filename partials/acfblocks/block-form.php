<?php 
    if (get_row_layout("block-form")) {
        $section_title = get_sub_field("section_title");
        $section_subtitle = get_sub_field("section_subtitle");
    
        echo "<section class='block-form'>";
            echo "<div class='block-form__wrapper'>";
                echo "<h1> $section_title</h1>";
                echo "<p>$section_subtitle</p>";
            echo "<form action='https://formsubmit.co/leshan@leshanpatterson.com' method='post' target='_self'>
                <input type='hidden' name='_subject' value='New Inquiry From Vediai!'>
                <input type='text' name='_honey' style='display:none'>
                <input type='hidden' name='_autoresponse'Thank you for your submission! We will follow up shortly'>
                        <div id='mc_embed_signup_scroll'>
                <div class='mc-field-group'>
                    <label for='mce-EMAIL'>Email Address  <span class='asterisk'>*</span>
                </label>
                    <input type='text' 'value='' name='name' class=' id='name' placeholder='Name' required>
                    <span id='mce-EMAIL-HELPERTEXT' class='helper_text'></span>
                </div>
                <div class='mc-field-group'>
                    <input type='email' value='' name='email' class='required email' id=email' placeholder='Email' required>
                    <span id='mce-FNAME-HELPERTEXT' class='helper_text'></span>
                </div>
                <div class='mc-field-group size1of2'>
                    <input type='textarea' name='message' class=' 'value='' id='message' placeholder='Message'>
                    <span id='mce-PHONE-HELPERTEXT' class='helper_text'></span>
                </div>
                    <div id='mce-responses' class='clear foot'>
                        <div class='response' id='mce-error-response' style='display:none'></div>
                        <div class='response' id='mce-success-response' style='display:none'></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style='position: absolute; left: -5000px;' aria-hidden='true'><input type='text' name='b_a812a60907b11b75f04fb1261_eccfdf679b' tabindex='-1' 'value=''></div>
                        <div class='optionalParent'>
                            <div class='clear foot'>
                                <input type='submit' value='Send' name='subscribe' id='mc-embedded-subscribe' class='button'>
                            </div>
                        </div>
                    </div>
                </form>";
        echo "</section>";
    }