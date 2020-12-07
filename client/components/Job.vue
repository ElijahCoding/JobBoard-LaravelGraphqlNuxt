<template>
  <div class="border-b-2 border-t-2 border-gray-200 p-4 pb-2 flex justify-between group"
  :class="{ 'bg-blue-200': job.highlighted }">
    <img :src="job.company_logo" :alt="`${job.company_name} logo`" class="h-12 w-12 mr-4">

    <div class="flex flex-wrap items-center justify-between w-full">
      <div class="w-full md:w-4/12 mb-2">
        <h2 class="font-bold leading-none">{{ job.job_title }}</h2>
        <a href="" class="text-sm">{{ job.company_name }}</a>

        <div class="flex items-center">
          <svg class="w-4 h-4 text-gray-600 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div class="text-sm text-gray-600">
            {{ job.job_location }}
          </div>
        </div>
      </div>

      <div class="w-full md:w-4/12 mb-2">
        <a href="" v-for="tag in job.tags" :key="tag.slug" class="inline-block text-gray-600 border-2 border-gray-300 px-3 py-1 rounded-lg mr-2 bg-white">
          {{ tag.title }}
        </a>
      </div>

      <div class="mb-2">
        <div class="opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity duration-200">
          <a :href="job.job_link"
             class="inline-block border-2 border-blue-400 text-blue-400 font-bold rounded-log px-3 py-2 bg-white">
            Apply for this job
          </a>
        </div>
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
