<?php
/**
 * Template Name: Leadership
 * 
 */

get_header();
?>

<div class="w-screen bg-pink">
    <div class="container">
        <div class="flex flex-wrap py-18">
            <div class="w-3/5">
                <div class="flex flex-wrap">
                    <div class="text-xxxl text-white font-oswald font-medium">CONTACT OUR</div>
                    <div class="text-xxxl text-black font-oswald font-medium">NEWSROOM TEAM</div>

                    <p class="text-white py-4 w-3/4">There is a lot of exciting stuff going on in the stars above us that makes astronomy so much fun. The universe is constantly changing and moving.</p>

                    <form class="w-full pt-6" action="#" method="post">
                        <div class="">
                            <input class="border-white border bg-pink px-6 py-8 my-2 text-white text-xl font-oswald tracking-wider w-3/4" type="text" placeholder="YOUR NAME">
                        </div>

                        <div>
                            <input class="border-white border bg-pink px-6 py-8 my-2 text-white text-xl font-oswald tracking-wider w-3/4" type="email" placeholder="YOUR EMAIL">
                        </div>

                        <div>
                            <input class="border-white border bg-pink px-6 py-8 my-2 text-white text-xl font-oswald tracking-wider w-3/4" type="text" placeholder="SUBJECT">
                        </div>
                
                        <input class="bg-black text-white py-8 my-2 text-white font-oswald text-xl  tracking-wider w-3/4" type="submit" value="SEND"></input>
                    </form>
                </div>
            </div>
            <div class="w-2/5">
                <img class="absolute mt-4" src="<?php echo get_template_directory_uri(); ?>/public/images/contact.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="flex flex-wrap py-8">
        <div class="w-full md:w-1/2 lg:w-1/3 py-4">
            <div class="font-oswald text-pink uppercase mb-4 text-xl">Address</div>
            <p>
                709 Honey Creek Dr.
            </p>
            <p>
                New York, NY 10028
            </p>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 py-4">
            <div class="font-oswald text-pink uppercase mb-4 text-xl">Contacts</div>
            <p>
                +1 (315) 754-2205
            </p>
            <p>
                mail@company.com
            </p>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 py-4">
            <div class="font-oswald text-pink uppercase mb-4 text-xl">Working Hours</div>
            <p>
                Mon-Fri 9am-10pm
            </p>
        </div>
    </div>
</div>

<?php
get_footer();