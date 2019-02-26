<template>
    <div class="body">
        <div id="cars-box">
            <div class="box">
                <div class="car-box">
                    <div class="car-info-box">
                        <div class="car-info">
                            <div>
                                <div class="car-name">{{brand}} model </div>
                                <div class="car-class">type or similar Economy</div>
                            </div>
                            <div>
                                <div class="opt">
                                    Free cancelation
                                </div>
                            </div>
                        </div>
                        <div class="car-details">
                            <div class="car-detail-box">
                                <i class="fas fa-user-alt"></i>
                                passangers
                                <div class="car-detail-box" style="margin-left: 38px">
                                    <i class="fas fa-suitcase"></i>
                                    bags
                                </div>
                                <div class="car-detail-box" style="margin-left: 38px">
                                    <i class="fas fa-door-closed"></i>
                                    doors
                                </div>
                            </div>

                        </div>
                        <div class="car-location">
                            <div class="car-location-info">
                                <div class="car-location-info-box">
                                    <div class="car-address">
                                        <div class="car-address-icon">
                                            <i class="fas fa-city"></i>
                                        </div>
                                        <div class="locations">address</div>
                                        <div class="locations" style="margin-top:3px; color: #6D8494"> Non-airport</div>

                                    </div>
                                    <div class="agency">
                                        <img class="agency-photo" src="enterprise.png" alt="">
                                    </div>
                                </div>
                                <div class="car-photo">
                                    <img src="car1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-box">
                        <div class="option-box">
                            <div class="option-icon">
                                <span class="dots"></span>
                                <span class="dots"></span>
                                <span class="dots"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <div>price </div>
                            <div class="total">
                                Total
                            </div>
                        </div>
                        <div class="hot-wire">Hotwire</div>
                        <div class="view-deal">
                            <button class="button-view">View Deal</button>
                            <button class="button-check">
                                <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {}
    props: {'id','brand','model','type','passangers', 'bags', 'doors', 'price','lat','lng', 'address'}

</script>

<style scoped>
    .body{
        display: flex;
        flex-direction: row;
        font-family: Arial, Helvetica, sans-serif;
    }
    #cars-box{
        flex: 1;


    }
    .box{
        outline-color: #92AABB;
        box-shadow: 0 0 2px 0 rgba(19,26,31,0.12), 0 2px 4px 0 rgba(19,26,31,0.22);
        border-color: transparent;
        width: 620px;
        flex-flow: column nowrap;
        border-radius: 2px;
        border-width: 1px;
        border-top-style: solid;
        display: flex;
        box-sizing: border-box;
        margin: 15px 10px 10px 10px ;

    }
    .car-box{

        display: flex;
        padding: 16px;
    }
    .car-info-box{
        width: 525px;
        height: 150px;
        margin-right: 18px;
        position: relative;
        display: flex;
        flex-direction: column;

    }
    .car-info{
        display: flex;
        justify-content: space-between;
    }
    .car-info-box>.car-name+.car-class{
        width: 173.61px;
        height: 39px;
    }
    .car-name{
        font-weight: 500;
        font-size: 20px;
    }
    .car-class{
        font-weight: 400;
        font-size: 12px;
        color: #6D8494;
    }
    .opt{
        background-color: #11B19B;
        border: 1px;
        border-color: #11B19B;
        padding: 4px 8px;
        font-weight: 600;
        font-size: 10px;
        border-style: solid;
        color: #fff;
        text-transform: uppercase;
    }
    .car-detail-box{
        display: inline-block;
        font-weight: 900;
        height: 20px;

        margin-right: 5px;
    }
    .car-location{
        padding-right: 115px;
        margin-bottom: 15px;
    }
    .car-location-info{
        display: flex;
        max-width: 100%;
        border-top-color: #D9E1E8;
        margin-top: 15px;
        padding-top: 15px;
        flex: 1 0 ;
        border-top-width: 1px;
        border-top-style: solid;
        position: relative;
    }
    .car-location-info-box{
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    .locations{

        margin-left: 25px;
        height: 14px;
        display: block;
    }
    .car-adress {
        position: relative;
        display: block;
    }
    .car-address-icon{
        position: absolute;
        vertical-align: middle;
        margin-top: 6px;
        width: 20px;
        height: 20px;
    }
    .agency-photo{
        width: 100%;
        height: 100%;
    }
    .car-photo{
        position: absolute;
        right: -115px;
        flex: 0 0 0;
        width: 127px;
        margin-top: -42px;
    }


    .offer-box{
        display: flex;
        width: 151px;
        border-left-color: #DAE0E5;
        border-left-width: 1px;
        border-left-style: solid;
        flex-direction: column;
    }
    .option-box{
        display: flex;
        flex: 1;
        justify-content: flex-end;
    }
    .price-box{
        text-align: center;
        flex: 3;
    }
    .hot-wire{
        text-align: center;
        flex: 1;
    }
    .view-deal{
        text-align: center;
        flex: 2;
    }
    .dots{
        width: 4px;
        margin: 0 1px;
        background: #6D8494;
        height: 4px;
        border-radius: 2px;
        white-space: normal;
    }
    .option-icon{
        margin-right: -6px;
        margin-top: -10px;
        height: 100%;
        display: flex;
        align-items: center;
    }
    .total{
        font: 400 12px/14px "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #17232C;
        margin-top: 10px;
    }
    .hot-wire{
        margin-bottom: 9px;
        font: 400 12px/14px "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #51697A;
    }
    .view-deal{
        margin-left: 16px;
        display: flex;
        justify-content: center;
    }
    .button-view{
        font: 400 14px "Helvetica Neue", Helvetica, Arial, sans-serif;
        flex: 2;
        border: none;
        background-image: linear-gradient(135deg, #FF690F 0%, #E8381B 100%);
        min-height: 33px;
        color: #FFF;

        position: relative;
    }
    .button-check{
        padding: 8px;
        color: #fff;
        width: 28px;
        background-image: linear-gradient(135deg, #FF690F 0%, #E8381B 100%);
        margin-left: 1px;
        border-style: none;
    }
</style>
