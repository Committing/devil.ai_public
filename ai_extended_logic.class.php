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


    
    public static function traitOrder($traits, $dataset, $type = 'conscious')
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
        arsort($traits);

        $data  = array();
        $data['debug'] = array();
        $data['predictions'] = self::$personality_defaults;

        $data['ordered'] = array(
            'f' => array(
                'conscious_trait' => ($traits['fe'] > $traits['fi'] ? 'fe' : 'fi'),
                'conscious_value' => ($traits['fe'] > $traits['fi'] ? $traits['fe'] : $traits['fi']),
                'shadow_trait' =>    ($traits['fe'] > $traits['fi'] ? 'fi' : 'fe'),
                'shadow_value' =>    ($traits['fe'] > $traits['fi'] ? $traits['fi'] : $traits['fe']),
            ),
            'n' => array(
                'conscious_trait' => ($traits['ne'] > $traits['ni'] ? 'ne' : 'ni'),
                'conscious_value' => ($traits['ne'] > $traits['ni'] ? $traits['ne'] : $traits['ni']),
                'shadow_trait' =>    ($traits['ne'] > $traits['ni'] ? 'ni' : 'ne'),
                'shadow_value' =>    ($traits['ne'] > $traits['ni'] ? $traits['ni'] : $traits['ne']),
            ),
            's' => array(
                'conscious_trait' => ($traits['se'] > $traits['si'] ? 'se' : 'si'),
                'conscious_value' => ($traits['se'] > $traits['si'] ? $traits['se'] : $traits['si']),
                'shadow_trait' =>    ($traits['se'] > $traits['si'] ? 'si' : 'se'),
                'shadow_value' =>    ($traits['se'] > $traits['si'] ? $traits['si'] : $traits['se']),
            ),
            't' => array(
                'conscious_trait' => ($traits['te'] > $traits['ti'] ? 'te' : 'ti'),
                'conscious_value' => ($traits['te'] > $traits['ti'] ? $traits['te'] : $traits['ti']),
                'shadow_trait' =>    ($traits['te'] > $traits['ti'] ? 'ti' : 'te'),
                'shadow_value' =>    ($traits['te'] > $traits['ti'] ? $traits['ti'] : $traits['te']),
            )
        );

        $data['order_conscious'] = self::traitOrder($traits, $data, 'conscious');
        $data['order_shadow']    = self::traitOrder($traits, $data, 'shadow');

        foreach (self::$personality_traits as $key => $var) {

            if ($data['order_conscious']['hero']['trait'] == $var[0]) {
                $data['predictions'][$key]++;
                $data['debug'][] = 'Matching ' . $key . ' high conscious trait.';
            }

            if ($data['order_conscious']['parent']['trait'] == $var[1]) {
                $data['predictions'][$key]++;
                $data['debug'][] = 'Matching ' . $key . ' second highest conscious trait.';
            }

            if ($data['order_conscious']['child']['trait'] == $var[2]) {
                $data['predictions'][$key]++;
                $data['debug'][] = 'Matching ' . $key . ' second lowest conscious trait.';
            }

            if ($data['order_conscious']['inferior']['trait'] == $var[3]) {
                $data['predictions'][$key]++;
                $data['debug'][] = 'Matching ' . $key . ' lowest conscious trait.';
            }

            if ($data['order_shadow']['nemesis']['trait'] == $var[4]) {
                $data['predictions'][$key]++;
                $data['debug'][] = 'Matching ' . $key . ' high shadow trait.';
            }

            if ($data['order_shadow']['critic']['trait'] == $var[5]) {
                $data['predictions'][$key]++;
                $data['debug'][] = 'Matching ' . $key . ' second highest shadow trait.';
            }

            if ($data['order_shadow']['trickster']['trait'] == $var[6]) {
                $data['predictions'][$key]++;
                $data['debug'][] = 'Matching ' . $key . ' second lowest shadow trait.';
            }

            if ($data['order_shadow']['demon']['trait'] == $var[7]) {
                $data['predictions'][$key]++;
                $data['debug'][] = 'Matching ' . $key . ' lowest shadow trait.';
            }

        }

        arsort($data['predictions']);

        $data['further_predictions'] = self::furtherPredictions($data);

        return $data;
    }



    public static function furtherPredictions($data)
    {
        // self::$trait_relation
        return [];
    }

}
