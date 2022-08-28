<?php



/**
 * Class ai_extended_logic
 *
 * Public logic class for https://MBTI.ai
 * 
 * @package conversionLogic
 */
class ai_extended_logic extends logic_calculation_data
{

    
    /**
     * Check if trait value is associated
     * with a negative or positive light and
     * return new calculated values.
     * @param  int  $value  Trait score
     * @param  int  $rating User answer 1-5
     * @param  bool $no     Is it for a 
     * negative value? I.e. If NO is true
     * then the value is associated with NO
     * and not YES.
     * @return int          New total.
     */
    protected function convertTotal($value, $rating, $no = false)
    {
        $return = 0;

        if (true === $no) {

            switch ($rating) {
                case 1:
                    $return = $value;
                    break;

                case 2:
                    $return = $value / 2;
                    break;
            }

        } else {

            switch ($rating) {
                case 4:
                    $return = $value / 2;
                    break;

                case 5:
                    $return = $value;
                    break;
            }

        }

        return $return;
    }


    /**
     * We receive a rating 1-5 for the question along with
     * the traits associated with said question. We need 
     * to manipulate the traits to match what results have
     * been decided.
     * 
     * @param  int $rating Value 1-5 from user answer
     * @param  array $traits List of traits & their values
     *  Array (
     *     [ti] => Array ( [value] => 100 )
     *     [se] => Array ( [value] => 100, [no] => true )
     *  )
     * @return array List of traits, corrected for answer
     */
    protected function calculateQuestionTraits($rating, $traits)
    {
        
        if ( ! empty($traits) ) {

            foreach ($traits as $personality => $var) {

                $traits[$personality]['value'] = $this->convertTotal($var['value'], $rating, isset($var['no']) && true === $var['no']);

            }

        }

        return $traits;

    }


    /**
     * Order the array using score values from test results.
     * (Highest score for e/i is the conscious result)
     * 
     * ...
     */
    public static function traitOrder($dataset, $type = 'conscious')
    {
        $order = $labels = array();
        $labels['conscious'] = array('inferior', 'child', 'parent', 'hero');
        $labels['shadow']    = array('demon', 'trickster', 'critic', 'nemesis');

        // Order by array key
        usort($dataset['ordered'], function ($a, $b) use (&$type) { return strnatcmp($a[$type . '_value'], $b[$type . '_value']); });
    
        foreach ($dataset['ordered'] as $key => $var) {
            $order[ $labels[$type][$key] ]['trait'] = $var[$type . '_trait'];
            $order[ $labels[$type][$key] ]['value'] = $var[$type . '_value'];
        }

        return $order;
    }


    /**
     * Check value exists and decide
     * whether function is a conscious
     * or shadow division
     * 
     * @param  array $traits List of traits:
     *    Array
     *      (
     *          [fe] => 149
     *          [fi] => 625
     *          [ne] => 1574
     *          [ni] => 1387
     *          [se] => 500
     *          [si] => 1037
     *          [te] => 724
     *          [ti] => 1687
     *      )
     * @param string $function_e extraverted function name
     * @param string $function_i introverted function name
     * @return array division predictions
     * 
     */
    public static function divisionPrediction($trait_data, $function_e, $function_i)
    {

        if (isset($trait_data[$function_e]) && ! empty($trait_data[$function_e])) {
            // Exists
        } else {
            $trait_data[$function_e] = 0;
        }

        if (isset($trait_data[$function_i]) && ! empty($trait_data[$function_i])) {
            // Exists
        } else {
            $trait_data[$function_i] = 0;
        }

        return array(
            'conscious_trait' => ($trait_data[$function_e] > $trait_data[$function_i] ? $function_e : $function_i),
            'conscious_value' => ($trait_data[$function_e] > $trait_data[$function_i] ? $trait_data[$function_e] : $trait_data[$function_i]),
            'shadow_trait' =>    ($trait_data[$function_e] > $trait_data[$function_i] ? $function_i : $function_e),
            'shadow_value' =>    ($trait_data[$function_e] > $trait_data[$function_i] ? $trait_data[$function_i] : $trait_data[$function_e]),
        );
    }



