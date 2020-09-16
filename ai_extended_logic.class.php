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

                $is_no = (isset($var['no']) && true === $var['no'] ? true : false);

                $traits[$personality]['value'] = $this->convertTotal($var['value'], $rating, $is_no);

            }

        }

        return $traits;

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
    public static function predictPersonality($traits)
    {
        $highest_trait = array_keys($traits, max($traits))[0];
        $lowest_trait  = array_keys($traits, min($traits))[0];

        unset($traits[$highest_trait]);
        unset($traits[$lowest_trait]);

        $second_highest_trait = array_keys($traits, max($traits))[0];
        $second_lowest_trait  = array_keys($traits, min($traits))[0];

        $data = self::$personality_traits;
        $pts  = array();
        $pts['debug'] = array();
        $pts['predictions'] = self::$personality_defaults;

        foreach ($data as $key => $var) {

            if ($highest_trait == $var[0]) {
                $pts['predictions'][$key]++;
                $pts['debug'][] = 'Matching ' . $key . ' high trait.';
            }

            if ($second_highest_trait == $var[1]) {
                $pts['predictions'][$key]++;
                $pts['debug'][] = 'Matching ' . $key . ' second highest trait.';
            }

            if ($lowest_trait == $var[3]) {
                $pts['predictions'][$key]++;
                $pts['debug'][] = 'Matching ' . $key . ' lowest trait.';
            }

            if ($second_lowest_trait == $var[2]) {
                $pts['predictions'][$key]++;
                $pts['debug'][] = 'Matching ' . $key . ' second lowest trait.';
            }

        }

        arsort($pts);

        return $pts;
    }


}
