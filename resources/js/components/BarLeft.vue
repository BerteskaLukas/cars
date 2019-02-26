<template>
    <div class="bar-car-type">
        <div class="car-type-text">car type</div>
        <div class="car-type">
            <div class="car-type-options">
                <div> all</div>
                <div class="option">$211+</div>
                <div class="option">$211+</div>
                <div class="option">$273+</div>
                <div class="option">$182</div>
                <div class="option">$373+</div>
                <div class="car-type-dropdown">
                    More
                    <i class="fas fa check"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>

    .option {
        border-color: #1e93f5;
        background-color: #1e93f5;
        color: #fff;
        flex: 1;
        text-align: center;
    }
    .bar-car-type{
        flex: 1;
        
    }
    .car-type-text{
        padding-bottom: 6px;
        line-height: 12px;
        font-weight: bold;
        font-size: 10px;
        text-transform: uppercase;

    }
    .car-type{
        display: flex;

    }
    .car-type-options{
        font-size: 13px;
        font-weight: 600;
        display: flex;
        flex-grow: 1;
    }
    .car-type-options>*{
        padding: 0 16px;
        margin: 0 4px 0 0;
        border: 1px solid #e0e7ed;
        color: #51697a;

    }
    .car-type-dropdown{
        border: 1px solid #e0e7ed;
        width: 90px;
        display: flex;
        color: #51697A;
        padding: 0 15px;
        font-size: 13px;
        font-weight: 600;
    }

</style>
