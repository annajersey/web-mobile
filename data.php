<?php

$data = [
    [
        "Offline access", //factor
        "Do you need to provide users with offline access to some content (like documents, notes, images etc)?", //Description
        0.9, // mobile
        0.1, //web
        0, //only web
        0 //only mobile

    ],
    [
        "Anytime/any place/any device access",
        "Do you need to provide users with the ability to access the service any time/any place/any device just using the Web connection?
    For example, some software sales reps need such functionality to show their prospects some product from their own devices.",
        0.1,
        0.9,
        1,
        0
    ],
    [
        "Personalization",
        "Do you need to create database of users to deliver personalized interfaces (like dashboard layout preferences ) or personalized data storage (like personal notes folders)?",
        0.9,
        0.2,
        0,
        1
    ],
    [
        "Interactivity",
        "Are you going to employ interactive functionality like moving objects on screen(interactive blocks builder) or drawing something (for example signature on the touchscreen) or something more complex than taping/swiping?",
        0.8,
        0.2,
        0,
        1
    ],
    [
        "Calculations or reporting",
        "Do you need any reporting functionality (plots/graphs based on real-time data or interactive reports) or complex calculations functionality (like business or learning indicators calculation)?",
        0.9,
        0.1,
        0,
        1
    ],
    [
        "Smartphone functionalities interoperability",
        "Do you need to use some native functionality (like camera, GPS module, microphone, QR scanner, messenger, fingerprint scannes…) to deliver your service to users?",
        0.9,
        0.1,
        0,
        1
    ], 7 => [
        "Notifications",
        "Do you need notifications functionality when user doesn't actually use your service (like push notifications)?",
        0.9,
        0.1,
        0,
        1
    ],
    [
        "Updates",
        "Is it crucial for your service to be always updated?
YES means that you need to deliver updates to your app without users' permission and on all types of devices simultaneously",
        0.2,
        0.8,
        1,
        0
    ],
    [
        "Functionality Restrictions",
        "Does your service concept comply with App Store and Google Play requirements?
(A LOT of apps don't pass the requirements of the App Store because of speed, design and other 114 criteria)",
        0.8,
        0.2,
        1,
        1
    ],
    [
        "Budget",
        "Do you have limitations in budget?
Try to estimate costs of mobile apps that deliver similar services. If similar projects' cost is significantly higher than your budget, choose YES",
        0.3,
        0.7,
        1
    ]
];


