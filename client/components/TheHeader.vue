<template>
  <header class="py-6 flex items-center justify-between">
    <nuxt-link :to="{ name: 'index' }" exact-active-class="text-blue-500">Jobs</nuxt-link>

    <div class="-mx-4 flex items-center flex-wrap">
      <span class="mx-4 font-bold">Elijah</span>
      <nuxt-link :to="{ name: 'login' }" class="mx-4" exact-active-class="text-blue-500">Login</nuxt-link>
      <span class="mx-4" exact-active-class="text-blue-500">Manage listings</span>
      <span class="mx-4" exact-active-class="text-blue-500">Logout</span>
      <span class="mx-4" exact-active-class="text-blue-500">Post a job</span>
    </div>
  </header>
</template>
