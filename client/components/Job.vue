<template>
  <div class="border-b-2 border-t-2 border-gray-200 p-4 flex items-center justify-between">
    <img :src="job.company_logo" :alt="`${job.company_name} logo`" class="h-12 w-12 mr-4">

    <div class="flex items-center justify-between w-full">
      <div>
        <h2 class="font-bold leading-none">{{ job.job_title }}</h2>
        
      </div>

      <div>
        tags
      </div>

      <div>
        link
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      job: {
        required: true,
      }
    }
  }
</script>
