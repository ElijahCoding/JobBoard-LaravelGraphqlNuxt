<template>
  <div>

  </div>
</template>

<script>
import ALL_JOBS_BY_TAG from '@/graphql/AllJobsByTag.gql'

export default {
  apollo: {
    jobs: {
      query: ALL_JOBS_BY_TAG,
    }
  }
}
</script>
