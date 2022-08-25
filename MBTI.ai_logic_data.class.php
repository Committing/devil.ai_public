<?php


/**
 * Public data for https://MBTI.ai
 */
class MBTI_logic_data extends ai_extended_logic
{

    public static $contributors = array(
        'github_contributors' => array(
            'jack.png' => array( 'data' => 'https://github.com/Committing' )
        ),
        'discord_contributors' => array(
            'tirone.png' => array( 'data' => 'Admin#9999' )
        ),
        'primary_contributors' => array(
            'mwu.jpg' => array( 'data' => '' )
            // 'linda.png' => array( 'data' => '' )
        )
    );

    public static $temperament_probabilities = array(
        'SP' => array('all' => 0.33, 'male' => 0.34, 'female' => 0.32),
        'SJ' => array('all' => 0.405, 'male' => 0.375, 'female' => 0.435),
        'NF' => array('all' => 0.14, 'male' => 0.105, 'female' => 0.175),
        'NT' => array('all' => 0.125, 'male' => 0.18, 'female' => 0.07)
    );

    public static $personality_type_probabilities = array(
        'ESTJ' => array('all' => 0.13, 'male' => 0.16, 'female' => 0.1),
        'ISTJ' => array('all' => 0.085, 'male' => 0.105, 'female' => 0.065),
        'ESTP' => array('all' => 0.1, 'male' => 0.125, 'female' => 0.075),
        'ISTP' => array('all' => 0.06, 'male' => 0.085, 'female' => 0.035),
        'ESFP' => array('all' => 0.11, 'male' => 0.08, 'female' => 0.14),
        'ISFP' => array('all' => 0.06, 'male' => 0.05, 'female' => 0.07),
        'ESFJ' => array('all' => 0.12, 'male' => 0.07, 'female' => 0.17),
        'ISFJ' => array('all' => 0.07, 'male' => 0.04, 'female' => 0.1),
        'ENTP' => array('all' => 0.045, 'male' => 0.06, 'female' => 0.03),
        'INTP' => array('all' => 0.025, 'male' => 0.04, 'female' => 0.01),
        'ENTJ' => array('all' => 0.04, 'male' => 0.055, 'female' => 0.025),
        'INTJ' => array('all' => 0.015, 'male' => 0.025, 'female' => 0.005),
        'ENFJ' => array('all' => 0.04, 'male' => 0.025, 'female' => 0.055),
        'INFJ' => array('all' => 0.01, 'male' => 0.005, 'female' => 0.015),
        'ENFP' => array('all' => 0.07, 'male' => 0.06, 'female' => 0.08),
        'INFP' => array('all' => 0.02, 'male' => 0.015, 'female' => 0.025),
    );

    public static $personality_compatibility = array(
        'INFP' => array( 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 2 ),
        'ENFP' => array( 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 2, 5 ),
        'INFJ' => array( 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 2, 5, 5 ),
        'ENFJ' => array( 5, 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 2, 5, 5, 5 ),
        'INTJ' => array( 5, 5, 5, 5, 4, 5, 5, 5, 5, 5, 5, 2, 5, 5, 5, 5 ),
        'ENTJ' => array( 5, 5, 5, 5, 5, 4, 5, 5, 5, 5, 2, 5, 5, 5, 5, 5 ),
        'INTP' => array( 5, 5, 5, 5, 5, 5, 4, 5, 5, 2, 5, 5, 5, 5, 5, 5 ),
        'ENTP' => array( 5, 5, 5, 5, 5, 5, 5, 4, 2, 5, 5, 5, 5, 5, 5, 5 ),
        'ISFJ' => array( 5, 5, 5, 5, 5, 5, 5, 2, 4, 5, 5, 5, 5, 5, 5, 5 ),
        'ESFJ' => array( 5, 5, 5, 5, 5, 5, 2, 5, 5, 4, 5, 5, 5, 5, 5, 5 ),
        'ISFP' => array( 5, 5, 5, 5, 5, 2, 5, 5, 5, 5, 4, 5, 5, 5, 5, 5 ),
        'ESFP' => array( 5, 5, 5, 5, 2, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, 5 ),
        'ISTP' => array( 5, 5, 5, 2, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5 ),
        'ESTP' => array( 5, 5, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 5 ),
        'ISTJ' => array( 5, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5 ),
        'ESTJ' => array( 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4 ),
    );

