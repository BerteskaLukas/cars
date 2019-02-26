<template>
    <div class="hero">
        <cars
        v-for="car in cars"
        v-bind="car"
        :key="car.id"
        ></cars>
    </div>
</template>

<script>
   function Car({id,brand,model,type,passangers, bags, doors, price,lat,lng, address}) {
        this.id=id;
        this.brand=brand;
        this.model=model;
        this.type=type;
        this.passangers=passangers;
        this.bags=bags;
        this.doors=doors;
        this.price=price;
        this.lat=lat;
        this.lng=lng;
        this.address=address;

    }

    import Cars from './Cars.vue';

    export default {
        data() {
            return {
                cars: [],
            }
        },
        methods: {
            read() {
                console.log('namas');
                window.axios.get('/cars').then(({ data }) => {
                        data.forEach(car => {
                            this.cars.push(new Car(car));
                });
            })
            }
        },
        created() {
            this.read();
        },

        components: {
            Cars,
        }
    }
</script>

<style scoped>
    .hero{
        display: flex;
        flex-direction: column;
    }
</style>
