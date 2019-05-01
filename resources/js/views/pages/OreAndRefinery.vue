<template>
    <div>
        <div class="container py-4 my-4">
            <div class="row py-4">
                <div class="col-md-12">
                <b-tabs content-class="mt-3" fill>
                    <b-tab title="Earth" active>
                        <b-table hover :items="items"></b-table>
                    </b-tab>
                    <b-tab title="Mars">
                        <b-table hover :items="items"></b-table>
                    </b-tab>
                    <b-tab title="Alien">
                        <b-table hover :items="items"></b-table>
                    </b-tab>
                    <b-tab title="Asteroids">
                        <b-table hover :items="items"></b-table>
                    </b-tab>
                    <b-tab title="Dead sun">
                        <b-table hover :items="items"></b-table>
                    </b-tab>
                </b-tabs>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    name: 'OreAndRefineryPage',
    data() {
      return {
        items: [
          { Ore: 40, planet: 'Dickerson', moon: 'Macdonald' },
          { Ore: 21, planet: 'Larsen', moon: 'Shaw' },
          {
            Ore: 89,
            planet: 'Geneva',
            moon: 'Wilson',
            _rowVariant: 'danger'
          },
          {
            Ore: 40,
            planet: 'Thor',
            moon: 'MacDonald',
            _cellVariants: { Ore: 'info', planet: 'warning' }
          },
          { Ore: 29, planet: 'Dick', moon: 'Dunlap' }
        ]
      }
    }
}
</script>
<style scoped>
    .faq-bg {
        background-size: initial;
        background-repeat: repeat;
        /* background-blend-mode:  */
    }

    .card {
        border: none;
    }

    .card-header {
        border-bottom: 0px;
    }
</style>