    // public static $personality_compatibility = array(
    //     'INFP' => array( 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 2 ),
    //     'ENFP' => array( 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 2, 5 ),
    //     'INFJ' => array( 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 2, 5, 5, 5, 5 ),
    //     'ENFJ' => array( 5, 5, 5, 4, 5, 5, 5, 5, 5, 5, 2, 5, 5, 5, 5, 5 ),
    //     'INTJ' => array( 5, 5, 5, 5, 4, 5, 5, 5, 5, 2, 5, 5, 5, 5, 5, 5 ),
    //     'ENTJ' => array( 5, 5, 5, 5, 5, 4, 5, 5, 2, 5, 5, 5, 5, 5, 5, 5 ),
    //     'INTP' => array( 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, 5, 5, 5, 2, 5, 5 ),
    //     'ENTP' => array( 5, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, 5, 2, 5, 5, 5 ),
    //     'ISFP' => array( 5, 5, 5, 5, 5, 2, 5, 5, 4, 5, 5, 5, 5, 5, 5, 5 ),
    //     'ESFP' => array( 5, 5, 5, 5, 2, 5, 5, 5, 5, 4, 5, 5, 5, 5, 5, 5 ),
    //     'ISTP' => array( 5, 5, 5, 2, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, 5, 5 ),
    //     'ESTP' => array( 5, 5, 2, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, 5 ),
    //     'ISFJ' => array( 5, 5, 5, 5, 5, 5, 5, 2, 5, 5, 5, 5, 4, 5, 5, 5 ),
    //     'ESFJ' => array( 5, 5, 5, 5, 5, 5, 2, 5, 5, 5, 5, 5, 5, 4, 5, 5 ),
    //     'ISTJ' => array( 5, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5 ),
    //     'ESTJ' => array( 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4 ),
    // );

