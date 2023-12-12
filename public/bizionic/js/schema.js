// Homepage Schema
// Homepage (https://www.bizionictech.com)
const homepageSchema = {
    "@context": "http://schema.org",
    "@type": "Organization",
    name: "Bizionic Technologies",
    description:
        "Empowering businesses through technology and marketing solutions.",
    email: "info@bizionictech.com",
    url: "https://www.bizionictech.com",
    sameAs: [
        "https://www.facebook.com/Bizionictechnologies",
        "https://www.instagram.com/bizionic_technologies",
        "https://twitter.com/bizionictech",
        "https://www.linkedin.com/company/bizionic-technologies-and-marketing-solutions/",
        "https://www.youtube.com/channel/UCDz2zqtte5EZ3_6OAfMl4rw",
    ],
    openingHours: "Mo-Fr 09:00-18:00",
    location: [
        {
            "@type": "PostalAddress",
            streetAddress:
                "3rd Floor, Office No 1A, 6-3-1090/B/4, The Grand Building, KFC Building",
            addressLocality: "Hyderabad",
            addressRegion: "Telangana",
            postalCode: "500082",
            addressCountry: "India",
        },
        {
            "@type": "Organization",
            name: "Bizionic Technologies & Marketing Solution Private Limited",
            address: {
                "@type": "PostalAddress",
                addressLocality: "Kyiv",
                addressRegion: "Podil",
                postalCode: "Yaroslavsky Lane 1/3",
                addressCountry: "Ukraine",
            },
        },
        {
            "@type": "Organization",
            name: "Bugis Junctions Tower",
            address: {
                "@type": "PostalAddress",
                streetAddress: "230 Victoria Street, Level 15",
                addressLocality: "Singapore",
                postalCode: "188024",
                addressCountry: "Singapore",
            },
        },
    ],
};

// About Us Schema
// About Us (http://www.bizionictech.com/about-us)
const aboutUsSchema = {
    "@context": "http://schema.org",
    "@type": "AboutPage",
    name: "About Us - Bizionic Technologies",
    description:
        "At Bizionic Technologies, From Startups to Unicorns, we empower enterprises to thrive in the digital age. Our 150+ strong team, spanning four countries, is dedicated to delivering excellence, one transformative idea at a time. Partner with us to elevate your brand, expand your reach, and accelerate your business growth today.",
};

// Hire Talent Schema
// Hire Talent (http://www.bizionictech.com/hire)

const hireTalentSchema = {
    "@context": "http://schema.org",
    "@type": "WebPage",
    name: "Hire Talent - Bizionic Technologies",
    description:
        "Discover the true potential of your business with the finest talent sourced from Bizionic Technologies. We handpick experts in technology and marketing, ensuring your team is not just good but exceptional. Together, we'll redefine excellence and drive your company to new heights of innovation and success.",
};

// Marketing Schema
// Marketing (http://www.bizionictech.com/marketing)

const marketingSchema = {
    "@context": "http://schema.org",
    "@type": "WebPage",
    name: "Marketing Services - Bizionic Technologies",
    description:
        "Our Marketing Services at Bizionic Technologies are a symphony of innovation and strategy. We craft compelling narratives, design unforgettable brand experiences, and leverage cutting-edge digital tools to captivate your audience. Let's write your brand's success story together.",
};

// Technology Schema
// Technology (http://www.bizionictech.com/technology)

const technologySchema = {
    "@context": "http://schema.org",
    "@type": "WebPage",
    name: "Technologies - Bizionic Technologies",
    description:
        "Bizionic Technologies leads the way in harnessing the power of cutting-edge technologies to propel businesses into the future. Our comprehensive Technology Services encompass everything from software development and AI to blockchain, ensuring you stay ahead of the digital curve.",
};

// Notifications Schema
// Notification Centre (http://www.bizionictech.com/notification-center)

const notificationsSchema = {
    "@context": "http://schema.org",
    "@type": "WebPage",
    name: "Notification Centre - Bizionic Technologies",
    description:
        "At Bizionic Technologies, our Notification and Lead Hub Centre Services empower you to stay connected with your audience in real time. We provide seamless solutions for managing notifications and leads across multiple channels, ensuring your business engages effectively and efficiently.",
};

// InstaHiring Schema
// InstaHiring (http://www.bizionictech.com/InstaHirin)

const instaHiringSchema = {
    "@context": "http://schema.org",
    "@type": "WebPage",
    name: "InstaHiring - Bizionic Technologies",
    description:
        "Are you ready to transform your recruitment process? Look no further than InstaHirin, where we introduce 'Hire Talent in Minutes' and 'Hire Beyond Borders.' With our revolutionary platform, you can hire with confidence, instantly accessing an unlimited pool of professionals. Our candidates are not just prescreened; they're assessed, verified, evaluated, and fully qualified. Experience a new era of global talent acquisition with InstaHirin!",
};

//Hire me Schema (http://www.bizionictech.com/hire-me)

const hireMeSchema = {
    "@context": "http://schema.org",
    "@type": "WebPage",
    name: "Hire Me - Bizionic Technologies",
    description:
        "Unlock Your Potential: Find Success, Quality Work, and Competitive Pay on the Global Stage with BIZIONIC For talented freelancers and professionals, BIZIONIC is your gateway to a world of opportunities. Discover your path to success, access top-quality projects, and command the pay you deserve on the global stage. Join us today and elevate your career to new heights.",
};

// ### Get Connected (http://www.bizionictech.com/get-a-free-consultation)

const getConnectedSchema = {
    "@context": "http://schema.org",
    "@type": "ContactPage",
    name: "Get Connected - Bizionic Technologies",
    description:
        "Connect with Bizionic Technologies and Unleash a World of Possibilities in Technology and Marketing SolutionsJoin hands with Bizionic Technologies to explore a universe of innovative solutions and limitless opportunities in the realms of technology and marketing. Our expertise and dedication open doors to your success in the digital landscape.",
};

///
const proposalFormSchema = {
    "@context": "http://schema.org",
    "@type": "Webpage",
    name: " proposalpage - Bizionic Technologies",
    description:
        "Connect with Bizionic Technologies and Unleash a World of Possibilities in Technology and Marketing SolutionsJoin hands with Bizionic Technologies to explore a universe of innovative solutions and limitless opportunities in the realms of technology and marketing. Our expertise and dedication open doors to your success in the digital landscape.",
};
// Export the Schema objects
module.exports = {
    homepageSchema,
    aboutUsSchema,
    hireTalentSchema,
    marketingSchema,
    technologySchema,
    notificationsSchema,
    instaHiringSchema,
    hireMeSchema,
    getConnectedSchema,
    proposalFormSchema,
};
