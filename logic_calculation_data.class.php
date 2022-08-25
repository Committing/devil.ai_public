<?php


/**
 * Further public data for https://MBTI.ai
 */
class logic_calculation_data
{

    public static $personality_defaults = array(
        'INTP' => 0,
        'ENTP' => 0,
        'ISFJ' => 0,
        'ESFJ' => 0,
        'ENTJ' => 0,
        'INTJ' => 0,
        'ESFP' => 0,
        'ISFP' => 0,
        'ISTP' => 0,
        'ESTP' => 0,
        'INFJ' => 0,
        'ENFJ' => 0,
        'ESTJ' => 0,
        'ISTJ' => 0,
        'ENFP' => 0,
        'INFP' => 0,
    );

    public static $personality_traits = array(
        'ESTJ' => array( 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe' ),
        'ISTJ' => array( 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni' ),
        'ESTP' => array( 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne' ),
        'ISTP' => array( 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi' ),
        'ESFP' => array( 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne' ),
        'ISFP' => array( 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti' ),
        'ESFJ' => array( 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te' ),
        'ISFJ' => array( 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni' ),
        'ENTP' => array( 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se' ),
        'INTP' => array( 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi' ),
        'ENTJ' => array( 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe' ),
        'INTJ' => array( 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si' ),
        'ENFJ' => array( 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te' ),
        'INFJ' => array( 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si'/*, 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne'*/ ),
        'ENFP' => array( 'ne', 'fi', 'te', 'si', 'ni', 'fe', 'ti', 'se' ),
        'INFP' => array( 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti' ),
    );


    // public static $personality_traits = array(
    //     'INTP' => array( 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi' ),
    //     'ENTP' => array( 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se' ),
    //     'ISFJ' => array( 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni' ),
    //     'ESFJ' => array( 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te' ),
    //     'ENTJ' => array( 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe' ),
    //     'INTJ' => array( 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si' ),
    //     'ESFP' => array( 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne' ),
    //     'ISFP' => array( 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti' ),
    //     'ISTP' => array( 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi' ),
    //     'ESTP' => array( 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne' ),
    //     'INFJ' => array( 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si'/*, 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne'*/ ),
    //     'ENFJ' => array( 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te' ),
    //     'ESTJ' => array( 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe' ),
    //     'ISTJ' => array( 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni' ),
    //     'ENFP' => array( 'ne', 'fi', 'te', 'si', 'ni', 'fe', 'ti', 'se' ),
    //     'INFP' => array( 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti' ),
    // );

    public static $most_compatible = array(
        'INTP' => array(
            'duo_compatibility'   => array('NJ', 'SP', 'NP', 'SJ'),
            'tri_compatibility'   => array('NTJ', 'SFP', 'NFJ', 'STP', 'STJ', 'NFP', 'SFJ', 'NTP'),
            'stack_compatibility' => array('ENTJ', 'INTJ', 'ESFP', 'ESFP', 'INFJ', 'INFJ', 'ESTP', 'ISTP', 'ESTJ', 'ISTJ', 'ENFP', 'INFP', 'ESFJ', 'ISFJ', 'ENTP', 'INTP'),
            'meta_compatibility'  => array('ESFJ'),
            'golden_pair'         => array('INFJ')
        ),
        'ENTP' => array(
            'duo_compatibility'   => array('NJ', 'SP', 'NP', 'SJ'),
            'tri_compatibility'   => array('NTJ', 'SFP', 'NFJ', 'STP', 'STJ', 'NFP', 'SFJ', 'NTP'),
            'stack_compatibility' => array('INTJ', 'ENTJ', 'ISFP', 'ISFP', 'ENFJ', 'ENFJ', 'ISTP', 'ESTP', 'ISTJ', 'ESTJ', 'INFP', 'ENFP', 'ISFJ', 'ESFJ', 'INTP', 'ENTP'),
            'meta_compatibility'  => array('ISFJ')
        ),
        'ISFJ' => array(
            'duo_compatibility'   => array('SP', 'NJ', 'SJ', 'NP'),
            'tri_compatibility'   => array('SFP', 'NTJ', 'STP', 'NFJ', 'NFP', 'STJ', 'NTP', 'SFJ'),
            'stack_compatibility' => array('ESFP', 'ISFP', 'ENTJ', 'ENTJ', 'ISTP', 'ISTP', 'ENFJ', 'INFJ', 'ENFP', 'INFP', 'ESTJ', 'ISTJ', 'ENTP', 'INTP', 'ESFJ', 'ISFJ'),
            'meta_compatibility'  => array('ENTP')
        ),
        'ESFJ' => array(
            'duo_compatibility'   => array('SP', 'NJ', 'SJ', 'NP'),
            'tri_compatibility'   => array('SFP', 'NTJ', 'STP', 'NFJ', 'NFP', 'STJ', 'NTP', 'SFJ'),
            'stack_compatibility' => array('ISFP', 'ESFP', 'INTJ', 'INTJ', 'ESTP', 'ESTP', 'INFJ', 'ENFJ', 'INFP', 'ENFP', 'ISTJ', 'ESTJ', 'INTP', 'ENTP', 'ISFJ', 'ESFJ'),
            'meta_compatibility'  => array('INTP')
        ),
        'ENTJ' => array(
            'duo_compatibility'   => array('NP', 'SJ', 'NJ', 'SP'),
            'tri_compatibility'   => array('NTP', 'SFJ', 'NFP', 'STJ', 'STP', 'NFJ', 'SFP', 'NTJ'),
            'stack_compatibility' => array('INTP', 'ENTP', 'ESFJ', 'ISFJ', 'INFP', 'ENFP', 'ISTJ', 'ESTJ', 'ISTP', 'ESTP', 'INFJ', 'ENFJ', 'ISFP', 'ESFP', 'INTJ', 'ENTJ'),
            'meta_compatibility'  => array('ISFP')
        ),
        'INTJ' => array(
            'duo_compatibility'   => array('NP', 'SJ', 'NJ', 'SP'),
            'tri_compatibility'   => array('NTP', 'SFJ', 'NFP', 'STJ', 'STP', 'NFJ', 'SFP', 'NTJ'),
            'stack_compatibility' => array('ENTP', 'INTP', 'ISFJ', 'ESFJ', 'ENFP', 'INFP', 'ESTJ', 'ISTJ', 'ESTP', 'ISTP', 'ENFJ', 'INFJ', 'ESFP', 'ISFP', 'ENTJ', 'INTJ'),
            'meta_compatibility'  => array('ESFP')
        ),
        'ESFP' => array(
            'duo_compatibility'   => array('SJ', 'NP', 'SP', 'NJ'),
            'tri_compatibility'   => array('SFJ', 'NTP', 'STJ', 'NFP', 'NFJ', 'STP', 'NTJ', 'SFP'),
            'stack_compatibility' => array('ISFJ', 'ESFJ', 'ENTP', 'INTP', 'ISTJ', 'ESTJ', 'INFP', 'ENFP', 'INFJ', 'ENFJ', 'ISTP', 'ESTP', 'INTJ', 'ENTJ', 'ISFP', 'ESFP'),
            'meta_compatibility'  => array('INTJ')
        ),
        'ISFP' => array(
            'duo_compatibility'   => array('SJ', 'NP', 'SP', 'NJ'),
            'tri_compatibility'   => array('SFJ', 'NTP', 'STJ', 'NFP', 'NFJ', 'STP', 'NTJ', 'SFP'),
            'stack_compatibility' => array('ESFJ', 'ISFJ', 'INTP', 'ENTP', 'ESTJ', 'ISTJ', 'ENFP', 'INFP', 'ENFJ', 'INFJ', 'ESTP', 'ISTP', 'ENTJ', 'INTJ', 'ESFP', 'ISFP'),
            'meta_compatibility'  => array('ENTJ')
        ),
        'ISTP' => array(
            'duo_compatibility'   => array('SJ', 'NP', 'SP', 'NJ'),
            'tri_compatibility'   => array('STJ', 'NFP', 'SFJ', 'NTP', 'NTJ', 'SFP', 'NFJ', 'STP'),
            'stack_compatibility' => array('ESTJ', 'ISTJ', 'INFP', 'ENFP', 'ESFJ', 'ISFJ', 'ENTP', 'INTP', 'ENTJ', 'INTJ', 'ESFP', 'ISFP', 'ENFJ', 'INFJ', 'ESTP', 'ISTP'),
            'meta_compatibility'  => array('ENFJ')
        ),
        'ESTP' => array(
            'duo_compatibility'   => array('SJ', 'NP', 'SP', 'NJ'),
            'tri_compatibility'   => array('STJ', 'NFP', 'SFJ', 'NTP', 'NTJ', 'SFP', 'NFJ', 'STP'),
            'stack_compatibility' => array('ISTJ', 'ESTJ', 'ENFP', 'INFP', 'ISFJ', 'ESFJ', 'INTP', 'ENTP', 'INTJ', 'ENTJ', 'ISFP', 'ESFP', 'INFJ', 'ENFJ', 'ISTP', 'ESTP'),
            'meta_compatibility'  => array('INFJ')
        ),
        'INFJ' => array(
            'duo_compatibility'   => array('NP', 'SJ', 'NJ', 'SP'),
            'tri_compatibility'   => array('NFP', 'STJ', 'NTP', 'SFJ', 'SFP', 'NTJ', 'STP', 'NFJ'),
            'stack_compatibility' => array('ENFP', 'INFP', 'ISTJ', 'ESTJ', 'ENTP', 'INTP', 'ESFJ', 'ISFJ', 'ESFP', 'ISFP', 'ENTJ', 'INTJ', 'ESTP', 'ISTP', 'ENFJ', 'INFJ'),
            'meta_compatibility'  => array('ESTP'),
            'golden_pair'         => array('INTP')
        ),
        'ENFJ' => array(
            'duo_compatibility'   => array('NP', 'SJ', 'NJ', 'SP'),
            'tri_compatibility'   => array('NFP', 'STJ', 'NTP', 'SFJ', 'SFP', 'NTJ', 'STP', 'NFJ'),
            'stack_compatibility' => array('INFP', 'ENFP', 'ESTJ', 'ISTJ', 'INTP', 'ENTP', 'ISFJ', 'ESFJ', 'ISFP', 'ESFP', 'INTJ', 'ENTJ', 'ISTP', 'ESTP', 'INFJ', 'ENFJ'),
            'meta_compatibility'  => array('ISTP')
        ),
        'ESTJ' => array(
            'duo_compatibility'   => array('SP', 'NJ', 'SJ', 'NP'),
            'tri_compatibility'   => array('STP', 'NFJ', 'SFP', 'NTJ', 'NTP', 'SFJ', 'NFP', 'STJ'),
            'stack_compatibility' => array('ISTP', 'ESTP', 'ENFJ', 'INFJ', 'ISFP', 'ESFP', 'INTJ', 'ENTJ', 'INTP', 'ENTP', 'ISFJ', 'ESFJ', 'INFP', 'ENFP', 'ISTJ', 'ESTJ'),
            'meta_compatibility'  => array('INFP')
        ),
        'ISTJ' => array(
            'duo_compatibility'   => array('SP', 'NJ', 'SJ', 'NP'),
            'tri_compatibility'   => array('STP', 'NFJ', 'SFP', 'NTJ', 'NTP', 'SFJ', 'NFP', 'STJ'),
            'stack_compatibility' => array('ESTP', 'ISTP', 'INFJ', 'ENFJ', 'ESFP', 'ISFP', 'ENTJ', 'INTJ', 'ENTP', 'INTP', 'ESFJ', 'ISFJ', 'ENFP', 'INFP', 'ESTJ', 'ISTJ'),
            'meta_compatibility'  => array('ENFP')
        ),
        'ENFP' => array(
            'duo_compatibility'   => array('NJ', 'SP', 'NP', 'SJ'),
            'tri_compatibility'   => array('NFJ', 'STP', 'NTJ', 'SFP', 'SFJ', 'NTP', 'STJ', 'NFP'),
            'stack_compatibility' => array('INFJ', 'ENFJ', 'ESTP', 'ISTP', 'INTJ', 'ENTJ', 'ISFP', 'ESFP', 'ISFJ', 'ESFJ', 'INTP', 'ENTP', 'ISTJ', 'ESTJ', 'INFP', 'ENFP'),
            'meta_compatibility'  => array('ISTJ')
        ),
        'INFP' => array(
            'duo_compatibility'   => array('NJ', 'SP', 'NP', 'SJ'),
            'tri_compatibility'   => array('NFJ', 'STP', 'NTJ', 'SFP', 'SFJ', 'NTP', 'STJ', 'NFP'),
            'stack_compatibility' => array('ENFJ', 'INFJ', 'ISTP', 'ESTP', 'ENTJ', 'INTJ', 'ESFP', 'ISFP', 'ESFJ', 'ISFJ', 'ENTP', 'INTP', 'ESTJ', 'ISTJ', 'ENFP', 'INFP'),
            'meta_compatibility'  => array('ESTJ')
        ),
    );

}