    /**
     * Try and predict the personality
     * from the traits given from our
     * questions.
     * 
     * @param  array $traits List of traits:
     *    Array
     *      (
     *          [fe] => 149
     *          [fi] => 625
     *          [ne] => 1574
     *          [ni] => 1387
     *          [se] => 500
     *          [si] => 1037
     *          [te] => 724
     *          [ti] => 1687
     *      )
     * @return array Personality predictions
     */
    public static function predictPersonality($traits, $log = true)
    {
        arsort($traits);

        $data  = array();
        $data['debug'] = array();
        $data['predictions'] = self::$personality_defaults;

        $data['ordered'] = array(
            'f' => self::divisionPrediction($traits, 'fe', 'fi'),
            'n' => self::divisionPrediction($traits, 'ne', 'ni'),
            's' => self::divisionPrediction($traits, 'se', 'si'),
            't' => self::divisionPrediction($traits, 'te', 'ti')
        );

        $data['order_conscious'] = self::traitOrder($data, 'conscious');
        $data['order_shadow']    = self::traitOrder($data, 'shadow');


        // Below is where the personality matches are found.
        // self::$personality_traits =  Array
        // (
        //     [ESTJ] => Array
        //         (
        //             [0] => te
        //             [1] => si
        //             [2] => ne
        //             [3] => fi
        //             [4] => ti
        //             [5] => se
        //             [6] => ni
        //             [7] => fe
        //         )

        //     [ISTJ] => Array
        //         (
        //             [0] => si
        //             [1] => te
        //             [2] => fi
        //             [3] => ne
        // ...
        foreach (self::$personality_traits as $personality_acronym => $function) {

            if ($data['order_conscious']['hero']['trait'] == $function[0]) {
                $data['predictions'][$personality_acronym]++;
                $data['debug'][] = 'Matching ' . htmlentities($personality_acronym) . ' high conscious trait.';
            }

            if ($data['order_conscious']['parent']['trait'] == $function[1]) {
                $data['predictions'][$personality_acronym]++;
                $data['debug'][] = 'Matching ' . htmlentities($personality_acronym) . ' second highest conscious trait.';
            }

            if ($data['order_conscious']['child']['trait'] == $function[2]) {
                $data['predictions'][$personality_acronym]++;
                $data['debug'][] = 'Matching ' . htmlentities($personality_acronym) . ' second lowest conscious trait.';
            }

            if ($data['order_conscious']['inferior']['trait'] == $function[3]) {
                $data['predictions'][$personality_acronym]++;
                $data['debug'][] = 'Matching ' . htmlentities($personality_acronym) . ' lowest conscious trait.';
            }

            if ($data['order_shadow']['nemesis']['trait'] == $function[4]) {
                $data['predictions'][$personality_acronym]++;
                $data['debug'][] = 'Matching ' . htmlentities($personality_acronym) . ' high unconscious trait.';
            }

            if ($data['order_shadow']['critic']['trait'] == $function[5]) {
                $data['predictions'][$personality_acronym]++;
                $data['debug'][] = 'Matching ' . htmlentities($personality_acronym) . ' second highest unconscious trait.';
            }

            if ($data['order_shadow']['trickster']['trait'] == $function[6]) {
                $data['predictions'][$personality_acronym]++;
                $data['debug'][] = 'Matching ' . htmlentities($personality_acronym) . ' second lowest unconscious trait.';
            }

            if ($data['order_shadow']['demon']['trait'] == $function[7]) {
                $data['predictions'][$personality_acronym]++;
                $data['debug'][] = 'Matching ' . htmlentities($personality_acronym) . ' lowest unconscious trait.';
            }

            // Further logic to calculate results is top-heavy. Code is conscious. Personalities are subconscious.

        }

        arsort($data['predictions']);

        if ($log === true) {
            global_logger('Results: ' . print_r($data['predictions'], true));
        }

        $data['further_predictions'] = self::furtherPredictions($data);

        return $data;
    }



    public static function furtherPredictions($data)
    {
        // self::$trait_relation
        return [];
    }

}
