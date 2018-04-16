function get_the_declined_date( $date_format, $timestamp = NULL ) {

    global $wp_locale;

    if ( $timestamp == NULL ) {
        $date = get_the_date( $date_format );
    } else{ 
        $date = date_i18n( $date_format, $timestamp );
    }

    if ( 'on' === _x( 'off', 'decline months names: on or off' ) ){

        $months          = $wp_locale->month;
        $months_genitive = $wp_locale->month_genitive;
         
        foreach ( $months as $key => $month ) {
            $months[ $key ] = $month;
        }
         
        foreach ( $months_genitive as $key => $month ) {
            $months_genitive[ $key ] = ' ' . $month;
        }
       
        $date = str_replace( $months, $months_genitive, $date );

        return $date;

    }else{

        return $date;
    }

}
