<?php

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @category  PayIntelligent
 * @package   PayIntelligent_RatePAY_Elv
 * @copyright (C) 2011 PayIntelligent GmbH  <http://www.payintelligent.de/>
 * @license	http://www.gnu.org/licenses/  GNU General Public License 3
 */
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$sLangName = "Niederländisch";

$piErrorAge = 'Um eine Zahlung per RatePAY SEPA-Lastschrift durchzuf&uuml;hren, m&uuml;ssen Sie mindestens 18 Jahre alt sein.';
$piErrorBirth = 'Um eine Zahlung per RatePAY SEPA-Lastschrift durchzuf&uuml;hren, geben Sie bitte Ihr Geburtsdatum ein.';
$piErrorPhone = 'Um eine Zahlung per RatePAY SEPA-Lastschrift durchzuf&uuml;hren, geben Sie bitte Ihre Telefonnummer ein.';
$piErrorCompany = 'Geben Sie bitte Ihren Firmennamen und Ihre Umsatzsteuer-ID ein.';
$piErrorBirthdayDigits = 'Geben Sie bitte Ihr Geburtsjahr vierstellig ein. (z.B. 1982)';

$aLang = array(
    'charset'                                       => 'UTF-8',
    'PI_RATEPAY_ELV_VIEW_SANDBOX_NOTIFICATION'      => 'Testmode activated, please DONT use this payment method and get in contact with the merchant.',
    'PI_RATEPAY_ELV_VIEW_WHITELABEL_TEXT'           => 'Incasso',
    'PI_RATEPAY_ELV_VIEW_CREDITOR_ID_TEXT'          => 'Incassant ID',
    'PI_RATEPAY_ELV_VIEW_CREDITOR_ID_VALUE'         => 'DE39RPY00000568463',
    'PI_RATEPAY_ELV_VIEW_MANDATE_TEXT'              => 'Kenmerk machtiging',
    'PI_RATEPAY_ELV_VIEW_MANDATE_VALUE'             => '(wordt na aankoop medegedeeld)',
    'PI_RATEPAY_ELV_VIEW_INFORMATION_TEXT_1'        => ' stellt mit der Unterst&uuml;tzung von RatePAY die M&ouml;glichkeit der RatePAY SEPA-Lastschrift bereit. Sie nehmen damit einen Kauf auf Lastschrift vor. Die Lastschrift ist innerhalb von ',
    'PI_RATEPAY_ELV_VIEW_INFORMATION_TEXT_1_PART_2' => ' Tagen nach Rechnungsdatum zur Zahlung f&auml;llig.',
    'PI_RATEPAY_ELV_VIEW_INFORMATION_TEXT_2'        => 'RatePAY SEPA-Lastschrift ist <b>ab einem Einkaufswert von ',
    'PI_RATEPAY_ELV_VIEW_INFORMATION_TEXT_3'        => ' </b> und <b>bis zu einem Einkaufswert von ',
    'PI_RATEPAY_ELV_VIEW_INFORMATION_TEXT_4'        => ' </b> m&ouml;glich (jeweils inklusive Mehrwertsteuer und Versandkosten).',
    'PI_RATEPAY_ELV_VIEW_PRIVACY_AGREEMENT_TEXT_1'  => 'Ik ga hiermee akkoord met het overdragen van mijn gegevens aan ',
    'PI_RATEPAY_ELV_VIEW_PRIVACY_AGREEMENT_TEXT_2'  => ' volgens het ',
    'PI_RATEPAY_ELV_VIEW_PRIVACY_AGREEMENT_TEXT_3'  => ' sowie der ',
    'PI_RATEPAY_ELV_VIEW_PRIVACY_AGREEMENT_TEXT_4'  => ' en machtig hen de betalingen in samenhang met deze koopovereenkomst middels een incasso van bovengenoemde rekening af te boeken. Gelijktijdig geef ik mijn kredietinstelling opdracht de incasso’s van RatePAY GmbH op mijn rekening te honoreren.',
    'PI_RATEPAY_ELV_VIEW_PRIVACY_AGREEMENT_TEXT_5'  => 'Opmerking:',
    'PI_RATEPAY_ELV_VIEW_PRIVACY_AGREEMENT_TEXT_6'  => 'Na het tot stand komen van deze overeenkomst wordt u het RatePAY machtigingskenmerk medegedeeld. Ik kan binnen acht weken, na afschrijving, het bedrag laten terugboeken. Hierbij gelden de met mijn kredietinstelling overeengekomen voorwaarden.',
    'PI_RATEPAY_ELV_VIEW_POLICY_OWNERPOLICY'        => 'H&auml;ndler-Datenschutzerkl&auml;rung',
    'PI_RATEPAY_ELV_VIEW_POLICY_TEXT_6'             => ' und bin insbesondere damit einverstanden, zum Zwecke der Durchf&uuml;hrung des Vertrags &uuml;ber die von mir angegebene E-Mail-Adresse kontaktiert zu werden.',
    'PI_RATEPAY_ELV_VIEW_POLICY_PRIVACYPOLICY'      => 'RatePAY Privacybeleid',
    'PI_RATEPAY_ELV_ERROR'                          => 'Helaas is een betaling met de gekozen betaalmethode Factuur niet mogelijk. Dit besluit is genomen op basis van een geautomatiseerde gegevenscontrole. Details vindt u onder ',
    'PI_RATEPAY_ELV_AGBERROR'                       => 'Bitte akzeptieren Sie die Bedingungen.',
    'PI_RATEPAY_ELV_SUCCESS'                        => 'Bestellung erfolgreich abgeschlossen',
    'PI_RATEPAY_ELV_ERROR_ADDRESS'                  => 'Bitte beachten Sie, dass RatePAY SEPA-Lastschrift nur genutzt werden kann, wenn Rechnungs- und Lieferaddresse identisch sind.',
    'PI_RATEPAY_ELV_ERROR_ZIP'                      => 'Bitte geben Sie Ihre korrekte Postleitzahl ein.',
    'PI_RATEPAY_ELV_ERROR_BIRTH'                    => $piErrorBirth,
    'PI_RATEPAY_ELV_ERROR_PHONE'                    => $piErrorPhone,
    'PI_RATEPAY_ELV_ERROR_AGE'                      => $piErrorAge,
    'PI_RATEPAY_ELV_VIEW_PAYMENT_FON'               => 'Telefoonnummer:',
    'PI_RATEPAY_ELV_VIEW_PAYMENT_MOBILFON'          => 'Mobiltelefon:',
    'PI_RATEPAY_ELV_VIEW_PAYMENT_BIRTHDATE'         => 'Geboortedatum:',
    'PI_RATEPAY_ELV_VIEW_PAYMENT_BIRTHDATE_FORMAT'  => '(tt.mm.jjjj)',
    'PI_RATEPAY_ELV_VIEW_PAYMENT_FON_NOTE'          => 'Tragen Sie bitte entweder Ihr Telefon oder Mobiltelefon ein.',
    'PI_RATEPAY_ELV_VIEW_PAYMENT_COMPANY'           => 'Firma:',
    'PI_RATEPAY_ELV_VIEW_PAYMENT_UST'               => 'USt-IdNr.',
    'PI_RATEPAY_ERROR_BIRTHDAY_YEAR_DIGITS'         => $piErrorBirthdayDigits,
    'PI_RATEPAY_ERROR_COMPANY'                      => $piErrorCompany,
    'PI_RATEPAY_ELV_ERROR_OWNER'                    => 'Um eine Zahlung per RatePAY SEPA-Lastschrift durchzuf&uuml;hren, geben Sie bitte den Namen des Kontoinhabers ein.',
    'PI_RATEPAY_ELV_ERROR_ACCOUNT_NUMBER'           => 'Um eine Zahlung per RatePAY SEPA-Lastschrift durchzuf&uuml;hren, geben Sie bitte die IBAN/Kontonummer ein.',
    'PI_RATEPAY_ELV_ERROR_CODE'                     => 'Um eine Zahlung per RatePAY SEPA-Lastschrift durchzuf&uuml;hren, geben Sie bitte die BLZ ein.',
    'PI_RATEPAY_ELV_ERROR_BIC'                      => 'Um eine Zahlung per RatePAY SEPA-Lastschrift durchzuf&uuml;hren, geben Sie bitte die BIC/Swift ein.',
    'PI_RATEPAY_ELV_ERROR_NAME'                     => 'Um eine Zahlung per RatePAY SEPA-Lastschrift durchzuf&uuml;hren, geben Sie bitte den Banknamen ein.',
    'PI_RATEPAY_ELV_VIEW_BANK_OWNER'                => 'Rekeninghouder',
    'PI_RATEPAY_ELV_VIEW_BANK_ACCOUNT_NUMBER'       => 'Rekeningnummer',
    'PI_RATEPAY_ELV_VIEW_BANK_IBAN'                 => 'IBAN',
    'PI_RATEPAY_ELV_VIEW_BANK_CODE'                 => 'BLZ',
    'PI_RATEPAY_ELV_VIEW_BANK_BIC'                  => 'BIC',
    'PI_RATEPAY_ELV_VIEW_BANK_NAME'                 => 'Kredietinstelling',
    'PI_RATEPAY_ELV_ERROR_BANKCODE_TO_SHORT'        => 'Die Bankleitzahl muss acht Zeichen lang sein.'
);