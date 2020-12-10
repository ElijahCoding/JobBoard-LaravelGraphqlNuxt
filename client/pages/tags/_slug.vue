<template>
  <div>
    <div class="mt-10">
      <job v-for="job in jobs" :key="job.id" :job="job"/>
    </div>
  </div>
</template>

<script>
import ALL_JOBS_BY_TAG from '@/graphql/AllJobsByTag.gql'
import TAG_BY_SLUG from '@/graphql/TagBySlug.gql'

export default {
  apollo: {
    tag: {
      query: TAG_BY_SLUG
    },

    jobs: {
      variables() {
        return {
          slug: this.$route.params.slug
        }
      },
      query: ALL_JOBS_BY_TAG,
    }
  }
}
</script>