    public static $personality_traits = array(
        'ESTJ' => array( 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe', 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti'  ),
        'ISTJ' => array( 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni'  ),
        'ESTP' => array( 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne', 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si'  ),
        'ISTP' => array( 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi', 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te'  ),
        'ESFP' => array( 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne', 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si'  ),
        'ISFP' => array( 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti', 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe'  ),
        'ESFJ' => array( 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te', 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi'  ),
        'ISFJ' => array( 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni', 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se'  ),
        'ENTP' => array( 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se', 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni'  ),
        'INTP' => array( 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi', 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te'  ),
        'ENTJ' => array( 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe', 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti'  ),
        'INTJ' => array( 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si', 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne'  ),
        'ENFJ' => array( 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te', 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi'  ),
        'INFJ' => array( 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si', 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne'  ),
        'ENFP' => array( 'ne', 'fi', 'te', 'si', 'ni', 'fe', 'ti', 'se', 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni'  ),
        'INFP' => array( 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti', 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe'  ),
    );

    // public static $personality_traits = array(
    //     'INTP' => array( 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi', 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te' ),
    //     'ENTP' => array( 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se', 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni' ),
    //     'ISFJ' => array( 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni', 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se' ),
    //     'ESFJ' => array( 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te', 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi' ),
    //     'ENTJ' => array( 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe', 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti' ),
    //     'INTJ' => array( 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si', 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne' ),
    //     'ESFP' => array( 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne', 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si' ),
    //     'ISFP' => array( 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti', 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe' ),
    //     'ISTP' => array( 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi', 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te' ),
    //     'ESTP' => array( 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne', 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si' ),
    //     'INFJ' => array( 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si', 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne' ),
    //     'ENFJ' => array( 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te', 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi' ),
    //     'ESTJ' => array( 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe', 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti' ),
    //     'ISTJ' => array( 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni', 'ne', 'fi', 'te', 'si', 'ni', 'fe', 'ti', 'se' ),
    //     'ENFP' => array( 'ne', 'fi', 'te', 'si', 'ni', 'fe', 'ti', 'se', 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni' ),
    //     'INFP' => array( 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti', 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe' )
    // );


    public static $trait_relation = array(
        'f' => 't',
        'n' => 's',
        's' => 'n',
        't' => 'f'
    );


    public static $personality_data = array(
        'INFP' => array(
            'ego' => 'INFP',
            'subconscious' => 'ESTJ',
            'unconscious' => 'ENFJ',
            'superego' => 'ISTP',
            'hero' => 'The Healer',
            'description' => 'Moral and ethical people, with a yearning for a meaningful life.',
            'jobs' => array(
                'Biology',
                'Business Administration',
                'Catholic Studies',
                'Communication and Journalism',
                'Education',
                'English',
                'Family Studies',
                'History',
                'Human Resources Management',
                'Music',
                'Psychology',
                'Social Work',
                'Sociology',
                'Theology'
            )
        ),
        'ENFP' => array(
            'ego' => 'ENFP',
            'subconscious' => 'ISTJ',
            'unconscious' => 'INFJ',
            'superego' => 'ESTP',
            'hero' => 'The Storyteller',
            'description' => 'Outgoing and social people, who are known for their original and creative ideas.',
            'jobs' => array(
                'Actuarial Science',
                'Business Administration',
                'Chemestry and Journalism',
                'Computer Sciences',
                'Criminal Justice',
                'English',
                'Marketing',
                'Political Science',
                'Psychology',
                'Social Work',
                'Sociology'
            )
        ),
        'INFJ' => array(
            'ego' => 'INFJ',
            'subconscious' => 'ESTP',
            'unconscious' => 'ENFP',
            'superego' => 'ISTJ',
            'hero' => 'The Wise Sage',
            'description' => 'Creative and mystical, with a rare combination of vision and willpower.',
            'jobs' => array(
                'Catholic Studies',
                'Communication and Journalism',
                'Criminal Justice',
                'Education',
                'English',
                'Family Studies',
                'History',
                'Psychology',
                'Social Work',
                'Theology',
                'Urban Studies'
            )
        ),
        'ENFJ' => array(
            'ego' => 'ENFJ',
            'subconscious' => 'ISTP',
            'unconscious' => 'INFP',
            'superego' => 'ESTJ',
            'hero' => 'The Protagonist',
            'description' => 'Natural and charismatic leaders who value human relations and are always eager to help.',
            'jobs' => array(
                'Business Administration',
                'Catholic Studies',
                'Communication and Journalism',
                'Criminal Justice',
                'Education',
                'English',
                'Family Studies',
                'Human Recources Management',
                'Music',
                'Political Science',
                'Psychology',
                'Social Work',
                'Sociology',
                'Theology',
                'Urban Studies'
            )
        ),
        'INTJ' => array(
            'ego' => 'INTJ',
            'subconscious' => 'ESFP',
            'unconscious' => 'ENTP',
            'superego' => 'ISFJ',
            'hero' => 'The Mastermind',
            'description' => 'Curious and critical thinkers, who value knowledge and logic.',
            'jobs' => array(
                'Biochemistry',
                'Biology',
                'Business Administration',
                'Catholic Studdies',
                'Chemistry',
                'Communication and Jounalism',
                'Computer Sciences',
                'Criminal Justice',
                'Economics',
                'Education',
                'Finance',
                'Geology',
                'Health and Human Preformance',
                'International Business',
                'Mathematices',
                'Physics',
                'Psychology',
                'Sociology',
                'Theology'
            )
        ),
        'ENTJ' => array(
            'ego' => 'ENTJ',
            'subconscious' => 'ISFP',
            'unconscious' => 'INTP',
            'superego' => 'ESFJ',
            'hero' => 'The Commander',
            'description' => 'Ambitious and visionary leaders, with a charisma that inspires others.',
            'jobs' => array(
                'Accounting',
                'Biology',
                'Business Administration',
                'Catholic Studies',
                'Chemistry',
                'Communication and Journalism',
                'Computer Sciences',
                'Criminal Justic',
                'Economics',
                'Education',
                'Finance',
                'Human Resources Management',
                'Marketing',
                'Political Science',
                'Sociology',
                'theology'
            )
        ),
        'INTP' => array(
            'ego' => 'INTP',
            'subconscious' => 'ESFJ',
            'unconscious' => 'ENTJ',
            'superego' => 'ISFP',
            'hero' => 'The Logical Thinker',
            'description' => 'Ingenious inventors with rare insights about the world.',
            'jobs' => array(
                'Biochemistry',
                'Biology',
                'Business Administration',
                'Chemistry',
                'Communication and Journalism',
                'Computer Sciences',
                'Criminal Justice',
                'Economics',
                'Engineering',
                'Finance',
                'Geology',
                'History',
                'Mathematics',
                'Music',
                'Philosophy',
                'Physics',
                'Psychology',
                'Sociology',
                'Statistics'
            )
        ),
        'ENTP' => array(
            'ego' => 'ENTP',
            'subconscious' => 'ISFJ',
            'unconscious' => 'INTJ',
            'superego' => 'ESFP',
            'hero' => 'The Creative Inventor',
            'description' => 'Talented thinkers with a love for challenges.',
            'jobs' => array(
                'Business Administration',
                'Communication and Journalism',
                'Computer Sciences',
                'Criminal Justice',
                'Economics',
                'Finance',
                'Geography',
                'History',
                'International Business',
                'Marketing',
                'Political Science',
                'Psychology',
                'Urban Studies'
            )
        ),
        'ISFP' => array(
            'ego' => 'ISFP',
            'subconscious' => 'ENTJ',
            'unconscious' => 'ESFJ',
            'superego' => 'INTP',
            'hero' => 'The Adventurer',
            'description' => 'Doers with an appreciation for beautiful things, who love exploration and travel.',
            'jobs' => array(
                'Biology',
                'Computer Sciences',
                'Criminal Justice',
                'Education',
                'Enviromental Science',
                'Geology',
                'History',
                'Music',
                'Social Work'
            )
        ),
        'ESFP' => array(
            'ego' => 'ESFP',
            'subconscious' => 'INTJ',
            'unconscious' => 'ISFJ',
            'superego' => 'ENTP',
            'hero' => 'Entertainer',
            'description' => 'Playful, social and energetic people, who are often the life of the party.',
            'jobs' => array(
                'Criminal Justice',
                'Education',
                'Family Studies',
                'Geology',
                'Health and Human Preformance',
                'Human Recources Management',
                'Music',
                'Political Science',
                'Psychology',
                'Social Work',
                'Sociology'
            )
        ),
        'ISTP' => array(
            'ego' => 'ISTP',
            'subconscious' => 'ENFJ',
            'unconscious' => 'ESTJ',
            'superego' => 'INFP',
            'hero' => 'The Craftsman',
            'description' => 'Curious and logical analyzers, with a mastery of all kinds of tools.',
            'jobs' => array(
                'Biology',
                'Business Administration',
                'Computer Sciences',
                'Criminal Justice',
                'Economics',
                'Education',
                'Engineering',
                'Finance',
                'Geology',
                'Health and Human Preformance',
                'Mathmatics'
            )
        ),
        'ESTP' => array(
            'ego' => 'ESTP',
            'subconscious' => 'INFJ',
            'unconscious' => 'ISTJ',
            'superego' => 'ENFP',
            'hero' => 'The Entrepreneur',
            'description' => 'Cheerful and charming folks, with a practical mind and an eye for details.',
            'jobs' => array(
                'Biology',
                'Communication and Journalism',
                'Computer Sciences',
                'Criminal Justice',
                'Education',
                'Entrepreneurship',
                'Finance',
                'Marketing',
                'Music'
            )
        ),
        'ISFJ' => array(
            'ego' => 'ISFJ',
            'subconscious' => 'ENTP',
            'unconscious' => 'ESFP',
            'superego' => 'INTJ',
            'hero' => 'The Loyal Defender',
            'description' => 'Ethical, kind and reliable protectors, who take responsibilities seriously.',
            'jobs' => array(
                'Biochemistry',
                'Biology',
                'Catholic Studies',
                'Computer Sciences',
                'Criminal Justice',
                'Education',
                'Finance',
                'History',
                'Music',
                'Psychology',
                'Social Work',
                'Theology'
            )
        ),
        'ESFJ' => array(
            'ego' => 'ESFJ',
            'subconscious' => 'INTP',
            'unconscious' => 'ISFP',
            'superego' => 'ENTJ',
            'hero' => 'The Caregiver',
            'description' => 'Traditional and reliable folks, who always want to help others.',
            'jobs' => array(
                'Accounting',
                'Catholic Studies',
                'Chemestry',
                'Criminal Justice',
                'Education',
                'Family Studies',
                'Health and Human Preformance',
                'Marketing',
                'Psychology',
                'Social Work',
                'Theology'
            )
        ),
        'ISTJ' => array(
            'ego' => 'ISTJ',
            'subconscious' => 'ENFP',
            'unconscious' => 'ESTP',
            'superego' => 'INFJ',
            'hero' => 'The Disciplined Soldier',
            'description' => 'Loyal, honest and reliable individuals, who can dedicate a lot to achieve their goals.',
            'jobs' => array(
                'Accounting',
                'Biology',
                'Business Administration',
                'Communication and Journalosm',
                'Computer Sciences',
                'Criminal Justice',
                'Education',
                'English',
                'Finance',
                'Geology'
            )
        ),
        'ESTJ' => array(
            'ego' => 'ESTJ',
            'subconscious' => 'INFP',
            'unconscious' => 'ISTP',
            'superego' => 'ENFJ',
            'hero' => 'The Boss',
            'description' => 'Hardworking and visionary leaders, with a knack for managing people',
            'jobs' => array(
                'Accounting',
                'Actuarial Science',
                'Business Administration',
                'Catholic Studies',
                'Criminal Justice',
                'Finance',
                'Justice and Peace Studies',
                'Secondary Education',
                'Social Work',
                'Theology'
            )
        ),
    );

    

    // Legacy
    public static $trait_personality_links = array(
        'fe' => array(
            'ESFJ' => 1.25,
            'ENFJ' => 1.25,
            'ISFJ' => 0.75,
            'INFJ' => 0.75,
            'ESTP' => 0.25,
            'ENTP' => 0.25,
            'ISTP' => -0.25,
            'INTP' => -0.25
        ),
        'fi' => array(
            'ISTP' => 1.25,
            'INFP' => 1.25,
            'ESFP' => 0.75,
            'ENFP' => 0.75,
            'ISTJ' => 0.25,
            'INTJ' => 0.25,
            'ESTJ' => -0.25,
            'ENTJ' => -0.25
        ),
        'ne' => array(
            'ISFJ' => -0.25,
            'ISTJ' => -0.25,
            'ESFJ' => 0.25,
            'ESTJ' => 0.25,
            'INFP' => 0.75,
            'INTP' => 0.75,
            'ENFP' => 1.25,
            'ENTP' => 1.25,
        ),
        'ni' => array(
            'ESFP' => -0.25,
            'ESTP' => -0.25,
            'ISFP' => 0.25,
            'ISTP' => 0.25,
            'ENFJ' => 0.75,
            'ENTJ' => 0.75,
            'INFJ' => 1.25,
            'INTJ' => 1.25
        ),
        'te' => array(
            'ISFP' => -0.25,
            'INFP' => -0.25,
            'ENFP' => 0.25,
            'ESFP' => 0.25,
            'INTJ' => 0.75,
            'ISTJ' => 0.75,
            'ENTJ' => 1.25,
            'ESTJ' => 1.25
        ),
        'ti' => array(
            'ESFJ' => -0.25,
            'ENFJ' => -0.25,
            'INFJ' => 0.25,
            'ISFJ' => 0.25,
            'ENTP' => 0.75,
            'ESTP' => 0.75,
            'INTP' => 1.25,
            'ISTP' => 1.25
        ),
        'se' => array(
            'INFJ' => -0.25,
            'INTJ' => -0.25,
            'ENFJ' => 0.25,
            'ENTJ' => 0.25,
            'ISFP' => 0.75,
            'ISTP' => 0.75,
            'ESFP' => 1.25,
            'ESTP' => 1.25
        ),
        'si' => array(
            'ENFP' => -0.25,
            'ENTP' => -0.25,
            'INFP' => 0.25,
            'INTP' => 0.25,
            'ESFJ' => 0.75,
            'ESTJ' => 0.75,
            'ISFJ' => 1.25,
            'ISTJ' => 1.25
        )
    );


}