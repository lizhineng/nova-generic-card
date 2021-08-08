<template>
  <div v-html="card.template"></div>
</template>

<script>
export default {
  props: ['card'],
}
</script>
