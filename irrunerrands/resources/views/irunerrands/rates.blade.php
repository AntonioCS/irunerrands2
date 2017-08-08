@extends('irunerrands.layout')

@section('title', 'Rates')


@section('javascript')
@parent
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="/js/modules/rates.js"></script>
<script>
    IRE.rates_accordion_selected_section_name = '{{ $rate }}';
</script>
@endsection


@section('content')
<h2 class="IRE-underline">Rates</h2>
<div class="col-md-12">
    <h4><strong>I offer many different packages - check them all out. <span style="font-size: 12px;display:block;">(click package name to expand)</span></strong></h4>
    <p>The cost of purchases is not included in the hourly rates. All purchases and groceries money must be paid in advance or upon delivery.</p>
</div>

<div id="IRE-rates-acc" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="IRE-acc-header">
        <span class="IRE-acc-header-title">Errands</span> <span class="min_hour"> (minimum of 1 hour service)</span>
    </h3>
    <div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="text-align: center">
            <h2>
                <strong>£15</strong>
            </h2>
            (per hour)
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
            <p><u><strong>Rates apply:</strong></u></p>
            <li>Monday - Friday 8 am - 7 pm, Saturday 10 am - 1 pm</li>
            <li>Within the East London area - see contact page.</li>
            <table>
                <tr class="tr_bottom_border">
                    <td class="table_td_width">
                        First hour
                    </td>
                    <td style="font-weight:700;text-align:right;">£15</td>
                </tr>
                <tr class="tr_bottom_border">
                    <td class="table_td_width">
                        Every 30 minutes thereafter
                    </td>
                    <td style="font-weight:700;text-align:right;">£7.50</td>
                </tr>
            </table>
            <br>
            <p><u><strong>Out of business hours:</strong></u></p>
            <p>
                <span style="font-size: 12px">
                    Please note, bookings must be made within business hours.
                </span>
            </p>
            <table>
                <tr class="tr_bottom_border">
                    <td class="table_td_width">
                        First hour</td>
                    <td style="font-weight:700;text-align:right;">£20</td></tr>
                <tr class="tr_bottom_border">
                    <td class="table_td_width">
                        Every 30 minutes thereafter
                    </td>
                    <td style="font-weight:700;text-align:right;">£10</td>
                </tr>
            </table>
            <br>
            <p><u><strong>Outside East London area:</strong></u></p>
            <table>
                <tr>
                    <td class="table_td_width">
                        Billed in 30 minutes increments
                    </td>
                    <td style="font-weight:700;text-align:right;">£7.50</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
            <img src="/img/rates/Supplier_Girl-44.png" alt=""/>
        </div>
    </div>
    <h3 class="IRE-acc-header">
        <span class="IRE-acc-header-title">Mum's Little Helper Package</span> <span class="min_hour"> (offers 1 hour service)</span>
    </h3>
    <div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="text-align: center">
            <h2>
                <strong>£15</strong>
            </h2>
            per hour
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
            <p>If you realized that you need a second pair of hands to help you out with those tasks that are piling up</p>
            <p>this service is the right one for you!</p>

            <p><u><strong>Include:</strong></u></p>


            <li>Grocery Shopping with delivery and storage or;</li>
            <li>Ironing & tidying up the house or;</li>
            <li>Taking care of your baby while you take care of yourself or;</li>
            <li>Picking up kids from school and/or after-caring or;</li>
            <li>...</li>

        </div>
        <!--        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                    <img src="/img/rates/Supplier_Girl-27.png" alt=""/>
                </div>-->
    </div>

    <h3 class="IRE-acc-header">
        <span class="IRE-acc-header-title">Prices for animals</span> <span class="min_hour"> (minimum of 30 minutes)</span>
    </h3>
    <div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="text-align: center">
            <h2>
                <strong>£7.50</strong>
            </h2>
            (per 30 minutes)
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
            <table>
                <tr class="tr_bottom_border">
                    <td class="table_td_width" >
                        <strong>Dogs</strong> - walk
                        </br>
                        <span style="font-size: 12px">
                            (*In winter, walks are only up to 5.30PM due to safety)
                        </span>
                    </td>
                    <td style="font-weight:700;text-align:right;">£7.50</td>
                </tr>
                <tr class="tr_bottom_border">
                    <td><strong>Puppy</strong> - visit</td>
                    <td style="font-weight:700;text-align:right;">£7.50</td>
                </tr>
                <tr class="tr_bottom_border">
                    <td><strong>Cats</strong> - visit</td>
                    <td style="font-weight:700;text-align:right;">£7.50</td>
                </tr>
                <tr class="tr_bottom_border">
                    <td>Sundays/Bank holidays/Out of hours</td>
                    <td style="font-weight:700;text-align:right;">£15</td>
                </tr>
            </table>
            <br>
            <p><u><strong>Includes:</strong></u></p>
            <li>Walking, cleaning and feeding</li>
            <li>Cleaning up accidents</li>
            <li>Basic home security checks</li>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
            <img src="/img/rates/Supplier_Girl-91dogcat.png" alt=""/>
        </div>
    </div>
    <h3 class="IRE-acc-header">
        <span class="IRE-acc-header-title">Holiday package</span> <span class="min_hour"> (giving you a stress free holiday)</span>
    </h3>
    <div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="text-align: center">
            From
            <h2>
                <strong>£75</strong>
            </h2>
            per week
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
            <p><u><strong>Includes:</strong></u></p>
            <li>Home safety checks</li>
            <li>Plants watering, ventilating your home, check mail, etc</li>
            <li>Pet sitting - walking, cleaning, feeding</li>
            <table>
                <tr class="tr_bottom_border">
                    <td class="table_td_width" >
                        1 hour visit/5 days</td>
                    <td style="font-weight:700;text-align:right;">£75</td>
                </tr>
                <tr class="tr_bottom_border">
                    <td class="table_td_width" >
                        1 hour visit/7 days</td>
                    <td style="font-weight:700;text-align:right;">£105</td>
                </tr>
                <tr>
                    <td class="table_td_width" >
                        1 hour visit/7 days
                        <span style="font-size: 12px">
                            (2x day - advised for dog owners)</span></td>
                    <td style="font-weight:700;text-align:right;">£210</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
            <img src="/img/rates/Supplier_Girl-31.png" alt=""/>
        </div>
    </div>
    <h3 class="IRE-acc-header">
        <span class="IRE-acc-header-title">Pre-paid loyalty card</span> <span class="min_hour"> (offers 2 hour's value in errands)
    </h3>
    <div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="text-align: center">
            <h2>
                <strong>£22.5</strong>
            </h2>
            per card
        </div>
        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-9">
            <p>Buy time and offer a loyalty card to a friend or family.</p>
            <strong>As a present:</strong>
            <li>Birthday present</li>
            <li>Mother's day, Father's day, Valentine's</li>
            <li>The best husband, The best wife, best friend</li>
            <li>Christmas, Easter</li>
            <li>Employer of the month</li>
            <br>&nbsp;
            <strong>For support/help:</strong><br>
            <li>Pre-Natal period</li>
            <li>Young parents</li>
            <li>Elderly people</li>
            <li>People with physical incapacity</li>
            <li>Simply someone who needs the extra time</li>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs">
            <img src="/img/rates/giftcard1.png" alt=""/>
        </div>
    </div>
</div>

@endsection

