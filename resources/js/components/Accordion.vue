<template>
  <div role="tablist">
    <b-card no-body class="mb-1" v-for="(el, index) in accordionObj" :key="index">
      <b-card-header header-tag="header" class="p-1" role="tab">
        <b-button block href="#" v-b-toggle="'accordion-' + index" variant="dark" size="lg">{{ el.question[$route.params.locale] }}</b-button>
      </b-card-header>
      <b-collapse :id="'accordion-' + index" accordion="my-accordion" role="tabpanel">
        <b-card-body>
          <b-card-text>
            {{ el.answer[$route.params.locale] }}
          </b-card-text>
        </b-card-body>
      </b-collapse>
    </b-card>
  </div>
</template>

<script>
  export default {
    name: 'accordion',
    props: ['accordionObj']
  }
</script>