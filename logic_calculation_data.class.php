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
        'INTP' => array( 'ti', 'ne', 'si', 'fe', 'te', 'ni', 'se', 'fi' ),
        'ENTP' => array( 'ne', 'ti', 'fe', 'si', 'ni', 'te', 'fi', 'se' ),
        'ISFJ' => array( 'si', 'fe', 'ti', 'ne', 'se', 'fi', 'te', 'ni' ),
        'ESFJ' => array( 'fe', 'si', 'ne', 'ti', 'fi', 'se', 'ni', 'te' ),
        'ENTJ' => array( 'te', 'ni', 'se', 'fi', 'ti', 'ne', 'si', 'fe' ),
        'INTJ' => array( 'ni', 'te', 'fi', 'se', 'ne', 'ti', 'fe', 'si' ),
        'ESFP' => array( 'se', 'fi', 'te', 'ni', 'si', 'fe', 'ti', 'ne' ),
        'ISFP' => array( 'fi', 'se', 'ni', 'te', 'fe', 'si', 'ne', 'ti' ),
        'ISTP' => array( 'ti', 'se', 'ni', 'fe', 'te', 'si', 'ne', 'fi' ),
        'ESTP' => array( 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne' ),
        'INFJ' => array( 'ni', 'fe', 'ti', 'se', 'ne', 'fi', 'te', 'si', 'se', 'ti', 'fe', 'ni', 'si', 'te', 'fi', 'ne' ),
        'ENFJ' => array( 'fe', 'ni', 'se', 'ti', 'fi', 'ne', 'si', 'te' ),
        'ESTJ' => array( 'te', 'si', 'ne', 'fi', 'ti', 'se', 'ni', 'fe' ),
        'ISTJ' => array( 'si', 'te', 'fi', 'ne', 'se', 'ti', 'fe', 'ni' ),
        'ENFP' => array( 'ne', 'fi', 'te', 'si', 'ni', 'fe', 'ti', 'se' ),
        'INFP' => array( 'fi', 'ne', 'si', 'te', 'fe', 'ni', 'se', 'ti' ),
    );

}