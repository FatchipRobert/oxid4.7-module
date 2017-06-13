<?php
    /**
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
     *
     * @package pi_ratepay_rate_calculator
     * Code by PayIntelligent GmbH  <http://www.payintelligent.de/>
     */
    require_once 'PiRatepayRateCalc.php';
    require_once 'path.php';

    $pi_calculator = new PiRatepayRateCalc();


    $pi_calculator->unsetData();
    $pi_monthAllowed = $pi_calculator->getRatepayRateMonthAllowed();
    $pi_amount = $pi_calculator->getRequestAmount();
    $pi_language = $pi_calculator->getLanguage();
    $pi_firstday = $pi_calculator->getRequestFirstday();

    if ($pi_language == "DE" || $pi_language == "AT") {
        require_once 'languages/german.php';
        $pi_currency = 'EUR';
        $pi_decimalSeperator = ',';
        $pi_thousandSeperator = '.';
    } else {
        require_once 'languages/english.php';
        $pi_currency = 'EUR';
        $pi_decimalSeperator = '.';
        $pi_thousandSeperator = ',';
    }

    $pi_amount = number_format($pi_amount, 2, $pi_decimalSeperator, $pi_thousandSeperator);

    if ($pi_calculator->getErrorMsg() != '') {
        if ($pi_calculator->getErrorMsg() == 'serveroff') {
            echo "<div>" . $pi_lang_server_off . "</div>";
        } else {
            echo "<div>" . $pi_lang_config_error_else . "</div>";
        }
    } else {
        ?>
<div class="rpContainer">
    <div class="row">
        <div class="col-md-10">
<?php
            echo $rp_calculation_intro_part1;
            echo $rp_calculation_intro_part2;
            echo $rp_calculation_intro_part3;
?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading text-center" id="firstInput">
                    <h2><?php echo $rp_runtime_title; ?></h2>
                    <?php echo $rp_runtime_description; ?>
                </div>

                <div class="panel-body">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
<?php
                        foreach ($pi_monthAllowed AS $month) {
?>
                        <div class="btn-group btn-group-sm" role="group">
                            <button class="btn btn-default rp-btn-runtime" type="button" onclick="piRatepayRateCalculatorAction('runtime', <?php echo $month; ?>);" id="piRpInput-buttonMonth-<?php echo $month; ?>" role="group"><?php echo $month; ?></button>
                        </div>
<?php
                        }
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading text-center" id="secondInput">
                    <h2><?php echo $rp_rate_title; ?></h2>
                    <?php echo $rp_rate_description; ?>
                </div>

                <div class="panel-body">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">&euro;</span>
                        <input type="text" id="rp-rate-value" class="form-control" aria-label="Amount" />
                        <span class="input-group-btn">
                            <button class="btn btn-default rp-btn-rate" onclick="piRatepayRateCalculatorAction('rate');" type="button" id="piRpInput-buttonRuntime"><?php echo $rp_calculate_rate; ?></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-11" id="piRpResultContainer"></div>
    </div>
</div>
    <?php
    }
?>
