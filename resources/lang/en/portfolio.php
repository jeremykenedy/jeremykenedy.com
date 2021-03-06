<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Portfolio Homepage language lines
    |--------------------------------------------------------------------------
    |
    */

    'nav' => [
        'menu'      => 'Menu',
        'contact'   => 'Contact',
    ],

    'home' => [
        'title'         => 'Portfolio of Jeremy Edgar Kenedy',
        'description'   => 'Welcome to the Web Development Portfolio of Jeremy Edgar Kenedy. I Love PHP, Laravel, HTML5, CSS3, JAVASCRIPT, JQUERY, REACT, VUE, MYSQL, and MORE',
    ],

    'portfolio-list' => [
        'title'         => 'All Portfolio of Jeremy Edgar Kenedy',
        'description'   => 'Viewing the Portfolio of Jeremy Edgar Kenedy.',
    ],

    'portfolio-item' => [
        'title'         => '',
        'description'   => 'Viewing the project: ',
        'details'       => 'Details',
        'type'          => 'Type',
        'technologies'  => 'Technologies',
        'link'          => 'Link',
    ],

    'sections' => [
        'about' => [
            'intro'     => 'Hi, I am Jeremy Kenedy!',
            'textTitle' => 'A little bit about me',
            'text'      => '<p>Love programming everyday. Practice compassion and kindness to all. Striving to be a better person and father. Love giving back and helping others.</p><p>I moved to Portland in 2014 ago and I love it here!  I love the culture, the weather, the scenery, and the strong development communities.  I am delighted to call the pacific northwest my home.</p><p>I am a motivated and self-organized software engineering manager that enjoys leading teams to provide superior quality deliverables to the organization. Confident in my development in leadership and engineering skills. Experience in advanceded OOP and a huge Laravel enthusiast. I have passion for software engineering, growing others, and being an awesome leader which I believe shows in the work I have done and the teams I have led.</p><p>I strive to learn every day and believe in strong ethics and high integrity. As an excellent team player with great collaboration skills, I understand the complexity of team dynamics and thrive in such an environment. In my spare time, I enjoy exploring Beautiful Portland with my sons.</p>',
        ],
        'blog' => [
            'noPosts' => 'No Recent Posts',
        ],
        'portfolio' => [
            'navTitle'  => 'Portfolio Projects',
            'noItems'   => 'No Portfolio Projects',
        ],
        'portfolio-item' => [
            'navTitle'  => 'Project: :name',
        ],
    ],

    'contactForm' => [
        'labels' => [
            'name'      => 'Name*',
            'email'     => 'Email*',
            'subject'   => 'Subject',
            'message'   => 'Type your message here*',
        ],
        'messages' => [
            'successMsg'        => 'Your message was sent!',
            'serverErrorMsg'    => 'Server error',
        ],
        'submitButton' => 'Send message',
    ],

    'footer' => [
        'nav' => [
            'github'  => 'GitHub',
            'license' => 'License',
        ],
        'contact' => [
            'emailIcon' => 'fa-envelope-square',
            'phoneIcon' => 'fa-phone-square',
        ],
        'copyright' => '&copy; '.date('Y').' | Developed with Love <i class="fa fa-heart text-danger"></i><br /> by '.config('blog.author'),
    ],
];
