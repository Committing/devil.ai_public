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
            'tirone.png' => array( 'data' => 'Admin#9999' ),
            'angel.png' => array( 'data' => 'Cyrus#3693' ),
            'stifler.png' => array( 'data' => 'StiflerCosmin#3659' )
        ),
        'primary_contributors' => array(
            'jack.png' => array( 'data' => '' )
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
        'SP' => array(
            'ESFP' => array('all' => 0.11, 'male' => 0.08, 'female' => 0.14),
            'ESTP' => array('all' => 0.1, 'male' => 0.125, 'female' => 0.075),
            'ISFP' => array('all' => 0.06, 'male' => 0.05, 'female' => 0.07),
            'ISTP' => array('all' => 0.06, 'male' => 0.085, 'female' => 0.035)
        ),
        'SJ' => array(
            'ESFJ' => array('all' => 0.12, 'male' => 0.07, 'female' => 0.17),
            'ESTJ' => array('all' => 0.13, 'male' => 0.16, 'female' => 0.1),
            'ISFJ' => array('all' => 0.07, 'male' => 0.04, 'female' => 0.1),
            'ISTJ' => array('all' => 0.085, 'male' => 0.105, 'female' => 0.065)
        ),
        'NF' => array(
            'ENFP' => array('all' => 0.07, 'male' => 0.06, 'female' => 0.08),
            'ENFJ' => array('all' => 0.04, 'male' => 0.025, 'female' => 0.055),
            'INFP' => array('all' => 0.02, 'male' => 0.015, 'female' => 0.025),
            'INFJ' => array('all' => 0.01, 'male' => 0.005, 'female' => 0.015)
        ),
        'NT' => array(
            'ENTP' => array('all' => 0.045, 'male' => 0.06, 'female' => 0.03),
            'ENTJ' => array('all' => 0.04, 'male' => 0.055, 'female' => 0.025),
            'INTP' => array('all' => 0.025, 'male' => 0.04, 'female' => 0.01),
            'INTJ' => array('all' => 0.015, 'male' => 0.025, 'female' => 0.005)
        )
    );

    public static $personality_compatibility = array(
        'INFP' => array( 4, 4, 5, 5, 4, 5, 4, 4, 1, 1, 1, 1, 2, 2, 2, 2 ),
        'ENFP' => array( 4, 4, 5, 4, 5, 4, 4, 4, 1, 1, 1, 1, 2, 2, 2, 2 ),
        'INFJ' => array( 5, 5, 4, 4, 4, 4, 1, 5, 2, 2, 1, 1, 2, 2, 2, 2 ),
        'ENFJ' => array( 5, 4, 4, 4, 4, 4, 4, 4, 5, 1, 1, 1, 2, 2, 2, 2 ),
        'INTJ' => array( 4, 5, 4, 4, 4, 4, 5, 5, 3, 3, 3, 3, 2, 2, 2, 2 ),
        'ENTJ' => array( 5, 4, 4, 4, 4, 4, 5, 4, 3, 3, 3, 3, 3, 3, 3, 3 ),
        'INTP' => array( 4, 4, 1, 4, 5, 5, 4, 4, 3, 3, 3, 3, 2, 2, 2, 5 ),
        'ENTP' => array( 4, 4, 5, 4, 5, 4, 4, 4, 3, 3, 3, 3, 2, 2, 2, 2 ),
        'ISFP' => array( 1, 1, 2, 5, 3, 3, 3, 3, 2, 2, 2, 2, 3, 5, 3, 5 ),
        'ESFP' => array( 1, 1, 2, 1, 3, 3, 3, 3, 2, 2, 2, 2, 5, 3, 5, 3 ),
        'ISTP' => array( 1, 1, 1, 1, 3, 3, 3, 3, 2, 2, 2, 2, 3, 5, 3, 5 ),
        'ESTP' => array( 1, 1, 1, 1, 3, 3, 3, 3, 2, 2, 2, 2, 5, 3, 5, 3 ),
        'ISFJ' => array( 2, 2, 2, 2, 2, 3, 2, 2, 3, 5, 3, 5, 4, 4, 4, 4 ),
        'ESFJ' => array( 2, 2, 2, 2, 2, 3, 2, 2, 5, 3, 5, 3, 4, 4, 4, 4 ),
        'ISTJ' => array( 2, 2, 2, 2, 2, 3, 2, 2, 3, 5, 3, 5, 4, 4, 4, 4 ),
        'ESTJ' => array( 2, 2, 2, 2, 2, 3, 5, 2, 5, 3, 5, 3, 4, 4, 4, 4 ),
    );

    // public static $personality_compatibility = array(
    //     'INFP' => array( 4, 4, 5, 5, 4, 4, 4, 4, 1, 1, 4, 4, 4, 5, 2, 2 ),
    //     'ENFP' => array( 4, 4, 5, 4, 5, 4, 4, 4, 1, 1, 1, 1, 2, 2, 2, 2 ),
    //     'INFJ' => array( 5, 5, 4, 4, 4, 4, 5, 5, 2, 2, 1, 1, 2, 2, 2, 2 ),
    //     'ENFJ' => array( 5, 4, 4, 4, 4, 4, 4, 4, 5, 1, 1, 1, 2, 2, 2, 2 ),
    //     'INTJ' => array( 4, 5, 4, 4, 4, 4, 5, 5, 3, 3, 3, 3, 2, 2, 2, 2 ),
    //     'ENTJ' => array( 5, 4, 4, 4, 4, 4, 5, 4, 3, 3, 3, 3, 3, 3, 3, 3 ),
    //     'INTP' => array( 4, 4, 5, 4, 5, 5, 4, 4, 3, 3, 3, 3, 2, 2, 2, 5 ),
    //     'ENTP' => array( 4, 4, 5, 4, 5, 4, 4, 4, 3, 3, 3, 3, 2, 2, 2, 2 ),
    //     'ISFP' => array( 1, 1, 2, 5, 3, 3, 3, 3, 2, 2, 2, 2, 3, 5, 3, 5 ),
    //     'ESFP' => array( 1, 1, 2, 1, 3, 3, 3, 3, 2, 2, 2, 2, 5, 3, 5, 3 ),
    //     'ISTP' => array( 1, 1, 4, 1, 3, 3, 3, 3, 2, 2, 2, 2, 3, 5, 3, 5 ),
    //     'ESTP' => array( 1, 1, 4, 1, 3, 3, 3, 3, 2, 2, 2, 2, 5, 3, 5, 3 ),
    //     'ISFJ' => array( 2, 2, 4, 2, 2, 3, 2, 2, 3, 5, 3, 5, 4, 4, 4, 4 ),
    //     'ESFJ' => array( 2, 2, 5, 2, 2, 3, 2, 2, 5, 3, 5, 3, 4, 4, 4, 4 ),
    //     'ISTJ' => array( 2, 2, 2, 2, 2, 3, 2, 2, 3, 5, 3, 5, 4, 4, 4, 4 ),
    //     'ESTJ' => array( 2, 2, 2, 2, 2, 3, 5, 2, 5, 3, 5, 3, 4, 4, 4, 4 ),
    // );

    public static $personality_traits = array(
        'INTP' => array( 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi', 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te' ),
        'ENTP' => array( 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se', 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni' ),
        'ISFJ' => array( 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni', 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se' ),
        'ESFJ' => array( 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te', 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi' ),
        'ENTJ' => array( 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe', 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti' ),
        'INTJ' => array( 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si', 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne' ),
        'ESFP' => array( 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne', 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si' ),
        'ISFP' => array( 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti', 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe' ),
        'ISTP' => array( 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi', 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te' ),
        'ESTP' => array( 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne', 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si' ),
        'INFJ' => array( 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si', 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne' ),
        'ENFJ' => array( 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te', 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi' ),
        'ESTJ' => array( 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe', 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti' ),
        'ISTJ' => array( 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni', 'ne', 'fi', 'te', 'si', 'ni', 'fe', 'ti', 'se' ),
        'ENFP' => array( 'ne', 'fi', 'te', 'si', 'ni', 'fe', 'ti', 'se', 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni' ),
        'INFP' => array( 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti', 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe' )
    );



    public static $personality_data = array(
        'INFP' => array(
            'ego' => 'INFP',
            'subconscious' => 'ESTJ',
            'unconscious' => 'ENFJ',
            'superego' => 'ISTP',
            'hero' => 'The Healer',
            'description' => 'Moral and ethical people, with a yearning for a meaningful life.'
        ),
        'ENFP' => array(
            'ego' => 'ENFP',
            'subconscious' => 'ISTJ',
            'unconscious' => 'INFJ',
            'superego' => 'ESTP',
            'hero' => 'The Storyteller',
            'description' => 'Outgoing and social people, who are known for their original and creative ideas.'
        ),
        'INFJ' => array(
            'ego' => 'INFJ',
            'subconscious' => 'ESTP',
            'unconscious' => 'ENFP',
            'superego' => 'ISTJ',
            'hero' => 'The Wise Sage',
            'description' => 'Creative and mystical, with a rare combination of vision and willpower.'
        ),
        'ENFJ' => array(
            'ego' => 'ENFJ',
            'subconscious' => 'ISTP',
            'unconscious' => 'INFP',
            'superego' => 'ESTJ',
            'hero' => 'The Protagonist',
            'description' => 'Natural and charismatic leaders who value human relations and are always eager to help.'
        ),
        'INTJ' => array(
            'ego' => 'INTJ',
            'subconscious' => 'ESFP',
            'unconscious' => 'ENTP',
            'superego' => 'ISFJ',
            'hero' => 'The Mastermind',
            'description' => 'Curious and critical thinkers, who value knowledge and logic.'
        ),
        'ENTJ' => array(
            'ego' => 'ENTJ',
            'subconscious' => 'ISFP',
            'unconscious' => 'INTP',
            'superego' => 'ESFJ',
            'hero' => 'The Commander',
            'description' => 'Ambitious and visionary leaders, with a charisma that inspires others.'
        ),
        'INTP' => array(
            'ego' => 'INTP',
            'subconscious' => 'ESFJ',
            'unconscious' => 'ENTJ',
            'superego' => 'ISFP',
            'hero' => 'The Logical Thinker',
            'description' => 'Ingenious inventors with rare insights about the world.'
        ),
        'ENTP' => array(
            'ego' => 'ENTP',
            'subconscious' => 'ISFJ',
            'unconscious' => 'ESFP',
            'superego' => 'INTJ',
            'hero' => 'The Creative Inventor',
            'description' => 'Talented thinkers with a love for challenges.'
        ),
        'ISFP' => array(
            'ego' => 'ISFP',
            'subconscious' => 'ENTJ',
            'unconscious' => 'ESFJ',
            'superego' => 'INTP',
            'hero' => 'The Adventurer',
            'description' => 'Doers with an appreciation for beautiful things, who love exploration and travel.'
        ),
        'ESFP' => array(
            'ego' => 'ESFP',
            'subconscious' => 'INTJ',
            'unconscious' => 'ISFJ',
            'superego' => 'ENTP',
            'hero' => 'Entertainer',
            'description' => 'Playful, social and energetic people, who are often the life of the party.'
        ),
        'ISTP' => array(
            'ego' => 'ISTP',
            'subconscious' => 'ENFJ',
            'unconscious' => 'ESTJ',
            'superego' => 'INFP',
            'hero' => 'The Craftsman',
            'description' => 'Curious and logical analyzers, with a mastery of all kinds of tools.'
        ),
        'ESTP' => array(
            'ego' => 'ESTP',
            'subconscious' => 'INFJ',
            'unconscious' => 'ISTJ',
            'superego' => 'ENFP',
            'hero' => 'The Entrepreneur',
            'description' => 'Cheerful and charming folks, with a practical mind and an eye for details.'
        ),
        'ISFJ' => array(
            'ego' => 'ISFJ',
            'subconscious' => 'ENTP',
            'unconscious' => 'ESFP',
            'superego' => 'INTJ',
            'hero' => 'The Loyal Defender',
            'description' => 'Ethical, kind and reliable protectors, who take responsibilities seriously.'
        ),
        'ESFJ' => array(
            'ego' => 'ESFJ',
            'subconscious' => 'INTP',
            'unconscious' => 'ISFP',
            'superego' => 'ENTJ',
            'hero' => 'The Caregiver',
            'description' => 'Traditional and reliable folks, who always want to help others.'
        ),
        'ISTJ' => array(
            'ego' => 'ISTJ',
            'subconscious' => 'ENFP',
            'unconscious' => 'ESTP',
            'superego' => 'INFJ',
            'hero' => 'The Disciplined Soldier',
            'description' => 'Loyal, honest and reliable individuals, who can dedicate a lot to achieve their goals.'
        ),
        'ESTJ' => array(
            'ego' => 'ESTJ',
            'subconscious' => 'INFP',
            'unconscious' => 'ISTP',
            'superego' => 'ENFJ',
            'hero' => 'The Boss',
            'description' => 'Hardworking and visionary leaders, with a knack for managing people'
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