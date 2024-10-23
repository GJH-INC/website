<?php get_header(); ?>
<main class="mx-auto">
    <section class="hero sect-cont mx-auto">
        <h1 class="text-center">Leave the Tech to us</h1>
        <p class="text-center">
            GJH INC offers companies the ability to quickly respond to technology initiatives by strategically acquiring skills and cost-effectively managing available resources.
            GJH INC provides strategic consulting technology, services and managed services to commercial, not for profit
            and government organizations.
        </p>
        <button class="text-center">
            Talk to Us
        </button>
    </section>

    <section class="features ">
        <div class="sect-cont mx-auto">
            <h2 class="text-center">A passion to see you leap forward</h2>
            <p>
                Reliable, innovative IT professionals from us can help you take your company to the next level and yet give you the flexibility to take on your greatest challenges without the expense, delay, or inconvenience of lengthy processes.
            </p>
            <div>
                <h3>How we help?</h3>
                <div class="help flex flex-row">
                    <!-- Image -->
                    <div class="off-images flex items-center justify-center">
                        <img id="offerImage"  src="<?php echo get_template_directory_uri(); ?>/asset/images/dev.svg" />
                    </div>
                    
                    <div class="offers-container flex flex-col">
                        <!-- Offer Items -->
                        <div class="gjh-offers">
                            <div class="offers-title">
                                <h4 onclick="toggleDetails(0)">Application & Web Design and Development</h4>
                            </div>
                            <div class="offers-details" style="display:none;">
                                <p>We specialize in crafting innovative and user-friendly applications and websites tailored to your specific needs...</p>
                            </div>
                        </div>

                        <div class="gjh-offers">
                            <div class="offers-title">
                                <h4 onclick="toggleDetails(1)">Commercial Off-the-shelf (COTS) Integration</h4>
                            </div>
                            <div class="offers-details" style="display:none;">
                                <p>Our team seamlessly integrates commercial off-the-shelf software with your existing systems to optimize workflows...</p>
                            </div>
                        </div>

                        <div class="gjh-offers">
                            <div class="offers-title">
                                <h4 onclick="toggleDetails(2)">Data Quality, Management, Migration and Conversion</h4>
                            </div>
                            <div class="offers-details" style="display:none;">
                                <p>We prioritize data integrity and ensure your data is accurate, accessible, and secure...</p>
                            </div>
                        </div>

                        <div class="gjh-offers">
                            <div class="offers-title">
                                <h4 onclick="toggleDetails(3)">Database Design, Development and Maintenance</h4>
                            </div>
                            <div class="offers-details" style="display:none;">
                                <p>We design, develop, and maintain robust database solutions that efficiently store, manage, and retrieve your critical data...</p>
                            </div>
                        </div>

                        <div class="gjh-offers">
                            <div class="offers-title">
                                <h4 onclick="toggleDetails(4)">Gen AI Solutions</h4>
                            </div>
                            <div class="offers-details" style="display:none;">
                                <p>Harness the power of generative AI with our innovative solutions...</p>
                            </div>
                        </div>

                        <div class="gjh-offers">
                            <div class="offers-title">
                                <h4 onclick="toggleDetails(5)">Architectural Solutions</h4>
                            </div>
                            <div class="offers-details" style="display:none;">
                                <p>Our team provides comprehensive architectural solutions that ensure the scalability, reliability, and performance of your IT infrastructure...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
</main>


<?php get_footer(); ?>
