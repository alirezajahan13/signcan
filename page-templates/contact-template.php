<?php

/*

Template Name: Contact Template

*/

get_header();

?>


<div class="contactPageBack">
    <div class="contactPage mainView">
        <div class="generalHeader bottomBorderDark centeredText aboutUsHeading highMargined">
            <h2>Contact Us</h2>
        </div>
        <div class="contactPageSectionUp">
            <div class="contactPageForm">
                <div class="generalHeader mediumWeight">
                    <h4>LET's TALK</h4>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="44" title="Contact form"]') ?>
            </div>
            <div class="contactPageDetail">
                <div class="generalHeader mediumWeight">
                    <h4>GET IN TOUCH</h4>
                </div>
                <div class="contactPageDetailFlex mediumMargined">
                    <a href="#" class="lowMargined">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.574 21.819a1 1 0 0 1-1.149 0l-.002-.002-.006-.004-.018-.014a9.569 9.569 0 0 1-.305-.225A25.152 25.152 0 0 1 7.757 18.5C5.964 16.508 4 13.61 4 10.364c0-2.203.831-4.324 2.325-5.896C7.821 2.894 9.861 2 12 2s4.179.894 5.674 2.468C19.17 6.04 20 8.16 20 10.364c0 3.246-1.964 6.144-3.757 8.135a25.156 25.156 0 0 1-3.337 3.075 15.301 15.301 0 0 1-.305.225l-.018.014-.006.004h-.002v.002ZM9 10a3 3 0 1 1 6 0 3 3 0 0 1-6 0Z" fill="#000"></path></svg>
                        <span>unit 1&2 ,349 Bowes Road, Vaughan, ON L4K 1J3</span>
                    </a>
                    <a href="#" class="lowMargined">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"></path></svg>
                        <span>info@signcan.ca</span>
                    </a>
                    <a href="#" class="lowMargined">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 1200 1200" xml:space="preserve"><path d="m1183.326 997.842-169.187 167.83c-24.974 25.612-58.077 34.289-90.316 34.328-142.571-4.271-277.333-74.304-387.981-146.215C354.22 921.655 187.574 757.82 82.984 559.832 42.87 476.809-4.198 370.878.299 278.209c.401-34.86 9.795-69.073 34.346-91.543L203.831 17.565c35.132-29.883 69.107-19.551 91.589 15.257l136.111 258.102c14.326 30.577 6.108 63.339-15.266 85.188l-62.332 62.3c-3.848 5.271-6.298 11.271-6.36 17.801 23.902 92.522 96.313 177.799 160.281 236.486 63.967 58.688 132.725 138.198 221.977 157.021 11.032 3.077 24.545 4.158 32.438-3.179l72.51-73.743c24.996-18.945 61.086-28.205 87.771-12.714h1.272l245.51 144.943c36.041 22.592 39.799 66.252 13.994 92.815z"></path></svg>
                        <span>+1(416) 838 2346</span>
                    </a>
                    <a href="#" class="lowMargined">
                        <svg width="18" height="18" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><path d="M25 4H11a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm-6 26h-2v-2h2Zm-8-4V6h14v20Z" class="clr-i-solid clr-i-solid-path-1"></path><path fill="none" d="M0 0h36v36H0z"></path></svg>
                        <span>+1(437) 553 8441</span>
                    </a>
                </div>
                <div class="contactPageLocationBox highMargined">
                    <div class="generalHeader mediumWeight mediumMargined">
                        <h4>OUR LOCATION</h4>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16286.371811327232!2d-79.5006885553639!3d43.81330179688494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2e92b7c55555%3A0x465adda5402ef9dc!2s349%20Bowes%20Rd%20Unit%20%231%2C%20Concord%2C%20ON%20L4K%201J3%2C%20Canada!5e0!3m2!1sen!2snl!4v1689153355859!5m2!1sen!2snl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer();