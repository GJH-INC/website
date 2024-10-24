<?php get_header(); ?>
<main class="mx-auto">
    <section class="hero sect-cont mx-auto">
        <h1 class="text-center">Leave the Tech to us</h1>
        <p class="text-center">
            GJH INC offers companies the ability to quickly respond to technology initiatives by strategically acquiring skills and cost-effectively managing available resources.
            GJH INC provides strategic consulting technology, services and managed services to commercial, not for profit
            and government organizations.
        </p>
        <button class="text-center bg-black text-white">
            Talk to Us
        </button>
    </section>

    <section class="features bg-white">
        <div class="sect-cont mx-auto">
            <h2 class="text-center">A passion to see you leap forward</h2>
            <p>
                Reliable, innovative IT professionals from us can help you take your company to the next level and yet give you the flexibility to take on your greatest challenges without the expense, delay, or inconvenience of lengthy processes.
            </p>
            <div>
                <h3 class="underlined-h3">Our Services?</h3>
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
    <section class="expertise bg-white">
        <div class="sect-cont mx-auto">
            <h3 class="underlined-h3">Resource Solutions </h3>
            <div>
                <div class="flex flex-row expt">
                    <div class="expt-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/images/rsrc.webp" class="" />
                    </div>
                    <div class="expt-details">
                        <p>
                            Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers.
                        </p>
                    </div>
                </div>
                <div class="flex flex-row expt">
                    <div class="expt-details">
                        <p>
                            GJH INC offers companies the ability to quickly respond to technology initiatives by strategically acquiring skills and cost-effectively managing available resources.
                        </p>
                    </div>
                    <div class="expt-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/images/expert2.webp" class="" />
                    </div>
                </div>
                <div class="flex flex-row expt">
                    <div class="expt-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/images/years.webp" class="" />
                    </div>
                    <div class="expt-details">
                        <p>
                            With over 15 years of experience in delivering innovative solutions and support services to both public and private sector clients, we are confident that our expertise aligns with your needs and goals for this initiative.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="expertise bg-white">
        <div class="sect-cont mx-auto">
            <h3 class="underlined-h3">What sets us apart </h3>
            <div class="values-container">
                <div class="value-box">
                    <div class="value-title">
                        <img width="40px" height="40px" src="<?php echo get_template_directory_uri(); ?>/asset/images/people.webp" alt="Our People Icon">
                        <h4>Our People</h4>
                    </div>
                    <p>Our strength lies in our people. We invest in their growth to ensure they are equipped to drive innovation and excellence for our clients.</p>
                </div>
                <div class="value-box">
                    <div class="value-title">
                        <img width="50px" height="50px" src="<?php echo get_template_directory_uri(); ?>/asset/images/perf.webp" alt="Performance-Based Processes Icon">
                        <h4>Performance-Based Processes</h4>
                    </div>
                    <p>We follow proven, performance-driven processes that streamline our work, delivering consistent and measurable results.</p>
                </div>
                <div class="value-box">
                    <div class="value-title">
                        <img width="40px" height="40px" src="<?php echo get_template_directory_uri(); ?>/asset/images/solution.webp" alt="Integrated Solutions Teams Icon">
                        <h4>Integrated Solutions Teams</h4>
                    </div>
                    <p>Our teams are cross-functional, integrating diverse skills to tackle complex challenges and deliver holistic solutions.</p>
                </div>
                <div class="value-box">
                    <div class="value-title">
                        <img width="45px" height="45px" src="<?php echo get_template_directory_uri(); ?>/asset/images/crm.webp" alt="Client Relationship Management Icon">
                        <h4>Client Relationship Management</h4>
                    </div>
                    <p>We prioritize building lasting relationships with clients, understanding their needs to provide long-term value.</p>
                </div>
                <div class="value-box">
                    <div class="value-title">
                        <img width="45px" height="45px" src="<?php echo get_template_directory_uri(); ?>/asset/images/strategy.webp" alt="Strategic Mix Icon">
                        <h4>Strategic Mix of Tech and Business</h4>
                    </div>
                    <p>We blend cutting-edge technology with a deep understanding of business strategies to create solutions that drive growth.</p>
                </div>
            </div>
        </div>
        
    </section>
    <section class="collab text-white">
        <div >
            <div class="sect-cont mx-auto flex flex-row justify-center collab-container">
                <div class="collab-process">
                    <h3>We are ready to collaborate</h3>
                    <div class="flex flex-col items-center">
                        <p>
                            Collaborate with fellow architects.
                        </p>
                        <img width="45px" height="45px" src="<?php echo get_template_directory_uri(); ?>/asset/images/down.svg" alt="down icon"/>
                        <p>
                            Showcase your projects.
                        </p>
                        <img width="45px" height="45px" src="<?php echo get_template_directory_uri(); ?>/asset/images/down.svg" alt="down icon"/>
                        <p>
                            Experience the world of Tech.
                        </p>
                    </div>
                </div>
                <div class="contact">
                    <h2>Contact</h2>
                    <form class="flex flex-col">
                        <input type="text" placeholder="name*">
                        <input type="email" placeholder="Email*"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>
